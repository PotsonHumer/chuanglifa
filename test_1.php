<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/jquery.hoverpulse.js"></script>
<!--<script type="text/javascript" src="js/chuanglifa_jQ.js"></script>-->
<style type="text/css">
body{
	/*background: #000;*/
}
#A1{
	position: absolute;
	left: 50%;
	top: 50%;
	margin: -60px 0 0 -60px;
	width: 280px;
	height: 280px;
} 
#A1 .box{
	width: 80px;
	height: 80px;
	background: #CC0;
	float: left;
	margin: 5px;
}
#A1 .box img{
	width: 80px;
	height: 80px;
}
</style>
<title>無標題文件</title>
</head>
<body>
<?php
$web_name = $_SERVER['PHP_SELF']; //是取得 /test.php
$web_id = $_SERVER['QUERY_STRING']; //是取得 ?id=20&link=123456
$web_e = $_SERVER['HTTP_HOST']; //取得網址址
$web_to = $web_e.$web_name.$web_id;
echo $web_to;
?>
<div id="A1">
	<div class="box"><img src="img/images.jpg" /></div>
    <div class="box"><img src="img/images.jpg" /></div>
    <div class="box"><img src="img/images.jpg" /></div>
	<div class="box"><img src="img/images.jpg" /></div>
    <div class="box"><img src="img/images.jpg" /></div>
    <div class="box"><img src="img/images.jpg" /></div>
	<div class="box"><img src="img/images.jpg" /></div>
    <div class="box"><img src="img/images.jpg" /></div>
    <div class="box"><img src="img/images.jpg" /></div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $("#A1 .box img").hoverpulse({
        size: 25,  // 圖片縮放的大小
        speed: 400 // 圖片變換大小的速度 
    });
});
</script>
</html>