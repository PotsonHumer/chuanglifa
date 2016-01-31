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
$id = $_GET["a_id"];
$marquee = $_POST['description'];
$keywords = $_POST['keywords'];
?>
<?php mysqli_close($dbc); ?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
    <p>
		<?php 
        include("db_localhost/dbc_link.php");
        
        $id = $_GET["a_id"];
        $description = $_POST['description'];
		$keywords = $_POST['keywords'];
		$author = $_POST['author'];
		$company = $_POST['company'];
        
        $query = "UPDATE bg_kewords SET id='".$id."',
					description='".$description."',
					keywords='".$keywords."',
					author='".$author."',
					company='".$company."'
					WHERE id='".$id."'";
        
        mysqli_query($dbc,$query)
            or die ('資料庫連結失敗');	
        
        mysqli_close($dbc);
        ?>
        成功修改跑馬燈內容<br>
        以下為資料確認<br><br>
		內容 : <?php echo $description ?>
        <br>
        ▶ <a href="chuanglifa_bg.php">返回前頁</a>
    </p>
</div>
</body>
</html>