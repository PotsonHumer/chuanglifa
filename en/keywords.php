<?php
include("db_localhost/dbc_link.php");

//資料表篩選(bg_kewords)關鍵字
$query_key = "SELECT * FROM bg_kewords";
$result_key= mysqli_query($dbc,$query_key)
	or die ('資料庫連結失敗');
	
$row_key = mysqli_fetch_array($result_key);

$web_namee = $_SERVER['PHP_SELF']; //是取得 /test.php
$web_idd = $_SERVER['QUERY_STRING']; //是取得 ?id=20&link=123456
$web_ee = $_SERVER['HTTP_HOST']; //取得網址址
$web_too = $web_ee.$web_namee.'?'.$web_idd;

?>
<meta name="description" content="<?php echo $row_key['description'] ?>" />
<meta name="keywords" content="<?php echo $row_key['keywords'] ?>" />
<meta name="author" content="<?php echo $row_key['author'] ?>" />
<meta name="copyright" content="<?php echo $row_key['company'] ?>" />
<link href="/chuanglifa.ico" rel="shortcut icon"  />