<?php session_start();?>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>	
		<link rel="stylesheet" href="./include/css/personal/safe/css.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/common.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/ms-style.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/personal_member.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/Snaddress.min.css" />
	</head>
	<body class="ms-body">
		<div id="" class="ng-top-banner"></div>
		<div class="ng-toolbar">
			<div class="ng-toolbar-con wrapper">
				<div class="ng-toolbar-left">
					<a  href="./index.php"class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" style="display: block;">
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
						<div class="ng-down-box ng-d-box service-center-child ng-ser-list" style="display:none;">
							<a >帮助中心</a>
							<a >查找门店</a>
						</div>
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
					.titles{
						font-size: 14px;
						color: #333333;
					}
					
				</style>
				<div class="header-menu">
					<div class="ms-logo">
						<a class="ms-head-logo"  name="Myyigou_index_none_daohangLogo"><span style="font-size: 30px;color: #fff;font-weight: bold;    line-height: 28px;;">个人中心</span></a>
						
					</div>
					<nav class="ms-nav">
						<ul>
							<li class=""><a href="./personal.php" data-url="" >首页</a><i class="nav-arrow"></i></li>
							<li class="nav-manage selected">
								<a href="" data-url="" >账户管理<em></em></a><i class="nav-arrow"></i>
								<div class="list-nav-manage " hidden="">
									<p class="nav-mge-hover">账户管理<em></em></p>
									<p><a >个人资料</a></p>
									<p><a >安全设置</a></p>
									<p><a >账号绑定</a></p>
									<p><a >地址管理</a></p>
								</div>
							</li>
							<li class="ms-nav-msg"><a >消息</a><i class="nav-arrow"></i></li>
						</ul>
						<div class="ms-search">
							<form >
								<input id="" type="text" value="">
									<a id="" href=""></a>
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
							<a class="text-edit-avatar" >修改</a>
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

					<div class="ms-name-info">
						
						<div class="info-member">
							
        				 <span style="margin-left: 20px;">
        				 <a target="_blank" >我的资料</a></span>
						</div>
						<div class="info-safety">
							<span class="safety-lv lv-3">
        				<a >安全等级：<span>中</span></a>
							</span>
							<a class="bind-phone" >
								<i style="background-image: url(img/修改手机.png);"></i>修改手机</a>
							<a class="bind-email" >
								<i style="background-image: url(img/绑定邮箱.png);"></i>修改邮箱</a>
							<a  class="manage-addr" ><i style="background-image: url(img/地址管理.png);"></i>地址管理</a>
						</div>
					</div>
				</div>

			</article>
		</header>
		<div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-side">
				<div class="cont-main">
					<div class="main-wrap mt15">
						
						<h3>
	                        <strong>修改个人信息</strong>
	                    </h3>
	                    <?php
	                    require("../public/config.php");
						require("../public/Model.class.php");
	                     $mod=new Model("users");
				          $id=$_SESSION['adminuser']['id'];
				          // var_dump($id);
				          $map="id='".$id."'";
				          $result=$mod->where($map)->select();
				          foreach($result as $users){

				?>
						<div class="form-list tab-switch personal-wrap-show">
							<form action="action.php?a=update" method="post">
							<input type="hidden" name="id" value="<?php echo $users['id'];?>">
								<div class="control-group clearfix">
									<label class="control-label"><em>*&nbsp;</em>会员名：</label>
									<div class="controls">
										<input  type="text" name="name"  value="<?php echo $users['name'];?>">
									</div>
								</div>
								<div class="control-group clearfix">
									<label class="control-label">姓名：</label>
									<input id="" type="hidden" autocomplete="off" value="">
									<div class="controls">
										<input id="" type="text" name="username" maxlength="20" value="<?php echo $users['username'];?>">
									</div>
									<div id="" class="error-place">
									</div>
								</div>
								<div class="control-group clearfix">
									<label class="control-label"><em>*&nbsp;</em>性别：</label>
									<div id="gender" class="controls">
										<label class="sex-label">
											<input type="radio" name="sex" value="1" <?php echo ($users['sex']=='1')?"checked":"" ?> >
											<span>男</span>
										</label>
										<label class="sex-label">
											<input type="radio" name="sex" value="0" <?php echo ($users['sex']=='0')?"checked":"" ?> >
											<span>女</span>
										</label>
										
									</div>
								</div>
								<div class="control-group clearfix">
									<label class="control-label">手机：</label>
									<div class="controls">
										<span id="" class="dateSelector">
										<input type="text" name="phone" value="<?php echo $users['phone'];?>">
										<i class="date-icons"></i>
										</span>
									</div>
									
								</div>
								<div class="control-group clearfix">
									<label class="control-label">邮箱：</label>
									<div class="controls">
										<span id="" class="dateSelector">
										<input type="text" name="email" value="<?php echo $users['email'];?>">
										<i class="date-icons"></i>
										</span>
									</div>
									
								</div>
								<div class="control-group clearfix">
									<label class="control-label">邮编：</label>
									<div class="controls">
										<span id="" class="dateSelector">
										<input type="text" name="email" value="<?php echo $users['code'];?>">
										<i class="date-icons"></i>
										</span>
									</div>
									
								</div>
								<div class="control-group clearfix">
									<label class="control-label">收货地址：</label>
									<div class="controls">
										<span id="" class="dateSelector">
										<input type="text" name="email" value="<?php echo $users['address'];?>">
										<i class="date-icons"></i>
										</span>
									</div>
									
								</div>

								<div id="" class="control-group clearfix" style="display:block;">
									<input id="" type="hidden" autocomplete="off" >
									<!-- <label class="control-label"><em>*&nbsp;&nbsp;&nbsp;</em>验证码：</label> -->
									<div class="controls">
										<!-- <input id="" type="text" class="text" maxlength="4" autocomplete="off" name="" style="width:150px" value="">
										<span class="tips-words"></span>
										<img src="./include/images/yzm.png" id="" width="62" height="24" class="authCode">
										<span class="changeAuthCode" style="margin-bottom: 10px;"><a href="" style="margin-bottom: -4px;position: absolute;">换一张</a></span>
									</div> -->
									<div id="" class="error-place">
									</div>
								</div>
								<div class="control-group clearfix priority-low">
									<label class="control-label">&nbsp;</label>
									<div style="float:left;">
										<!-- <a href=""  class="ms-stand-btn1" >保 存</a> -->
										<input type="submit" value="提交">
									</div>
									<div id="" class="error-place"></div>
									<div class="error-place mt29"></div>

								</div>
							</form>
							<?php } ?>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
		<div class="clear"></div>
		<div class="ng-footer">
			<textarea class="footer-dom" id="footer-dom-02">
			</textarea>
			<div class="ng-fix-bar"></div>
		</div>
		<style type="text/css">
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
