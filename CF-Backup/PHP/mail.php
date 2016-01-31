<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/php.css" rel="alternate stylesheet" type="text/css" />
<title>無標題文件</title>
</head>

<body>
<h2>線上留言系統</h2>
<?php 

if(is_array($_POST) && !empty($_POST)){
	foreach($_POST as $key => $value){
		$field[] = $key;
		$post[] = $value;
	}
}else{
	header("location: web.php");
}

/*$to = 'hengzuan168@gmail.com';
$subjct = '線上留言來信';
$smg = "$user 由官網線上留言,來信內容\n".
	"姓名(公司名) :\0 $user\n\n".
	"信箱 :\0 $email\n\n".
	"電話 :\0 $phone\n\n".
	"住址 :\0 $add\n\n".
	"留言內容 :\t $msn\n".
	"選擇款式 :\0 $sel\n";
mail($to, $subjct, $smg, 'From:'.$email);*/

$dbc = mysqli_connect("localhost","ankh","ankh168","chuanglifa")
	or die (mysqli_error($dbc));
	echo "<p>資料庫連接成功</p>";
	
/*$dbc = mysqli_connect("localhost","ankh","ankh168","chuanglifa")
	or die ('資料庫連接失敗');
	echo "資料庫連接成功";*/
	
/*$query = "SELECT * FROM message";*/

mysql_query("set names utf8");

$field_str = (is_array($field))?implode(",",$field):'';
$value_str = (is_array($post))?"'".implode("','",$post)."'":'';

$query = "INSERT INTO message (".$field_str.") VALUES (".$value_str.")";

echo $query.'<br />';

$result = mysqli_query($dbc,$query)
	or die (mysqli_error($dbc));
	echo "<p>資料表連結成功</p>";

mysqli_close($dbc);
	
echo '感謝您的來信，我們會盡快回覆您<br>';
echo '以下為資料確認<br><br>';
echo '姓名 : '.$name.'<br>';
echo '信箱 : '.$email.'<br>';
echo '電話 : '.$phone.'<br>';
echo '住址 : '.$address.'<br>';
echo '留言內容 : '.$msn.'<br>';
echo '選擇款式 : '.$type;
?>
</body>
</html>