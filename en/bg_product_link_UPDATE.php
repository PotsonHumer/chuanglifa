<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bg_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/chuanglifa_jQ.js"></script>
<title>無標題文件</title>
</head>
<?php include("db_localhost/dbc_link.php"); ?>
<?php include("chbg_left.php"); ?>
<?php
$pr_imge = $_POST['pr_imge'];
$pr_name = $_POST['pr_name'];
?>
<?php mysqli_close($dbc); ?>

<body>
<?php include("bg_left.php"); ?>
<div id="right">
    <p>
		<?php 
        include("db_localhost/dbc_link.php");
        
        $id = $_GET["up_id"];
        $pr_imge = $_POST['pr_imge'];
        $pr_name = $_POST['pr_name'];
        
        $query = "UPDATE bg_product_link SET id='".$id."',pr_imge='".$pr_imge."',pr_name='".$pr_name."' WHERE id='".$id."'";
        
        mysqli_query($dbc,$query)
            or die ('資料庫連結失敗');	
        
        mysqli_close($dbc);
        ?>
        成功修改一則最新消息<br>
        以下為資料確認<br><br>
		圖片 : <img src="<?php echo $pr_imge ?>"/><br>
		名稱 : <?php echo $pr_name ?><br>
        <br>
        ▶ <a href="bg_product.php">返回前頁</a>
    </p>
</div>
</body>
</html>