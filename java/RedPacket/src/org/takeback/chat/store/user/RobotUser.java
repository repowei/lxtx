// 
// Decompiled by Procyon v0.5.30
// 

package org.takeback.chat.store.user;

import java.util.Iterator;
import org.apache.commons.lang.math.RandomUtils;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.takeback.chat.entity.PcEggLog;
import java.util.Calendar;
import org.takeback.chat.store.pcegg.PcEggStore;
import org.takeback.chat.utils.MessageUtils;
import org.takeback.chat.entity.Message;
import org.takeback.util.BeanUtils;
import org.takeback.chat.entity.GcLottery;
import org.takeback.chat.store.room.LotteryFactory;
import java.math.BigDecimal;
import java.util.Map;
import java.util.Set;

import org.takeback.chat.lottery.Lottery;
import org.takeback.chat.lottery.listeners.GameException;
import org.takeback.chat.lottery.listeners.RoomAndLotteryListener;

import java.util.Date;
import java.util.concurrent.TimeUnit;
import org.takeback.util.ApplicationContextHolder;
import org.takeback.chat.store.room.Room;
import org.takeback.chat.service.LotteryOpenService;
import org.takeback.chat.service.LotteryService;

public class RobotUser extends User implements Runnable
{
    LotteryService lotteryService;
    @Autowired
    UserStore userStore;
    public static final Integer level;
    public static String[] talkList;
    private Room room;
    
    private static Logger logger = LoggerFactory.getLogger((Class)RobotUser.class);
    
    public RobotUser() {
        super.setUserType("0");
        this.lotteryService = (LotteryService)ApplicationContextHolder.getBean("lotteryService");
    }
    
    public void setRoom(final Room rm) {
        this.room = rm;
    }
    
    private int getHumanCount() {
    	Set<Integer> userIdList = this.room.getUsers().keySet();
    	int count = 0;
    	for (Integer userId : userIdList) {
    		User user = this.userStore.get(userId);
    		if (user != null && user.getUserType().equals("2")) {
    			count++;
    		}
    	}
    	return count;
    }
    
    @Override
    public void run() {
        try {
            while (!Thread.interrupted()) {
                final Long random = Math.round(10.0 * Math.random());
                TimeUnit.SECONDS.sleep(random + RobotUser.level);
                
                if (!this.room.getUsers().containsKey(this.getId())) {
                	if (this.room.getUsers().size() < 15) {
                		this.room.join(this);
                	}
                } else {
                	if (this.room.getUsers().size() > 20) {
                		this.room.left(this);
                	} else {
                		if (this.room.getType().startsWith("G01")) {
                            this.playG01();
                        }
                        else if (this.room.getType().startsWith("G02")) {
                            this.playG02();
                        }
                        else if (this.room.getType().startsWith("G03")) {
                            this.playG03();
                        }
                        else if (this.room.getType().startsWith("G04")) {
                            this.playG04();
                        }	
                	}                	
                }
                
                final long r1 = Math.round(10.0 * Math.random());
                TimeUnit.SECONDS.sleep(r1 + RobotUser.level);
            }
        }
        catch (InterruptedException e) {
            e.printStackTrace();
            Thread.currentThread().interrupt();
        }
    }
    
    private void playG01() {
        final Lottery lottery = this.getOpenableLottery();
        final Map<String, Object> p = this.room.getProperties();
        Integer rest = 2;
        try {
            rest = Integer.valueOf(p.get("conf_rest_time").toString());
            ++rest;
        }
        catch (Exception e) {
            e.printStackTrace();
        }
        if (lottery != null) {
            if ((new Date().getTime() - lottery.getCreateTime().getTime()) / 1000L <= rest) {
                return;
            }
            try {
                lottery.open(this.getId());
            }
            catch (GameException ex) {}
        }
    }
    
    private void playG02() {
        final Lottery lottery = this.getOpenableLottery();
        if (lottery != null) {
            try {
                lottery.open(this.getId());
            }
            catch (GameException ex) {
            	System.out.println(ex.getMessage() + " lottery open failed." + lottery.getId() + " " + this.getNickName());
            }
        }
        else if (this.room.getMaster().equals(this.getId())) {
        	if (this.room.getMasterTimes() < 10) {
                final Integer num = Integer.valueOf(this.room.getProperties().get("conf_size").toString());
                final Lottery lottery2 = LotteryFactory.getDefaultBuilder(new BigDecimal(0.5 * num), num).setType("2").setSender(this.getId()).setDescription("恭喜发财,怕死别来!").setRoom(this.room).build();
                this.room.setMasterStamp(System.currentTimeMillis());
                final GcLottery gcLottery = BeanUtils.map(lottery2, GcLottery.class);
                this.lotteryService.save(GcLottery.class, gcLottery);
                try {
                    lottery2.fakeOpen(this.getId());
                }
                catch (GameException e) {
                    e.printStackTrace();
                    return;
                }
                final Message redMessage = new Message("RED", this.getId(), lottery2);
                redMessage.setHeadImg(this.getHeadImg());
                redMessage.setNickName(this.getNickName());
                
                logger.debug("send the packet "+lottery2.getId());
                MessageUtils.broadcast(this.room, redMessage);        		
        	} else if (this.room.getMasterTimes() == 10){
        		//to broadcast 
                final Message notice = new Message("TXT_SYS", 0, "玩家"+this.getNickName()+"已下庄.");
                MessageUtils.broadcast(room, notice);
                final long sec = (System.currentTimeMillis() - room.getMasterStamp()) / 1000L;
                final Message newMasterPackageNotice = new Message("TXT_SYS", 0, "再過"+(30-sec)+"秒系统发出抢庄包");
                MessageUtils.broadcast(room, newMasterPackageNotice);
                //so that the message won't be sent twice 
                room.setMasterTimes(11);
        	}
        } else {
        	RoomAndLotteryListener listener = room.getRoomAndLotteryListener();
        	try {
				if (listener != null && listener.onBeforeStart(room)) {
					room.start();
				}
			} catch (GameException e) {
				logger.warn("");
			}
        }
    }
    
    private void playG03() {
        final PcEggLog log = PcEggStore.getStore().getLastest();
        final Calendar c = Calendar.getInstance();
        c.setTime(log.getExpireTime());
        c.add(13, -30);
        if (c.getTime().compareTo(new Date()) < 0) {
            return;
        }
        final String[] games = { "大", "小", "单", "双", "大单", "大双", "小双", "小单", "极大", "极小", "红", "黄", "蓝" };
        final int d = (int)Math.round(Math.random() * 10.0);
        if (d == 0 || d % 4 == 0) {
            return;
        }
        long game = Math.round(d) % games.length;
        if (game == games.length) {
            --game;
        }
        final Double money = Math.random() * 100.0;
        final Lottery lottery = LotteryFactory.getDefaultBuilder(new BigDecimal(money), 1).setExpiredSeconds(1).setType("2").setTitle(games[(int)game] + " " + d * 5 + "萬金").setSender(this.getId()).setDescription(log.getId() + "期").build();
        try {
            lottery.open(0);
        }
        catch (GameException e) {
            e.printStackTrace();
        }
        final Message redMessage = new Message("RED", this.getId(), lottery);
        redMessage.setHeadImg(this.getHeadImg());
        redMessage.setNickName(this.getNickName());
        MessageUtils.broadcast(this.room, redMessage);
    }
    
    private void playG04() {
        final Map<String, Object> p = this.room.getProperties();
        final Integer size = Integer.valueOf(p.get("conf_max_size").toString());
        final Integer money = Integer.valueOf(p.get("conf_max_money").toString());
        final Double rate = this.room.getFeeAdd();
        final Lottery lottery = this.getOpenableLottery();
        if (lottery != null) {
            try {
                lottery.open(this.getId());
            }
            catch (GameException ex) {}
        }
        else {
            final Integer raidPoint = RandomUtils.nextInt(9);
            final Lottery lottery2 = LotteryFactory.getDefaultBuilder(new BigDecimal(money * (1.0 - rate)), size).setType("2").setSender(this.getId()).setDescription(money * (1.0 - rate) + "萬金/雷" + raidPoint).setRoom(this.room).build();
            this.room.setMasterStamp(System.currentTimeMillis());
            this.room.getProperties().put("raid", raidPoint);
            final GcLottery gcLottery = BeanUtils.map(lottery2, GcLottery.class);
            this.lotteryService.save(GcLottery.class, gcLottery);
            final Message redMessage = new Message("RED", this.getId(), lottery2);
            redMessage.setHeadImg(this.getHeadImg());
            redMessage.setNickName(this.getNickName());
            MessageUtils.broadcast(this.room, redMessage);
        }
    }
    
    public void talk() {
        long r = Math.round(10.0 * Math.random());
        if (r > 0L) {
            r = r % RobotUser.talkList.length - 1L;
        }
        else if (r < 0L) {
            r = 0L;
        }
        final Message msg = new Message();
        msg.setContent(RobotUser.talkList[(int)r]);
        msg.setHeadImg(this.getHeadImg());
        msg.setSender(this.getId());
        msg.setNickName(this.getUserId());
        msg.setType("TXT");
        MessageUtils.broadcast(this.room, msg);
    }
    
    private Lottery getOpenableLottery() {
        final Map<String, Lottery> lts = (Map<String, Lottery>)this.room.getLotteries().asMap();
        for (final String key : lts.keySet()) {
            final Lottery lottery = lts.get(key);
            if ("0".equals(lottery.getStatus()) && lottery.isOpen() && !lottery.isExpired()) {
                return lottery;
            }
        }
        return null;
    }
    
    public static void main(final String... args) {
        while (true) {
            System.out.println(RandomUtils.nextInt(10));
        }
    }
    
    static {
        level = 1;
        RobotUser.talkList = new String[] { "来个豹子...", "卧槽,今天手气好像差了点", "给我回点血吧!!!!!", "我打算收手了,草 再抢剁手了", "呵呵 我看着你剁了", "我今天看到个妹子,大街上就嘘嘘了起来,城里人真会玩", "感觉有点恶搞", "妈的老是我,,", "谁允许我唱首歌啊  这个软件啥都好,就是不能语音", "瓦里格气 我能说的只有圈圈和叉叉了", "我是一个小毛驴我从来都不齐", "好无聊啊........." };
    }
}
