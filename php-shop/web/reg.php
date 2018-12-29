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
			<div><img src="./include/images/header_img_03-2.jpg"></div><h1>创建一个免费帐户！</h1>
		</div>
		<p></p>
			
			<form action="reg.action.php?a=add" method="post">
			<table>
				<ul class="left-form">
					<h2>注册账号：</h2>
					<li>
						<input type="text"   placeholder="您的账户号" name="username">
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="您的真实姓名" name="name">
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="建议至少使用两种字符组合的密码" name="pass">
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="radio" name="sex" value="1">男
						<input type="radio" name="sex" value="0">女
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="所在地址" name="address">
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="邮编" name="code">
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="您的手机" name="phone">
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="常用邮箱" name="email">
						<div class="clear"> </div>
					</li> 
					<input type="submit"  value="创建账户">
						<div class="clear"> </div>
				</ul>
				<ul class="right-form">
					<h3>已有账号？<a href="./login.php"><strong>请登录</strong></a></h3>
					<div class="clear"> </div>
					<div><img src="./include/images/haibao.jpg" width="350"></div>
				</ul>
				<div class="clear"> </div>

				</table>
			</form>
		</div>
	</body>
</html>
