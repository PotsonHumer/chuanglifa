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
<?php include("db_localhost/dbc_link.php"); ?>.
<?php include("chbg_left.php"); ?>
<?php mysqli_close($dbc); ?>

<body>
<?php include("bg_left.php"); ?>
<div id="right">
<div class="path">
	<ul>
    	<li><a href="chuanglifa_bg">首頁</a></li>
        <li><a href="bg_news.php">消息列表頁</a></li>
        <li><a href="#">新增消息分類</a></li>
    </ul>
</div>
<form action="bg_news_title_INSERT.php" method="post">
    <input type="hidden" name="id" class="text_1"/>
    <p>消息分類名稱</p>
    <input type="text" name="new_title"><a class="img_manage" href="#"></a>
    <input type="submit" value="送出" />
    <input type="reset" value="清除" />
</form>
</div>
</body>
</html>