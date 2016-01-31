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

/*$query = "UPDATE news SET title='%s',date='%s',articles='%s',author='%s' WHERE id";	*/

$query = "SELECT * FROM news WHERE id='".$id."'";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
	
$row = mysqli_fetch_array($result);

mysqli_close($dbc);
?>
<body>
<div id="WP">
<p>
	<a href="news.php">▶ 回最新消息</a>
	<a href="#">▶ 最新消息系統</a>
</p>
<form action="news_UPDATE.php?n_id=<?=$row["id"]?>" method="post">
    <input type="hidden" name="id" class="text_1" value="<?php echo $row['id'] ?>"/>
	<p>標題:</p>
    <input type="text" name="title" class="text_1" value="<?php echo $row['title'] ?>" />
     作者:
    <select name="author" class="author" />
        <option value="<?php echo $row['author'] ?>">Default-<?php echo $row['author'] ?></option>
        <option value="ANKH">ANKH</option>
        <option value="SAM">SAM</option>
        <option value="SAI">SAI</option>
    </select>
     時間:
    <input type="text" name="date" class="text_2" value="<?php echo $row['date'] ?>" />
    <p>內容:</p>
    <textarea rows="6" name="articles" class="msn_1" /><?php echo $row['articles'] ?></textarea><br /><br />
    <input type="submit" value="送出" class="button" />
    <input type="reset" value="重填" class="button" />
</form>
</div>
</body>
</html>