<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("keywords.php")?>
<?php
$id = $_GET["a_id"];
$query_fb = "SELECT * FROM bg_news WHERE id = '".$id."'";
$result_fb = mysqli_query($dbc,$query_fb)
	or die ('資料庫連結失敗');
$row_fb = mysqli_fetch_array($result_fb);
?>
<meta name property="og:title" content="<?php echo $row_fb['web_title'] ?>"/> <!-- 分享的TITLE  -->
<meta name property="og:description" content="<?php echo $row_fb['fb_ds'] ?>"/> <!-- 分享的內容描述 -->
<meta name property="og:url" content="http://www.chuanglifa.com/<?php echo $web_namee.'?'.$web_idd; ?>"/> <!-- 分享網頁的連結 -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/chuanglifa_jQ.js"></script>
<title><?php echo $row_fb['web_title'] ?></title>
</head>
<?php
include("db_localhost/dbc_link.php");

$id = $_GET["a_id"];

$project = $_POST['project'];
$query = "SELECT * FROM bg_news WHERE id = '".$id."'";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
$row = mysqli_fetch_array($result);

$query_1 = "SELECT * FROM bg_news_title";
$result_1 = mysqli_query($dbc,$query_1)
	or die ('資料庫連結失敗');

mysqli_close($dbc);
?>
<?php
$web_name = $_SERVER['PHP_SELF']; //是取得 /test.php
$web_id = $_SERVER['QUERY_STRING']; //是取得 ?id=20&link=123456
$web_e = $_SERVER['HTTP_HOST']; //取得網址址
$web_to = $web_e.$web_name.'?'.$web_id;
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
				while($row_1 = mysqli_fetch_array($result_1)){
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
                        <li><a href="index.php">index</a></li>
                        <li><a href="news.php"><?php echo $row['project']?></a></li>
                    </ul>
                </div>
                <div class="h"><h1><?php echo $row['title']?></h1><span><?php echo $row_['en_name']?></span></div>
   		    	<div class="text"><?php echo $row['textarea']?></div>
                <div class="fb-good">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.0";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-like" data-href="http://<?php echo $web_to; ?>" data-layout="button" data-action="recommend" data-show-faces="false" data-share="true"></div>
                    <span>
                    <script type="text/javascript" src="//media.line.me/js/line-button.js?v=20140411" ></script>
                    <script type="text/javascript">
                    new media_line_me.LineButton({"pc":false,"lang":"ja","type":"d","text":"使用LINE與我們聯絡","withUrl":true});
                    </script>
                    </span>
                    <a href="http://line.me/R/msg/text/?LINE%E3%81%A7%E9%80%81%E3%82%8B%0D%0Ahttp%3A%2F%2Fline.me%2F" target="_new"><img  src="img/linebutton/linebutton_82x20.png" width="82" height="20" alt="LINEで送る" /></a>
                </div>
                <div style="clear: both;"></div>
                <p class="style_1"><?php echo $row['date']?> Edited by <?php echo $row['editor']?></p>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <?php include("footer.php")?>
</body>
<?php include("script.php")?>
</html>