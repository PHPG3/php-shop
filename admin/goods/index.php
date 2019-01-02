 <!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>浏览商品信息</title>
	<style type="text/css">
	/*总边框样式*/
	.table{
		font-size:14px;
		font-family:宋体;
		text-align: center;
		line-height: 40px;
		border-spacing:0;
		border-left:1px solid #EBEBEB;
		border-right:1px solid #EBEBEB;
		border-bottom:1px solid #EBEBEB;
		border-top:1px solid #EBEBEB;
		color: #656565;
		
	}
	/*表格样式*/
	th,td{
		border:1px solid #EBEBEB;
		
	}
	/*标题样式*/
	th{
		line-height: 28px;
		font-size:17px;
		font-family:幼体;
		background: rgba(0, 0, 0, 0) url("../include/images/list_bg.jpg") repeat-x scroll 0 0;
	}
	/*链接*/
	a{
		color: blue;
		text-decoration:none;
	}

	</style>
</head>
<body>
	<center>
		<table class="table" width="100%" >
			<tr>
				<th>ID</th>
				<th>商品名称</th>
				<th>类别</th>
				<th>图片</th>
				<th>单价</th>
				<th>库存量</th>
				<th>销售量</th>
				<th>点击量</th>
				<th>状态</th>
				<th>添加时间</th>
				<th>操作</th>
			</tr>
			<?php 
					date_default_timezone_set("PRC");
					//定义状态
					$state = array(1=>"新商品",2=>"在售",3=>"下架");
					//1.导入配置文件
					require("../../public/config.php");
					require("../../public/Model.class.php");
					require("../../public/Page.class.php");
					$mod = new Model("goods");
					// $list= $mod->select();

					// //分页
					// $total = $mod->total();
					// $page = new Page($total,5);
					// $list = $mod->limit($page->limit())->select();
					if (!empty($_GET['totle'])) {

						$mod->where("id like'%{$_GET['totle']}%'");
					}
					$page = new Page($mod->total(),4);
					$sql = "select g.*,t.name from goods g,type t where g.typeid=t.id ";
					$list = $mod->limit($page->limit())->all($sql);


					//2.连接数据库
					// $link = @mysqli_connect(HOST,USER,PASS,DBNAME);
					// if(!$link){
					// 	die("连接数据库失败！原因：".mysqli_connect_error());
					// }
					// //3.设置字符编码
					// mysqli_set_charset($link,"utf8");
					// //4.定义sql语句并执行发送
					// $sql = "select * from goods";
					// $result = mysqli_query($link,$sql);
					//5.解析结果集 并遍历输出
					foreach($list as $row){
						//var_dump($row);die();
						echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$row['goods']}</td>";
						echo "<td>{$row['name']}</td>";
						echo "<td><img src='../../public/uploads/s_{$row['picname']}'></td>";
						echo "<td>{$row['price']}</td>";
						echo "<td>{$row['store']}</td>";
						echo "<td>{$row['num']}</td>";
						echo "<td>{$row['clicknum']}</td>";
						echo "<td>{$state[$row['state']]}</td>";
						echo "<td>".date("Y-m-d H:i:s",$row['addtime'])."</td>";
						echo "<td><a href='action.php?a=del&id={$row['id']}&picname={$row['picname']}'>删除</a> | <a href='edit.php?id={$row['id']}'>修改</a></td>";
						echo "</tr>";
					}

					//6. 释放结果集，关闭数据库
                    // mysqli_free_result($result);
                    // mysqli_close($link);
				 ?>
			</table>
			<?php echo $page->show();?>
	</center>	
</body>
</html>
