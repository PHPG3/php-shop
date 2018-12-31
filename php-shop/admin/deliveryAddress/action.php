 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>修改收货地址信息</title>
	</head>
	<body>
		<center>
			<?php 
				date_default_timezone_set("PRC");
				require("../../public/config.php");
				require("../../public/Model.class.php");
				//2.实例化Stu表信息操作的对象
				$mod = new Model("orders");
				// var_dump($mod);
				//4.根据参数a的值执行对应操作
				switch($_GET['a']){
					case "add"://执行添加
						//执行添加并判断
					$data = $_POST;
					// var_dump($data);
					$data['addtime'] = time();
						if($mod->insert($data)>0){
							echo "添加成功";
						}else{
							echo "添加失败";
						}
						break;
					case "del"://执行删除
						$id = $_GET['id'];
						$mod->del($id);
						header("Location:index.php");
						break;
					case "update"://执行修改
						//执行修改并判断
						if($mod->update($_POST)>0){
							echo "修改成功";
						}else{
							echo "修改失败";
						}
						break;
				}
			 ?>
		</center>
	</body>
</html>
