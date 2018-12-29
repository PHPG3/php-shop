<?php session_start();
// var_dump($_SESSION);
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="./include/css/personal/safe/css.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/common.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/ms-style.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/personal_member.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/Snaddress.min.css" />
		<link rel="stylesheet" href="./include/css/personal/sui.css" />
			
		<style type="text/css">
			progress {
				width: 300px;
				border: 1px solid #ffffff;
				background-color: #e6e6e6;
				color: #0064B4;
				/*IE10*/
			}
			
			progress::-moz-progress-bar {
				background: #FFFFFF;
			}
			
			progress::-webkit-progress-bar {
				background: #ccc;
			}
			
			progress::-webkit-progress-value {
				background: #FF7700;
			}
			a{
				color: #000000;
			}
			.sui-table th, .sui-table td {
		    padding: 16px 8px;
		    line-height: 18px;
		    text-align: center;
		    vertical-align: middle;
		    border-top: 1px solid #e6e6e6;
		    
		}
	 .sui-nav.nav-tabs > .active > a {
	    border:1px #fff solid;
	    background-color: #fff;
	     border-bottom-color: transparent; 
	    cursor: default;
	    font-weight: normal;
	    color: #F2873B;
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
		}
		.sui-nav.nav-tabs {
		    border-bottom: 1px solid #CECECE;
		    padding-left: 5px;
		}
		/*.sui-nav.nav-tabs > .active > a:hover {
			  font-weight: bold;
		    cursor: default;
		    font-weight: bold;
		    color: #F37B1D;
		}*/
		.sui-nav.nav-tabs > li {
		    margin-bottom: -1px;
		     background-color: #fff; 
		     border-bottom: 1px #ccc solid;
		}
		.sui-nav.nav-tabs > .active {
		    border-bottom: 0;
		}
		.sui-nav.nav-tabs > li + li {
		    margin-left: -3px;
		}

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
	
		</style>
	</head>

	<body class="ms-body">
		<div id="" class="ng-top-banner"></div>
		<div class="ng-toolbar">
			<div class="ng-toolbar-con wrapper">
				<div class="ng-toolbar-left">
					<a class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" style="display: block;" href="./index.php">
						<span><img src="" style="margin-right: 10px;"/>返回首页</span>
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
					.sui-table th {
			    font-weight: normal;
			    line-height:40px
					}
						.sui-table td {
			    font-weight: normal;
			    line-height:40px
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
								<a href="" data-url="">账户管理<em></em></a><!-- <i class="nav-arrow"></i> -->
								<div class="list-nav-manage " hidden="">
									<p class="nav-mge-hover">账户管理<em></em></p>

								</div>
							</li>
							<li class="ms-nav-msg"><a>消息</a><i class="nav-arrow"></i></li>
						</ul>
						<div class="ms-search">
							<form>
								<input id="" type="text" value="">
							</form>
						</div>
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
						      <ul class="sui-nav nav-tabs" style="margin-top:0px;width: 1000px;margin-left: 30px;">
								  <li   style="margin-left: -5px;"><a href="#profile" data-toggle="tab">所有订单<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
								  <li class="active"><a href="#profile" data-toggle="tab">待付款<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
								   <li class="active"><a href="#profile" data-toggle="tab">待发货<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
								    <li class="active"><a href="#profile" data-toggle="tab">待发货1<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
								    <li class="active"><a href="#profile" data-toggle="tab">待评价<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
								</ul>
							<div class="profile-info">
								<div class="control-group clearfix " style="width: 1020px;margin-bottom: 0px;">
									<div style="margin-top: -60px";>
                                        <div style="float:right;display: inline;margin-left:60px;display: inline-block;height: 25px;margin-right: -5px;padding-top: 10px;"> 
									    <img src="./include/images/trash-拷贝.png"  style="height: 10px;width: 10px;" />
									           <font style="">订单回收站</font>
                                        </div> 
									 </div>
									
								</div>
							</div>
							
							
							<div class="tab-content" style="width: 1000px;margin-top: 10px;border:1px #fff solid; border-top:transparent;margin-left: 30px;">
								  <div id="index" class="tab-pane " style="padding: 40px 30px;">
								  </div>
								  
								  
								 <div id="profile" class="tab-pane active" >
								 
								 
								  <div style="width: 100%;height: 50px;border: 0px #ccc solid;line-height: 50px;background-color: #fdfdfd">
								 	<table class="table" width="1000" border="0" >
										
								 	<tr>
								 	<!-- <th><span style="color: #858585;margin-left: 50px;">订单时间</span></th>
								 	<th><span style="color: #858585;margin-left: 50px;">订单号</span></th>
								 	<th><span style="color: #858585;margin-left: 50px;">宝贝</span></th>
								 	<th><span style="color: #858585;margin-left: 90px;">数量</span></th>
								 	<th><span style="color: #858585;margin-left: 80px;">实付款(元)</span></th>
								 	<th><span style="color: #858585;margin-left: 45px;">交易状态</span></th>
								 	<th><span style="color: #858585;margin-left: 45px;">交易操作</span></th>
 -->
                                    <th>订单时间</th>
								 	<th>订单号</th>
								 	<th>商品</th>
								 	<th>数量</th>
								 	<th>实付款(元)</th>
								 	<th>交易状态</th>
								 	
								</tr> 
								
									
												<?php
							date_default_timezone_set("PRC");
							require("../public/config.php");
							require("../public/Page.class.php");
							require("../public/Model.class.php");
							$total=0;
							
							$mod=new Model("orders");
							$state = array("0"=>"新订单","1"=>"已发货","2"=>"已收货","3"=>"无效订单");			
							if(!empty($_GET['totle'])){
						             $mod->where("id like '%{$_GET['totle']}%'");
						       	}
						          	$page = new Page($mod->total(),4);
						          	$res = $mod->findAll();
							
							$sql="select d.name,o.address,o.linkman,o.total,o.uid,o.status,d.orderid,d.num,o.addtime from orders o,detail d where o.id=d.orderid and o.uid='".$_SESSION['adminuser']['id']."'";

							$liss=$mod->all($sql);
							// var_dump($liss);die();
							
							foreach($liss as $roow){
								
								echo "<tr>";
								echo "<td align='center'>".date("Y-m-d H:i:s",$roow['addtime'])."</td>";
								echo "<td align='center'>{$roow['orderid']}</td>";
								echo "<td align='center'>{$roow['name']}</td>";				
								echo "<td align='center'>{$roow['num']}</td>";
								echo "<td align='center'>{$roow['total']}</td>";
								echo "<td align='center'>{$state[$roow['status']]}</td>";
								
								echo "</tr>";
							
						}
								
								?>	
								
								</table>
								</div>
									
								 
						
								  	
					
				</div>

			</div>
		</div>
		</div>
		<!-- <div class="clear"></div> -->
		<!-- <div class="ng-footer">

			<textarea class="footer-dom" id="footer-dom-02">
			</textarea>
			<div class="ng-fix-bar"></div>
		</div> -->
		<style type="text/css">
			.fenye{
				    border: 1px #ccc solid;
				     padding: 3px; 
				    width: 20px;
			}
			.ng-footer {
				height:514px;
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
