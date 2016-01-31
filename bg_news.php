<?php session_start(); ?>
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
<?php include("db_localhost/dbc_link.php"); ?>.
<?php include("chbg_left.php"); ?>
<?php
$id = $_GET['news_id'];

$query_dl = "SELECT * FROM bg_news_title";
$result_dl = mysqli_query($dbc,$query_dl)
	or die ('資料庫連結失敗');

$query_4A = "SELECT * FROM bg_news_title WHERE id = '".$id."'";
$result_4A = mysqli_query($dbc,$query_4A)
	or die ('資料庫連結失敗');
$news_4 = mysqli_fetch_array($result_4A);

//資料表篩選(bg_news)project=最新消息
$query = "SELECT * FROM bg_news WHERE project = '".$news_4['new_title']."' ORDER BY id DESC";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
?>
<?php mysqli_close($dbc); ?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
<?php
	if($_SESSION['m_user']!= null){
?>
<div class="path">
	<ul>
    	<li><a href="chuanglifa_bg">首頁</a></li>
        <li><a href="#"><?php echo $row['new_title']?></a></li>
    </ul>
</div>
<p>
<a href="bg_news_title_DATA.php">✚ 新增一個消息分類</a> ︱ <a href="bg_news_DATA.php">✚ 新增一則消息內容</a>
</p>
<p>
<?php
	while($row = mysqli_fetch_array($result_dl)){
	?>
	<a href="bg_news.php?news_id=<?php echo $row['id']?>"><?php echo $row['new_title']?></a><a href="bg_news_title_DELETE.php?nd_id=<?php echo $row['id']?>"><font color="#CC0000"> ✖</font></a> ︱ 
    <?
	}
	?>
</p>
<?php 
while($row_data = mysqli_fetch_array($result)){
	?>
	<div class="news">
    	<div class="image"><img src="<?php echo $row_data['image']?>" width="150" height="110" /></div>
        <div class="data">
        	<div class="t01"><a href="bg_news_editor.php?news_id=<?php echo $row_data['id']?>"><?php echo $row_data['date']?> - <?php echo $row_data['title']?></a></div>
        	<div class="t02"><a href="bg_news_editor.php?news_id=<?php echo $row_data['id']?>"><?php echo $row_data['textarea']?></a></div>  
        </div>
        <div class="editor">
        <a href="bg_news_editor.php?news_id=<?php echo $row_data['id']?>">[Update]</a><br />
        <a href="bg_news_DELETE.php?news_id=<?php echo $row_data['id']?>">[Delete]</a>
        </div>
    </div>
    <?
	}
	?>
<?
}else{
        echo '您無權觀看此頁面!!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
    }
?>
</div>
</body>
</html>