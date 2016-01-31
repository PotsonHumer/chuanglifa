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
$list_species = $_POST['list_species'];
$list_category = $_POST['list_category'];
$list_product = $_POST['list_product'];
$list_name = $_POST['list_name'];
$list_number = $_POST['list_number'];
$list_description = $_POST['list_description'];
$list_characteristic = $_POST['list_characteristic'];
$list_price = $_POST['list_price'];
$list_size = $_POST['list_size'];
$list_imge = $_POST['list_imge'];
$list_textarea = $_POST['list_textarea'];
$list_imge_1 = $_POST['list_imge_1'];
$list_imge_2 = $_POST['list_imge_2'];
$list_imge_3 = $_POST['list_imge_3'];
$list_imge_4 = $_POST['list_imge_4'];
?>
<?php mysqli_close($dbc); ?>

<body>
<?php include("bg_left.php"); ?>
<div id="right">
    <p>
		<?php 
        include("db_localhost/dbc_link.php");
        
        $id = $_GET["up_id"];
		$list_species = $_POST['list_species'];
        $list_category = $_POST['list_category'];
        $list_product = $_POST['list_product'];
		$list_name = $_POST['list_name'];
		$list_number = $_POST['list_number'];
		$list_description = $_POST['list_description'];
		$list_characteristic = $_POST['list_characteristic'];
		$list_price = $_POST['list_price'];
		$list_size = $_POST['list_size'];
		$list_imge = $_POST['list_imge'];
		$list_textarea = $_POST['list_textarea'];
		$list_imge_1 = $_POST['list_imge_1'];
		$list_imge_2 = $_POST['list_imge_2'];
		$list_imge_3 = $_POST['list_imge_3'];
		$list_imge_4 = $_POST['list_imge_4'];
        
        $query = "UPDATE bg_product_list SET id='".$id."',
					list_species='".$list_species."',
					list_category='".$list_category."',
					list_product='".$list_product."',
					list_name='".$list_name."',
					list_number='".$list_number."',
					list_imge='".$list_imge."',
					list_imge_1='".$list_imge_1."',
					list_imge_2='".$list_imge_2."',
					list_imge_3='".$list_imge_3."',
					list_imge_4='".$list_imge_4."',
					list_description='".$list_description."',
					list_characteristic='".$list_characteristic."',
					list_price='".$list_price."',
					list_size='".$list_size."',
					list_textarea='".$list_textarea."'
					WHERE id='".$id."'";
        
        mysqli_query($dbc,$query)
            or die ('資料庫連結失敗');	
        
        mysqli_close($dbc);
        ?>
        成功修改一則最新消息<br>
        以下為資料確認<br><br>
		圖片 : <img src="<?php echo $list_imge ?>"/><br>
        圖片 : <img src="<?php echo $list_imge ?>"/><br>
		名稱 : <?php echo $list_product ?><br>
        <br>
        ▶ <a href="bg_product.php">返回前頁</a>
    </p>
</div>
</body>
</html>