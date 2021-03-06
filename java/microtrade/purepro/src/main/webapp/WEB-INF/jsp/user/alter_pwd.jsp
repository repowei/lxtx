<%@ page contentType="text/html; charset=UTF-8"%>
<%@ taglib uri="/WEB-INF/tld/c.tld" prefix="c"%>
<%@ taglib uri="/WEB-INF/tld/fmt.tld" prefix="fmt"%>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="applicationnd.wap.xhtml+xml;charset= UTF-8" />
		<meta http-equiv="expires" content="2678400" />
        <meta name="format-detection" content="telephone=no" /> 
        <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <title>云平台-修改密码</title>
		<link href="<c:url value='/styles/main.css?t=${version}' />" type="text/css" rel="stylesheet" />
        <link href="<c:url value='/styles/yanzheng.css?t=${version}' />" type="text/css" rel="stylesheet" />
        <script src="<c:url value='/scripts/prepare.js?t=${version}' />" type="text/javascript"></script>
        <script type="text/javascript">
			<c:set var="basePath" value="${pageContext.request.contextPath}" />
		</script>
	</head>
	
	<body>
		<%@include file="/WEB-INF/jsp/head/common.jsp"%>
		<div class="forget-box">
		    <div class="title">修改密码</div>
            <div class=content-wrap>
                <input id="oldpwd" type="password" class="textvalue" maxlength="12" placeholder="请输入原密码" />
                <input id="newpwd" type="password" class="textvalue" maxlength="12" placeholder="请设置6~12位新密码"/>
                <input id="surepwd" type="password" class="textvalue" maxlength="12" placeholder="请再次输入新密码"/>
                <p id="errorMsg"></p>
                <a class="btn-sure">确定</a>
            </div>
		</div>
        <script src="<c:url value='/scripts/main.js?t=${version}' />" type="text/javascript"></script>
        <script src="<c:url value='/scripts/alterpwd.js?t=${version}' />" type="text/javascript"></script>

        <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript"></script>
        <script src="<c:url value='/scripts/share.js' />" type="text/javascript"></script>
        <script type="text/javascript" src="http://pingjs.qq.com/h5/stats.js" name="MTAH5" sid="500049057" ></script>
        <script type="text/javascript">
            (function(root){
            	root.ShareHost = "${basePath}/user/userSetting"; 
                
            }(this));
        </script>
    </body>
</html>