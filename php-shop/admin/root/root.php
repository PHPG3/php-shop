 <!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>会员信息</title>
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
		<table class="table" width="100%">
			<tr>
				<th>ID</th>
				<th>账号</th>
				<th>真实姓名</th>
				<th>性别</th>
				<th>地址</th>
				<th>邮编</th>
				<th>电话</th>
				<th>邮箱</th>
				<th>状态</th>
				<th>注册时间</th>
				<th>操作</th>
			</tr>

			<?php
			date_default_timezone_set("PRC");
			$sex = ['0'=>"女",'1'=>"男"];
			$state = array("0"=>"后台管理员","1"=>"用户","2"=>"禁用");
			require("../../public/config.php");
			require("../../public/Model.class.php");
			require("../../public/Page.class.php");
					$mod = new Model("root");
					// $list = $mod->findAll();
					$total = $mod->total();
					$page = new Page($total,8);
					$list = $mod->limit($page->limit())->select();
					foreach ($list as $row) {
						echo "<center>";
						echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$row['username']}</td>";
						echo "<td>{$row['name']}</td>";
						echo "<td>{$sex[$row['sex']]}</td>";
						echo "<td>{$row['address']}</td>";
						echo "<td>{$row['code']}</td>";
						echo "<td>{$row['phone']}</td>";
						echo "<td>{$row['email']}</td>";
						echo "<td>{$state[$row['state']]}</td>";
						echo "<td>".date("Y-m-d H:i:s",$row['addtime'])."</td>";
						echo "<td><a href='action.php?a=del&id={$row['id']}'>删除</a> | <a href='edit.php?id={$row['id']}'>编辑</a></td>";
						echo "</center>";
					
				}
			 ?>
		</table>
		<br>
		<?php echo $page->show(); ?>
	</center>
</body>
</html>
