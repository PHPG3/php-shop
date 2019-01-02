 <!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>友情链接</title>
	<style type="text/css">
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
		color: #4dbf00;
		text-decoration:none;
	}
        .submitButton{
            line-height:46px;
            height:46px;
            width:154px;
            color:#ffffff;
            background-color:#ededed;
            font-size:20px;
            font-weight:bold;
            font-family:Arial;
            background:-webkit-gradient(linear, left top, left bottom, color-start(0.05, #599bb3), color-stop(1, #408c99));
            background:-moz-linear-gradient(top, #599bb3 5%, #408c99 100%);
            background:-o-linear-gradient(top, #599bb3 5%, #408c99 100%);
            background:-ms-linear-gradient(top, #599bb3 5%, #408c99 100%);
            background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
            background:-webkit-linear-gradient(top, #599bb3 5%, #408c99 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
            border:0px solid #dcdcdc;
            -webkit-border-top-left-radius:8px;
            -moz-border-radius-topleft:8px;
            border-top-left-radius:8px;
            -webkit-border-top-right-radius:8px;
            -moz-border-radius-topright:8px;
            border-top-right-radius:8px;
            -webkit-border-bottom-left-radius:8px;
            -moz-border-radius-bottomleft:8px;
            border-bottom-left-radius:8px;
            -webkit-border-bottom-right-radius:8px;
            -moz-border-radius-bottomright:8px;
            border-bottom-right-radius:8px;
            -moz-box-shadow:0px 10px 14px -7px #276873;
            -webkit-box-shadow:0px 10px 14px -7px #276873;
            box-shadow:0px 10px 14px -7px #276873;
            text-align:center;
            display:inline-block;
            text-decoration:none;
        }
        .submitButton:hover {
            background-color:#f5f5f5;
            background:-webkit-gradient(linear, left top, left bottom, color-start(0.05, #408c99), color-stop(1, #599bb3));
            background:-moz-linear-gradient(top, #408c99 5%, #599bb3 100%);
            background:-o-linear-gradient(top, #408c99 5%, #599bb3 100%);
            background:-ms-linear-gradient(top, #408c99 5%, #599bb3 100%);
            background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
            background:-webkit-linear-gradient(top, #408c99 5%, #599bb3 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#408c99', endColorstr='#599bb3',GradientType=0);
        }
	</style>
</head>
<body>
    <form  action="add.php" method="post">
        <table>
            <input class="submitButton" type="submit" value="添加友情链接">
        </table>
    </form>
    <br>
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
