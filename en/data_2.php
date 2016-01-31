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

$query = "SELECT * FROM bg_about WHERE id = '".$id."'";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
	
$row = mysqli_fetch_array($result);
	
mysqli_close($dbc);

?>
<?php
echo $project;
?>
<body>
<p>
id : <?php echo $row['id']?><br />
project : <?php echo $row['project']?><br />
en_name : <?php echo $row['en_name']?><br />
textarea : <?php echo $row['textarea']?><br />
date : <?php echo $row['date']?><br />
editor : <?php echo $row['editor']?>
</p>
</body>
</html>