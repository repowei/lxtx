<%@ page contentType="text/html; charset=UTF-8"%>
<%@ taglib uri="/WEB-INF/tld/c.tld" prefix="c"%>
<%@ taglib uri="/WEB-INF/tld/fmt.tld" prefix="fmt"%>
<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="Content-Type" content="applicationnd.wap.xhtml+xml;charset= UTF-8" />
        <meta http-equiv="expires" content="2678400" />
        <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <title>操作记录</title>
        <link href="<c:url value='/styles/main.css?t=${version}' />" type="text/css" rel="stylesheet" />
		<link href="<c:url value='/styles/jilu.css?t=${version}' />" type="text/css" rel="stylesheet" />
		<script src="<c:url value='/scripts/prepare.js?t=${version}' />" type="text/javascript"></script>
	</head>
	
	<body>
		<%@include file="/WEB-INF/jsp/head/common.jsp"%>
		<div class="recording">
			<div class="rec_content" id="bean_list" ><ul></ul></div>
		    <div class="deta_more" id="deta_more_div"><img src="<c:url value='/styles/images/deta_jz.gif' />" style="display:;" />努力加载中</div>
		</div>
		<script src="<c:url value='/scripts/main.js?t=${version}' />" type="text/javascript"></script>
		<script type="text/javascript">
			(function(root){
//                 root.ServerAndGoodListData = $.splitServerAndGoodList('{"Servers":[{"ServerId":13,"ServerIP":"114.55.63.183","ServerPort":8502,"ServerName":"点差宝155web行情2","ServerType":3,"ServerParam":""},{"ServerId":6,"ServerIP":"112.124.47.55","ServerPort":9501,"ServerName":"点差宝查询中心1","ServerType":2,"ServerParam":""},{"ServerId":8,"ServerIP":"112.124.9.90","ServerPort":8502,"ServerName":"点差宝155web行情1","ServerType":3,"ServerParam":""},{"ServerId":9,"ServerIP":"112.124.9.90","ServerPort":80,"ServerName":"点差宝充值提现地址1","ServerType":4,"ServerParam":""}],"Merchs":[{"MarketId":17000,"MerchCode":"BU","Name":"刚玉","UnitNum":1,"ShowUnit":"吨","Dec":0,"Margin":"10,100,500","FreezeTime":60,"Point":"4,13|6,11|10,7.5","MaxBuyNum":6},{"MarketId":17000,"MerchCode":"AG","Name":"银基合金","UnitNum":1,"ShowUnit":"千克","Dec":0,"Margin":"10,100,500","FreezeTime":60,"Point":"4,13|6,11|10,7.5","MaxBuyNum":6},{"MarketId":17000,"MerchCode":"CU","Name":"中金铜","UnitNum":1,"ShowUnit":"吨","Dec":0,"Margin":"10,100,500","FreezeTime":60,"Point":"30,13|60,11|100,7.5","MaxBuyNum":6}],"SecKey":"YkoZuTIVIR9YHCr2mZ7gzjDFHwP-NBH_5TDor1WKXCKr4KMZZG","Orgs":[]}');
            }(this));
		</script>
		<script src="<c:url value='/scripts/operrecord.js?t=${version}' />" type="text/javascript"></script>
        
		<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript"></script>
        <script src="<c:url value='/scripts/share.js?t=${version}' />" type="text/javascript"></script>
        <script type="text/javascript" src="http://pingjs.qq.com/h5/stats.js" name="MTAH5" sid="500049057" ></script>
        <script type="text/javascript">
//             (function(root){
//                 root.ShareHost = "http://ruinuo.zjwlce.cn/pointchat/Chat/ChatPushServlet"; 
//                 initShare();
//             }(this));
        </script>
	</body>
	    
</html>