<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_localhost/dbc_link.php");
$id = $_GET["cl_id"];
$query_3 = "SELECT * FROM bg_product_link WHERE id = '".$id."'";
$result_3 = mysqli_query($dbc,$query_3)
	or die ('資料庫連結失敗');
$row_3 = mysqli_fetch_array($result_3);

$title = $row_3['pr_name'];
echo $project;
?>
<?php include("keywords.php")?>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/chuanglifa_jQ.js"></script>
<title>創立發國際有限公司-<?php echo $title ?>-<?php echo $row_key['meta_title'] ?></title>
</head>
<?php
include("db_localhost/dbc_link.php");
$id = $_GET["cl_id"];
$pr_name = $_POST['pr_name'];

$query = "SELECT * FROM bg_product_link";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');

$query_1A = "SELECT * FROM bg_product_link WHERE id = '".$id."'";
$result_1A = mysqli_query($dbc,$query_1A)
	or die ('資料庫連結失敗');
$row_1 = mysqli_fetch_array($result_1A);

$query_1 = "SELECT * FROM bg_product_link WHERE id = '".$id."'";
$result_1 = mysqli_query($dbc,$query_1)
	or die ('資料庫連結失敗');

$row_link = mysqli_fetch_array($result_1);

$query_2 = "SELECT * FROM bg_product_class WHERE class_title = '".$row_link['pr_name']."'";
$result_2 = mysqli_query($dbc,$query_2)
	or die ('資料庫連結失敗');



mysqli_close($dbc);
?>
<body>
    <div class="outer" id="top"></div>
    <?php include("menu.php")?>
    <div class="outer" id="line"></div>
    <div class="outer" id="main_box">
        <div id="main_2">
            <div class="left">
                <div class="title">PRODUCT</div>
                <div class="service">
					<?php
                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <div class="roject"><a href="product_class.php?cl_id=<?php echo $row['id']?>"><?php echo $row['pr_name']?></a></div>
                        <?
                    }
                    ?>
                </div>
                <?php include("FB.php")?>
            </div>
            <div class="right">
            	<div class="path">
                    <ul>
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="product.php">產品介紹</a></li>
                        <li><?php echo $row_1['pr_name']?></li>
                    </ul>
                </div>
                <div class="h"><h1><?php echo $row_1['pr_name']?></h1></div>
                <div class="ppbox">
					<?php
                    while($row_2 = mysqli_fetch_array($result_2)){
                        ?>
                    <div class="pr_box">
                        <a href="product_data.php?dt_id=<?php echo $row_2['id']?>"><img src="<?php echo $row_2['class_imge']?>" width="150" height="130" border="0" /></a>
                        <p><?php echo $row_2['class_name']?></p>
                    </div>
                    <?
                    }
                    ?>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <?php include("footer.php")?>
</body>
<?php include("script.php")?>
</html>