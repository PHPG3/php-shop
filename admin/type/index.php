 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
        <title>商品类别信息管理</title>
        <style type="text/css">
        /*总边框样式*/
        .table{
		font-size:14px;
		font-family:宋体;
		text-align: center;
		line-height: 20px;
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
					<th>类别ID</th>
					<th>类别名称</th>
					<th>父类别PID</th>
					<th>PATH路径</th>
					<th>操作</th>
				</tr>
				<?php 
					//1.导入配置文件
					require("../../public/config.php");
					require("../../public/Model.class.php");
					$mod = new Model("type");
					$map = "concat(path,id)";
					$list = $mod->order($map)->select();
					//$sql = "select * from type order by concat(path,id)";
					//5.解析输出
					foreach($list as $row){
						//获取path中的逗号数量
						$m = substr_count($row['path'],",")-1;
						$nbsp = str_repeat("&nbsp;",$m*2);
						echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$nbsp}{$nbsp}|--{$row['name']}</td>";
						echo "<td>{$row['pid']}</td>";
						echo "<td>{$row['path']}</td>";
						echo "<td><a href='action.php?a=del&id={$row['id']}'>删除</a> | <a href='add.php?pid={$row['id']}&path={$row['path']}&name={$row['name']}'>添加子类别</a> | <a href='edit.php?a=update&id={$row['id']}'>编辑</a></td>";
						echo "</tr>";
					}		
				 ?>
			</table>
		</center>
	</body>
</html>
