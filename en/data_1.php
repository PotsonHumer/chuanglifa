<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<?php
include("db_localhost/dbc_link.php");

$id = $_GET["a_id"];
$project = $_POST['project'];

$query = "SELECT * FROM bg_about";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
	

	
mysqli_close($dbc);

?>
<?php
echo $project;
?>
<body>
<ul>
<?php
while($row = mysqli_fetch_array($result)){
	?>
	<li><a href="data_2.php?a_id=<?php echo $row['id']?>"><?php echo $row['project']?></a></li>
<?
}
?>
</ul>
</body>
</html>