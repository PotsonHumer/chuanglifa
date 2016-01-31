<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>無標題文件</title>
</head>
<?php include("db_localhost/dbc_link.php"); ?>
<?php
$id = $_GET["a_id"];

//$query = "SELECT * FROM bg_about WHERE id = '".$id."'";
$query = "SELECT * FROM news";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
	
$row = mysqli_fetch_array($result);

mysqli_close($dbc);
?>
<body>
<?php
while($row = mysqli_fetch_array($result)){
	?>
<p>
項目 : <?php echo $row['title']?>
</p>
<?
}
?>
</body>
</html>