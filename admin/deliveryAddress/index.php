 <!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户收货地址</title>
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
    input{
        border: 1px solid #ccc;
        padding: 2px 0px;
        border-radius: 3px;
        height: 25px;
        padding-left:5px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s
    }
    input:focus{
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
    }
	</style>
</head>
<body>
	<center>
        <form name="searchOrder" action="index.php" method="post">
            <table>
                <input name="userid" type="text" placeholder="请输入会员id">
                <input class="submitButton" type="submit" value="查找">
            </table>
        </form>
        <br>
		<table class="table" width="100%">
			<tr>
				<th>订单ID</th>
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
			if (isset($_POST['userid'])){
                $query = $_POST['userid'];
                $total = $mod->where("uid= \"$query\"")->total();
                $page = new Page($total,8);
                $list = $mod->where("uid= \"$query\"")->limit($page->limit())->select();
            }
			else{
                $total = $mod->total();
                $page = new Page($total,8);
                $list = $mod->limit($page->limit())->select();
            }

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
				echo "<td><a href='modifyAdr.php?id={$orders['id']}'>编辑</a></td></td>";

			}

			?>

			

		</table>
		<br>
		<?php echo $page->show();?>
	</center>
</body>
</html>
