<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php 
include("db_localhost/dbc_link.php");
$query = "SELECT * FROM message";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');

while($app = mysqli_fetch_array($result))
	echo $app['name'].$app['email'].$app['phone'].$app['address'].$app['msn'].$app['type'].'<br/>';
?>
</body>
</html>