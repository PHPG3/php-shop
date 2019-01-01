 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>修改会员信息</title>
	</head>
	<body>
		<center>
			<?php
				//获取被修改的用户信息的id
				$id = $_GET['id']+0;

				//1.导入配置文件
				require("../../public/config.php");
				require("../../public/Model.class.php");
				$mod = new Model("root");

				$id = $_GET['id'];
				$map = "id='".$id."'";
				$result = $mod->where($map)->select();
				// var_dump($result);exit();
				foreach($result as $row){

				
				?>
			<h3>修改会员信息</h3>
			<form action="action.php?a=update" method="post">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<table width="300" border="0">
					<tr>
						<td align="right">账号：</td>
						<td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
					</tr>
					<tr>
						<td align="right">姓名：</td>
						<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
					</tr>
					<tr>
						<td align="right">性别：</td>
						<td>
							<input type="radio" name="sex" value="1" <?php echo ($row['sex']=='1')?"checked":"" ?> >男
							<input type="radio" name="sex" value="0" <?php echo ($row['sex']=='0')?"checked":"" ?> >女
						</td>
					</tr>
					<tr>
						<td align="right">地址：</td>
						<td><input type="text" name="address" value="<?php echo $row['address'];?>"></td>
					</tr>
					<tr>
						<td align="right">邮编：</td>
						<td><input type="text" name="code" value="<?php echo $row['code'];?>"></td>
					</tr>
					<tr>
						<td align="right">电话：</td>
						<td><input type="text" name="phone" value="<?php echo $row['phone'];?>"></td>
					</tr>
					<tr>
						<td align="right">email：</td>
						<td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
					</tr>
					<tr>
						<td align="right">状态：</td>
						<td>
							<input type="radio" name="state" value="0" <?php echo ($row['state']=='0')?"checked":""; ?>>管理员
                        	<input type="radio" name="state" value="1" <?php echo ($row['state']=='1')?"checked":""; ?>>用户
                        	<input type="radio" name="state" value="2" <?php echo ($row['state']=='2')?"checked":""; ?>>禁用
			            </td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="提交">
							<input type="reset" value="重置">
						</td>
					</tr>
				</table>
			</form>
			<?php } ?>
 		</center>
	</body>
</html>
