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
				<th>会员ID</th>
				<th>联系人</th>
				<th>地址</th>
				<th>邮编</th>
				<th>电话</th>
				<th>总金额</th>
				<th>状态</th>
				<th>购买时间</th>
				<th>操作</th>
			</tr>
			<?php
			date_default_timezone_set("PRC");
			$status = ["0"=>"新订单","1"=>"已发货","2"=>"已收货","3"=>"无效订单"];
			require("../../public/config.php");
			require("../../public/Model.class.php");
			require("../../public/Page.class.php");
			$mod = new Model("orders");
			$total = $mod->total();
			$page = new Page($total,8);
			$list = $mod->limit($page->limit())->select();
			foreach ($list as $orders) {
				echo "<tr>";
				echo "<td>{$orders['id']}</td>";
				echo "<td>{$orders['uid']}</td>";
				echo "<td>{$orders['linkman']}</td>";
				echo "<td>{$orders['address']}</td>";
				echo "<td>{$orders['code']}</td>";
				echo "<td>{$orders['phone']}</td>";
				echo "<td>{$orders['total']}</td>";
				echo "<td>{$status[$orders['status']]}</td>";
				echo "<td>".date("Y-m-d H:i:s",$orders["addtime"])."</td>";
				echo "<td><a href='edit.php?id={$orders['id']}'>编辑</a></td></td>";

			}

			?>

			

		</table>
		<br>
		<?php echo $page->show();?>
	</center>
</body>
</html>
