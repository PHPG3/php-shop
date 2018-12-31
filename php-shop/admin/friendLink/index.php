 <!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>友情链接</title>
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
    <form  action="add.php" method="post">
        <table>
            <input type="submit" value="添加友情链接">
        </table>
    </form>
	<center>
		<table class="table" width="100%">
			<tr>
				<th>链接ID</th>
				<th>链接名字</th>
				<th>链接地址</th>
				<th>操作</th>
			</tr>
			<?php
			date_default_timezone_set("PRC");
			$status = ["0"=>"新订单","1"=>"已发货","2"=>"已收货","3"=>"无效订单"];
			require("../../public/config.php");
			require("../../public/Model.class.php");
			require("../../public/Page.class.php");
			$mod = new Model("friendlink");
            $total = $mod->total();
            $page = new Page($total,8);
            $list = $mod->limit($page->limit())->select();


			foreach ($list as $link) {
				echo "<tr>";
				echo "<td>{$link['id']}</td>";
				echo "<td>{$link['name']}</td>";
				echo "<td><a href='https://{$link['url']}'>{$link['url']}</a></td>";
                echo "<td><a href='action.php?a=del&id={$link['id']}'>删除</a> | <a href='edit.php?id={$link['id']}'>编辑</a></td>";
			}

			?>

			

		</table>
		<br>
		<?php echo $page->show();?>
	</center>
</body>
</html>
