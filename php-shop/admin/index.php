<?php 
	//开启session
	session_start();
	//判断当前访问者是否已经登录
	//前后台分离，后台session名称为admin,前台的为adminuser
	if(empty($_SESSION['admin'])){
		header("Location:login.php");
		exit();//终止程序运行
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>商城后台管理系统</title>
	<link rel="stylesheet" href="include/css/reset.css">
	<link rel="stylesheet" href="include/css/public.css">
</head>
<body>
<div class="public-header-warrp">
	<div class="public-header">
		<div class="content">
			<div class="public-header-logo"><a href=""><i>管理员</i><h3>商城后台管理</h3></a></div>
			<div class="public-header-admin fr">
				<div class="public-header-fun fr">
					<?php
       if(!empty($_SESSION['adminuser'])){
        echo "<li style='position:absolute;top:0px;margin-left:-120px;list-style-type:none;'>你好！".$_SESSION['admin']['name']."</li>";
       }?>
		<a href="./login.php" class="public-header-loginout">安全退出</a>	
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!-- 内容展示 -->
<div class="public-ifame mt20">
	<div class="content">
	<!-- 内容模块头 -->
		<!-- <div class="public-ifame-header">
			<ul>
				<li class="ifame-item logo">
					<div class="item-warrp">
						<a href="#"><i>管理员</i>
							<h3 class="logo-title">商城后台管理系统</h3>
							<p class="logo-des">创建于 2016/4/22 22:22:47</p>
						</a>
					</div>
				</li>
				<li class="ifame-item"><div class="item-warrp"><span>注册时间：2015/11/21 21:14:01</span></div></li>
				<li class="ifame-item"><div class="item-warrp" style="border:none"><span>网站浏览量：15451</span></div></li>
				<div class="clearfix"></div>
			</ul>
		</div> -->
		<div class="clearfix"></div>
		<!-- 左侧导航栏 -->
		<div class="public-ifame-leftnav">
			<div class="public-title-warrp">
				<div class="public-ifame-title ">
					<a href="">首页</a>
				</div>
			</div>
			<ul class="left-nav-list">
				<li class="public-ifame-item">
					<a href="javascript:;">会员信息管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li class="active"><a href="./user/index.php" target="content">会员信息</a></li>
							<li><a href="./user/add.php" target="content">添加会员</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">商品分类管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="./type/index.php" target="content">浏览商品类别</a></li>
							<li><a href="./type/add.php" target="content">添加商品类别</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">商品信息管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="./goods/index.php" target="content">浏览商品</a></li>
							<li><a href="./goods/add.php" target="content">添加商品</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">订单信息管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="./orders/index.php" target="content">浏览订单信息</a></li>
							<li><a href="./orders/details.php" target="content">浏览订单详情</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">用户收货地址</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="./deliveryAddress/index.php" target="content">修改收货地址</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">扩展功能</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="./friendLink/index.php" hhref="" target="content">友情链接</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">管理员</a>
						<div class="ifame-item-sub">
							<ul>
								<li><a href="./root/root.php" target="content">管理员信息</a></li>
								<li><a href="./root/add.php" target="content">添加会员</a></li>			
							</ul>
						</div>
					</li>
					
				</ul>
			</div>
		<!-- 右侧内容展示部分 -->
		<div class="public-ifame-content">
		<iframe name="content" src="include/main.php" frameborder="0" id="mainframe" scrolling="yes" marginheight="0" marginwidth="0" width="100%" style="height: 700px;"></iframe>
		</div>
	</div>
</div>
<script src="js/jquery.min.js"></script>
<script>
$().ready(function(){
	var item = $(".public-ifame-item");

	for(var i=0; i < item.length; i++){
		$(item[i]).on('click',function(){
			$(".ifame-item-sub").hide();
			if($(this.lastElementChild).css('display') == 'block'){
				$(this.lastElementChild).hide()
				$(".ifame-item-sub li").removeClass("active");
			}else{
				$(this.lastElementChild).show();
				$(".ifame-item-sub li").on('click',function(){
					$(".ifame-item-sub li").removeClass("active");
					$(this).addClass("active");
				});
			}
		});
	}
});
</script>
</body>
</html>
