 <!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>修改类别信息</title>
</head>
<body>
	<center>
		<?php
			require("../../public/config.php");
			require("../../public/Model.class.php");
			$mod = new Model("type");

			$id = $_GET['id'];
			$map = "id='".$id."'";
			$result = $mod->where($map)->select();
			foreach ($result as $row) {
				
		?>
		<h3 align="center">修改会员信息</h3>
		<form action="action.php?a=update" method="post">
			<table width="300" border="0" align="center">
				
				<tr>
						<td align="right">编辑</td>
						<td>
							<input type="text" name="name" value="<?php echo $row['name'];?>">
							<input type="hidden" name="id" value="<?php echo $id;?>">
						</td>
				</tr>
				<tr>
					<td colspan="" align="center"></td>
					<td><input type="submit" value="提交"></td>
					<td><input type="reset" value="重置"></td>
				</tr>
			</form>
		</table>
		<?php } ?>
	</center>	
	
</body>
</html>
