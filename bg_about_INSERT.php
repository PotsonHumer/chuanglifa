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
$fb_title = $_POST["fb_title"];
$fb_imge = $_POST["fb_imge"];
$fb_ds = $_POST["fb_ds"];
$project = $_POST["project"];
$en_name = $_POST["en_name"];
$image = $_POST["image"];
$title = $_POST["title"];
$textarea = $_POST["textarea"];
$date = $_POST["date"];
$editor = $_POST["editor"];

$query = "INSERT INTO bg_about (web_title,fb_imge,fb_ds,project,en_name,textarea,date,editor) VALUES ('$web_title','$fb_imge','$fb_ds','$project','$en_name','$textarea','$date','$editor')";	
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
            <li><a href="#">新增訊息確認</a></li>
        </ul>
    </div>
<?php
echo '成功新增一則最新消息<br>';
echo '以下為資料確認<br><br>';
echo '標題 : '.$project.'<br>';
echo '英譯 : '.$en_name.'<br>';
echo '內容 : '.$textarea.'<br>';
echo '日期 : '.$date.'<br>';
echo '作者 : '.$editor.'<br>';
echo '<br>';
echo '<a href="chuanglifa_bg.php">返回上一頁</a>';
?>
</div>
</body>
</html>