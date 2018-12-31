
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>修改会员信息</title>
</head>
<body>
<center>
    <?php
    //获取被修改的用户信息的id
    $id = $_GET['id']+0;

    //1.导入配置文件
    require("../../public/config.php");
    require("../../public/Model.class.php");
    $mod = new Model("orders");

    $id = $_GET['id'];
    $map = "id='".$id."'";
    $result = $mod->where($map)->select();
    // var_dump($result);exit();
    foreach($result as $row){


        ?>
        <h3>修改收货地址</h3>
        <form action="action.php?a=update" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <table width="400" border="0">
                <tr>
                    <td align="right">订单号：</td>
                    <td><?php echo $row['id']; ?></td>
                </tr>
                <tr>
                    <td align="right">联系人：</td>
                    <td><?php echo $row['linkman']; ?></td>
                </tr>
                <tr>
                    <td align="right">收货地址：</td>
                    <td><input type="text" name="address" value="<?php echo $row['address'];?>"></td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="提交">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </table>
        </form>
    <?php } ?>
</center>
</body>
</html>
