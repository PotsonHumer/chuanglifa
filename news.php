<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("keywords.php")?>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/chuanglifa_jQ.js"></script>
<title>創立發國際有限公司 - 最新消息、相關新聞、參展資訊</title>
</head>
<?php
include("db_localhost/dbc_link.php");

$id = $_GET["a_id"];

$query = "SELECT * FROM bg_news_title";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');

$query_1 = "SELECT * FROM bg_news_title WHERE id = '".$id."'";
$result_1 = mysqli_query($dbc,$query_1)
	or die ('資料庫連結失敗');
$row = mysqli_fetch_array($result_1);
	
$query_2 = "SELECT * FROM bg_news WHERE project = '".$row['new_title']."' ORDER BY id DESC";
$result_2 = mysqli_query($dbc,$query_2)
	or die ('資料庫連結失敗');

mysqli_close($dbc);
?>
<body>
    <div class="outer" id="top"></div>
    <?php include("menu.php")?>
    <div class="outer" id="line"></div>
    <div class="outer" id="main_box">
        <div id="main_2">
            <div class="left">
                <div class="title">NEWS</div>
                <div class="service">
                <?php
				while($row_1 = mysqli_fetch_array($result)){
					?>
                    <div class="roject"><a href="news.php?a_id=<?php echo $row_1['id']?>"><?php echo $row_1['new_title']?></a></div>
                    <?
				}
				?>
                </div>
                <?php include("FB.php")?>
            </div>
            <div class="right">
            	<div class="path">
                    <ul>
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="#"><?php echo $row['new_title']?></a></li>
                    </ul>
                </div>
                <div class="h"><h1><?php echo $row['new_title']?></h1><span><?php echo $row['en_name']?></span></div>
                <?php
				while($row_2 = mysqli_fetch_array($result_2)){
					?>
   		    	<div class="news">
                	<div class="time"><?php echo $row_2['date']?></div>
                	<div class="image"><a href="news_data.php?a_id=<?php echo $row_2['id']?>"><img src="<?php echo $row_2['image']?>" width="150" height="150" /></a></div>
                    <div class="data"><?php echo $row_2['title']?></div>
                </div>
                <?
				}
				?>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <?php include("footer.php")?>
</body>
<?php include("script.php")?>
</html>