<%@ page contentType="text/html; charset=UTF-8"%>
<%@ taglib uri="/WEB-INF/tld/c.tld" prefix="c"%>
<%@ taglib uri="/WEB-INF/tld/fmt.tld" prefix="fmt"%>
<!DOCTYPE html>
<html lang="zh-CN">
<jsp:include page="fragments/headTag.jsp" />
<body class="login-layout">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
						<div class="center">
							<h1>
								<i class=""></i> <span class="red"></span> <span
									class="white">信息平台</span>
							</h1>
							<h4 class="blue">&copy; </h4>
						</div>
						<div class="space-6"></div>
						<div class="position-relative">
							<div id="login-box"
								class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											<i class="icon-coffee green"></i>&#12288;登录 
										</h4>
										<div class="space-6"></div>
										<form id="loginForm" action="enterIndexPage" method="post">
											<fieldset>
												<label class="block clearfix"> 
												<span
													class="block input-icon input-icon-right"> 
													<input id="uCode" name="uCode" type="text" class="form-control" placeholder="用户名"
													autocomplete="off" /> 
													<i class="icon-user"></i>
												</span>
												</label> <label class="block clearfix"> <span
													class="block input-icon input-icon-right"> 
												    <input id="pwd" name="pwd"
														autocomplete="off" type="password" class="form-control" placeholder="密码" />
														<i class="icon-lock"></i>
												</span>
												</label>

												<span id="errorMsg" style="color:red;display: none;"></span>
												
												<div class="clearfix">
													<!-- <label class="inline"> <input type="checkbox"
														class="ace" /> <span class="lbl"> 记住用户名</span>
													</label> -->

													<button onclick="return false;" class="width-35 pull-right btn btn-sm btn-primary" id="loginButton">
														<i class="icon-key"></i> 登录
													</button>
												</div>

												<div class="space-4"></div>
											</fieldset>
										</form>
									</div>
									<!-- /widget-main -->

									<div class="toolbar clearfix">
										<!-- <div>
											<a href="#" onclick="show_box('forgot-box'); return false;"
												class="forgot-password-link"> <i class="icon-arrow-left"></i>
												忘记密码
											</a>
										</div> -->

										<!-- <div>
											<a href="#" onclick="show_box('signup-box'); return false;"
												class="user-signup-link"> 马上注册 <i
												class="icon-arrow-right"></i>
											</a>
										</div> -->
									</div>
								</div>
								<!-- /widget-body -->
							</div>
							<!-- /login-box -->

							<div id="forgot-box" class="forgot-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header red lighter bigger">
											<i class="icon-key"></i> Retrieve Password
										</h4>

										<div class="space-6"></div>
										<p>Enter your email and to receive instructions</p>

										<form>
											<fieldset>
												<label class="block clearfix"> <span
													class="block input-icon input-icon-right"> <input
														type="email" class="form-control" placeholder="Email" />
														<i class="icon-envelope"></i>
												</span>
												</label>

												<div class="clearfix">
													<button type="button"
														class="width-35 pull-right btn btn-sm btn-danger">
														<i class="icon-lightbulb"></i> Send Me!
													</button>
												</div>
											</fieldset>
										</form>
									</div>
									<!-- /widget-main -->

									<div class="toolbar center">
										<a href="#" onclick="show_box('login-box'); return false;"
											class="back-to-login-link"> Back to login <i
											class="icon-arrow-right"></i>
										</a>
									</div>
								</div>
								<!-- /widget-body -->
							</div>
							<!-- /forgot-box -->

							<div id="signup-box" class="signup-box widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header green lighter bigger">
											<i class="icon-group blue"></i> New User Registration
										</h4>

										<div class="space-6"></div>
										<p>Enter your details to begin:</p>

										<form>
											<fieldset>
												<label class="block clearfix"> <span
													class="block input-icon input-icon-right"> <input
														type="email" class="form-control" placeholder="Email" />
														<i class="icon-envelope"></i>
												</span>
												</label> <label class="block clearfix"> <span
													class="block input-icon input-icon-right"> <input
														type="text" class="form-control" placeholder="Username" />
														<i class="icon-user"></i>
												</span>
												</label> <label class="block clearfix"> <span
													class="block input-icon input-icon-right"> <input
														type="password" class="form-control"
														placeholder="Password" /> <i class="icon-lock"></i>
												</span>
												</label> <label class="block clearfix"> <span
													class="block input-icon input-icon-right"> <input
														type="password" class="form-control"
														placeholder="Repeat password" /> <i class="icon-retweet"></i>
												</span>
												</label> <label class="block"> <input type="checkbox"
													class="ace" /> <span class="lbl"> I accept the <a
														href="#">User Agreement</a>
												</span>
												</label>

												<div class="space-24"></div>

												<div class="clearfix">
													<button type="reset" class="width-30 pull-left btn btn-sm">
														<i class="icon-refresh"></i> Reset
													</button>

													<button type="button"
														class="width-65 pull-right btn btn-sm btn-success">
														Register <i class="icon-arrow-right icon-on-right"></i>
													</button>
												</div>
											</fieldset>
										</form>
									</div>

									<div class="toolbar center">
										<a href="#" onclick="show_box('login-box'); return false;"
											class="back-to-login-link"> <i class="icon-arrow-left"></i>
											Back to login
										</a>
									</div>
								</div>
								<!-- /widget-body -->
							</div>
							<!-- /signup-box -->
						</div>
						<!-- /position-relative -->
					</div>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
	</div>
	<!-- /.main-container -->


<script type="text/javascript">
function show_box(id) {
	jQuery('.widget-box.visible').removeClass('visible');
	jQuery('#' + id).addClass('visible');
}


$("#loginButton").bind("click", function() {
	var userName = $("#uCode").val(); 
	var password = $("#pwd").val(); 
	if(userName==''){
		$("#errorMsg").html("用户名不能为空！");
		$("#errorMsg").css("display","block");
		return;
	}else if(password==''){
		$("#errorMsg").html("密码错误，请确认！");
		$("#errorMsg").css("display","block");
		return;
	}
	$.ajax({
		url : "loginAjax",
		dataType : 'json',
		type : 'POST',
		data : {
			uCode : userName,
			pwd : password
		},
		success : function(data) {
			if(data.code == 0){
				$("#loginForm").submit();
			}else{
				$("#errorMsg").html(data.data);
				$("#errorMsg").css("display","block");
			}
			
		}
	});
});

$(function() {
	 $("#uCode").focus();
})
</script>
</body>
</html>
