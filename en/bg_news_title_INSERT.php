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

$new_title = $_POST["new_title"];

$query = "INSERT INTO bg_news_title (id,new_title) VALUES ('$id','$new_title')";	
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
            <li><a href="#">新增訊息</a></li>
        </ul>
    </div>
<p>
成功新增一項消息分類<br>
以下為資料確認<br><br>
名稱 : <?php echo $new_title ?><br><br>
<a href="bg_news.php">返回上一頁</a>
</p>
</div>
</body>
</html>