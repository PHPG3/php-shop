<?php session_start();
// var_dump($_SESSION);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>订单成功</title> 
  <link href="./include/css/order details/public.css" type="text/css" rel="stylesheet" /> 
  <link rel="stylesheet" type="text/css" href="./include/css/order details/base.css" /> 
  <link rel="stylesheet" type="text/css" href="./include/css/order details/buyConfirm.css" /> 
 </head>
 <body> 
  <!--顶部快捷菜单--> 
  <div class="shortcut_v2013 alink_v2013"> 
   <div class="w"> 
    <ul class="fl 1h"> 
     <li class="fl"> 
      <div class="menu"> 
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
         </li> 
      </ul>
   </div>  
</div> 
<!--顶部快捷菜单--> 
  
  <!--顶部Logo及搜索--> 
  <div class="header_2013"> 
   <div class="w"> 
    <div class="logo_v2013"> 
     <a href="#"> <img  src="" width="120" height="50" /> <img src="include/images/logo.png" width="170" height="50" /> </a> 
    </div> 
    <div class="header_searchbox"> 
     <form action="#"> 
      <input name="search" type="text" class="header_search_input" default_val="锡货网三期上线全场五折" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:search" lang="zh" /> 
      <button type="submit" class="header_search_btn">搜索</button> 
     </form> 
     <ul class="hot_word"> 
      <li><a class="red" href="#" target="_blank">礼品卡</a></li> 
      <li><a target="_blank" href="#">化妆品</a></li> 
      <li><a target="_blank" href="#">保湿霜</a></li> 
      <li><a target="_blank" href="#">护肤马油7件套</a></li> 
      <li><a target="_blank" href="#">爽肤水</a></li> 
     </ul> 
    </div> 
    <div id="cart_box" class="cart_box"> 
     <div class="cart_content" id="cart_content"> 
      <i class="cart-icons"></i> 
      <!-- 购物车没有物品时，显示cart_content_null、隐藏cart_content_all --> 
      <div class="cart_content_null" style="display: none;">
       购物车中还没有商品，
       <br />快去挑选心爱的商品吧！
      </div> 
      <div class="cart_content_all" style="display: block;"> 
       <div class="cart_left_time">
        <span>06分49.9秒</span> 后购物车将被清空，请及时结算
       </div> 
       <div class="cart_content_center"> 
        <div class="cart_con_single"> 
         <div class="single_pic"> 
          <a href="#" target="_blank" alt="兰蔻 (Lancome)根源补养洁颜啫哩 125ml"> <img src="./include/images/goods_img01.jpg" /> </a> 
         </div> 
         <div class="single_info"> 
          <a href="#" target="_blank" alt="兰蔻 (Lancome)根源补养洁颜啫哩 125ml" class="name">兰蔻 (Lancome)根源补养洁颜啫哩 125ml</a> 
          <span class="price">￥269.00</span> 
          <span class="price_plus"> x </span> 
          <span class="price_num">1</span> 
         </div> 
        </div> 
       </div> 
       <div class="con_all"> 
        <div class="price_whole">
         <span>共<span class="num_all">12</span>件商品</span>
        </div> 
        <div>
         <span class="price_gongji">共计<em>￥</em><span class="total_price">69</span></span>
         <a href="#" class="cart_btn" rel="nofollow">去购物车结算</a>
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <span class="clr"></span> 
   </div> 
  </div> 
  <!--顶部Logo及搜索--> 
  <!--  导航条    start--> 
  <div class="yHeader"> 
   <div class="shop_Nav"> 
    <div class="pullDown"> 
     <h2 class="pullDownTitle"><i></i>全部商品分类</h2> 
    </div> 
    <ul class="Menu_box"> 
     <li><a href="" target="_blank" class="yMenua">首页</a></li> 
     <li><a href="" target="_blank">大划算</a></li> 
     <li><a href="" target="_blank">抢拍</a></li> 
     <li><a href="" target="_blank">锡货专场</a></li> 
     <li><a href="" target="_blank">锡货超市</a></li> 
    </ul> 
    <div class="fr r_icon">
     <i class="i01"></i>
     <span>30天退货</span>
     <i class="i02"></i>
     <span>满59包邮</span>
    </div> 
   </div> 
  </div> 
  <!--  导航条    end--> 
  <div class="banner_red_top"> 
  </div> 
  <!--订单提交body部分开始--> 
  <div class="border_top_cart"> 
   <div class="container payment-con"> 
    <form target="_blank" action="#" id="pay-form" method="post"> 
     <div class="order-info"> 
      <div class="msg"> 
       <h3>您的订单已提交成功！付款成功～</h3> 
       <p></p> 
       <p class="post-date">成功付款后<br/>24小时内发货</p> 
      </div> 
      <?php 
        $total=0;
        if (!empty($_SESSION['shoplist'])) {
        foreach ($_SESSION['shoplist'] as $shop) {
        echo "";
        $total +=$shop['num']*$shop['price'];

              }
           }  
      ?>
     <div class='info'> 
       <p> 金额：<span class='pay-total'><?php echo $total;?></span></p>
       <?php
          require("../public/config.php");
          require("../public/Model.class.php");
          $mod = new Model("orders");
          $list = $mod->order($map)->select();
          // $tt =$list['id'];
          // var_dump($list);
          // var_dump($list);die();
          foreach($list as $tt){
            $rr = $tt['id'];
          }
          if (!empty($list)) {
               echo "<p>订单:{$rr}</p>"; 
                unset($_SESSION['shoplist']);
          }
       ?>
       <p> 配送：<?php echo $_SESSION['adminuser']['name'];?> <span class="line">/</span><?php echo $_SESSION['adminuser']['phone'];?><span class="line">/</span> <?php echo $_SESSION['adminuser']['address'];?><span class="line">/</span> 不限送货时间 <span class="line">/</span> 个人电子发票 </p> 
      </div> 
      <div class="icon-box"> 
       <i class="iconfont"><img src="./include/images/yes_ok.png" /></i> 
      </div> 
     </div> 
     <div class="xm-plain-box"> 
      <!-- 选择支付方式 --> 
      <div class="box-ft clearfix"> 
      <a href="order.php"  class="btn btn-primary">查看订单</a>
       <a href="index.php" class="btn btn-lineDakeLight">返回首页</a> 
       <span class="tip"></span> 
      </div> 
     </div> 
    </form> 
   </div> 
   <!--订单提交body部分结束--> 
   <!-- 底部 --> 
   <div class="promise_box"> 
    <div class="w"> 
     <ul> 
      <li><img src="./include/images/promise_img01.jpg" /><span>365天不打烊</span></li> 
      <li><img src="./include/images/promise_img02.jpg" /><span>无理由退换货</span></li> 
      <li><img src="./include/images/promise_img03.jpg" /><span>担保交易</span></li> 
      <li><img src="./include/images/promise_img04.jpg" /><span>先行赔付</span></li> 
      <li><img src="./include/images/promise_img05.jpg" /><span>支持定制</span></li> 
     </ul> 
    </div> 
   </div> 
   <div class="bottom-links"> 
    <ul class="clearfix cols"> 
     <li class="col"> 
      <div class="bottom-links-title">
       关于我们
      </div> 
      <ul class="clearfix bottom-links-items"> 
       <li><a href="#">招聘英才</a></li> 
       <li><a href="#">公司简介</a></li> 
       <li><a href="#">合作洽谈</a></li> 
       <li><a href="#">联系我们</a></li> 
      </ul> </li> 
     <li class="col"> 
      <div class="bottom-links-title">
       客服中心
      </div> 
      <ul class="clearfix bottom-links-items"> 
       <li><a href="#">收货地址</a></li> 
       <li><a href="#">个人资料</a></li> 
       <li><a href="#">修改密码</a></li> 
      </ul> </li> 
     <li class="col"> 
      <div class="bottom-links-title">
       售后服务
      </div> 
      <ul class="clearfix bottom-links-items"> 
       <li><a href="#">退换货政策</a></li> 
       <li><a href="#">退款说明</a></li> 
       <li><a href="#">联系卖家</a></li> 
      </ul> </li> 
     <li class="col"> 
      <div class="bottom-links-title">
       帮助中心
      </div> 
      <ul class="clearfix bottom-links-items"> 
       <li><a href="#">FAQ</a></li> 
       <li><a href="#">积分兑换</a></li> 
       <li><a href="#">积分细则</a></li> 
       <li><a href="#">已购商品</a></li> 
      </ul> </li> 
     <li class="col"> 
      <div class="bottom-links-title">
       雅妆公众号
      </div> 
      <ul class="clearfix bottom-links-items"> 
       <li> <img src="./include/images/weixin_big.jpg" /> </li> 
      </ul> </li> 
     <li class="col"> 
      <div class="bottom-links-title">
       关注我们
      </div> 
      <ul class="clearfix bottom-links-items"> 
       <li><img src="./include/images/icon_sina.png" /><a href="#">新浪微博</a></li> 
       <li><img src="./include/images/icon_tencent.png" /><a href="#">腾讯微博</a></li> 
       <li><img src="./include/images/icon_dou.png" /><a href="#">豆瓣小站</a></li> 
       <li><img src="./include/images/icon_weixin.png" /><a href="#">官方微信</a></li> 
      </ul> </li> 
    </ul> 
   </div> 
   <div class="footer_v2013 bottom-about"> 
    <div class="w"> 
     <p class="foot_p1"> <a href="#">首页</a>|<a href="#">招聘英才</a>|<a href="#">广告合作</a>|<a href="#">联系我们</a>|<a href="#">关于我们</a> </p> 
     <pre>
    经营许可证：苏B2-20130223备案许可证：苏ICP备13041162号-1360网站安全检测平台
    &copy;2013-2014 无锡太湖云电商网络科技发展有限公司   版权所有
                </pre> 
    </div> 
    <!-- <p> <a href="#"><img src="./include/images/bottom_img01.png" /></a> <a href="#"><img src="./include/images/bottom_img02.png" /></a> <a href="#"><img src="./include/images/bottom_img03.png" /></a> <a href="#"><img src="./include/images/bottom_img04.png" /></a> <a href="#"><img src="./include/images/bottom_img05.png" /></a> <a href="#"><img src="./include/images/bottom_img06.png" /></a> <a href="#"><img src="./include/images/bottom_img07.png" /></a> <a href="#"><img src="./include/images/bottom_img08.png" /></a> <a href="#"><img src="./include/images/bottom_img09.png" /></a> </p>  -->
   </div>   
  </div>
 </body>
</html>
