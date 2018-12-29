<?php session_start();
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>个人中心</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="./include/css/personal/safe/css.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/common.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/ms-style.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/personal_member.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/Snaddress.min.css" />
		<link rel="stylesheet" href="./include/css/personal/sui.css" />
		<style>
		body {
		    background: #f5f5f5;
		}
			.sui-table th{
		    padding: 16px 8px;
		    line-height: 18px;
		    text-align: center;
		    vertical-align: middle;
		    border-top: 1px solid #e6e6e6;
		    font-weight: normal;
		    font-size: 14px;
		    color: #333333;
		   }
		   .sui-table td {
		    padding: 16px 8px;
		    line-height: 18px;
		    text-align: center;
		    vertical-align: middle;
		    border-top: 1px solid #e6e6e6;
		    font-weight: normal;
		    font-size: 12px;
		    color: #333333;
		   }
	img {
	    max-width: 100%;
	    height: auto;
	    /*vertical-align: bottom;*/
	    border: 0;
	    -ms-interpolation-mode: bicubic;
	    margin-left: -10px;
	}
a{
	color: #000000;
}
		</style>
	</head>
	<body class="ms-body">
		<div id="" class="ng-top-banner"></div>
		<div class="ng-toolbar">
			<div class="ng-toolbar-con wrapper">
				<div class="ng-toolbar-left">
					<a class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" style="display: block;" href="./index.php">
						<span><img src="./include/images/Home.png" style="margin-right: 10px;"/>返回首页</span>
					</a>
					<div class="ng-bar-node-box myorder-handle">
						<a class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>我的买啦</span><em class="ng-iconfont down"><!----></em></a>
					</div>
					<div class="ng-bar-node-box mysuning-handle">
						<a href="" rel="nofollow" name="" class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>收藏夹</span><em class="ng-iconfont down"><!----></em></a>			
					</div>

					<div class="ng-bar-node-box app-down-box">
						<a href="" target="_blank" rel="nofollow" class="ng-bar-node mb-suning touch-href">
							<span>关注买啦</span>
						</a>
						<div class="ng-mb-box ng-d-box mb-down-child" style="display:none;">
							<div class="ng-code-box">
								<p class="ng-tip">
									<a href="" rel="nofollow" target="_blank"></a>
								</p>
								<a target="_blank">
									<img src="" height="80" width="80">
								</a>
							</div>
							<div class="ng-app-box">
								<div class="ng-app-list">
									<a href="" target="_blank" rel="nofollow" class="ng-app">
										<img src="" title="###"></a>
									<a href="" target="_blank" rel="nofollow" class="ng-app">
										<img src="" title="###"></a>
									<a class="ng-app">
										<img src="" title="###"></a>
									<a href="" target="_blank" rel="nofollow" class="ng-app">
										<img src="" title="###"></a>
								</div>
							</div>
							<a href="" target="_blank" rel="nofollow">
								<img src="" height="35" width="242">
							</a>
							<a href="" class="ng-close" rel="nofollow"><em class="ng-iconfont"></em></a>
						</div>
					</div>

					<a href="" class="ng-bar-node ng-bar-node-pr5" target="_blank"><span>卖家中心</span><em class="ng-iconfont down"><!----></em></a>
					<div class="ng-bar-node-box service-handle">
						<a href="" class="ng-bar-node ng-bar-node-service ng-bar-node-fix touch-href ng-bar-node-pr5" rel="nofollow"><span>联系我们</span><em class="ng-iconfont down"><!----></em>
				    </a>
						
					</div>
				</div>
				<div id="ng-minicart-slide-box"></div>
			</div>
		</div>
		<header class="ms-header ms-header-inner ms-head-position">
			<article class="ms-header-menu">
				<style type="text/css">
					.nav-manage .list-nav-manage {
						position: absolute;
						padding: 15px 4px 10px 15px;
						left: 0;
						top: -15px;
						width: 90px;
						background: #FFF;
						box-shadow: 1px 1px 2px #e3e3e3, -1px 1px 2px #e3e3e3;
						z-index: 10;
					}
					
					.ms-nav li {
						float: left;
						position: relative;
						padding: 0 20px;
						height: 44px;
						font: 14px/26px "Microsoft YaHei";
						color: #FFF;
						cursor: pointer;
						z-index: 10;
					}
					.personal-member .main-wrap {
    width: 1068px;
    margin: 15px 0 30px 180px;
    padding: 0 0 39px 0;
    border: 1px solid #ddd;
    background: none;
}

				</style>
				<div class="header-menu">
					<div class="ms-logo">
						<a class="ms-head-logo" name="Myyigou_index_none_daohangLogo"><span style="font-size: 30px;color: #fff;font-weight: bold;    line-height: 28px;;">个人中心</span></a>

					</div>
					<nav class="ms-nav">
						<ul>
							<li class=""><a href="" data-url="">首页</a><i class="nav-arrow"></i></li>
							<li class="nav-manage selected">
								<a href="./receiving address.php" data-url="">账户管理<em hidden></em></a><i class="nav-arrow" hidden></i>
							</li>
							<li class="ms-nav-msg"><a>消息</a><i class="nav-arrow"></i></li>
						</ul>
						
					</nav>
				</div>

			</article>

			<article class="ms-useinfo">
				<div class="header-useinfo" id="">
					<div class="ms-avatar">
						<div class="useinfo-avatar">
							<img src="./include/images/头像.png">
							<div class="edit-avatar"></div>
							<a class="text-edit-avatar">修改</a>
						</div>
						<?php
        if (empty($_SESSION['adminuser'])) {
            echo "<a href='./login.php' style='font-size:15px;line-height:30px;'>登录</a>|";
            echo "<a href='./reg.php'   style='font-size:15px;line-height:30px;'>注册</a>";
        }else{
           echo "<a href='#' style='font-size:15px;line-height:30px;'>你好！".$_SESSION['adminuser']['name']."</a>";
           echo "<a href=\"./useraction.php?a=logout\" style='font-size:15px;line-height:30px;'> | 退出</a>";
        }
       ?>
					</div>

					
						<div class="info-member">

							<span style="margin-left: 20px;">
        				 <a target="_blank" >我的资料</a></span>
						</div>
						<div class="info-safety">
							<span class="safety-lv lv-3">
        				<a >安全等级：<span>高</span></a>
							</span>
							<a class="bind-phone">
								<i style="background-image: url(./include/images/修改手机.png);"></i>修改手机</a>
							<a class="bind-email">
								<i style="background-image: url(./include/images/绑定邮箱.png);"></i>修改邮箱</a>
							<a class="manage-addr"><i style="background-image: url(./include/images/地址管理.png);"></i>地址管理</a>
						</div>
					</div>
				</div>

			</article>
		</header>
		<div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-side">
					<div class="side-neck" style="margin-top: 20px;">
						<i></i>
					</div>
					<div class="ms-side" style="margin-top: 20px;">
						<article class="side-menu side-menu-off">
							<dl class="side-menu-tree" style="padding-left: 50px;">
								<dt><img src="./include/images/左侧/v-card-3.png"  style="margin-right: 10px;margin-left: -20px;"/>账户管理</dt>
								<dd>
									<td><a href="receiving address.php">个人资料</a></td>
								</dd>
								<dt><img src="./include/images/左侧/file.png"  style="margin-right: 10px;margin-left: -20px;"/>订单管理</dt>
								<dd>
									<a href="order.php">我的订单</a>

								</dd>
								<dt><img src="./include/images/左侧/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/><a href="show.php">购物车</a></dt>
								<dd>
									<a href="show.php">购物车</a>

								</dd>
							</dl>
						</article>
					</div>
				</div>
				<div class="cont-main">
					<div class="main-wrap mt15" style="border: 0px;">
						<!--<h3>
	                        <strong>我的会员等级</strong>
	                    </h3>-->
						<div class="server-wrapper">
							<div class="server-tab" style="margin-top: 26px;">
								<div style=" float: left;vertical-align: bottom;text-align: center;">
								<div style="width: 680px;padding: 10px;float: left;background-color: #fff;height: 500px;">
								<table width="100%" height="200" border="0">
									<tr>
										<td align="left" style="font-size:15px;padding:5px;" ><strong>基本资料</strong><hr style="padding-top:0px;"></td>
									</tr>
									<tr>
									<td align="left" style="padding:5px;">
									<?php 
										date_default_timezone_set("PRC");
									if (!empty($_SESSION['adminuser'])) {
										
            						echo "创建时间：".date("Y-m-d H:i:s",$_SESSION['adminuser']['addtime'])."</a>";
        							} ?>
       								</td>
									</tr>
									<tr>
									<td align="left" style="padding:5px;"><?php
									if (!empty($_SESSION['adminuser'])) {
            						echo "用户名：".$_SESSION['adminuser']['name']."</a>";} ?>
            						</td>
									</tr>
									<tr>
									<td align="left" style="padding:5px;"><?php
										$state = array("0"=>"后台管理员","1"=>"用户","2"=>"禁用");
									if (!empty($_SESSION['adminuser'])) {
            						echo "状态：".$state[$_SESSION['adminuser']['state']]."</a>";}?>
            						</td>
									</tr>

									<tr>
									<td align="left" style="padding:5px;"><?php
										$sex = ['0'=>"女",'1'=>"男"];
									if (!empty($_SESSION['adminuser'])) {
            						echo "性别：".$sex[$_SESSION['adminuser']['sex']]."</a>";}?>
            						</td>
									</tr>
									
									<tr>
									<td align="left" style="padding:5px;">
									<?php if (!empty($_SESSION['adminuser'])) {
            						echo "邮箱：".$_SESSION['adminuser']['email']."</a>";} ?>
            						</td>
									</tr>
									<tr>
									<td align="left" style="padding:5px;">
									<?php if (!empty($_SESSION['adminuser'])) {
            						echo "手机：".$_SESSION['adminuser']['phone']."</a>";} ?>
							       </td>						
							       <tr>
									<td align="left" style="padding:5px;">
									<?php if (!empty($_SESSION['adminuser'])) {
            						echo "邮编：".$_SESSION['adminuser']['code']."</a>";
        							} ?>
       								</td>
									</tr>

									<tr>
									<td align="left" style="padding:5px;">
									<?php if (!empty($_SESSION['adminuser'])) {
            						echo "所在地：".$_SESSION['adminuser']['address']."</a>";
        							}  ?>							
        							</td>
									</tr>

									
									
								</table>
								<br>
								<div style="border-top:1px #ccc solid;width: 650px;position: absolute;margin-top: 90px;margin-left: 20px;float: left;"></div>
								<div style="position: absolute;margin-top: 100px;font-size: 14px;color: #686868;float: left;">
									<span style="margin-left: 20px;">待付款</span>
									<font style="color: #CF2D27;">0</font>
									<span style="margin-left: 40px;margin-right: 40px;">|</span>
									<span >待发货</span>
									<font style="color: #CF2D27;">0</font>
									<span style="margin-left: 40px;margin-right: 40px;">|</span>
									<span>待收货</span>
									<font style="color: #CF2D27;">0</font>
									<span style="margin-left: 40px;margin-right: 40px;">|</span>
									<span>待评价</span>
									<font style="color: #CF2D27;">0</font>
									<span style="margin-left: 40px;margin-right: 40px;">|</span>
									<span>退款</span>
									
								</div>
								</div>	
								
								
								<!--
                                	作者：右侧
                                	时间：2016-05-24
                                	描述：
                                -->
								<div style="float: left;width:250px ;height: 152px;margin-left: 20px;">
								 <p style="font-size: 14px;color: #686868;text-align:center;background-color: #fff;padding: 10px;color: #F88600;font-size: 14px;">菜单管理</p>
								 <div style="background-color: #fff;margin-top: 10px;height: 300px;padding: 10px;">
								 	<p style="font-size: 16px;text-align: left;">我的优惠券</p>
								 	<img src="./include/images/个人中心/组-15.png"/>
								 	<img src="./include/images/个人中心/组-14.png" style="margin-top: 20px;"/>
								 	<p style="margin-top: 30px;font-size: 14px;color: #686868;">全部优惠券(<font color="red">96</font>)</p>
								 </div>
								
								<div style="background-color: #fff;margin-top: 10px;height: 200px;padding: 10px;">
								 	<p style="font-size: 20px;text-align: left;">收藏的商品</p>
								 	<img src="./include/images/个人中心/形状-1.png" style="margin-top: 20px;"/>
								 	<p style="margin-top: 30px;font-size: 14px;color: #686868;">您的收藏空空的，赶紧<br/>
								 	去首页看看购物吧</p>
								 </div>
								
								<div style="background-color: #fff;margin-top: 10px;height: 300px;padding: 10px;">
								 	<p style="font-size: 16px;text-align: left;">购物车</p>
								 	<div style="float:left ;">
								 	<img src="./include/images/个人中心/屏幕快照-2016-04-08-15.50.46.png" style="margin-top: 10px;height: 100px;width: 100px;float: left;"/>	
								 	<br />
								 	<span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
								 	<del style="float: left;margin-left: 20px;">¥189</del>
								 	<p style="width: 100px;font-size: 12px;color: #686868">化妆水化妆水化妆水化妆水化妆水化妆水</p>
								 	</div>
								 	 <div style="float:left ;">
								 	 	 <img src="./include/images/个人中心/屏幕快照-2016-04-08-15.50.46.png" style="margin-top: 10px;height: 100px;width: 100px;float: left;margin-left: 20px;"/>
								 	 	<br />
								 	<span style="display: block;float: left;margin-left: 40px;color: #f78642;font-size: 16px;">¥156</span>
								 	<del style="float: left;margin-left: 20px;">¥189</del>
								 		<p style="width: 100px;margin-left: 20px;font-size: 12px;color: #686868;">化妆水化妆水化妆水化妆水化妆水化妆水</p>
								 	 </div>
								 	
								   <p style="margin-top: 30px;font-size: 14px;color: #686868;">查看购物车(<font color="red">96</font>)</p>
								   
								</div>
								
								</div>
								
								</div>
								
								<div style="width: 680px;padding:10px;display: inline-block; margin-top: 20px;background-color: #fff;float: left;border-bottom: 1px #ccc solid;padding-bottom: 20px;">
									<span style="text-align: left;line-height: 20px;">根据浏览 猜你喜欢</span>
								</div>
								<div style="width: 680px;padding:10px;display: inline-block; margin-top:0px;background-color: #fff;float: left;">
									<div style="padding:10px ;text-align: center;float: left;">
										<div style="float: left;margin-left: 30px">
											<img src="./include/images/wdxx_01.png" />
											<p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
											<span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
								 	     <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
								 	     <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
								 	     <dl style="float: right;margin-top: 30px;">月销量：56</dl>
										</div>
										
										<div style="float: left;margin-left: 30px">
											<img src="./include/images/wdxx_01.png" />
											<p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
											<span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
								 	     <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
								 	     <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
								 	     <dl style="float: right;margin-top: 30px;">月销量：56</dl>
										</div>
										
										<div style="float: left;margin-left: 30px;">
											<img src="./include/images/wdxx_01.png" />
											<p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
											<span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
								 	     <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
								 	     <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
								 	     <dl style="float: right;margin-top: 30px;">月销量：56</dl>
										</div>
										
									</div>
									
									<div style="padding:10px ;text-align: center;float: left;">
										<div style="float: left;margin-left: 30px">
											<img src="./include/images//wdxx_01.png" />
											<p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
											<span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
								 	     <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
								 	     <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
								 	     <dl style="float: right;margin-top: 30px;">月销量：56</dl>
										</div>
										
										<div style="float: left;margin-left: 30px">
											<img src="./include/images/wdxx_01.png" />
											<p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
											<span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
								 	     <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
								 	     <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
								 	     <dl style="float: right;margin-top: 30px;">月销量：56</dl>
										</div>
										
										<div style="float: left;margin-left: 30px;">
											<img src="./include/images/wdxx_01.png" />
											<p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
											<span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
								 	     <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
								 	     <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
								 	     <dl style="float: right;margin-top: 30px;">月销量：56</dl>
										</div>
										
									</div>
									
									
								</div>
								
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
		</div>
		<div class="clear "></div>
		<div class="ng-footer ">

			<textarea class="footer-dom " id="footer-dom-02 ">
			</textarea>
			<div class="ng-fix-bar "></div>
		</div>
		<style type="text/css ">
		
			.ng-footer {
				height: 130px;
				margin-top: 0;
			}
		
			
			.ng-s-footer {
				height: 130px;
				background: none;
				text-align: center;
			}
			
			.ng-s-footer p.ng-url-list {
				height: 25px;
				line-height: 25px;
			}
			
			.ng-s-footer p.ng-url-list a {
				color: #666666;
			}
			
			.ng-s-footer p.ng-url-list a:hover {
				color: #f60;
			}
			
			.ng-s-footer .ng-authentication {
				float: none;
				margin: 0 auto;
				height: 25px;
				width: 990px;
				margin-top: 5px;
			}
			
			.ng-s-footer p.ng-copyright {
				float: none;
				width: 100%;
			}
			
			.root1200 .ng-s-footer p.ng-copyright {
				width: 100%;
			}
		</style>
		
	</body>

</html>
