 <?php session_start();?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="include/css/style.css" rel='stylesheet' type='text/css' />	
		<title>用户注册</title>
</head>
<body>
	<div class="main">
		<div class="header" >
			<div><img src="./include/images/header_img_03-2.jpg"></div><h1>欢迎登录</h1>
		</div>
		<p></p>
			
			<form action="./useraction.php?a=dologin" method="post">
				<ul class="left-form">
						<div><img src="./include/images/haibao2.jpg" width="700"></div>
						<div class="clear"> </div>
				</ul>
				<ul class="right-form">
					<h3>账户登录</h3>
					<div>
						<li><input type="text"  name="username" placeholder="用户名" /></li>
						<li> <input type="password"  name="pass" placeholder="密码"/></li>

						<!-- <li class="login-item verify"> -->
					<li><input type="text" name="code" class="login_input verify_input" size="6" placeholder="验证码"></li><img src="../public/Code.class.php?b=1" onclick="this.src='../public/Code.class.php?b=1&id='+Math.random();">
					<span style="color:red;">
							<?php 
								switch($_GET['eno']){
									case 1: echo "验证码错误！"; break;
									case 2: echo "账号错误！"; break;
									case 3: echo "密码错误！"; break;
								}
							 ?>
					</span>

				<div class="clearfix"></div>
				<!-- </li>	 -->

					<h4>没有账号吗？<a href="./reg.php">请立即注册</a></h4>
							<input type="submit" value="登录" >
					</div>
					<div class="clear"> </div>
					
				</ul>
				<div class="clear"> </div>
					
			</form>

			
		</div>
			
	
</body>
</html>
