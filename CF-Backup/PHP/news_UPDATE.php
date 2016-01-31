<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/php.css" type="text/css" rel="stylesheet" />
<title>新增消息功能頁面</title>
</head>

<body>
<div id="WP">
<?php 
include("db_localhost/dbc_link.php");

$id = $_GET["n_id"];
$title = $_POST['title'];
$date = $_POST['date'];
$articles = $_POST['articles'];
$author = $_POST['author'];

$query = "UPDATE news SET id='".$id."',title='".$title."',date='".$date."',articles='".$articles."',author='".$author."' WHERE id='".$id."'";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');	

mysqli_close($dbc);

echo '成功修改一則最新消息<br>';
echo '以下為資料確認<br><br>';
echo '標題 : '.$title.'<br>';
echo '內容 : '.$articles.'<br>';
echo '作者 : '.$author.'<br>';
echo '日期 : '.$date.'<br>';
echo '<br>';
echo '<a href="news.php">返回上一頁</a>';
?>
</div>
</body>
</html>