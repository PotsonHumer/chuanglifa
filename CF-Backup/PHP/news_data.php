<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/php.css" type="text/css" rel="stylesheet" />
<title>新增消息功能頁面</title>
</head>
<?php 
include("db_localhost/dbc_link.php");

$id = $_GET["n_id"];
$title = $_POST['title'];
$date = $_POST['date'];
$articles = $_POST['articles'];
$author = $_POST['author'];
$query = "SELECT * FROM news WHERE id = '".$id."'";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
	
$row = mysqli_fetch_array($result);
	
mysqli_close($dbc);

?>
<body>
<div id="WP">
<p>
	<a href="news.php">▶ 回最新消息</a>
    <a href="#">▶ 最新消息內文</a>
</p>
	<p>標題 : <?php echo $row['title']?></p>
    <p>作者 : <?php echo $row['author']?></p>
    <p>時間 : <?php echo $row['date']?></p><br />
    <p>文章內容 : <?php echo $row['articles']?></p>
</div>
</body>
</html>