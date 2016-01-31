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
$query = "SELECT * FROM bg_product_link";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
?>
<?php mysqli_close($dbc); ?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
    <div class="path">
        <ul>
            <li><a href="chuanglifa_bg">首頁</a></li>
            <li><a href="#">產品總列表</a></li>
        </ul>
    </div>
    <p>
    	<a href="bg_product_link_DATA.php">✚ 新增一個產品系列</a> ︱ 
        <a href="bg_product_class_DATA.php">✚ 新增一個產品大類</a> ︱ 
        <a href="bg_product_list_DATA.php">✚ 新增一個產品資料</a><br />
    </p>
    <div class="ppbox">
    	<?php 
		while($row = mysqli_fetch_array($result)){
			?>
     	<div class="pr_box">
            <a href="bg_product_CLASS.php?cl_id=<?php echo $row['id']?>"><img src="<?php echo $row['pr_imge']?>" width="130" height="110" border="0" /></a>
            <p><?php echo $row['pr_name']?></p>
            <a href="bg_product_link_EDITOR.php?ed_id=<?php echo $row['id']?>">▲[ 編輯 ]</a>
            <a href="bg_product_link_DELETE.php?dl_id=<?php echo $row['id']?>">✖[ 刪除 ]</a>
        </div>
        <?
		}
		?>
    </div>
</div>
</body>
</html>