<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>基于PHP的大学生美妆商城网站</title>
<link type="text/css"  rel="stylesheet"  href="include/css/public.css" />
<link type="text/css"  rel="stylesheet"  href="include/css/product.css" />
</head>
<body>
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
       <img src="include/images/logo.png" />
     </div>
     <form class="search" action="list.php" method="get">
       <input type="text" name="goods" value=""/>
       <button type="submit"></button>
       <!-- <label>MM在搜索：保湿水 &nbsp;&nbsp;美白面霜  &nbsp;&nbsp;护手霜 &nbsp;&nbsp;洗面奶</label> -->
     </form>
       <a href="show.php"><img src="include/images/header_img_08.jpg" class="accounts" /></a>
       <div class="clear"></div>
  </div>
  <div id="nav">
     <div class="nav_inner">
       <ul class="nav">
         <li><a href="index.php">首页</a></li>
         <li class="mall"><a href="#">美妆商城</a>
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
         <li><a href="list.php">手机雅妆</a></li>
         <li><a href="list.php">在线客服</a></li>
       </ul>
     </div>   
  </div>
  <div id="content">
    <div class="main">
      <div class="bread_nav">
         <a href="#">首页</a> > <a href="#">美妆</a> > <a href="#">商城</a> > <a href="#">护肤</a>
      </div>
      <div class="select">
         <ul>
           <li class="qibu">
             <p class="hu">护肤</p>
             <p>七步曲</p>
           </li>
           <li class="one">
             <p>1</p>
            <a href="list.php" title="images/select_img_06.jpg"><div><img src="include/images/select_img_06.jpg" /></div>
             <h2>卸妆</h2></a>
           </li>
           <li class="fangfa">
             <p>2</p>
             <a href="list.php" title="images/select_img_09.jpg"><div><img src="include/images/select_img_09.jpg" /></div>
             <h2>洁面</h2></a>
           </li>
           <li class="fangfa">
             <p>3</p>
             <a href="list.php" title="images/select_img_09.jpg"><div><img src="include/images/select_img_09.jpg" /></div>
             <h2>爽肤水</h2></a>
           </li>
           <li class="fangfa">
             <p>4</p>
             <a href="list.php" title="images/select_img_11.jpg"><div><img src="include/images/select_img_11.jpg" /></div>
             <h2>眼霜</h2></a>
           </li>
           <li class="fangfa hua">
             <p>5</p>
             <a href="list.php" title="images/select_img_13.jpg"><div><img src="include/images/select_img_13.jpg" /></div>
             <h2>精华</h2></a>
           </li>
           <li class="fangfa ru">
             <p>6</p>
             <a href="list.php" title="images/select_img_15.jpg"><div><img src="include/images/select_img_15.jpg" /></div>
             <h2>面霜</h2></a>
           </li>
           <li class="seven">
             <p>7</p>
             <a  href="list.php" title="images/select_img_19.jpg"><div><img src="include/images/select_img_19.jpg" /></div>
             <h2>防晒</h2></a>
           </li>
           <li class="eight">
             <a href="list.php" title="images/select_img_21.jpg"><img src="include/images/select_img_21.jpg" /></a>
           </li>
           <div class="clear"></div>
         </ul>
      </div>
      <div class="kong"></div>
      <div class="bank pinpai">
        <ul class="b_nav">                                       
          <li class="rexiao"><a href="#">热销品牌</a></li>
          <li><a href="#">欧洲品牌</a></li>
          <li><a href="#">美国品牌</a></li>
          <li><a href="#">中国品牌</a></li>
          <li><a href="#">日本品牌</a></li>
          <li><a href="#">韩国品牌</a></li>
          <li><a href="#">药妆品牌</a></li>
          <li><a href="#">有机品牌</a></li>
          <li class="allbanks"><a href="#">全部品牌</a></li>
          <div class="clear"></div>
        </ul>

        <h2>商<br>品<br>类<br>别:</h2>                                                                          
         <ul class="b_neirong">
          <?php 
          //1.导入配置文件
          require_once("../public/config.php");
          require_once("../public/Model.class.php");
          $mod = new Model("type");
          $map = "concat(path,id)";
          $list = $mod->order($map)->select();
          //$sql = "select * from type order by concat(path,id)";
          //5.解析输出
          foreach($list as $row){
            //获取path中的逗号数量
            $m = substr_count($row['path'],",")-1;
            $nbsp = str_repeat("&nbsp;",$m*2);

            echo "<li><a href='list.php?tid={$row['id']}'> {$row['name']}</a></li>";
         
           }    
         ?>

           <!-- <li><a href="#">Borghese 贝佳斯</a></li>
           <li><a href="#">Charmzone 婵真</a></li>
           <li><a href="#"> Clinique 倩碧</a></li>
           <li><a href="#">DHC 蝶翠诗</a></li>
           <li><a href="#">Estee Lauder 雅诗兰黛</a></li>
           <li><a href="#">Kiehl's 契尔氏</a></li>
           <li><a href="#">L'OrealParis 欧莱雅</a></li>
           <li><a href="#">Laneige 兰芝</a></li>
           <li><a href="#">Mentholatum 曼秀雷敦</a></li>
           <li><a href="#">MG 美即</a></li>
           <li><a href="#">牛尔NARUKO 娜露可</a></li>
           <li><a href="#">Skinfood 思亲肤</a></li>
           <li><a href="#">SHISEIDO 资生堂</a></li>
           <li><a href="#">he Face Shop 菲诗小铺</a></li>
           <li><a href="#">我的美丽日记</a></li>
           <li><a href="#">欣兰</a></li>
           <li><a href="#">英国AA网</a></li> -->
           <div class="clear"></div>
        </ul>
      </div>
      <div class="kong_two"></div>                                          
      <div class="bank gongxiao">
        <!-- <ul class="b_nav">                                       
          <li class="rexiao"><a href="#">高关注功效</a></li>
          <li><a href="#">基础护理</a></li>
          <li><a href="#">美白护理</a></li>
          <li><a href="#">缺水干燥护理</a></li>
          <li><a href="#">痘痘肌肤护理</a></li>
          <li><a href="#">敏感肌肤护理</a></li>
          <li><a href="#">抗衰老护理</a></li>
          <li><a href="#">眼部护理</a></li>
          <li><a href="#">防晒护理</a></li>
          <div class="clear"></div> -->
        </ul>
        <!-- <h2>功效：</h2>                                                                                                                                                               
         <ul class="b_neirong">
           <li><a href="#">深层清洁</a></li>
           <li><a href="#">补水</a></li>
           <li><a href="#">保湿</a></li>
           <li><a href="#">美白</a></li>
           <li><a href="#">提亮肤</a></li>
           <li><a href="#">淡斑祛斑</a></li>
           <li><a href="#">抗消炎舒缓</a></li>
           <li><a href="#">祛痘去印</a></li>
           <li><a href="#">控油平衡</a></li>
           <li><a href="#">缩小毛</a></li>
           <li><a href="#">MG 美即</a></li>
           <li><a href="#">去黑眼圈</a></li>
           <li><a href="#">柔滑皮</a></li>
           <li><a href="#">紧致皮肤</a></li>
           <li><a href="#">去细纹</a></li>
           <div class="clear"></div>
        </ul> -->
      </div>
      <div class="kong"></div>
      <!-- 商品 -->
      <div class="list">
          <div class="tishi">
            <ul>
               <li><a href="#">默认</a></li>
               <li><a href="#">热销</a></li>
               <li class="price"><a href="#">评论</a></li>
               <li><a href="#">价格</a></li>
               <li><a href="#">最新</a></li>
               <li><a href="#">推荐</a></li>      
            </ul>
            <h4>仅显示：</h4>
            <form name="xianshi" id="frm">
              <input type="checkbox" id="cuxiao" />
              <label for="cuxiao">促销</label>
              <input type="checkbox" id="cuxiao" />
              <label for="cuxiao">礼包</label>
              <input type="checkbox" id="cuxiao" />
              <label for="cuxiao">团购</label>
            </form>
            <p>热卖推荐：面部保养 面膜 眼部<span></span></p>
          </div>
          <div class="kong_two"></div>
          <div class="zhanshi">
          <ul class="zhangshi_ul">
          <!-- 输出商品 -->
             <?php
             require_once("../public/config.php");
             require_once("../public/Model.class.php");
             require_once("../public/Page.class.php");
             $mod = new Model("goods");
             
             if (!empty($_GET['goods'])) {
                  $query = $_GET['goods'];
                 
                $total = $mod->where("goods like \"%$query%\"")->total();
                
                $page = new Page($total,10);
                $list = $mod->where("goods like \"%$query%\"")->limit($page->limit())->select();
                foreach($list as $row){
                   echo "<li class='mianshuang'>"; 
                  // 图片
                  echo "<a href='detail.php?id={$row['id']}'><img src='../public/uploads/s_{$row['picname']}'></a>";        
                  echo "<h3><span>￥</span>{$row['price']}</h3>";
                  echo "<h4><a href='detail.php?id={$row['id']}'>{$row['goods']}</a></h4>";
                  echo "<h5>紧致细纹、淡化细纹</h5>";
                 
                  echo "</li>";

                }
             }else{
              // if(empty($_GET['a'])){
              $id = isset($_GET['tid'])?"{$_GET['tid']}":0;
              $sql = "select * from goods where typeid in(select id from type where path like '%{$id},%')";
              $sqli ="select count(*) from goods where typeid in(select id from type where path like '%{$id},%')"; 
              $modd =$mod->selectlist($sqli);

             $total= $modd[0]['count(*)'];
            
              $page = new Page($total,15);
              $list = $mod->limit($page->limit())->selectlist($sql);
              // var_dump($result);die();
             //  $list= $mod->select();
             // $total = $mod->total();
             // $page = new Page($total,15);
             // $list = $mod->limit($page->limit())->select();

             foreach($list as $row){
            
              echo "<li class='mianshuang'>"; 
              // 图片
              echo "<a href='detail.php?id={$row['id']}'><img src='../public/uploads/s_{$row['picname']}'></a>";        
              echo "<h3><span>￥</span>{$row['price']}</h3>";
              echo "<h4><a href='detail.php?id={$row['id']}'>{$row['goods']}</a></h4>";
              echo "<h5>紧致细纹、淡化细纹</h5>";
              
              echo "</li>";
            // }
            }
             }
             ?>         
             <div class='clear'></div> 
             <center><?php echo $page->show(); ?></center>
            </ul>
            </div>
        
          <!-- 输出商品 -->
          <!-- 商品 --> 
          <div class="ye">
             <div class="clear"></div>
          </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <div id="footer_one">
      <div class="one">
       <h1>雅妆</h1>
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
          <li><a href="#">雅妆社区</a></li>
          <li><a href="#">销售联盟</a></li>
          <li><a href="#">隐私政策</a></li>
          <li><a href="#">雅妆公益</a></li>
          <li><a href="#">网站地图</a></li>
          <li><a href="#">淘宝天猫</a></li>
          <div class="clear"></div>
       </ul>
      </div>
    </div>
   <div id="footer_four">
     <p>2017年老司机资源无限公司</p><a href="../admin/login.php">后台登录</a>
   </div>
   </div>
  </div>
</div>
</body>
</html>
