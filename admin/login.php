
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>后台登录系统</title>
	<link rel="stylesheet" href="include/css/reset.css" />
	<link rel="stylesheet" href="include/css/login.css" />
</head>
<body>
	<div class="loginwarrp">
		<div class="logo">管理员登陆</div>
        <div class="login_form">
			<form id="Login" name="Login" method="post" action="useraction.php?a=dologin">
				<li class="login-item">
					<span>用户名：</span>
					<input type="text" name="username" class="login_input">
				</li>
				<li class="login-item">
					<span>密　码：</span>
					<input type="password" name="pass" class="login_input">
				</li>
				<li class="login-item verify">
					<span>验证码：</span>
					<input type="text" name="code" class="login_input verify_input" size="5">
				</li><br>
				<img src="../public/Code.class.php?b=1" onclick="this.src='../public/Code.class.php?b=1&id='+Math.random();">
				<div class="clearfix"></div>
				<li class="login-sub"><br><br><br>
					<input type="submit" name="submit" value="登录" />
				</li>                      
           </form>
			</div>
			<span style="color:red;">
				<?php 
					switch($_GET['eno']){
						case 1: echo "验证码错误！"; break;
						case 2: echo "账号错误！"; break;
						case 3: echo "密码错误！"; break;
					}
				 ?>
			</span>
		</div>
	</body>
</html>
