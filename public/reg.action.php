 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>添加会员信息</title>
	</head>
	<body>
		<center>
			<?php 
				require("./config.php");
				require("./Model.class.php");
				//2.实例化Stu表信息操作的对象
				$mod = new Model("users");
				// var_dump($mod);
				//4.根据参数a的值执行对应操作
				switch($_GET['a']){
					case "reg"://执行添加
						//执行添加并判断
					$data = $_POST;
					var_dump($data);
					$data['addtime'] = time();
						if($mod->insert($data)>0){
							echo "添加成功";
						}else{
							echo "添加失败";
						}
						break;
					}
			 ?>
		</center>
	</body>
</html>
