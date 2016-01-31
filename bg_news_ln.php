<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bg_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/chuanglifa_jQ.js"></script>
<?php include("tiny_input.php")?>
<title>使用者後台</title>
</head>
<?php
include("db_localhost/dbc_link.php");

$id = $_GET["a_id"];

$news_1 = '最新消息';
$news_2 = '相關新聞';
$news_3 = '參展資訊';


//資料表篩選(bg_about)
$query_1 = "SELECT * FROM bg_about";
$result_1 = mysqli_query($dbc,$query_1)
	or die ('資料庫連結失敗');

//資料表篩選(bg_business)
$query_2 = "SELECT * FROM bg_business";
$result_2 = mysqli_query($dbc,$query_2)
	or die ('資料庫連結失敗');

//資料表篩選(bg_order)
$query_3 = "SELECT * FROM bg_order";
$result_3 = mysqli_query($dbc,$query_3)
	or die ('資料庫連結失敗');

//資料表篩選(bg_news)
$query_4 = "SELECT * FROM bg_news";
$result_4 = mysqli_query($dbc,$query_4)
	or die ('資料庫連結失敗');

//資料表篩選(bg_news)project=最新消息
$query = "SELECT * FROM bg_news WHERE project = '".$news_1."'";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
	
$query_4A = "SELECT * FROM bg_news WHERE id = '".$id."'";
$result_4A = mysqli_query($dbc,$query_4A)
	or die ('資料庫連結失敗');
	
$row = mysqli_fetch_array($result_4);

mysqli_close($dbc);
?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
<div class="path">
	<ul>
    	<li><a href="chuanglifa_bg">首頁</a></li>
        <li><a href="#"><?php echo $row['project']?></a></li>
    </ul>
</div>
<p><a href="bg_news_DATA.php">✚ 新增最新消息</a></p>
<?php 
while($row_data = mysqli_fetch_array($result)){
	?>
	<div class="news">
    	<div class="image"><img src="<?php echo $row_data['image']?>" width="150" height="110" /></div>
        <div class="data">
        	<div class="t01"><a href="bg_news_editor.php?a_id=<?php echo $row_data['id']?>"><?php echo $row_data['date']?> - <?php echo $row_data['title']?></a></div>
        	<div class="t02"><a href="bg_news_editor.php?a_id=<?php echo $row_data['id']?>"><?php echo $row_data['textarea']?></a></div>  
        </div>
        <div class="editor">
        <a href="bg_news_editor.php?a_id=<?php echo $row_data['id']?>">[Update]</a><br />
        <a href="bg_news_DELETE.php">[Delete]</a>
        </div>
    </div>
    <?
	}
	?>
</div>
</body>
</html>