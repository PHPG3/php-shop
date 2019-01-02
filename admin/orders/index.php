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
	li{
		list-style-type:none;
	}
	.sui-nav.nav-tabs > .active > a {
	    border:3px #fff solid;
	    background-color: #fff;
	    border-bottom-color: transparent; 
	    cursor: default;
	    font-weight: normal;
		color: #F2873B;
		text-decoration:none;
		}
	.sui-nav.nav-tabs > li > a {
		color: #333333;
		line-height: 18px;
		-webkit-border-radius: 3px 3px 0 0;
		-moz-border-radius: 3px 3px 0 0;
		border-radius: 3px 3px 0 0;
		border: 1px #fff solid;
		border-bottom: 1px #fff solid;
		height: 30px;
		width: 80px;
		text-align: center;
		padding-top: 10px;
		font-size: 14px;
		text-decoration:none;
	}
	.sui-nav.nav-tabs {
		border-bottom: 0px solid #CECECE;
		padding-left: 5px;
		margin-top: -30px;
		margin-bottom: 30px;
	}
	.sui-nav.nav-tabs > li {
		margin-bottom: -1px;
		background-color: #fff; 
		border-bottom: 1px #ccc solid;
		float:left;
	}
	.sui-nav.nav-tabs > .active {
		border-bottom: 1;
	}
	.sui-nav.nav-tabs > li + li {
		margin-left: -3px;
	}
	</style>
</head>
<body>
	<center>
		<ul class="sui-nav nav-tabs" style="margin-top:0px;width: 1000px;margin-left: 30px;">
			<li class="active"><a href="order-status.php?status=0" data-toggle="tab">所有订单<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
			<li class="active"><a href="order-status.php?status=1" data-toggle="tab">新订单<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
			<li class="active"><a href="order-status.php?status=2" data-toggle="tab">已发货<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
			<li class="active"><a href="order-status.php?status=3" data-toggle="tab">已收货<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
			<li class="active"><a href="order-status.php?status=4" data-toggle="tab">待发货<span style="margin-left: 20px;color: #ccc;"></span></a></li>
		</ul>
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
			$status = ["0"=>"新订单","1"=>"已发货","2"=>"已收货","3"=>"待发货"];
			require("../../public/config.php");
			require("../../public/Model.class.php");
			require("../../public/Page.class.php");
			$mod = new Model("orders");
			if($_GET['status']==0){
				$sql="select * from orders";
			}
			else if($_GET['status']==1){
				$sql="select * from orders where status=0";
			}
			else if($_GET['status']==2){
				$sql="select * from orders where status=1";
			}
			else if($_GET['status']==3){
				$sql="select * from orders where status=2";
			}
			else if($_GET['status']==4){
				$sql="select * from orders where status=3";
			}
			$page = new Page(count($mod->all($sql)),8);
			$list = $mod->limit($page->limit())->all($sql);
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
