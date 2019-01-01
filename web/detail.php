<?php session_start();
    // var_dump($_SESSION);die();
  
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>莞妆化妆品</title>
<link type="text/css"  rel="stylesheet" href="include/css/jqzoom.css" />
<link type="text/css" rel="stylesheet" href="include/css/public.css" />
<link type="text/css" rel="stylesheet" href="include/css/jieshao.css" />
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
           echo "<a href='./personal.php' style='font-size:15px;line-height:30px;'>个人中心</a>";
        }
       ?>
       <div class="clear"></div>
     </div>
  </div>
  <div id="header">
     <div class="logo">
       <img src="include/images/logo.png" />
     </div>
     <form class="search">
       <input type="text" value="面膜"/>
       <button type="button"></button>
       <p>MM在搜索：保湿水 &nbsp;&nbsp;美白面霜  &nbsp;&nbsp;护手霜 &nbsp;&nbsp;洗面奶</p>
     </form>
       <a href="show.php"><img src="include/images/header_img_08.jpg" class="accounts" /></a>
       <div class="clear"></div>
  </div>
  <div id="nav">
     <div class="nav_inner">
       <ul class="nav">
         <li><a href="index.php">首页</a></li>
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
         <li><a href="list.php">手机雅妆</a></li>
         <li><a href="list.php">在线客服</a></li>
       </ul>
     </div>
     
  </div>
  <div id="content">
    <div class="main">
      <div class="bread_nav">
         <span class="p_name"></span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
      </div>
      <!-- 左边商品图 -->
      <?php
      require("../public/config.php");
      require("../public/Model.class.php");
      $mod = new Model("goods");
      // $link = @mysqli_connect(HOST,USER,PASS,DBNAME) or die("连接数据库失败");
      // mysqli_set_charset($link,"utf8");
      $id = $_GET['id']+0;

      $goods = $mod->where("id={$id}")->select();
      // $result = mysqli_query($link,$sql);
      // $goods = mysqli_fetch_assoc($result);
      // var_dump($goods);die();
      ?>
      <div class="jieshao">
          <div class="left">
              <div class="chanpin" align="center">
              <img src="../public/uploads/<?php echo $goods['0']['picname']?>">
                 
          </div>
      </div>
         <!-- 左边商品图 -->
         
       
        <!-- 产品文档 开始 -->
       <div class="right">
              <div class="chanpin_prices">
              <!-- php var_dump($goods['0']['id']);  -->
                 <h1><?php echo $goods['0']['goods'];?></h1>
                 <h3><?php echo $goods['0']['descr'];?></h3>
                 <p>专柜价：<span  class="zhuangui">￥ 800.00</span></p>
                 <p>折扣价：<span class="tong">￥ <span class="jumeijia"><?php echo $goods['0']['price'];?></span></span></p>
                 <p>已售出：<span class="tong"><?php echo $goods['0']['num'];?></span>件</p>
                 <p>库存：<span class="tong"><?php echo $goods['0']['store'];?></span>件</p>
      <!--  <form name="jianshu" id="frm">
                   <input type="text" class="acounts" value="1"/>
                   <div class="btn">
                   
                   </div>
      <label>件（库存8件）</label>
                   <div class="clear"></div>
                 </form> -->
                 <div class="anniu">

                  <a href="cartaction.php?a=add&id=<?php echo $goods['0']['id']?>"><img src="include/images/right_img_14.jpg" /></a>

                 <a href="show.php" class="goumai"><img src="include/images/right_img_16.jpg" /></a>
                 <?php 
                    $total=0; //总计金额
      // var_dump($_SESSION['shoplist']);die();
            if(!empty($_SESSION['shoplist'])){ 
            foreach($_SESSION['shoplist'] as $shop){
              if($shop['id']==$goods['0']['id']){
                  echo "<div style='margin-top:30px;margin-left:-50px;'>";
                  // 数量
                  echo "<span style='margin-left:35px;float: left;'>";
                  echo "<a href=\"cartaction.php?a=jian&id={$shop['id']}\"><input type='button' value='-' style=' color:#333333;height:30px;width:20px;border-style:solid;margin-left:30px;'></a></input>";
                  echo "<input type='text' name='num' value='{$shop['num']}' style='color:#333333;height:30px;width:30px;text-align:center;'></input>";
                  echo "<a href=\"cartaction.php?a=add&id={$shop['id']}\"><input type='button' value='+' style='color:#333333;height:30px;width:20px;border-style:solid;'></a>";
                  echo "</span>";
                  echo "</div>";
                  $total +=$shop['num']*$shop['price'];
                  // var_dump($shop);
              }
            
            }
            }
                 ?>
                 </div>
            </div>
      <!-- 产品文档 结束 -->
            <div class="baozheng">
              <dl class="yunfei">
                 <dt></dt>
                   <dd class="biaoti">免运费</dd>
                   <dd>全网69全场99</dd>     
              </dl>
              <dl>
                 <dt></dt>
                   <dd class="biaoti">全正品</dd>
                   <dd>正品承诺假一赔十</dd>
              </dl>    
              <dl>
                  <dt></dt>
                   <dd class="biaoti">最放心</dd>
                   <dd>45天无条件退款</dd>
               </dl>
               <dl> 
                  <dt></dt>   
                   <dd class="biaoti">限时达</dd>
                   <dd>快捷支付有卡便付</dd> 
               </dl>  
               <div class="clear"></div>  
            </div>     
         </div>
         <div class="clear"></div>
      </div>
      <div class="bottom">
        <div class="left_bottom">
           <ul class="guanggao">
              <li><a href="#"><img src="include/images/guanggao_03.jpg" /></a></li>
              <li><a href="#"><img src="include/images/guanggao_06.jpg" /></a></li>
              <li><a href="#"><img src="include/images/guanggao_08.jpg" /></a></li>
              <li><a href="#"><img src="include/images/guanggao_10.jpg" /></a></li>
              <li><a href="#"><img src="include/images/guanggao_12.jpg" /></a></li>
              <li><a href="#"><img src="include/images/guanggao_15.jpg" /></a></li>
           </ul>
           <div class="hadbuy">
             <h2>浏览过该商品的顾客还购买了</h2>
               <ul>
                  <li>
                    <img src="include/images/hadbuy_img17.jpg" />
                    <h3><span>￥</span>138.00</h3>
                    <h4><a href="#">雅漾新款舒缓保湿面霜50ml</a></h4> 
                    <p>已售出<span>964</span>件</p>
                   </li>
                   <li>
                    <img src="include/images/hadbuy_img18.jpg" />
                    <h3><span>￥</span>138.00</h3>
                    <h4><a href="#">雅漾新款舒缓保湿面霜50ml</a></h4> 
                    <p>已售出<span>964</span>件</p>
                   </li>
                   <li>
                    <img src="include/images/hadbuy_img19.jpg" />
                    <h3><span>￥</span>138.00</h3>
                    <h4><a href="#">雅漾新款舒缓保湿面霜50ml</a></h4> 
                    <p>已售出<span>964</span>件</p>
                   </li>
                   <li>
                    <img src="include/images/hadbuy_img20.jpg" />
                    <h3><span>￥</span>138.00</h3>
                    <h4><a href="#">雅漾新款舒缓保湿面霜50ml</a></h4> 
                    <p>已售出<span>964</span>件</p>
                   </li>
               </ul>
               <div class="anniu">
                  <button type="button" >查看更多</button>
               </div>
           </div>
           
           <div class="hadbuy hadsaw">
             <h2>您最近浏览过的商品</h2>
               <ul>
                  <li>
                    <img src="include/images/hadsaw_img_35.jpg" />
                    <h3><span>￥</span>138.00</h3>
                    <h4><a href="#">雅漾新款舒缓保湿面霜50ml</a></h4> 
                    <p>已售出<span>964</span>件</p>
                   </li>
                   <li>
                    <img src="include/images/hadsaw_img.jpg" />
                    <h3><span>￥</span>138.00</h3>
                    <h4><a href="#">雅漾新款舒缓保湿面霜50ml</a></h4> 
                    <p>已售出<span>964</span>件</p>
                   </li>
                   <li>
                    <img src="include/images/hadsaw_img30.jpg" />
                    <h3><span>￥</span>138.00</h3>
                    <h4><a href="#">雅漾新款舒缓保湿面霜50ml</a></h4> 
                    <p>已售出<span>964</span>件</p>
                   </li>
               </ul>
               <div class="anniu">
                  <button type="button" >查看更多</button>
               </div>
           </div>
        </div>
        <div class="right_bottom">
           <ul class="top_nav">
              <li><a href="#">商品详情</a></li>
              <li><a href="#">评价详情</a></li>
              <li><a href="#">商品问答（5）</a></li>
              <li><a href="#">成交记录（10）</a></li>
              <li><a href="#">购物零顾虑</a></li>
              <li class="qian"><span>￥</span>399.00</li>  
              <li class="btn"><button type="button"></button></li>
              <div class="clear"></div>
           </ul>
           <div class="miaoshu">
             <h2>商品描述</h2>
             <ul>
               <li class="timu">商品名称</li>
               <li class="jieshi dixian">时光肌密青春乳霜</li>
               <li class="timu">产品规格</li>
               <li>50ml</li>
               <li class="timu">产品功效</li>
               <li class="age">滋养紧致肌肤、淡化细纹、抗皱</li>
               <li class="timu">产品成分</li>
               <li>水、芝麻油、硬脂酸TEA盐</li>
               <li class="timu">适合人群</li>
               <li class="age">25岁以上，干性肤质</li>
               <li class="timu">特别说明:</li>
               <li class="jieshi dixian">如有不适，请停止使用。</li>
               <div class="clear"></div>
             </ul>
           </div>
           <div class="miaoshu">
             <h2>商品展示</h2>
           </div>
           <div class="img_zhanshi">
             <img src="include/images/img——zhanshi_25.jpg" /><img src="include/images/img——zhanshi_29.jpg" /><img src="include/images/img——zhanshi_33.jpg" /><img src="include/images/img——zhanshi_37.jpg" /><img src="include/images/img——zhanshi_41.jpg" /><img
              src="include/images/img——zhanshi_45.jpg" /><img src="include/images/img——zhanshi_49.jpg" /><img src="include/images/img——zhanshi_53.jpg"  />
           </div>
           <div class="commit" id="commit">
             <ul class="c_nav">
               <li><a href="#" class="all">全部(10)</a></li>
               <li><a href="#">赞(6)</a></li>
               <li><a href="#">中立(2)</a></li>
               <li><a href="#">踩(2)</a></li>
               <div class="clear"></div>
             </ul>
             <div class="fenlei">
               <p><span>按肤质：</span><a href="#" calss="all">全部</a><a href="#">中性</a><a href="#">混合性</a><a href="#">油性</a><a href="#">干性</a><a href="#">敏感性</a></p>
               <p><span>按年龄：</span><a href="#" calss="all">全部</a><a href="#">20岁以下</a><a href="#">20-25岁</a><a href="#">26-30岁</a><a href="#">31-40岁</a><a href="#">40岁以上</a></p>
             </div>
             <div class="c_info">
               <div class="u_info">
                 <img src="include/images/commit_touxiang_22.jpg" />
                 <h5>yz626364837</h5>
                 <ul>
                   <li><span>肤质：</span>干性</li>
                   <li><span>年龄：</span>23岁</li>
                   <li><span>等级：</span>美容小生</li>
                 </ul>
                 <p>共有<span>10</span>条评论</p>
               </div>
               <div class="u_liuyan">
                 <h2>味道很好，性价比高<span>2013/12/24</sapn></h2>  
                 <div class="liuyan">
                    <p>必须点赞啊，太香的味道了，而且性价比很高……</p>
                    <form>
                      <input type="button" name="haveuse" value="有用"/>
                      <input type="button" name="callback" value="回复"/>
                    </form>
                 </div>
               </div>
             </div>
           </div>
        </div>
        <div class="clear"></div>
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
          <li><a href="#">诚聘英才</a></li>
          <li><a href="#">联系我们</a></li>
          <li><a href="#">网站地图</a></li>
          <li><a href="#">友情链接</a></li>
          <div class="clear"></div>
       </ul>
      </div>
    </div>
   <div id="footer_four">
      <p>2017年老司机资源无限公司</p>
   </div>
  </div>
</div>
</body>
</html>
