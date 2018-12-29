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
				<th>订单ID</th>
				<th>商品ID</th>
				<th>商品名称</th>
				<th>单价</th>
				<th>数量</th>
				<th>订单时间</th>
				<!-- <th>操作</th> -->
			</tr>
			<?php
			date_default_timezone_set("PRC");
			require("../../public/config.php");
			require("../../public/Model.class.php");
			require("../../public/Page.class.php");
			$mod = new Model("detail");
			$total = $mod->total();
			$page = new Page($total,8);
			$list = $mod->limit($page->limit())->select();
			foreach ($list as $detail) {
				echo "<tr>";
				echo "<td>{$detail['id']}</td>";
				echo "<td>{$detail['orderid']}</td>";
				echo "<td>{$detail['goodsid']}</td>";
				echo "<td>{$detail['name']}</td>";
				echo "<td>{$detail['price']}</td>";
				echo "<td>{$detail['num']}</td>";
				echo "<td>".date("Y-m-d H:i:s",$detail['addtime'])."</td>";
				// echo "<td><a>删除</a> | <a>编辑</a></td>";

			}
			?>

		</table>
		<br>
		<?php echo $page->show();?>
	</center>
</body>
</html>
