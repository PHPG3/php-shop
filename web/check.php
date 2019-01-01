<?php session_start();
// setCookie("PHPSESSID",session_id(),time()+24*60,"/");
// var_dump($_SESSION);
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>商品订单</title>
		<link rel="stylesheet" href="./include/css/personal/safe/css.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/common.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/ms-style.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/personal_member.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/Snaddress.min.css" />
		<link rel="stylesheet" href="./include/css/tasp.css">
		<link href="./include/css/orderconfirm.css" rel="stylesheet">
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

			#page{width:auto;}
			#comm-header-inner,#content{width:1100px;margin:auto;}
			#logo{padding-top:26px;padding-bottom:12px;}
			#header .wrap-box{margin-top:-67px;}
			#logo .logo{position:relative;overflow:hidden;display:inline-block;width:140px;height:35px;font-size:35px;line-height:35px;color:#f40;}
			#logo .logo .i{position:absolute;width:140px;height:35px;top:0;left:0;background:url(http://a.tbcdn.cn/tbsp/img/header/logo.png);}
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

	</head>
		<!-- 登录开始 -->
		<body class="ms-body">
		<div id="" class="ng-top-banner"></div>
		<div class="ng-toolbar">
		<div class="ng-toolbar-con wrapper">
		<div class="ng-toolbar-left">
		<?php
		if (empty($_SESSION['adminuser'])) { 
		    echo "<a href='./login.php' style='font-size:15px;line-height:30px;'>登录</a>|";
		    echo "<a href='./reg.php'   style='font-size:15px;line-height:30px;'>注册</a>";
		}else{
		   echo "<a href='#' style='font-size:15px;line-height:30px;'>你好！".$_SESSION['adminuser']['name']."</a>";
		   echo "<a href=\"./useraction.php?a=logout\" style='font-size:15px;line-height:30px;'> | 退出</a> | ";
		   echo "<a href='index.php' style='font-size:15px;line-height:30px;'> 返回首页 |</a>";
		   echo "<a href='./personal.php' style='font-size:15px;line-height:30px;'> 个人中心 |</a>";
		   echo "<a href='./show.php' style='font-size:15px;line-height:30px;'> 购物车</a>";
		}
		?>
		<!-- 登录结束 -->
												
		<!--搜索框开始 -->
		<header class="ms-header ms-header-inner ms-head-position">
			<article class="ms-header-menu1">
				<div class="header-menu" style="width: 1200px;">
					<img src="./include/images/logo.png" style="float:left;width: 90px;height: 40px;">
						<font style="font-size: 24px;color: #F88600;font-weight: bold; margin-left:6px;">购物车</font>	
							<div class="ms-search1">
								<select id="edu" name="edu" style="height: 30px;width:63px;background-color: #F1F1F1;">
		                 			<option value="0"><font style="font-size: 12px;color: #949494;">宝贝</font></option>
								</select>
								<input type="button" value="搜索" style="float: right; color:#F2FAFF;background-color:#F88600;height:31px;width:70px;border: 0px;"></input>
							</div>
						</div>
					</article>
				</header>
		<!--搜索框结束-->
	
				
			<!-- 收货人地址 -->
 			<div id="page">

			<div id="content" class="grid-c">

			<div id="address" class="address" style="margin-top: 20px;" data-spm="2">

			

			<h3>确认收货人信息

			<span class="manage-address">

			<a href="http://member1.taobao.com/member/fresh/deliver_address.htm" target="_blank" title="管理我的收货地址" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.7">管理收货地址</a>

			</span>
			</h3>

			<ul id="address-list" class="address-list">

			<li class="J_Addr J_MakePoint clearfix  J_DefaultAddr " data-point-url="http://log.mmstat.com/buy.1.20">
			<s class="J_Marker marker"></s>

			<span class="marker-tip">寄送至</span>

			<div class="address-info">

			<!-- <a href="#" class="J_Modify modify J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.21">修改本地址</a> -->
			
			<!--跳转到cartaction.php 去处理订单（插入订单到数据库）-->
			<form action="cartaction.php?a=insert" method="post">
			<!-- 收货人信息 -->
			

				<label for="addrId_674944241" class="user-address">
			
				
				<!-- 联系人 -->
				*会员名：<input type="text" name="linkman" value="<?php echo $_SESSION['adminuser']['name'];?>"><br>
				<!-- 地址 -->
				*地址：<input type="text" name="address" value="<?php echo $_SESSION['adminuser']['address'];?>"><br>
				<!-- 邮编 -->
				*邮编：<input type="text" name="code" value="<?php echo $_SESSION['adminuser']['code'];?>"><br>
				<!-- 电话 -->
				*联系方式：<input type="text" name="phone" value="<?php echo $_SESSION['adminuser']['phone'];?>"><br>
				<!-- 会员ID -->
				<input type="hidden" name="uid" value="<?php echo $_SESSION['adminuser']['id'];?>">
				
				
			
			</label>
			<!-- 收货人信息结束-->

			<!-- 商品栏样式开始 -->
			<!-- <em class="tip" style="display: none">默认地址</em>
			<a class="J_DefaultHandle set-default J_MakePoint" href="#" style="display: none" data-point-url="#">设置为默认收货地址</a> -->
			</div>


			</li>
			<li class="J_Addr J_MakePoint clearfix" data-point-url="http://log.mmstat.com/buy.1.20">
			<s class="J_Marker marker"></s>
			<span class="marker-tip">寄送至</span>
			<div class="address-info">
			<a href="#" class="J_Modify modify J_MakePoint" data-point-url="#">修改本地址</a>
			<em class="tip" style="display: none">默认地址</em>
			<a class="J_DefaultHandle set-default J_MakePoint" style="display: none" data-point-url="#" href="#">设置为默认收货地址</a>
			</div>
			</li>
			</ul>
			<ul id="J_MoreAddress" class="address-list hidden">
			</ul>
			
			</div>
			<input id="J_channelUrl" name="channel" value="no-detail" class="J_FareParam" type="hidden">
			<input id="J_actId" name="actId" value="" type="hidden">
			<input name="etkv" value="" type="hidden">
			<input name="havePremium" value="false" type="hidden">
			<input name="cartShareTag" value="" type="hidden">
			<input name="flushingPictureServiceId" value="" type="hidden">
			<div>
			<h3 class="dib">确认订单信息</h3>
			<table class="order-table" id="J_OrderTable" summary="统一下单订单信息区域" cellspacing="0" cellpadding="0">
			<caption style="display: none">统一下单订单信息区域</caption>
			<thead>
			<tr>
			<th class="s-title">店铺宝贝<hr></th>
			<th class="s-price">单价(元)<hr></th>
			<th class="s-amount">数量<hr></th>
			<th class="s-agio">优惠方式(元)<hr></th>
			<th class="s-total">小计(元)<hr></th>
			</tr>
			</thead>
			<tbody data-spm="3" class="J_Shop" data-tbcbid="0" data-outorderid="47285539868" data-isb2c="false" data-postmode="2" data-sellerid="1704508670">
			<tr class="first"><td colspan="5"></td></tr>
			<tr class="shop blue-line">
			<td colspan="3">
			店铺：<a class="J_ShopName J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.6" href="http://store.taobao.com/shop/view_shop.htm?shop_id=104337282" target="_blank" title="淘米魅">莞妆商城</a>
			<span class="seller">卖家：<a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=ac5831c32f47bc9267fcb75b71b5eed6" target="_blank" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.15">莞妆商城</a></span>
			<span class="J_WangWang" data-nick="淘米魅" data-display="inline"></span>  
		    </td>
			<!-- 商品栏样式结束 -->

			<!--输出商品信息开始-->
			<?php
			$total=0;
			if (!empty($_SESSION['shoplist'])) {
				foreach ($_SESSION['shoplist'] as $shop) {
			 echo "<td colspan='2' class='promo'>
				 <div>
				   <ul class='scrolling-promo-hint J_ScrollingPromoHint'>
					</ul>
					</div>
					</td>
					</tr>
					<tr class='item' data-lineid='19614514619:31175333266:35612993875' data-pointrate='0'>
					<td class='s-title'>
					<a href='' target='_blank' title='' class='J_MakePoint' data-point-url='http://log.mmstat.com/buy.1.5'> 
					<img src='../public/uploads/s_{$shop['picname']}' class='itempic'><span class='title J_MakePoint' data-point-url='http://log.mmstat.com/buy.1.5'>{$shop['goods']}</span></a>

					<div class='props'>
					<span>{$shop['descr']}</span>

					</div>
					<a title='消费者保障服务，卖家承诺商品如实描述' href='' target='_blank'>
					<img src='./include/images/T1bnR4XEBhXXcQVo.png'>
					</a>
					<div>
					<span style='color:gray;'>卖家承诺24小时内发货</span>
					</div>
					</td>
					<td class='s-price'>

					<span class='price'>
					<em class='style-normal-small-black J_ItemPrice'>{$shop['price']}</em>
					</span>
					<input name='costprice' value='630.00' class='J_CostPrice' type='hidden'>
					</td>
					<td class='s-amount' data-point-url=''>
				    <input class='J_Quantity' value='1' name='19614514619_31175333266_35612993875_quantity' type='hidden'>{$shop['num']}
					</td>
					 <td class='s-agio'>
				     <div class='J_Promotion promotion' data-point-url=''>无优惠</div>
				  	 </td>
				 	<td class='s-total'>
				   
				   <span class='price'>
					 <em class='style-normal-bold-red J_ItemTotal'>".($shop['num']*$shop['price'])."</em>
				  </span>
				   <input id='furniture_service_list_b_47285539868' name='furniture_service_list_b_47285539868' type='hidden'>
				 	</td>
					</tr>";
					$total +=$shop['num']*$shop['price'];
				}
			}
			?>
			<input type="hidden" name="total" value="<?php echo $total;?>">
		
			<!-- 输出商品信息结束 -->

			<!-- 卖家留言 -->
			<tr class="item-service">
				<td colspan="5" class="servicearea" style="display: none"></td>
					</tr>
						<tr class="blue-line" style="height: 2px;"><td colspan="5"></td></tr>
							<tr class="other other-line">
								 <td colspan="5">
	 								<ul class="dib-wrap">
	 									<li class="dib user-info">
											 <ul class="wrap">
	 										<li>
	 						 				<div class="field gbook">
	  							 		<label class="label">给卖家留言：</label>
	  							 	<textarea style="width:350px;height:80px;" title="选填：对本次交易的补充说明（建议填写已经和卖家达成一致的说明）" name=""></textarea>
	 							</div>
							</li>
					    </ul>
	 				</li>
								
			 <!-- 卖家留言结束 -->

			 <!-- 店铺优惠开始 -->
				 <li class="dib extra-info">
				 	<div class="shoparea">
				 		<ul class="dib-wrap">
							 <li class="dib title">店铺优惠：</li>
				 				<li class="dib sel"><div class="J_ShopPromo J_Promotion promotion clearfix" data-point-url="http://log.mmstat.com/buy.1.16"></div></li>
									 <li class="dib fee">  
									 <span class="price ">
										-<em class="style-normal-bold-black J_ShopPromo_Result">0.00</em>
				 				 	</span>
								</li>
						 </ul>
				 	</div>
				 <div class="shoppointarea"></div>
				 <div class="farearea">
				 <ul class="dib-wrap J_farearea">
				 <li class="dib title">运送方式：</li>
				 <li class="dib sel" data-point-url="http://log.mmstat.com/jsclick?cache=*&amp;tyxd=wlysfs">
				 <input name="1704508670:2|actualPaidFee" value="0" class="J_ActualPaidFee" type="hidden">
				 <input name="1704508670:2|codAllowMultiple" value="true" type="hidden">
				 <input name="1704508670:2|codSellerFareFee" value="" class="J_CodSellerFareFee" type="hidden">
				 <input name="1704508670:2|codServiceFeeRate" value="" class="J_CodServiceFeeRate" type="hidden">
				 <input name="1704508670:2|codPostFee" value="0" class="J_CodPostFee" type="hidden">
				   <select name="1704508670:2|post" class="J_Fare">
				     <option data-fare="1500" value=" 2 " data-codservicetype="2" data-level="" selected="selected">
				 快递 15.00元 
				 </option>
				       <option data-fare="2500" value=" 7 " data-codservicetype="7" data-level="">
				 EMS 25.00元 
				 </option>
				       <option data-fare="1500" value=" 1 " data-codservicetype="1" data-level="">
				 平邮 15.00元 
				 </option>
				     </select>
				   <em tabindex="0" class="J_FareFree" style="display: none">免邮费</em>
				     </li>
				 <li class="dib fee">  <span class="price ">
				 <em class="style-normal-bold-red J_FareSum">30.00</em>
				  </span>
				</li>
				 </ul>
				 </div>
				 <div class="extra-area">
				 <ul class="dib-wrap">
				 <li class="dib title">发货时间：</li>
				 <li class="dib content">卖家承诺订单在买家付款后，24小时内<a href="#">发货</a></li>
				 </ul>
				 </div>
				   
				   <div class="servicearea" style="display: none"></div>
				 </li>
				 </ul>
				 </td>
				</tr>

				<tr class="shop-total blue-line">
				 <td colspan="5">店铺合计(<span class="J_Exclude" style="display: none">不</span>含运费<span class="J_ServiceText" style="display: none">，服务费</span>)：
				   <span class="price g_price ">
				 <span>¥</span><em class="style-middle-bold-red J_ShopTotal"><?php echo $total;?></em>
				  </span>
				  <input name="1704508670:2|creditcard" value="false" type="hidden">
				<input id="J_IsLadderGroup" name="isLadderGroup" value="false" type="hidden">

				   </td>
				</tr>
				</tbody>
				  <tfoot>
				 <tr>
				 <td colspan="5">

				 <div class="order-go" data-spm="4">
				 <div class="J_AddressConfirm address-confirm">
				 <div class="kd-popup pop-back" style="margin-bottom: 40px;">
				 <div class="box">
				 <div class="bd">
				 <div class="point-in">
				 <em class="t">实付款：</em>  <span class="price g_price ">
				 <span>¥</span><em class="style-large-bold-red" id="J_ActualFee"><?php echo $total;?></em>
				</span>
				</div>
				<!-- 店铺优惠结束 -->

				<!-- 提交订单框开始-->
				<!-- 输出信息开始-->
				  <ul>
				 <li><em>寄送至:</em><span id="J_AddrConfirm" style="word-break: break-all;">
				  <?php echo $_SESSION['adminuser']['address'];?>
				   </span></li>
				 <li><em>收货人:</em><span id="J_AddrNameConfirm"><?php echo $_SESSION['adminuser']['name']."&nbsp"."&nbsp"?>
				 												<?php echo $_SESSION['adminuser']['phone']?></span></li>
				 </ul>
				     </div>
				 </div>
				 <!-- 输出信息结束-->
				  <a href="#" class="back J_MakePoint" target="_top" data-point-url="">返回购物车</a>
				  <input class=" btn-go"  type="submit" value="提交"> <!-- <b class="dpl-button"></b> -->
				
				  </div>
				  </div>

				 <div class="J_confirmError confirm-error">
				 <div class="msg J_shopPointError" style="display: none;"><p class="error">积分点数必须为大于0的整数</p></div>
				 </div>
				 <div class="msg" style="clear: both;">
				 <p class="tips naked" style="float:right;padding-right: 0">若价格变动，请在提交订单后联系卖家改价，并查看已买到的宝贝</p>
				 </div>
				 </div>
				 </td>
				 </tr>
				 </tfoot>
				 </table>
				 </div>
				</div>

				<div id="footer"></div>
				</div>
				<!-- 提交订单框 结束-->
				</form>
				<!--底部展览开始  -->
					<div style="margin-top:50px;">
					<font style="font-size: 16px;color: #F4401C;font-weight: bold;border-bottom: 3px #F88600 solid;   padding-bottom: 15px;margin-left: 10px; ">掌柜热卖</font>
							<font style="font-size: 16px;color: #E5E5E5; font-weight:bold;margin-left:20px;">|</font>
							<font style="font-size: 16px;color: #060606; font-weight:bold;margin-left:20px;">最近收藏的</font>
							<font style="font-size: 16px;color: #E5E5E5; font-weight:bold;margin-left:20px;">|</font>
							<font style="font-size: 16px;color: #060606; font-weight:bold;margin-left:20px;">最近游览过的</font>
							<font style="font-size: 16px;color: #E5E5E5; font-weight:bold;margin-left:20px;">|</font>
							<font style="font-size: 16px;color: #060606; font-weight:bold;margin-left:20px;">猜你喜欢的</font>
							<font style="font-size: 12px;color: #686868; font-weight:bold;float: right;margin-right: 15px;">去我的足迹</font>
					</div>
	                <hr style=" border-top:0.01rem #ccc solid;width:1200px;margin-top: 12px;"> </hr>
					
					<div style="float: left;margin-top: 20px;text-align: center; ">
							<img src="./include/images/购物车/图层-285.png" style="min-width: 150px;" />
							<br />
							<span><font style="color: #F2873B;font-size: 16px; font-weight: bold;">￥237.00</font></span>
							<span style="background-color: #F37B1D;margin-left: 100px;"><font style="color: #F0F0F0;font-size: 12px; font-weight: bold;">包邮</font></span>
							<br />
							<span style="color: #565656;">匹考克甜品peacocakecupcake下午茶</span>
							<br />
							<span style="display:inline;margin-top: 5px;"><font style="color: #686868;font-size: 12px; ">销量:996</font></span>
							<span style="display:inline ;background-color: #00DB00;margin-left: 100px;"><font style="color: #F0F0F0;font-size: 12px; font-weight: bold;">新品上市</font></span>
	                        </div>

	                <div style="float: left;margin-top: 20px;text-align: center;margin-left: 20px;">
							<img src="./include/images/购物车/9c0377aa-d9d9-4f94-88f5-6435550c7093.png" style="min-width: 150px;" />
							<br />
							<span><font style="color: #F2873B;font-size: 16px; font-weight: bold;">￥237.00</font></span>
							<span style="background-color: #F37B1D;margin-left: 100px;"><font style="color: #F0F0F0;font-size: 12px; font-weight: bold;">包邮</font></span>
							<br />
							<span style="color: #565656;">匹考克甜品peacocakecupcake下午茶</span>
							<br />
							<span style="display:inline;margin-top: 5px;"><font style="color: #686868;font-size: 12px; ">销量:996</font></span>
							<span style="display:inline ;background-color: #00DB00;margin-left: 100px;"><font style="color: #F0F0F0;font-size: 12px; font-weight: bold;">新品上市</font></span>
	                        </div>

	                <div style="float: left;margin-top: 20px;text-align: center;margin-left: 20px;">
							<img src="./include/images/购物车/图层-285.png" style="min-width: 150px;" />
							<br />
							<span><font style="color: #F2873B;font-size: 16px; font-weight: bold;">￥237.00</font></span>
							<span style="background-color: #F37B1D;margin-left: 100px;"><font style="color: #F0F0F0;font-size: 12px; font-weight: bold;">包邮</font></span>
							<br />
							<span style="color: #565656;">匹考克甜品peacocakecupcake下午茶</span>
							<br />
							<span style="display:inline;margin-top: 5px;"><font style="color: #686868;font-size: 12px; ">销量:996</font></span>
							<span style="display:inline ;background-color: #00DB00;margin-left: 100px;"><font style="color: #F0F0F0;font-size: 12px; font-weight: bold;">新品上市</font></span>
	                        </div>

	                 <div style="float: left;margin-top: 20px;text-align: center;margin-left: 20px;">
							<img src="./include/images/购物车/9c0377aa-d9d9-4f94-88f5-6435550c7093.png" style="min-width: 150px;" />
							<br />
							<span><font style="color: #F2873B;font-size: 16px; font-weight: bold;">￥237.00</font></span>
							<span style="background-color: #F37B1D;margin-left: 100px;"><font style="color: #F0F0F0;font-size: 12px; font-weight: bold;">包邮</font></span>
							<br />
							<span style="color: #565656;">匹考克甜品peacocakecupcake下午茶</span>
							<br />
							<span style="display:inline;margin-top: 5px;"><font style="color: #686868;font-size: 12px; ">销量:996</font></span>
							<span style="display:inline ;background-color: #00DB00;margin-left: 100px;"><font style="color: #F0F0F0;font-size: 12px; font-weight: bold;">新品上市</font></span>
	                        </div>

	                 <div style="float: left;margin-top: 20px;text-align: center;margin-left: 20px;">
							<img src="./include/images/购物车/图层-285.png" style="min-width: 150px;" />
							<br />
							<span><font style="color: #F2873B;font-size: 16px; font-weight: bold;">￥237.00</font></span>
							<span style="background-color: #F37B1D;margin-left: 100px;"><font style="color: #F0F0F0;font-size: 12px; font-weight: bold;">包邮</font></span>
							<br />
							<span style="color: #565656;">匹考克甜品peacocakecupcake下午茶</span>
							<br />
							<span style="display:inline;margin-top: 5px;"><font style="color: #686868;font-size: 12px; ">销量:996</font></span>
							<span style="display:inline ;background-color: #00DB00;margin-left: 100px;"><font style="color: #F0F0F0;font-size: 12px; font-weight: bold;">新品上市</font></span>
	                        </div>
						</div>
					</div>
					<div class="clear "></div>
					<div class="ng-footer "></div>
				<!--底部展览结束  -->
	
	</body>
</html>
