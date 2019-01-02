<?php
    switch($_GET['status']){
        case 0:
            header("Location:index.php?status=0");
        break;
        case 1:
            header("Location:index.php?status=1");
        break;
        case 2:
            header("Location:index.php?status=2");
        break;
        case 3:
            header("Location:index.php?status=3");
        break;
        case 4:
            header("Location:index.php?status=4");
        break;
    }
    
?>