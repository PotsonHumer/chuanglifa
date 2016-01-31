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
<?php
include("db_localhost/dbc_link.php");

$id = $_GET["a_id"];
$list_species = $_POST["list_species"];
$list_category = $_POST["list_category"];
$list_product = $_POST["list_product"];
$list_name = $_POST["list_name"];
$list_number = $_POST["list_number"];
$list_description = $_POST["list_description"];
$list_characteristic = $_POST["list_characteristic"];
$list_price = $_POST["list_price"];
$list_size = $_POST["list_size"];
$list_textarea = $_POST["list_textarea"];
$list_imge = $_POST["list_imge"];
$list_imge_1 = $_POST["list_imge_1"]; 
$list_imge_2 = $_POST["list_imge_2"];
$list_imge_3 = $_POST["list_imge_3"];
$list_imge_4 = $_POST["list_imge_4"];

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
$query_5 = "SELECT * FROM bg_product";
$result_5 = mysqli_query($dbc,$query_4)
	or die ('資料庫連結失敗');

$query_5_hover = "SELECT * FROM bg_product_link";
$result_5_hover = mysqli_query($dbc,$query_5_hover)
	or die ('資料庫連結失敗');
	
$query_4A = "SELECT * FROM bg_news WHERE id = '".$id."'";
$result_4A = mysqli_query($dbc,$query_4A)
	or die ('資料庫連結失敗');
	
$row = $row = mysqli_fetch_array($result_4A);

$query = "INSERT INTO bg_product_list (list_category,list_species,list_product,list_name,list_number,list_description,list_characteristic,list_price,list_size,list_textarea,list_imge,list_imge_1,list_imge_2,list_imge_3,list_imge_4) 
			VALUES ('$list_category','$list_species','$list_product','$list_name','$list_number','$list_description','$list_characteristic','$list_price','$list_size','$list_textarea','$list_imge','$list_imge_1','$list_imge_2','$list_imge_3','$list_imge_4')";	
mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');

mysqli_close($dbc);
?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
    <div class="path">
        <ul>
            <li><a href="chuanglifa_bg">首頁</a></li>
            <li><a href="#">產品新增確認頁</a></li>
        </ul>
    </div>
<p>
成功新增一則商品類別<br>
以下為資料確認<br><br>
類別圖片 : <img src="<?php echo $list_imge ?>"/><br>
產品類別 : <?php echo $list_category ?><br>
產品名稱 : <?php echo $list_name ?><br>
產品編號 : <?php echo $list_number ?><br>
產品描述 : <?php echo $list_description ?><br>
產品特色 : <?php echo $list_characteristic ?><br>
建議售價 : <?php echo $list_price ?><br>
產品規格 : <?php echo $list_size ?><br>
產品內容 : <?php echo $list_textarea ?><br>
產品圖片 : 
<img src="<?php echo $list_imge_1 ?>"/><br />
<img src="<?php echo $list_imge_2 ?>"/><br />
<img src="<?php echo $list_imge_3 ?>"/><br />
<img src="<?php echo $list_imge_4 ?>"/>

<br>
<a href="bg_product.php">返回上一頁</a>
</p>
</div>
</body>
</html>