<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS;?>/bootstrap.css">
<title>视频开奖首页</title>
<style>
*{margin:0;padding:0;}
body{overflow-x:hidden;}
ul,li{list-style: none;}
textarea{resize: none;overflow: hidden;}
#f1{ width:100%;height:1054px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/beijing.jpg);position:absolute; left:0;top:0; z-index:-1;}
#f2{width:1320px;height:1054px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/beijing.png)no-repeat;background-position:0 30px;position:relative;margin: 0 auto;z-index:1;overflow: hidden;}
#f2_con{width:1080px;height:550px;margin:310px auto 0 auto;z-index:1;}
#wudian{width:18px;height:283px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/wudian.png)no-repeat;position:absolute; z-index:-1;top: 345px;left: 130px;}
#buybt{width:133px;height:149px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/buybt1.png) ;position:absolute; left:650px;top:688px; z-index:1;}
#jpinfo{width:245px;height:80px;position:absolute; top:725px;left:140px; z-index:1;}
#jpinfo_pic{width:75px;height:90px;z-index:-1;float:left;}
#jpinfo_title{width:165px;height:20px;z-index:-1; color:#F6C8A4;float:left;font-size:12px;margin-left: 5px;}
#jpinfo_jindu{width:170px;height:20px;z-index:-1;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/jindu1.png) no-repeat right;float:left;}
#jpinfo_yicanyu{margin-left:5px;width:80px;height:40px;z-index:-1;text-align:left;color:#F6C8A4;font-size:12px;float:left;}
#jpinfo_shengyu{width:85px;height:40px;z-index:-1;text-align:right;color:#F6C8A4;font-size:12px;float:left;}
#jpjindu2{height:20px;position:absolute; left:218px;top:750px; z-index:1; background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/jindu2.png) no-repeat;}
#chongzhibt{width:71px;height:36px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/chongzhi1.png)100% 0 no-repeat ;position:absolute; left:820px;top:785px; z-index:1;}
#jiangpin1{width:228px;height:57px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/1.png) top right no-repeat;position:absolute; top:326px; z-index:1;}
#jiangpin_1{width:190px;height:50px;float:right;color:rebeccapurple;font-size:12px;line-height: 50px;}
#jiangpin2{width:228px;height:57px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/1.png) top right no-repeat;position:absolute; top:391px; z-index:1;}
#jiangpin_2{width:190px;height:50px;float:right;color:rebeccapurple;font-size:12px;line-height: 50px;}
#jiangpin3{width:228px;height:57px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/1.png) top right no-repeat;position:absolute; top:456px; z-index:1;}
#jiangpin_3{width:190px;height:50px;float:right;color:rebeccapurple;font-size:12px;line-height: 50px;}
#jiangpin4{width:228px;height:57px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/1.png) top right no-repeat;position:absolute; top:521px; z-index:1;}
#jiangpin_4{width:190px;height:50px;float:right;color:rebeccapurple;font-size:12px;line-height: 50px;}
#jiangpin5{width:228px;height:57px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/1.png) top right no-repeat;position:absolute; top:586px; z-index:1;}
#jiangpin_5{width:190px;height:50px;float:right;color:rebeccapurple;font-size:12px;line-height: 50px;}
#canyujilu{width:248px;height:100px;position:absolute; left:950px;top:710px; z-index:1; font-size:12px;color:#F6C8A4;}
#canyujilu ul{width:305px;height:25px;}
#canyujilu ul li{float:left;list-style:none;margin:3px;font-size:10px;}
#canyurenci{width:228px;height:46px;position:absolute; left:430px;top:782px; z-index:1; font-size:12px;color:#F6C8A4;}
#canyurenci span{font-size:20px;color:#F6C8A4;float:left;margin-top:2px;}
#jianh{width:33px;height:33px;float:left;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/jianh.png) top right no-repeat;cursor: pointer;border-radius: 5px 0 0 5px; }
#jianh:hover{background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/jianh1.png) top right no-repeat;}
#num{width:53px;height:33px;float:left;border:1px solid #FAFF05;font-size:20px;color:#F6C8A4;text-align:center;line-height:33px;}
#jiah{width:33px;height:33px;float:left;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/jiah.png) top right no-repeat;cursor: pointer;border-radius: 0 5px 5px 0; }
#jiah:hover{background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/jiah1.png) top right no-repeat;}
#zaixianhudong{width:265px;height:300px;position:absolute; left:930px;top:365px; z-index:1;}
#hudonginfo{width:265px;height:250px;font-size:10px;color:#F6C8A4;OVERFLOW-Y: auto; OVERFLOW-X:hidden;}
#myinput{width:270px;height:33px;margin-top:5px;}
#myinput1{width:33px;height:33px;float:left;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/biaoqing1.png) top right no-repeat;}
#myinput2{width:175px;height:33px;float:left;}
#info{width:155px;height:33px;float:left;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/shurukuang.png) top right no-repeat; color:#F6C8A4; border:0;}
#myinput3{width:57px;height:33px;float:left;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/fasong1.png) top right no-repeat;}
#flash-container{width:540px;height:372px;position:absolute; left:375px;top:315px; z-index:1;box-shadow: 0 0 50px 10px #fff;}
/*nav*/
#f3{width:100px;height:1054px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/daohang.jpg) ;position:absolute; left:0;top:0; z-index:1;}
.logo{width: 100%;height: 130px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/logo.png)no-repeat;background-size:75% 80%;background-position: center;position: relative;}
#login{background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/denglu.png)no-repeat;}
/*#login:hover{cursor:pointer;}*/
#register{background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/zhuce.png)no-repeat}
/*#register:hover{cursor:pointer;}*/
#shoucang{background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/shoucang.png)no-repeat}
/*#shoucang:hover{cursor:pointer;}*/
#guanzhu{background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/guanzhu.png)no-repeat}
/*#guanzhu:hover{cursor:pointer;}*/
#qqqun{background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/qqqun.png)no-repeat}
/*#qqqun:hover{cursor:pointer;}*/
#wodeyungou{background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/yungou.png)no-repeat;background-size:100% 100%;background-position: center;}
/*#wodeyungou:hover{cursor:pointer;}*/
#zaixianchongzhi{background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/chongzhi.png)no-repeat;background-size:100% 100%;background-position: center;}
/*#zaixianchongzhi:hover{cursor:pointer;}*/
#bangzhuzhongxin{background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/bangzhuzhongxin.png)no-repeat;background-size:100% 100%;background-position: center;}
/*#bangzhuzhongxin:hover{cursor:pointer;}*/
#systime{width:73px;height:30px;margin-top:536px;color:#ffaa3c;font-size:10px;text-align:center;line-height:30px;}
#facebox{background:#EFF3FC;cursor: pointer;}
#saytext{width:175px;height:33px;line-height: 33px;font-size: 12pt;font-weight: bold;outline: none;}
#currentJp{display:none;}
#kaijiang{width:360px;height: 100px;position: absolute;left:200px;top:100px;}
#kainum{width:250px;height: 50px;float:left;font-size:20px;}
#kaibutton{width:100px;height: 50px;float:right;}
.con{width: 1700px;height: 50px;background-color: #06060d;overflow: hidden;margin: 50px auto;margin-left:100px;}
#text{position: relative;width: 1500px;left: 1700px;color:red;font-size:35px;}
.modal-body>p img{width:568px;}
#jpinfo:hover{cursor:pointer}
#zhuxiao{position: absolute;top: 21px; right: 100px;font-weight: bold}
#user{position: absolute;top: 21px; right: 150px;color:red;}
.btn2{position: absolute;left: 40px;top: 76px; display: block;color: red;width: 70px;height: 70px;}
#star{position:relative;top:100%;margin:0 auto;width:800px;height:50px;}
#fire1{position:absolute;width: 30px;height: 30px;left:7%;top:60%;}
#fire2{position:absolute;width: 30px;height: 30px;left:15%;top:50%;}
#fire3{position:absolute;width: 30px;height: 30px;left:85%;top:52%;}
#fire4{position:absolute;width: 30px;height: 30px;left:95%;top:60%;}
#btn{position: absolute;height:40px;top:90%;left:90%;}

 .List1{position: relative;margin-top: 10px;}
 .List1 ul li{width: 90px;height: 40px;margin: 5px auto;cursor: pointer;text-align: center;line-height: 40px;font-size: 13pt;font-weight: bold}
 .List2{margin-top: 140px;}
 .List2 ul li{height: 90px;margin: 5px auto;cursor: pointer;border-radius: 100px;}
 .time{width: 100%;height: 50px;position: absolute;text-align: center;line-height: 50px;background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/qipao.png)no-repeat;background-size:100% 100%;background-position: center;border-radius: 100%;font-size: 12pt;font-weight: bold;}
 #f2down{
 	position: relative;
 	margin: 0 auto;
 	width: 1020px;
 	height: 250px;
 	top: -40px;
 	background:url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/zuoyi.gif)no-repeat;
 	background-position: 100% 100%;
 	background-size: 100% 100%;
 }
 #floatLogin{
 	width: 100px;
 	height: 50px;
 	position: absolute;
 	top: 135px;
 	left: 0;
 	z-index:0;
 }
</style>
<!--  
<script src="<?//php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
-->
<script src="<?php echo G_TEMPLATES_JS;?>/jquery-1.9.1.js"></script>
<!-- <script src="<?php echo G_TEMPLATES_JS;?>/jquery-1.8.3.min.js"></script>-->
<script src="<?php echo G_TEMPLATES_JS;?>/bootstrap.js"></script>
<script src="<?php echo G_TEMPLATES_JS;?>/jquery.browser.js"></script>
<script src="<?php echo G_TEMPLATES_JS;?>/jquery.qqFace.js"></script> 
<script type="text/javascript" src="<?php echo  G_TEMPLATES_JS?>/jquery.spcookie.js"></script>
</head>

<body>
<?php if($uid){?>
<b id='user'><?php echo '<font color="#ccc">欢迎您：</font>'.$username;?></b><a href="spkj/zhuxiao"  id="zhuxiao">[退出]</a>
<?php }?>
<div id="f1"></div>
<div id="f2">
    <div id=f2_con>
        <div id="wudian"></div>
        <div id="jiangpin1" class="jp">
            <div id="jiangpin_1"></div>
        </div>
        <div id="jiangpin2" class="jp">
            <div id="jiangpin_2"></div>
        </div>
        <div id="jiangpin3" class="jp">
            <div id="jiangpin_3"></div>
        </div>
        <div id="jiangpin4" class="jp">
            <div id="jiangpin_4"></div>
        </div>
        <div id="jiangpin5" class="jp">
            <div id="jiangpin_5"></div>
        </div>

        <div id="buybt"><a class="btn2" data-toggle="tooltip" data-placement="top" title="点赞即购买"></a></div>
        <div id="chongzhibt"></div>
        <div id="jpinfo" data-toggle="modal" data-target="#myModal">

            <div id="jpinfo_pic"></div>
            <div id="jpinfo_title">apple new book</div>
            <div id="jpinfo_jindu"></div>
            <div id="jpinfo_yicanyu"><span class="yicanyu"></span><br/>已参与人数</div>
            <div id="jpinfo_shengyu"><span class="shengyu"></span><br/>剩余人数</div>
            <!-- <button type="button" class="btn btn-primary btn-lg" >
              查看详情
            </button> -->
        </div>
        <!--end jpinfo(奖品信息)-->
        <div id="jpjindu2">

        </div>
        <div id="canyujilu">
            <marquee direction='up' scrollamount="3" loop="infinite" style="height:100px">
                <div id="canyu">
                    <?php foreach($jilu as $info) { ?>
                    <ul>
                        <li><img src="<?php echo  G_UPLOAD_PATH.'/'.$info[uphoto] ?>" style="width:15px;height:15px">
                        </li>
                        <li> <?php echo $info[username]?> 参与</li>
                        <li><?php echo $info[shopname1]?></li>
                        <li><?php echo $info['gonumber'] ?>次</li>
                    </ul>
                    <?php } ?>
                </div>
            </marquee>
            <!-- <ul><li>头像</li><li>用户名</li><li>参与x次</li><li>产品标题aaaaa</li></ul>
            <ul><li>头像</li><li>用户名</li><li>参与x次</li><li>产品标题aaaaa</li></ul>
            <ul><li>头像</li><li>用户名</li><li>参与x次</li><li>产品标题aaaaa</li></ul> -->
        </div>
        <!--end 参与记录)-->
        <div id="canyurenci">
            <span>参与 </span>

            <div id="jianh"></div>
            <div id="num">1</div>
            <div id="jiah"></div>
            <span> 人次</span>
        </div>
        <span id="currentUser" style="display:none;"></span> <!--保存当前用户信息，用户ID-->
        <span id="currentJp"></span><!--保存当前商品信息，商品ID-->
        <div id="zaixianhudong">
            <div id="hudonginfo"></div>
            <div id="myinput">
                <div id="myinput1"></div>
                <div id="myinput2">
                    <div id="show"></div>
                    <div class="comment">
                        <div class="com_form">
                            <input class="input" id="saytext" name="saytext"></input>
                            <!--
                            <p><span class="emotion">表情</span><input type="button" class="sub_btn" value="提交"></p>
                            -->
                        </div>
                    </div>
                </div>
                <div id="myinput3"></div>
            </div>
            <!--结束在线互动按钮-->
        </div>
        <!--结束在线互动-->
        <div id="flash-container">

            <object id="webyy_client" height="100%" width="100%" type="application/x-shockwave-flash"
                    name="webyy_client" data="http://webyylbs.yy.duowan.com/s/40574583/40574583/entjs.swf"
                    style="visibility: visible;">
                <param name="quality" value="high">
                <param name="bgcolor" value="#1c1c1c">
                <param name="allowScriptAccess" value="always">
                <param name="allowFullScreen" value="true">
                <param name="wmode" value="opaque">
                <param name="menu" value="false">
                <param name="f" value="yy">
                <param name="FlashVars"
                       value="source=http%3A%2F%2Fm.yy.com%2Flive%2Fanchor%2FyyHome%3Fuid%3D964583243%26chId%3D40574583%26subId%3D40574583%26f%3D362">
            </object>
            <!--
            <embed align="middle" allowfullscreen="true" allowscriptaccess="always" height="372px" mode="transparent" quality="high" src="http://yy.com/s/19605958/19605958/yyscene.swf" type="application/x-shockwave-flash" width="540px"></embed>
            -->
        </div>
        <div id="star"></div>
    </div>
    <div id=f2down></div>
</div>
<div id="fire1"></div>
<div id="fire2"></div>
<div id="fire3"></div>
<div id="fire4"></div>
<!--end f2(PNG图)-->





<div id=floatLogin></div>
<div id="f3">
        <div class="logo"></div>
        <div class="List1">
            <ul>
                <li id='login'></li>
                <li id='register'></li>
                <li id='shoucang'></li>
                <li id='guanzhu'></li>
                <li id='qqqun'></li>
            </ul>
        </div>
        <div class="List2">
            <ul>
                <li id='wodeyungou'></li>
                <li id='zaixianchongzhi'></li>
                <li id='bangzhuzhongxin'></li>
            </ul>
        </div>
        <div class="time"></div>
        <?php if($is=='block'){?>
	    	<div id="kaijiang" style="display:<?php echo $is?>">
	        	<input type="text" placeholder="输入10位中奖码" id="kainum" value=""/>
	        	<button id="kaibutton">确认开奖</button>
	    	</div>
    	<?php }?>
    </div>
<!--end f3-->



<!--<div class="con" style="display:none">
    <div id="text"></div>
</div>-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>


</body>
</html>
<script>
    var H=$('#f3').height();
    $('.time').css('top',H-$('.time').height());

    setInterval(function(){
        var Now=new Date();
        var h=Now.getHours();
        var m=Now.getMinutes();
        var s=Now.getSeconds();
        $('.time').html(h+':'+extra(m)+':'+extra(s));
        function extra(x){
            if(x<10){
                return '0'+x;
            }else{
                return x;
            }
        }
    },1000);

	
$().ready(function(){
		var uid=<?php if($uid){echo $uid;}else{echo 'null';} ?>;
    	if(uid!=null){
        	/*$('#login').hide()*/
        	$('.List1 ul li:eq(0)').css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/qipao.png)');
        	$('.List1 ul li:eq(0)').html('已登录');
        	$('#floatLogin').css('z-index','10')
    	}
		
		// cha=setInterval(cha,10000);
		// icount=setInterval(lunxun,100);
		// function cha(){
			// $.post('<?php echo WEB_PATH;?>/spkj/shipin/getNewinfo','',function(msg){
			// if(msg!='100'){
				// var myobject1 = eval(msg);
				// var valu="恭喜<font color='blue'>"+myobject1.username+"</font>获得"+"第"+myobject1.qishu+"期"+myobject1.title+"中奖码为<font color='blue'>"+myobject1.q_user_code+"</font>";
				// $('#text').html(valu);
				// $('.con').show();
				// }
		// },'json');
		// }
		// function lunxun(){
       		// $('#text').animate({left:-1500},25000,function(){ $('#text').css('left','1700px');})
		// }
		//setTimeout("$('.con').hide();",125000);
		setInterval(setbuy,3000); 
	
	
		setJiexiao();//获取即将揭晓的商品信息
	//判断是否登录
	if(document.cookie.indexOf('uid')==-1){
            alert('您还未登录！');
	}else{
		var cuid=getcookie('uid');
		var data={
                uid:cuid
				};
		$.post('<?php echo WEB_PATH;?>/spkj/shipin/getUid',data,function(msg){
				          $('#currentUser').text(msg);
			},'json');
    
	}
	function getcookie(a){
         var arr=document.cookie.split("; ");
         for(var i=0;i<arr.length;i++){
               var brr=arr[i].split("=");
               if(brr[0]==a){
                   return brr[1];
               }
         }
	}
	//获取即将揭晓的5中商品信息
	function setJiexiao(){
		var data={
				//time:new Date()
		};
		$.post('<?php echo WEB_PATH;?>/spkj/shipin/getJiexiao',data,function(msg){
			if(msg!=''){
				var myobject1 = eval(msg);

				for(var i=0;i<myobject1.length;i++){
					$('#jiangpin_'+(i+1)).html(myobject1[i]['title']+"(第"+myobject1[i]['qishu']+"期)");
					$('#jiangpin_'+(i+1)).addClass(myobject1[i]['id']);//将奖品id通过class属性传递
				}
				$('#currentJp').text($('#jiangpin_1').attr('class'));
				setJpinfo($('#jiangpin_1').attr('class'));//设置默认奖品信息
				setHudonginfo($('#jiangpin_1').attr('class'));//设置默认的互动信息
			}
		},'json');
	}
	
	//进入直播间
	$('.jp').bind('click',function(){

		var id=$(this).attr('id').substr(8,1);//获取房间号
		var spid=$('#jiangpin_'+id).attr('class');//获取商品id
		
		$('#currentJp').text(spid);
		setJpinfo(spid);//设置当前奖品信息
		setAddMoneyRecords(spid);//设置当前奖品用户参与记录信息
		setHudonginfo(spid);//设置互动信息
		//alert($('#currentJp').text());
		
		//如果登录成功则将登录消息插入到视频评论表中，
	});
	$('#kaibutton').bind('click',function(){
		var jpid=$('#currentJp').text();
		var yaohao=$('#kainum').val();//中奖号码
		
			 getNum(jpid,yaohao);
		})
	//设置当前奖品信息
	function setJpinfo(jpid){
		var data={
				id:jpid
		};//
		$.post('<?php echo WEB_PATH;?>/spkj/shipin/getJpinfo',data,function(msg){
			if(msg!=''){
				var myobject2 = eval(msg);

				//alert('设置当前奖品信息'+myobject);
				$('#jpinfo_pic').html("<img src='<?php echo G_UPLOAD_PATH;?>/"+myobject2[0]['thumb']+"'"+ "style='width:75px;height:75px;' title='点击查看奖品详情' />");
				$('#jpinfo_title').html(myobject2[0]['title']+"(第"+myobject2[0]['qishu']+"期)");
				$('.yicanyu').text(myobject2[0]['canyurenshu']);
				$('.shengyu').text(myobject2[0]['shenyurenshu']);
				
				$('.modal-title').text(myobject2[0]['title']);
				$('.modal-body').html(myobject2[0]['content']);
				//设置进度条
				var a = parseInt(myobject2[0]['canyurenshu']);
				var b = parseInt(myobject2[0]['shenyurenshu']);
				var c = parseInt($('#jpinfo_jindu').css('width'));
				var d=  a/(a+b)*c; 
				$('#jpjindu2').css('width',d+'px');
				
				var sen=parseInt(($('.shengyu').text()));
					
				if( sen == 0){
					boom1();boom2();boom3();boom4();	
					
					
				}
			}
		},'json')
		
	}
	
	
	
	//获取并设置互动信息
	
	function setHudonginfo(id){
		var data1={
	            jpid:id
          };
			$.post('<?php echo WEB_PATH;?>/spkj/shipin/getPinglun',data1,function(msg1){
						//var myobject4=eval(msg1);
						$('#hudonginfo').html('');
						for(var i=0;i<msg1.length;i++){
							if(msg1[i]['username']==''){
								if(msg1[i]['infotype']=='1'){
										$('#hudonginfo').append(replace_em("\n["+'用户'+msg1[i]['uid']+"]"+msg1[i]['content']+"&nbsp;"+msg1[i]['time'].substr(11,8)+"\n"));
								}else{
									$('#hudonginfo').append("\n欢迎会员["+msg1[i]['uid']+"]"+"进入直播间"+"\n");
								}
						    }else{
						    	if(msg1[i]['infotype']=='1'){
										$('#hudonginfo').append(replace_em("\n["+msg1[i]['username']+"]"+msg1[i]['content']+"&nbsp;"+msg1[i]['time'].substr(11,8)+"\n"));
								}else{
									$('#hudonginfo').append("\n欢迎会员["+username+"]"+"进入直播间"+"\n");
								}
							}
						}
						$('#hudonginfo').scrollTop( $('#hudonginfo')[0].scrollHeight );//设置滚动条的位置到最下方
			},'json');
	}
	//获取中奖信息
	function getNum(jpid,yaohao){
		var data1={
	            gid:jpid,
	            yaohao:yaohao

          };

			$.post('<?php echo WEB_PATH;?>/spkj/kaijiang/getHaoma',data1,function(msg1){
						var myobject4=eval(msg1);
						if(msg1=='99'){
							alert('本期已经开过奖,不能再开');
						}else if(msg1=='100'){
							alert('还有剩余人数,不能开奖');
						}else if(msg1=='55'){
							alert('没有查到中奖人信息');
						}else if(msg1=='20'){
							alert('中奖号码填写错误');
						}else if(msg1=='50'){
							alert('未输入中奖号码');
						}else if(myobject4.statu == '1'){
							alert("中奖人"+myobject4.username+"获得"+myobject4.title+"中奖码为"+myobject4.code);
						}
						
			},'json');
	}
	//获取中奖号码
	function setAddMoneyRecords(jpid){
		var data={
				id:jpid
		};
		$.post('<?php echo WEB_PATH;?>/spkj/shipin/getRecords',data,function(msg){
			$('#canyu').html('');
			if(msg!=''){
				var myobject3 = eval(msg);

				//alert('获取用户参与记录'+myobject);
				console.log(myobject3);
				var info='';
				for(var i=0;i<myobject3.length;i++){
					//info+="<ul><li>"+myobject3[i]['id']+"</li><li>"+myobject3[i]['uid']+"</li><li>"+myobject3[i]['money']+"</li><li>产品标题aaaaa</li></ul>";
					info+="<ul><li><img src='<?php echo G_UPLOAD_PATH.'/'; ?>"+myobject3[i]['uphoto']+" '  style='width:15px;height:15px'></li><li> "+myobject3[i]['username']+" 参与</li><li>"+myobject3[i]['shopname1']+"</li><li>"+myobject3[i]['gonumber']+"次</li></ul>"
				}
				
			}else{
					info="<ul><li>还没有人参与，赶紧加入吧！</li></ul>";
				}
				$('#canyu').html(info);
		},'json');
	}

	$('#myinput1').qqFace({
		id : 'facebox', //表情盒子的ID
		assign:'saytext', //给那个控件赋值
		path:'<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/face/'	//表情存放的路径
	});
	
	$("#myinput3").click(function(){
		if($("#saytext").val()==''){
			alert('内容不能为空！');exit;
		}
		if($('#currentUser').text()==''){
            alert('您还未登录！');
            
            exit;
	    }
		//$("#show").html(replace_em(str));
		//1、将信息传入数据库
		var data={
				uid:$('#currentUser').text(),//评论者的id
				jpid:$('#currentJp').text(),//评论商品的id
				content:$("#saytext").val(),//评论的内容
		};
		
		$.post('<?php echo WEB_PATH;?>/spkj/shipin/sendPinglun',data,function(msg){
			var myobject=eval(msg);
			if(myobject=='1'){//2、传入成功后刷新在线互动信息栏
				//alert(myobject);
				setHudonginfo($('#currentJp').text());//置入评论信息
				$('#saytext').val('');//清空输入框中内容
			}
		},'json');
		
		
		//$("#saytext").css('display','none');
	});
	/*
	$('.emotion').qqFace({
		id : 'facebox', //表情盒子的ID
		assign:'saytext', //给那个控件赋值
		path:'img/face/'	//表情存放的路径
	});
	
	$(".sub_btn").click(function(){
		var str = $("#saytext").val();
		$("#show").html(replace_em(str));
	});
	*/
	
	//查看结果
	function replace_em(str){
		str = str.replace(/\</g,'&lt;');
		str = str.replace(/\>/g,'&gt;');
		str = str.replace(/\n/g,'<br/>');
		str = str.replace(/\[em_([0-9]*)\]/g,'<img src="<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/face/$1.gif" border="0" />');
		return str;
	}
	
	//点击减号
	
	$('#jianh').bind('click',function(){
		         var num=parseInt($('#num').text());
		         var yicanyu=parseInt($('.yicanyu').text());
		         var shengyu=parseInt($('.shengyu').text());
				
		         num-=1;
		         if(num<0){
                      //  alert('已经为0了！');
                      $('#num').text(0);
			     }else{
			        	 $('#num').text(num);
				 }
		         /*
		         if(num>yicanyu+shengyu){

			         }
			         */
		});

	//点击加号
	$('#jiah').bind('click',function(){
		         var num=parseInt($('#num').text());
		         var yicanyu=parseInt($('.yicanyu').text());
		         var shengyu=parseInt($('.shengyu').text());
		         num+=1;
		         if(num>shengyu){
                       // alert('已经为最大值了！');
                       $('#num').text(shengyu);
			     }else{
			        	 $('#num').text(num);
				 }
		         
		});
	
	//var shopinfo={'shopid':{wc:$item['id']},'money':{wc:$item['yunjiage']},'shenyu':{wc:$syrs}};
	//点击赞，开始购买
	

$('#buybt').bind('click',function(){
	var sheng=$('.shengyu').text();
	if(sheng<=0){	
		
		alert('购买人数已满');return false;exit;
	};
	 var number=parseInt($("#num").text());
	
	 if(number<=0){}
		            //判断是否登录
		            if(document.cookie.indexOf('ushell')==-1){
                                alert('您还没有登录！');
                                $('#login').click();//跳转到登录页面
                                exit;
			        }
                    //将该商品加入到购物车中
					var shopid=parseInt($('#currentJp').text());//商品id
					//alert(parseInt($('#currentJp').text()));
					//根据shopid得到相关信息
					var data={
                                id:parseInt($('#currentJp').text())
							};
					$.post('<?php echo WEB_PATH;?>/spkj/cart/getshopinfo',data,function(msg){
						 var shopinfo=eval(msg);
						 var number=parseInt($("#num").text());
							
						//判断是否购物车中已经有商品
						
						var cookie=document.cookie;
						var start1=cookie.indexOf('Cartlist');
						//alert('cartlist位置'+start1);
						//alert(cookie);
						//alert(cookie);
						if(start1!=-1){//表示原购物车中已经有商品
 								var cookies=cookie.split('; ');//alert('length'+cookies.length);
 								for(var i=0;i<cookies.length;i++){//alert('abc'+i);
                                    var cos=cookies[i].split('=');//alert('key'+cos[0]);
                                    if(cos[0]=='Cartlist'){//alert('value'+cos[1]);
                                         var info=$.evalJSON(unescape(cos[1]));//alert('zzzzz'+info);
                                         continue;
                                    }
     							}
					    }else{
                                var info=$.evalJSON('{}');//alert('b0'+info);
						}
						info[shopid]={}; //alert('b2');
					    info[shopid]['num']=number;
					    info[shopid]['shenyu']=shopinfo['shenyu'];///alert('a11');
					    info[shopid]['money']=shopinfo['money'];//alert('a12');
					    info['MoenyCount']='0.00';	
					    //alert(shopinfo.money);
					  	// alert(escape(document.cookie));
					   // document.cookie="Cartlist="+escape($.toJSON(info))+";path:/spkj'";
					    var val=escape($.toJSON(info));
					 	$.cookie("Cartlist",val,{path:"/",expiress:10});
				       // location.href="<?php echo WEB_PATH;?>/spkj/cart/pay";
					     $.post('<?php echo WEB_PATH;?>/spkj/cart/pay',data,function(msg){
				        	if(msg==1){
				        		alert('购买成功');
				        		//window.location.reload();
				        		var num=parseInt($('#num').text());
				        		var yicanyu=parseInt($('.yicanyu').text());
		         				var shengyu=parseInt($('.shengyu').text());
		         				var xinyi=yicanyu+num;
		         				var xinsheng=shengyu-num;
		         				$('.yicanyu').text(xinyi);
				        		$('.shengyu').text(xinsheng);
				        		
				        	}else if(msg==100){
				        		alert('余额不足,请先充值');
				        		location.href="<?php echo WEB_PATH;?>/member/home/userrecharge";
				        	}else{
				        		alert('购买失败');
				        		window.location.reload();
				        		
				        	}

				        });
					       
						    
				},'json');



//alert(shopinfo);
					
		});
	//获取购物车中的商品信息
	
	//3个效果
	$('.jp').hover(function(){
		$(this).css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/2.png) top right no-repeat');
		$(this).css('cursor','pointer');
	},function(){
		$(this).css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/1.png) top right no-repeat');
	});
	$('#buybt').hover(function(){
		$(this).css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/buybt2.png) top right no-repeat');
		$(this).css('cursor','pointer');
	},function(){
		$(this).css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/buybt1.png) top right no-repeat');
	});
	$('#chongzhibt').hover(function(){
		$(this).css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/chongzhi2.png) top right no-repeat');
		$(this).css('cursor','pointer');
	},function(){
		$(this).css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/chongzhi1.png) top right no-repeat');
	});
	$('#myinput1').hover(function(){
		$(this).css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/biaoqing2.png) top right no-repeat');
		$(this).css('cursor','pointer');
	},function(){
		$(this).css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/biaoqing1.png) top right no-repeat');
	});
	$('#myinput3').hover(function(){
		$(this).css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/fasong2.png) top right no-repeat');
		$(this).css('cursor','pointer');
	},function(){
		$(this).css('background','url(<?php echo G_TEMPLATES_IMAGE;?>/shipinimg/fasong1.png) top right no-repeat');
	});
	
	//跳转到登录页面
	$('#login').click(function(){
		location.href="<?php echo WEB_PATH;?>/member/user/login";
	});

	//跳转到注册页面
	$('#register').click(function(){
		location.href="<?php echo WEB_PATH;?>/member/user/register";
	});
	//跳转到充值页面
	$('#chongzhibt').click(function(){
		location.href="<?php echo WEB_PATH;?>/member/home/userrecharge";
	});
	//跳转到我的云购
	$('#wodeyungou').click(function(){
		location.href="<?php echo WEB_PATH;?>/member/home/userbuylist";
	});
	//跳转到在线充值
	$('#zaixianchongzhi').click(function(){
		location.href="<?php echo WEB_PATH;?>/member/home/userrecharge";
	});
	//弹出收藏提示
	$('#shoucang').click(function(){
		alert('您可以通过快捷键CRTL+D来收藏本网页！');
	});
	//$('[data-toggle="tooltip"]').tooltip();

	
});


</script>
<script>
 	function setbuy(){
        var Left=$('#jpjindu2').offset().left-$('#star').offset().left;
        var Top=$('#jpjindu2').offset().top-$('#star').offset().top;
        var a=0;
        var x=Math.random()*parseInt($('#star').width());
        $('#star').html("<img src='http://www.yungw.com/statics/templates/yungou/images/shipinimg/heart1.png' class='img' style='position: absolute;opacity:1;left:"+x+"px"+"'>");
        $('.img').animate({
        	width:70,
            height:60,
            top:Top-30,
            left:Left,
            opacity:0
        },3000)
       }
    </script>
    <script>
        function boom1(){
            var FireHeight=-400;
            var UpTime=1500;
            var BoomTime=500;
            $('#fire1 img').remove();
            for(var i=1;i<=8;i++){
                $('#fire1').append("<img src='http://www.yungw.com/statics/templates/yungou/images/shipinimg/heart2.png' style='position: absolute;left:0;top:0;opacity:1;width:40px;height:30px;' class='img"+i+"'>");
            }
            $('.img1').animate({top:FireHeight},UpTime).animate({left:100,top:+FireHeight,opacity:0},BoomTime);
            $('.img2').animate({top:FireHeight},UpTime).animate({left:-100,top:+FireHeight,opacity:0},BoomTime);
            $('.img3').animate({top:FireHeight},UpTime).animate({left:-65,top:65+FireHeight,opacity:0},BoomTime);
            $('.img4').animate({top:FireHeight},UpTime).animate({left:65,top:-65+FireHeight,opacity:0},BoomTime);
            $('.img5').animate({top:FireHeight},UpTime).animate({left:-65,top:-65+FireHeight,opacity:0},BoomTime);
            $('.img6').animate({top:FireHeight},UpTime).animate({left:65,top:65+FireHeight,opacity:0},BoomTime);
            $('.img7').animate({top:FireHeight},UpTime).animate({top:100+FireHeight,opacity:0},BoomTime);
            $('.img8').animate({top:FireHeight},UpTime).animate({top:-100+FireHeight,opacity:0},BoomTime);
           // setTimeout(boom1,2000)
        };
        function boom2(){
            var FireHeight=-200;
            var UpTime=1500;
            var BoomTime=500;
            $('#fire2 img').remove();
            for(var i=1;i<=8;i++){
                $('#fire2').append("<img src='http://www.yungw.com/statics/templates/yungou/images/shipinimg/heart2.png' style='position: absolute;left:0;top:0;opacity:1;width:40px;height:30px;' class='img"+i+"'>");
            }
            $('.img1').animate({top:FireHeight},UpTime).animate({left:100,top:+FireHeight,opacity:0},BoomTime);
            $('.img2').animate({top:FireHeight},UpTime).animate({left:-100,top:+FireHeight,opacity:0},BoomTime);
            $('.img3').animate({top:FireHeight},UpTime).animate({left:-65,top:65+FireHeight,opacity:0},BoomTime);
            $('.img4').animate({top:FireHeight},UpTime).animate({left:65,top:-65+FireHeight,opacity:0},BoomTime);
            $('.img5').animate({top:FireHeight},UpTime).animate({left:-65,top:-65+FireHeight,opacity:0},BoomTime);
            $('.img6').animate({top:FireHeight},UpTime).animate({left:65,top:65+FireHeight,opacity:0},BoomTime);
            $('.img7').animate({top:FireHeight},UpTime).animate({top:100+FireHeight,opacity:0},BoomTime);
            $('.img8').animate({top:FireHeight},UpTime).animate({top:-100+FireHeight,opacity:0},BoomTime);
            //setTimeout(boom2,2000)
        };
        function boom3(){
            var FireHeight=-200;
            var UpTime=1500;
            var BoomTime=500;
            $('#fire3 img').remove();
            for(var i=1;i<=8;i++){
                $('#fire3').append("<img src='http://www.yungw.com/statics/templates/yungou/images/shipinimg/heart2.png' style='position: absolute;left:0;top:0;opacity:1;width:40px;height:30px;' class='img"+i+"'>");
            }
            $('.img1').animate({top:FireHeight},UpTime).animate({left:100,top:+FireHeight,opacity:0},BoomTime);
            $('.img2').animate({top:FireHeight},UpTime).animate({left:-100,top:+FireHeight,opacity:0},BoomTime);
            $('.img3').animate({top:FireHeight},UpTime).animate({left:-65,top:65+FireHeight,opacity:0},BoomTime);
            $('.img4').animate({top:FireHeight},UpTime).animate({left:65,top:-65+FireHeight,opacity:0},BoomTime);
            $('.img5').animate({top:FireHeight},UpTime).animate({left:-65,top:-65+FireHeight,opacity:0},BoomTime);
            $('.img6').animate({top:FireHeight},UpTime).animate({left:65,top:65+FireHeight,opacity:0},BoomTime);
            $('.img7').animate({top:FireHeight},UpTime).animate({top:100+FireHeight,opacity:0},BoomTime);
            $('.img8').animate({top:FireHeight},UpTime).animate({top:-100+FireHeight,opacity:0},BoomTime);
           // setTimeout(boom3,2000)
        }
        function boom4(){
            var FireHeight=-350;
            var UpTime=1500;
            var BoomTime=500;
            $('#fire4 img').remove();
            for(var i=1;i<=8;i++){
                $('#fire4').append("<img src='http://www.yungw.com/statics/templates/yungou/images/shipinimg/heart2.png' style='position: absolute;left:0;top:0;opacity:1;width:40px;height:30px;' class='img"+i+"'>");
            }
            $('.img1').animate({top:FireHeight},UpTime).animate({left:100,top:+FireHeight,opacity:0},BoomTime);
            $('.img2').animate({top:FireHeight},UpTime).animate({left:-100,top:+FireHeight,opacity:0},BoomTime);
            $('.img3').animate({top:FireHeight},UpTime).animate({left:-65,top:65+FireHeight,opacity:0},BoomTime);
            $('.img4').animate({top:FireHeight},UpTime).animate({left:65,top:-65+FireHeight,opacity:0},BoomTime);
            $('.img5').animate({top:FireHeight},UpTime).animate({left:-65,top:-65+FireHeight,opacity:0},BoomTime);
            $('.img6').animate({top:FireHeight},UpTime).animate({left:65,top:65+FireHeight,opacity:0},BoomTime);
            $('.img7').animate({top:FireHeight},UpTime).animate({top:100+FireHeight,opacity:0},BoomTime);
            $('.img8').animate({top:FireHeight},UpTime).animate({top:-100+FireHeight,opacity:0},BoomTime);
           // setTimeout(boom4,2000)
        };
    </script>