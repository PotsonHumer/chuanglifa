<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bg_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/chuanglifa_jQ.js"></script>
<title>無標題文件</title>
</head>
<?php
include("db_localhost/dbc_link.php");

$id = $_GET["a_id"];
$class_imge = $_POST['class_imge'];
$class_name = $_POST['class_name'];

//資料表篩選(bg_about)
$query_1 = "SELECT * FROM bg_about";
$result_1 = mysqli_query($dbc,$query_1)
	or die ('資料庫連結失敗');

//資料表篩選(bg_business)
$query_2 = "SELECT * FROM bg_business";
$result_2 = mysqli_query($dbc,$query_2)
	or die ('資料庫連結失敗');

//資料表篩選(bg_order)
$query_3 = "SELECT * FROM bg_order";
$result_3 = mysqli_query($dbc,$query_3)
	or die ('資料庫連結失敗');

//資料表篩選(bg_news)
$query_4 = "SELECT * FROM bg_news";
$result_4 = mysqli_query($dbc,$query_4)
	or die ('資料庫連結失敗');
	
//資料表篩選(bg_product)
$query_5 = "SELECT * FROM bg_product_link";
$result_5 = mysqli_query($dbc,$query_5)
	or die ('資料庫連結失敗');

$query_5_hover = "SELECT * FROM bg_product_link";
$result_5_hover = mysqli_query($dbc,$query_5_hover)
	or die ('資料庫連結失敗');

mysqli_close($dbc);
?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
    <p>
		<?php 
        include("db_localhost/dbc_link.php");
        
        $id = $_GET["a_id"];
		$class_title = $_POST['class_title'];
        $class_imge = $_POST['class_imge'];
        $class_name = $_POST['class_name'];
        
        $query = "UPDATE bg_product_class SET id='".$id."',class_imge='".$class_imge."',class_title='".$class_title."',class_name='".$class_name."' WHERE id='".$id."'";
        
        mysqli_query($dbc,$query)
            or die ('資料庫連結失敗');	
        
        mysqli_close($dbc);
        ?>
        成功修改一則最新消息<br>
        以下為資料確認<br><br>
        系列 : <?php echo $class_title ?><br>
		圖片 : <img src="<?php echo $class_imge ?>"/><br>
		名稱 : <?php echo $class_name ?><br>
        <br>
        ▶ <a href="bg_product.php">返回前頁</a>
    </p>
</div>
</body>
</html>