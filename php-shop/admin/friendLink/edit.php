
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
				$mod = new Model("friendlink");

				$id = $_GET['id'];
				$map = "id='".$id."'";
				$result = $mod->where($map)->select();
				// var_dump($result);exit();
				foreach($result as $row){

				
				?>
			<h3>修改友情链接</h3>
			<form action="action.php?a=update" method="post">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<table width="450" border="0">
					<tr>
						<td align="right">链接ID：</td>
						<td><?php echo $row['id']; ?></td>
					</tr>
					<tr>
						<td align="right">链接名称：</td>
						<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
					</tr>
					<tr>
						<td align="right">链接地址：</td>
                        <td><input type="text" name="url" value="<?php echo $row['url'];?>"></td>
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
