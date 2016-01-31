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
<?php mysqli_close($dbc);?>

<body>
<?php include("bg_left.php"); ?>
<div id="right">
    <p>
		<?php 
        include("db_localhost/dbc_link.php");
        
        $id = $_GET["adv_id"];
		$adv_status = $_POST["adv_status"];
		$adv_img = $_POST["adv_img"];
		$adv_link = $_POST["adv_link"];
        
        $query = "UPDATE bg_advertising SET adv_id='".$id."',adv_status='".$adv_status."',adv_img='".$adv_img."',adv_link='".$adv_link."' WHERE adv_id='".$id."'";
        
        $result = mysqli_query($dbc,$query)
            or die ('資料庫連結失敗');	
        
        mysqli_close($dbc);
        
        echo '成功修改一則最新消息<br>';
        echo '以下為資料確認<br><br>';
		echo '狀態 : '.$adv_status.'<br>';
        echo '廣告圖片 : '.$adv_img.'<br>';
        echo '連結位址 : '.$adv_link.'<br>';
        echo '<br>';
        echo '<a href="chuanglifa_bg.php">返回首頁</a>';
        ?>
    </p>
</div>
</body>
</html>