<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bg_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/chuanglifa_jQ.js"></script>
<?php include("tiny_input.php")?>
<title>使用者後台</title>
</head>
<?php include("db_localhost/dbc_link.php"); ?>
<?php include("chbg_left.php"); ?>
<?php
$class_imge = $_POST["class_imge"];
$class_name = $_POST["class_name"];

$query = "INSERT INTO bg_product_class (class_title,class_imge,class_name) VALUES ('$class_title','$class_imge','$class_name')";	
mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
?>
<?php mysqli_close($dbc); ?>

<body>
<?php include("bg_left.php"); ?>
<div id="right">
    <div class="path">
        <ul>
            <li><a href="chuanglifa_bg">首頁</a></li>
            <li><a href="#"><?php echo $row['project']?></a></li>
        </ul>
    </div>
<p>
成功新增一則商品類別<br>
以下為資料確認<br><br>
圖片 : <img src="<?php echo $class_imge ?>"/><br>
名稱 : <?php echo $class_name ?><br>
<br>
<a href="bg_product.php">返回上一頁</a>
</p>
</div>
</body>
</html>