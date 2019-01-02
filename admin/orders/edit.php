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
				$mod = new Model("orders");

				$id = $_GET['id'];
				$map = "id='".$id."'";
				$result = $mod->where($map)->select();
				// var_dump($result);exit();
				foreach($result as $row){

				
				?>
			<h3>修改订单状态</h3>
			<form action="action.php?a=update" method="post">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<table width="350" border="0">
					</tr>
					
						<td>
							<input type="radio" name="status" value="0" <?php echo ($row['status']=='0')?"checked":""; ?>>新订单
                        	<input type="radio" name="status" value="1" <?php echo ($row['status']=='1')?"checked":""; ?>>已发货
                        	<input type="radio" name="status" value="2" <?php echo ($row['status']=='2')?"checked":""; ?>>已收货
                        	<input type="radio" name="status" value="2" <?php echo ($row['status']=='3')?"checked":""; ?>>待发货

			            </td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="提交">
							
						</td>
					</tr>
				</table>
			</form>
			<?php } ?>
 		</center>
	</body>
</html>
