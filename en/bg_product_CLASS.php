<?php session_start(); ?>
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
$id = $_GET["cl_id"];

$query_5A = "SELECT * FROM bg_product_link WHERE id = '".$id."'";
$result_5A = mysqli_query($dbc,$query_5A)
	or die ('資料庫連結失敗');

$row_link = mysqli_fetch_array($result_5A);

$query_6 = "SELECT * FROM bg_product_class WHERE class_title = '".$row_link['pr_name']."'";
$result_6 = mysqli_query($dbc,$query_6)
	or die ('資料庫連結失敗');
?>
<?php mysqli_close($dbc); ?>
?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
<?php
	if($_SESSION['m_user']!= null){
?>
    <div class="path">
        <ul>
            <li><a href="chuanglifa_bg">首頁</a></li>
            <li><a href="#"><?php echo $row_link['pr_name']?></a></li>
        </ul>
    </div>
    <p><a href="bg_product.php"> ▶ 總列表</a></p>
    <p>
    	<a href="bg_product_link_DATA.php">✚ 新增一個產品系列</a> ︱ 
        <a href="bg_product_class_DATA.php">✚ 新增一個產品大類</a> ︱ 
        <a href="bg_product_list_DATA.php">✚ 新增一個產品資料</a><br />
    </p>
    <div class="ppbox">
    	<?php 
		while($row_cs = mysqli_fetch_array($result_6)){
			?>
     	<div class="pr_box">
            <a href="bg_product_DATA.php?dt_id=<?php echo $row_cs['id']?>"><img src="<?php echo $row_cs['class_imge']?>" width="130" height="110" border="0" /></a>
            <p><?php echo $row_cs['class_name']?></p>
            <a href="bg_product_class_EDITOR.php?ed_id=<?php echo $row_cs['id']?>">▲[ 編輯 ]</a>
            <a href="bg_product_class_DELETE.php?dt_id=<?php echo $row_cs['id']?>">✖[ 刪除 ]</a>
        </div>
        <?
		}
		?>
    </div>
<?
}else{
        echo '您無權觀看此頁面!!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
    }
?>
</div>
</body>
</html>