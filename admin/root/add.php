 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>添加用户</title>
		<style type="text/css">
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
#addinfo a{ font-size:14px; font-weight:bold; background:url(images/main/addinfoblack.jpg) no-repeat 0 1px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover{ background:url(images/main/addinfoblue.jpg) no-repeat 0 1px;}
		</style>
	</head>
	<body>
		<center>
			<h3>添加会员信息</h3>
			<form action="action.php?a=add" method="post">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">账号：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="username">
						</td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">姓名：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="name">
						</td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">密码：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="pass"></td>
					</tr>
					<tronMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">性别：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for">
							<input type="radio" name="sex" value="1">男
							<input type="radio" name="sex" value="0">女
						</td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">地址：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="address">
					</td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">邮编：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="code">
					</td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">电话：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="phone"></td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">邮箱：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="email"></td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">状态：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for">
							<input type="radio" name="state" value="0">后台管理员
							<input type="radio" name="state" value="1">用户
							<input type="radio" name="state" value="2">禁用
					</td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for">
							<input type="submit" value="提交">
							<input type="reset" value="重置">
						</td>
					</tr>	
				</form>
			</table>
		</center>
	</body>
</html>
