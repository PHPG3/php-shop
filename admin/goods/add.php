  <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>商品信息管理</title>
		<style type="text/css">
		#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:150px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
#addinfo a{ font-size:14px; font-weight:bold; background:url(images/main/addinfoblack.jpg) no-repeat 0 1px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover{ background:url(images/main/addinfoblue.jpg) no-repeat 0 1px;}
		</style>
	</head>
	<body>
		<center>
			<h3>添加商品信息</h3>
			<form action="action.php?a=insert" method="post" enctype="multipart/form-data">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
					<tr  onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">商品类别：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for">
							<select name="typeid">
								<?php 
									
									require("../../public/config.php");
									require("../../public/Model.class.php");
									$mod = new Model("type");
									$map = "concat(path,id)";
									$list = $mod->order($map)->select();
									foreach ($list as $row){
										$m = substr_count("{$row['path']}",",")-1;
										$str = str_repeat("&nbsp;",$m*4);
										$disabled = ($row['pid']==0)?"disabled":"";
										echo "<option $disabled value='{$row['id']}'>";
										echo "{$str}|--{$row['name']}";
										echo "</option>";
									}
								
									//2.连接数据库
									// $link = @mysqli_connect(HOST,USER,PASS,DBNAME);
									// if(!$link){
									// 	die("连接数据库失败！原因：".mysqli_connect_error());
									// }
									// //3.设置字符编码
									// mysqli_set_charset($link,"utf8");
									// //4.定义sql语句并执行发送
									// $sql = "select * from type order by concat(path,id)";
									// $result = mysqli_query($link,$sql);
									// while($row = mysqli_fetch_assoc($result)){
									// 	//计算空格
									// 	$m = substr_count("{$row['path']}",",")-1;
									// 	$str = str_repeat("&nbsp;",$m*4);
									// 	//判断是否禁用
									// 	$disabled = ($row['pid']==0)?"disabled":"";
									// 	//输出下拉项
									// 	echo "<option $disabled value='{$row['id']}'>";
									// 	echo "{$str}|--{$row['name']}";
									// 	echo "</option>";
									// }
									//5.关闭数据库
								 ?>
							 </select>
						</td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">商品名称：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="goods"></td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">商品厂家：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="company"></td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">商品图片：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="file" name="pic"></td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">商品单价：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="price"></td>
					</tr>
					<tr  onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">商品存量：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><input type="text" name="store"></td>
					</tr>
					<tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
						<td align="right" valign="middle" class="borderright borderbottom bggray">商品描述：</td>
						<td align="left" valign="middle" class="borderright borderbottom main-for"><textarea cols=	"30" rows="5" name="descr"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="提交">
							<input type="reset" value="重置">
						</td>
					</tr>
				</table>

			</form>
		</center>
	</body>
</html>
