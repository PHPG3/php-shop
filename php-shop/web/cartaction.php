<?php session_start(); 
if(!$_SESSION['adminuser']){
  echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>';
  echo "<script language=\"JavaScript\">\r\n"; 
  echo " alert(\"先登录！再加入购物车!\");\r\n"; 
  echo " history.back();\r\n"; 
  echo "</script>";
  return ;
}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>购物车</title>
</head>
<body>
	<center>
	<?php
        //购物车信息处理页
        //根据参数a的值执行对应的操作
        switch($_GET['a']){
            case "add": //添加购物车信息  

                //获取要购买的商品（在真实的网站中是从数据库中获取要购买的信息）
                $id = $_GET['id']+0;
                // var_dump($id);
                //1.导入配置文件
               require("../public/config.php");
               require("../public/Model.class.php");
               $mod = new Model("goods");
               $shop = $mod->find($id);
               // // var_dump($result);
               // $shop['id']=$result['0']['id'];
               // $shop['name']=$result['0']['goods'];
               // $shop['price']=$result['0']['price'];
               // $shop['picname']=$result['0']['picname'];
               // $shop['descr']=$result['0']['descr'];
               // var_dump($shop);die();
               if ($shop['store']>0) {
                 if (empty($shop)) {
                   die("没有找到添加商品");

                 }
                 if(empty($_SESSION['shoplist'][$id])){
                //默认购买量为1
                // var_dump($shop);die();
                $_SESSION["shoplist"][$id]=$shop;
                $_SESSION["shoplist"][$id]['num']=1;

                }else{
                   //购买量加1
                              //放入新商品
                            $_SESSION['shoplist'][$id]['num']+=1;
                }
                  echo "成功加入购物车";
                  echo "<script language=\"JavaScript\">\r\n"; 
                  echo " history.back();\r\n"; 
                  echo "</script>";
    
               }else{
                echo "商品库存不足";
                header("Location:show.php");
               }
                // $_SESSION['shoplist'][$id] = $shop;

                 // var_dump($shop);
			         	//先判断购物车中是否没有要购买的商品
				
               
                break;

                   case "jian":
                  $id = $_GET['id'];//获取id
                  if($_SESSION['shoplist'][$id]['num']==1){
         
                    unset($_SESSION["shoplist"][$id]);

                    }else{
                    //购买量减1
                    
                    $_SESSION['shoplist'][$id]['num']-=1;
                    }
                     // header("Location:show.php");
                     echo "<script language=\"JavaScript\">\r\n"; 
                      echo " history.back();\r\n"; 
                      echo "</script>";
                      break;
                        break;        
                  case "del": //删除购物车中的商品
                          //删除购物车中的商品
          				unset($_SESSION['shoplist'][$_GET['id']]);
          				header("Location:show.php");
                          break;
                          
                      case "clear": //清空购物车商品
          				unset($_SESSION['shoplist']);
          				header("Location:show.php");
                  break;




                // 订单加入数据库
                case "insert":
                date_default_timezone_set("PRC");
                require("../public/config.php");
                require("../public/Model.class.php");
                $mod = new Model("orders");
                $detail = new Model("detail");
                // 订单表
                
                // $data['uid'] = $_POST['uid'];
                // $data['linkman'] = $_POST['linkman'];
                // $data['address'] = $_POST['address'];
                // $data['code'] = $_POST['code'];
                // $data['phone'] = $_POST['phone'];
                // $data['total'] = $_POST['total'];
                $data=$_POST;
                // var_dump($data);die();
                $data['addtime'] = time();
                $data['status'] = 0;    
                // 存入订单表
                $datas=$mod->insert($data);
               // var_dump($datas);die();
                if (!empty($_SESSION['adminuser']['name']) && $datas>0 && !empty($_SESSION['shoplist'])) { 
                    echo "提交成功";

                   }else{
                    echo "您没有登录账号或者购物车没有商品<br>";

                   } 
                    
                    //获得订单详情需要的数据
                     foreach ($_SESSION['shoplist'] as $shop) {
                        // var_dump($shop);die();
                       $goodsid=$shop['id'];
                       $name = $shop['goods'];
                       $price=$shop['price'];
                       $num =$shop['num'];
                       $addtime = time();
                        $adddata=['orderid'=>$datas,'goodsid'=>$goodsid,'name'=>$name,'price'=>$price,'num'=>$num,'addtime'=>$addtime];
                       
    
                        // 存入订单详情表
                     if (!empty($_SESSION['adminuser']['name']) && $detail->insert($adddata)>0) {
                        header("Location:details.php");
                        
                  }else{
                    echo "需要登录账号才能进行购买";
                  }
                  
               }
                        break;
                     

        }


    ?>
	</center>
	<hr align="center" width="80%">
  </body>
</html>

