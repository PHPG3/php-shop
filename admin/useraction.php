
<?php
session_start();//开启session会话
require("../public/config.php");
require("../public/Model.class.php");
require("../public/Code.class.php");
$mod = new Model("root");

//根据参数a的值执行对象的操作
switch($_GET['a']){
	case 'dologin'://执行登录
		//效验验证码
		// var_dump($_POST['code']);
		// var_dump($_SESSION['code']);
		// exit();
		// if($_POST['code'] !== $_SESSION['code']){
		// 	header("Location:login.php?eno=1");
		// 	die();
		// }
		$code = $_POST['code'];
		//var_dump($code);
		if(!$mycode->check($code)){
			header("Location:login.php?eno=1");
			die();
		}

		//获取登录信息
		$uname = $_POST['username'];
		$upass = $_POST['pass'];
		// var_dump($uname);
		// var_dump($upass);
		//导入配置文件
		// require("../public/config.php");

		//连接数据库
		// $link = mysqli_connect(HOST,USER,PASS,DBNAME);
		// if(!$link){
		// 	die("数据库连接失败！原因：".mysqli_connect_error());
		// }
		// //设置编码
		// mysqli_set_charset($link,"utf8");
		// //定义sql语句
		// $sql = "select * from root where username={$uname}";
		// // echo $sql;
		// $result = mysqli_query($link,$sql);
		// // var_dump($result);
		// // //判断是否获取登录个人信息
		$map = 'username='."'{$uname}'";
		$result = $mod->where($map)->select();
		//var_dump($result);exit();
		//判断是否获取登录个人信息
		if($result){
			//var_dump($result);exit();
			//$user = mysqli_fetch_assoc($result);//解析结果集
			// var_dump($user);
			if($result[0]['pass']==$upass){
				//登录成功 将登录成功的人信息放入session里面
				$_SESSION['admin'] = $result[0];
				header("Location:index.php");
			}else{
				header("Location:login.php?eno=3");
			}
		}else{
			header("Location:login.php?eno=2");
		}
		break;
	case 'logout'://执行退出
		unset($_SESSION['admin']);//移除登录信息
		header("Location:login.php");
		break;
	
}
