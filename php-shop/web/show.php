<?php session_start();
// setCookie("PHPSESSID",session_id(),time()+24*60,"/");
// var_dump($_SESSION);
if(!$_SESSION['adminuser']){
	echo "<script language=\"JavaScript\">\r\n"; 
	echo " alert(\"先登录！\");\r\n"; 
	echo " history.back();\r\n"; 
	echo "</script>";
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>商品购物车</title>
		<link rel="stylesheet" href="./include/css/personal/safe/css.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/common.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/ms-style.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/personal_member.min.css" />
		<link rel="stylesheet" href="./include/css/personal/safe/Snaddress.min.css" />
		<style>
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
		</style>
	</head>


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
           // var_dump($_SESSION);
        }
       ?>
						
					<a class="ng-bar-node ng-bar-node-mini-cart" rel="nofollow" href="">
						
						<span class="total-num-bg-box">
						<em></em>
						<i></i>
					</span>
						</span>
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
							<a href="javascript:void(0);" class="ng-close" rel="nofollow"><em class="ng-iconfont"></em></a>
						</div>
					</div>

					
					<div class="ng-bar-node-box service-handle">
						
						
					</div>
				</div>
				<div id="ng-minicart-slide-box"></div>
			</div>
		</div>
		<header class="ms-header ms-header-inner ms-head-position">
			<article class="ms-header-menu1">
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
				</style>
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
		<div id="ms-center" class="personal-member">
			<div class="cont">

				<div class="cont-main" style="width: 1210px;">
					<div style="margin-top: 20px;width: 1200px;">
						<font style="font-size: 16px;color: #F4401C;font-weight: bold; margin-left:20px;border-bottom: 1px #F88600 solid;   padding-bottom: 14px;">全部商品 </font>
						<font style="font-size: 16px;color: #060606; font-weight:bold;margin-left:20px;">|</font>
						<font style="font-size: 16px;color: #060606; font-weight:bold;margin-left:20px;">降价商品 </font>
						<font style="font-size: 16px;color: #060606; font-weight:bold;margin-left:20px;">|</font>
						<font style="font-size: 16px;color: #060606; font-weight:bold;margin-left:20px;">库存紧张  </font>
						<font style="font-size: 12px;color: #949494; font-weight:bold;margin-left:670px;">已选商品(不含运费)</font>
						<input type="button" value="结算" style="float: right; color:#686868;background-color:#DEDEDE;height:20px;width:46px;border-style:solid;"></input>
                        <hr style=" border-style:solid;width: 1200px;border-color:#DEDEDE;margin-top: 12px;"/> 
                        <br><br>
                        <!-- <input name="商品" type="checkbox" value="" style="margin-top:19px;" /> -->
                        <!-- <font style="font-size: 12px;color: #212121;margin-left: 20px;font-weight: bold;margin-top: -15px;display: flex;">全选</font>  -->
                        <font style="font-size: 12px;color: #212121;margin-left: 100px;font-weight: bold;">商品信息</font> 
                        <font style="font-size: 12px;color: #212121;margin-left: 460px;font-weight: bold;">单价(元)</font> 
                        <font style="font-size: 12px;color: #212121;margin-left: 100px;font-weight: bold;">数量</font>
                        <font style="font-size: 12px;color: #212121;margin-left: 100px;font-weight: bold;">金额(元)</font>
                        <font style="font-size: 12px;color: #212121;margin-left: 100px;font-weight: bold;">操作</font>			
                        <br />
                  

						<!-- 购物车商品 -->
								   <?php
            //输出购物车中的商品信息
			$total=0; //总计金额
			// var_dump($_SESSION['shoplist']);die();
            if(!empty($_SESSION['shoplist'])){ 
            foreach($_SESSION['shoplist'] as $shop){
            	// var_dump($shop);die();
					  echo "<div style='border:1px solid #ccc;height: 150px;margin-top: 20px;'>";
					  echo "<input  type='checkbox'  style='margin-top: 20px;margin-left: 20px;'>";
					  echo "<div>";
					  // 图片
					  echo "<img src=\"../public/uploads/s_{$shop['picname']}\" style='margin-left:60px; float: left;' />";
					  echo "</div>";	
					  echo "<div>";
		    	      echo "<span style='margin-left:15px;float: left;'><font style='font-size: 12px;color: #1f1f1f;'>{$shop['name']}</font>";
		    		  // echo "<font style='font-size: 15px;color: #949494;margin-left: 340px;TEXT-DECORATION: line-through;'>800</font>";
					  echo "<br/>"; 
					  echo "<div style='border:0px solid #ccc; width:350px; '>";
					  echo "<font style='font-size:12px; color:gray;'>{$shop['descr']}</font>";
					  echo "</div>";
					  // 单价
					  echo "<div style='border:0px solid #ccc; width:350px; margin-top:-50px; '>";
					  echo "<font style='font-size: 15px;color: #1f1f1f;margin-left: 450px;font-weight: bold;'>{$shop['price']}</font>";
					  echo "<br/>";
					  echo "</div>";
					  // echo "<img src='./include/images/购物车/矢量智能对象.png' style='margin-left:0px; float: left;'/>";
					  echo "<button style='color:F88600;background-color: #FCE6D1;border: 1px #F88600 solid;width:80px ;margin-left: 430px;'>卖家促销</button>";
					  echo "</span>";
					  echo "<span style='margin-left:35px;float: left;'>";
					  echo "<a href=\"cartaction.php?a=jian&id={$shop['id']}\"><input type='button' value='-' style=' color:#333333;height:30px;width:20px;border-style:solid;margin-left:30px;'></a></input>";
					  echo "<input type='text' name='num' value='{$shop['num']}' style='color:#333333;height:30px;width:30px;text-align:center;'></input>";
					  echo "<a href=\"cartaction.php?a=add&id={$shop['id']}\"><input type='button' value='+' style='color:#333333;height:30px;width:20px;border-style:solid;'></a>";
					  echo "</span>";
					  echo "<span style='margin-left:10px;float: left;'>";
                      echo "<font style='font-size: 16px;color: #FD3C0D;margin-left: 85px;font-weight: bold;'>".($shop['num']*$shop['price'])."</font>";
					  echo "</span>";
					  echo "<span style='margin-left:85px; float: left;'><font style='font-size: 14px;color: #1E1E1E;'></font>";
                      echo "<br/> <font style='font-size: 14px;color: #1E1E1E;'><a href='cartaction.php?a=del&id={$shop['id']}'>删除</a></font>";
					  echo "</span>";
					  echo "</div>";
					  echo "</div>";
					  $total +=$shop['num']*$shop['price'];
					  // var_dump($shop);

						}
					  }
					  ?>

					  <!-- 购物车商品 -->
					  <br />
                        
					  
					  <br />
      
					<div style="margin-top: 10px;background:#E5E5E5;height:50px;width:1200px;">
						<table class="uiTable" >
						<tr >
					        <th  style="line-height:50px;" >
					        	<input name="店铺" type="checkbox" value="" style="height: 14px;width: 14px;float: left;margin-top: 19px;"   />
					        <font style="font-size: 12px;color: #333333;margin-left: 20px;font-weight: bold;display: flex;">全选</font> 
							<th  style="line-height:50px;"><font style="font-size: 12px;margin-left:50px;color: #333333; "><a href="cartaction.php?a=clear">清空购物车</a></font></th>
							<th  style="line-height:50px;"><font style="font-size: 12px;margin-left:50px;color: #333333;  ">消除失效宝贝</font></th>
							<th  style="line-height:50px;" ><font style="font-size: 12px;margin-left:50px; color: #333333;">移入收藏夹</font></th>
							<th  style="line-height:50px; " ><font style="font-size: 12px;margin-left:50px;color: #333333; ">分享</font></th>
							<th class="lastTd" colspan="2" style="line-height:50px; "><font style="font-size: 12px;margin-left:300px; ">已选商品</font><font style="font-size: 12px;color:#FD3C0D;"><?php $goods_num=0;?></font><font style="font-size: 12px;color:#333333;">件</font></th>
							<th  style="line-height:50px; " ><span style="font-size: 12px;margin-left:80px;color: #949494; ">合计(不含运费):</span>
								</th>
								<th  style="line-height:50px; " >
								<span style="font-size: 18px;color:#FD3C0D;">￥<?php echo $total;?></span></th>
                            <th  style="line-height:50px; " ><font style="font-size: 20px;margin-left:43px;color: #949494; "><a href="check.php">提交订单</a></font></th>
						</tr>

					</table>
					</div>
					
				</div>
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
                 <div style="float: right;margin-top: 20px;text-align: center;margin-left: 20px;">
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
