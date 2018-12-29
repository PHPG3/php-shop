<?php session_start();?>
<!DOCTYPE html>
<html id="html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>基于PHP的大学生美妆商城网站</title>
<link type="text/css"  rel="stylesheet"  href="include/css/public.css" />
<link type="text/css"  rel="stylesheet" href="include/css/index.css" />
<link type="text/css" rel="stylesheet" href="include/css/nivo-slider.css" />

</head>
<body id="body">
<div id="div1"></div>
<div id="div2">
</div>
<div id="wrap">
  <div id="top">
     <div class="top_inner">
       <?php
        if (empty($_SESSION['adminuser'])) { 
            echo "<a href='./login.php' style='font-size:15px;line-height:30px;'>登录</a>|";
            echo "<a href='./reg.php'   style='font-size:15px;line-height:30px;'>注册</a>";
        }else{
           echo "<a href='#' style='font-size:15px;line-height:30px;'>你好！".$_SESSION['adminuser']['name']."</a>";
           echo "<a href=\"./useraction.php?a=logout\" style='font-size:15px;line-height:30px;'> | 退出</a> | ";
           echo "<a href='./personal.php' style='font-size:15px;line-height:30px;'>个人中心 |</a>";
           echo "<a href='./show.php' style='font-size:15px;line-height:30px;'> 购物车</a>";
        }
       ?>
       <div class="clear"></div>
     </div>
  </div>
  <div id="header">
     <div class="logo">
       <a href="index.html" title="欢迎来到莞妆"><img src="include/images/logo.png" alt="欢迎来到莞妆" /></a>
     </div>
     <form class="search" action="list.php?a=query" method="post">
       <input type="text" name="query" value=""/>
       <button type="submit"></button>
       <!-- <label>MM在搜索：保湿水 &nbsp;&nbsp;美白面霜  &nbsp;&nbsp;护手霜 &nbsp;&nbsp;洗面奶</label> -->
     </form>
      <a href="show.php"> <img src="include/images/header_img_08.jpg" class="accounts" /></a>
       <!-- <div class="clear"></div> -->
  </div>
  <div id="nav">
     <div class="nav_inner">
       <ul class="nav">
         <li><a href="#">首页</a></li>
         <li class="mall"><a href="list.php">美妆商城</a>
             <div class="mei_hover">
              <div class="neirong">
               <div class="hover">
                <h2>护肤</h2> 
                 <ul>
                   <li><a href="list.php">洁面</a></li>
                   <li><a href="list.php">化妆水</a></li>
                   <li><a href="list.php">面贴面膜</a></li>
                   <li><a href="list.php">免洗面膜</a></li>
                   <li><a href="list.php">精华</a></li>
                   <li><a href="list.php">乳液</a></li>
                   <li><a href="list.php">晚霜</a></li>
                   <li><a href="list.php">眼部护理</a></li>
                   <li><a href="list.php">T区护理</a></li>
                   <div class="clear"></div>
                 </ul>
                </div>
                <div class="hover">
                 <h2>香水</h2>          
                  <ul>
                     <li><a href="#">菲拉格慕</a></li>
                     <li><a href="#">Burberry</a></li>
                     <li><a href="#">Dior</a></li>
                     <li><a href="#">伊莎雅顿</a></li>
                     <li><a href="#">范思哲</a></li>
                     <li><a href="#">CK</a></li>
                     <li><a href="#">安娜苏</a></li>
                     <li><a href="#">大卫杜夫</a></li>
                     <li><a href="#">LANVIN</a></li>
                  </ul>
               </div>
                <div class="hover">
                 <h2>男士</h2>                
                  <ul>
                     <li><a href="#">爽肤水</a></li>
                     <li><a href="#">面霜</a></li>
                     <li><a href="#">啫喱</a></li>
                     <li><a href="#">男香</a></li>
                     <li><a href="#">眼霜</a></li>
                     <li><a href="#">凝胶</a></li>
                     <li><a href="#">精华</a></li>
                     <li><a href="#">唇彩</a></li>
                     <li><a href="#">沐浴</a></li>
                  </ul>
               </div>
               <div class="hover">
                 <h2>彩妆</h2> 
                  <ul>
                     <li><a href="#">隔离/妆前</a></li>
                     <li><a href="#">BB霜</a></li>
                     <li><a href="#">粉底液</a></li>
                     <li><a href="#">粉饼</a></li>
                     <li><a href="#">睫毛膏</a></li>
                     <li><a href="#">眼线笔</a></li>
                     <li><a href="#">眼影</a></li>
                     <li><a href="#">唇彩</a></li>
                     <li><a href="#">腮红</a></li>
                     <li><a href="#">眉笔</a></li>
                     <li><a href="#">底妆</a></li>
                     <li><a href="#">卸妆</a></li>
                  </ul>
               </div>
               <div class="hover">
                 <h2>护发专区</h2>                  
                  <ul>
                     <li><a href="#">洗发</a></li>
                     <li><a href="#">护发</a></li>
                     <li><a href="#">发膜</a></li>
                     <li><a href="#">美发造型</a></li>
                     <li><a href="#">沐浴露</a></li>
                     <li><a href="#">浴盐</a></li>
                     <li><a href="#">身体乳</a></li>
                  </ul>
               </div>
               <div class="hover">
                 <h2>个人护理</h2>            
                  <ul>
                     <li><a href="#">口腔护理</a></li>
                     <li><a href="#">护手霜</a></li>
                     <li><a href="#">护足</a></li>
                     <li><a href="#">卫生巾</a></li>
                     <li><a href="#">私密护理</a></li>
                     <li><a href="#">纤体</a></li>
                     <li><a href="#">颈部护理</a></li>
                     <li><a href="#">脱毛</a></li>
                  </ul>
               </div>   
              </div>
              <img src="include/images/mei_hover_03.jpg"  class="yifu"/>                       
             </div>
         </li>
         <li><a href="list.php">名品特卖</a></li>
         <li><a href="list.php">美妆口碑</a></li>
         <li><a href="list.php">潮人化妆柜</a></li>
         <li><a href="list.php">正品保证</a></li>
         <li><a href="list.php">今日团购</a></li>
         <li><a href="list.php">手机莞妆</a></li>
         <li><a href="list.php">在线客服</a></li>
       </ul>
     </div>  
  </div>
  <div class="banner slide-box">
    <div class="slider">
        <div class="theme-default">
            <div id="slider" class="nivoSlider">
                <a href="#" title="户外专题"><img src="images/banner_img1.jpg" data-thumb="images/banner_img1.jpg" alt="" /></a>
                <a href="#/" title="运动夹克秋季新品"><img src="images/banner_img5.jpg" data-thumb="images/banner_img5.jpg" alt="" /></a>
                <a href="#/" title="时尚泳衣"><img src="images/banner_img2.jpg" data-thumb="images/banner_img2.jpg" alt="" /></a>
                <a href="#"><img src="images/banner_img3.jpg" data-thumb="images/banner_img3.jpg" alt="" /></a>
                <a href="#" title="篮球鞋专题"><img src="images/banner_img6.jpg" data-thumb="images/banner_img6.jpg" alt="" /></a>
                <a href="#" title="羽毛球装备"><img src="images/banner_img4.jpg" data-thumb="images/banner_img4.jpg" alt="" /></a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
  <div id="content">
    <div class="main">
      <div class="remen">
        <h1 class="title">热卖专区</h1>
        <ul>
          <li title="images/caidan_hover_12.jpg"><a href="#"><img src="include/images/remen_18.jpg"  title="images/remen_18.jpg"/></a></li>
          <li title="images/caidan_hover_14.jpg"><a href="#"><img src="include/images/remen_20.jpg"  title="images/remen_20.jpg"/></a></li>
          <li title="images/caidan_hover_16.jpg"><a href="#"><img src="include/images/remen_22.jpg"  title="images/remen_22.jpg"/></a></li>
          <li title="images/caidan_hover_18.jpg"><a href="#"><img src="include/images/remen_24.jpg"  title="images/remen_24.jpg"/></a></li>
          <li title="images/caidan_hover_20.jpg"><a href="#"><img src="include/images/remen_26.jpg"  title="images/remen_26.jpg"/></a></li>
          <li title="images/caidan_hover_22.jpg"><a href="#"><img src="include/images/remen_28.jpg"  title="images/remen_28.jpg"/></a></li>
          <li title="images/caidan_hover_24.jpg"><a href="#"><img src="include/images/remen_30.jpg"  title="images/remen_30.jpg"/></a></li>
          <li class="wei" title="images/caidan_hover_26.jpg"><a href="#"><img src="include/images/remen_32.jpg"  title="images/remen_32.jpg"/></a></li>
          <li title="images/caidan_hover_36.jpg"><a href="#"><img src="include/images/remen_42.jpg"  title="images/remen_42.jpg"/></a></li>
          <li title="images/caidan_hover_37.jpg"><a href="#"><img src="include/images/remen_43.jpg"  title="images/remen_43.jpg"/></a></li>
          <li title="images/caidan_hover_38.jpg"><a href="#"><img src="include/images/remen_44.jpg"  title="images/remen_44.jpg"/></a></li>
          <li title="images/caidan_hover_39.jpg"><a href="#"><img src="include/images/remen_45.jpg"  title="images/remen_45.jpg"/></a></li>
          <li title="images/caidan_hover_40.jpg"><a href="#"><img src="include/images/remen_46.jpg"  title="images/remen_46.jpg"/></a></li>
          <li title="images/caidan_hover_41.jpg"><a href="#"><img src="include/images/remen_47.jpg"  title="images/remen_47.jpg"/></a></li>
          <li title="images/caidan_hover_42.jpg"><a href="#"><img src="include/images/remen_48.jpg"  title="images/remen_48.jpg"/></a></li>
          <li class="wei" title="images/caidan_hover_43.jpg"><a href="#"><img src="include/images/remen_49.jpg" title="images/remen_49.jpg" /></a></li>
          <div class="clear"></div>
        </ul>
      </div>
      <div class="c_nav">
        <div class="ci_nav">
          <h2>护肤专区</h2>                                   
          <ul>
            <li><a href="list.php">卸妆</a></li> 
            <li><a href="list.php">洁面</a></li> 
            <li><a href="list.php">化妆水</a></li> 
            <li><a href="list.php">面膜</a></li> 
            <li><a href="list.php">眼部护理</a></li> 
            <li><a href="list.php">精华</a></li> 
            <li><a href="list.php">乳液</a></li> 
            <li><a href="list.php">面霜</a></li> 
            <li><a href="list.php">身体护理</a></li>  
            <div class="clear"></div>
          </ul>
          <div class="clear"></div>
        </div>
        
        <div class="ci_nav">
          <h2>彩妆专区</h2>                                                                       
          <ul>
            <li><a href="#">隔离/妆前</a></li> 
            <li><a href="#">BB霜</a></li> 
            <li><a href="#">粉底液</a></li> 
            <li><a href="#">粉饼</a></li> 
            <li><a href="#">睫毛膏</a></li> 
            <li><a href="#">眼影</a></li> 
            <li><a href="#">唇彩</a></li> 
            <li><a href="#">腮红</a></li> 
            <li><a href="#">美甲</a></li>
            <li><a href="#">眉笔</a></li>
            <li><a href="#">底妆</a></li>  
            <div class="clear"></div>
          </ul>
          <div class="clear"></div>
        </div>
        
        <div class="ci_nav">
          <h2>热门功效</h2>                                                               
          <ul>
            <li><a href="#">保湿补水</a></li> 
            <li><a href="#">美白祛斑</a></li> 
            <li><a href="#">控油祛痘</a></li> 
            <li><a href="#">紧肤抗皱</a></li> 
            <li><a href="#">眼部护理</a></li> 
            <li><a href="#">敏感修复</a></li> 
            <li><a href="#">去黑头</a></li> 
            <li><a href="#">去角质</a></li> 
            <li><a href="#">收毛孔</a></li>  
            <div class="clear"></div>
          </ul>
          <div class="clear"></div>
        </div>
        <ul class="img_nav">
           <li> 
              <a href="#"><img src="include/images/img_nav_03.jpg"  /></a>
              <h3 class="perfume">Perfume Area</h3>
          </li>
          <li> 
              <a href="#"><img src="include/images/img_nav_05.jpg"  /></a>
              <h3>Hair Area</h3>
          </li>
          <li class="man"> 
              <a href="#"><img src="include/images/img_nav_07.jpg"  /></a>
              <h3>Man Area</h3>
          </li>
          <div class="clear"></div>
        </ul>
      </div>
      <div class="preferential">
        <h1 class="title qu">推荐产品<a href="#">更多</a></h1>
        <ul>
          <li class="fangchengshi"><a href="#"><img src="include/images/tehui_img_07.jpg"  /></a></li>
          <li>
            <a href="#"><img src="include/images/index_09.jpg"  /></a>
            <div>
              <h4>SK-II青春焕彩修复眼霜</h4>
              <p>￥<span>423</span><span class="guoqu_price">￥324</span><a href="#">去看看</a></p>
            </div>  
          </li>
          <li>
            <a href="#"><img src="include/images/index_12.jpg"  /></a>
            <div>
              <h4>SK-II青春焕彩修复眼霜</h4>
              <p>￥<span>423</span><span class="guoqu_price">￥324</span><a href="#">去看看</a></p>
            </div>  
          </li>
         
          <li class="teshu">
            <a href="#"><img src="include/images/tehui_img_15.jpg"  /></a>
            <div>
              <h4>SK-II青春焕彩修复眼霜</h4>
              <p>￥<span>423</span><span class="guoqu_price">￥324</span><a href="#">去看看</a></p>
            </div>  
          </li>
          <li class="teshu">
            <a href="#"><img src="include/images/tehui_img_19.jpg"  /></a>
            <div>
              <h4>SK-II青春焕彩修复眼霜</h4>
              <p>￥<span>423</span><span class="guoqu_price">￥324</span><a href="#">去看看</a></p>
            </div>  
          </li>
          <li class="teshu">
            <a href="#"><img src="include/images/tehui_img_20.jpg"  /></a>
            <div>
              <h4>SK-II青春焕彩修复眼霜</h4>
              <p>￥<span>423</span><span class="guoqu_price">￥324</span><a href="#">去看看</a></p>
            </div>  
          </li> 
           <li class="ie6">
            <a href="#"><img src="include/images/tehui_img_17.jpg"  /></a>
            <div>
              <h4>SK-II青春焕彩修复眼霜</h4>
              <p>￥<span>423</span><span class="guoqu_price">￥324</span><a href="#">去看看</a></p>
            </div>  
          </li>
          <div class="clear"></div>
        </ul>
      </div>
      <div class="new">
        <h1 class="title qu">新品专区<a href="#">更多</a></h1>
        <ul>
          <li><a href="#"><img src="include/images/xinpi_img_59.jpg"  /></a></li>
          <li><a href="#"><img src="include/images/xinpi_img_62.jpg"  /></a></li>
          <li><a href="#"><img src="include/images/xinpi_img_65.jpg"  /></a></li>
          <li class="n_four"><a href="#"><img src="include/images/xinpi_img_68.jpg"  /></a></li>
          <div class="clear"></div>
        </ul>
         <ul>
          <li><a href="#"><img src="include/images/xinpi_img_59.jpg"  /></a></li>
          <li><a href="#"><img src="include/images/xinpi_img_62.jpg"  /></a></li>
          <li><a href="#"><img src="include/images/xinpi_img_65.jpg"  /></a></li>
          <li class="n_four"><a href="#"><img src="include/images/xinpi_img_68.jpg"  /></a></li>
          <div class="clear"></div>
        </ul>
      </div>
    </div>
  </div>
  <div id="footer">
    <div id="footer_one">
      <div class="one">
       <h1>莞妆</h1>
       <dl>
         <dt>7天无理由退货</dt>
         <dd>购物无忧</dd>
       </dl>
       <dl>
         <dt>美妆电商的领跑者</dt>
         <dd>购物无忧</dd>
       </dl>
       <dl>
         <dt>周二周五定时发货</dt>
         <dd>顾客放心</dd>
       </dl>
       <div class="clear"></div>
      </div>
    </div>
    <div id="footer_two">
      <div class="two">
        <ul class="shopping">
          <li class="title">购物指南</li>
          <li><a href="#">用户注册</a></li>
          <li><a href="#">服务协议</a></li>
          <li><a href="#">优惠券使用详细</a></li>
        </ul>
        <ul class="pay">
          <li class="title">购物/付款</li>
          <li><a href="#">购物流程</a></li>
          <li><a href="#">付款流程</a></li>
          <li><a href="#">付款方式</a></li>
        </ul>
        <ul class="way">
          <li class="title">配送方式</li>
          <li><a href="#">配送范围及时间</a></li>
          <li><a href="#">配送说明</a></li>
        </ul>
        <ul class="questions">
          <li class="title">常见问题</li>
          <li><a href="#">积分使用规则</a></li>
          <li><a href="#">订单查询</a></li>
          <li><a href="#">找回密码</a></li>
        </ul>
        <ul class="service">
          <li class="title">售后服务</li>
          <li><a href="#">商务合作</a></li>
          <li><a href="#">退款说明</a></li>
          <li><a href="#">售后售前服务</a></li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
    <div id="footer_three">
      <div class="three">
       <ul>                
          <li><a href="#">首页</a></li>
          <li><a href="#">友情链接</a></li>
          <li><a href="#">合作招商</a></li>
          <li><a href="#">联系我们</a></li>
          <li><a href="#">诚聘英才</a></li>
          <li><a href="#">莞妆社区</a></li>
          <li><a href="#">销售联盟</a></li>
          <li><a href="#">隐私政策</a></li>
          <li><a href="#">莞妆公益</a></li>
          <li><a href="#">网站地图</a></li>
          <li><a href="#">淘宝天猫</a></li>
          <div class="clear"></div>
       </ul>
      </div>
    </div>
   <div id="footer_four">
       <p>PHP期末大作业：林源 谭贤政 崔洪铭</p><a href="../admin/login.php">后台登录</a>
   </div>
  </div>
</div>
</body>
</html>
