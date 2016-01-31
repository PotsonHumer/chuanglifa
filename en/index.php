<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $title = '首頁'; ?>
<?php include("keywords.php")?>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/chuanglifa_js.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/marquee_box.js"></script>
<script type="text/javascript" src="js/super_slide_box.js"></script>
<title>CHUANG LI FA-<?php echo $title ?>-<?php echo $row_key['meta_title'] ?></title>
</head>
<?php
include("db_localhost/dbc_link.php");
$id = $_GET["a_id"];
$query = "SELECT * FROM bg_news ORDER BY id DESC LIMIT 0, 5";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');

//資料表篩選(bg_marquee)
$query_2 = "SELECT * FROM bg_marquee";
$result_2 = mysqli_query($dbc,$query_2)
	or die ('資料庫連結失敗');
$row_marquee = mysqli_fetch_array($result_2);

//資料表篩選(bg_advertising)
$query_adv = "SELECT * FROM bg_advertising";
$result_adv = mysqli_query($dbc,$query_adv)
	or die ('資料庫連結失敗');
$row_adv = mysqli_fetch_array($result_adv);

mysqli_close($dbc);
?>
<body>
	<div id="show" style="display:<?php echo $row_adv['adv_status']?>">
    	<div class="adv_box">
        	<div class="adv"><a href="<?php echo $row_adv['adv_link'] ?>"><img src="<?php echo $row_adv['adv_img'] ?>" width="850" height="550" border="0" /></a></div>
            <div class="close"><a href="#">[ ╳ 關閉 ]</a></div>
        </div>
    </div>
    <div class="outer" id="top"></div>
    <?php include("menu.php")?>
    <div class="outer" id="line"></div>
    <div class="outer" id="main_box">
        <div class="outer" id="banner">
            <div class="slider-wrapper theme-default">
                <div class="ribbon"></div>
                <div id="slider" class="nivoSlider">
                	<a href="#"><img src="img/banner-00.jpg" alt="ttt" width="900" height="350"/></a>
                    <a href="#"><img src="img/banner-02.jpg" alt="ttt" width="900" height="350"/></a>
                    <a href="#"><img src="img/banner-03.jpg" alt="ttt" width="900" height="350"/></a>
                    <a href="#"><img src="img/banner-04.jpg" alt="ttt" width="900" height="350"/></a>
                </div>
                <div id="htmlcaption" class="nivo-html-caption"></div>
            </div>
        </div>
        <div class="outer" id="marquee_block">
        <?php echo $row_marquee['marquee'] ?>
        </div>
        <div id="main">
            <div class="main" id="main_4">
                <ul class="slide_move">
                	<li class="slide_pic"><img src="img/G1-5.png" /></li>
                    <li class="slide_pic"><img src="img/G2.png" /></li>
                    <li class="slide_pic"><img src="img/G3.png" /></li>
                    <li class="slide_pic"><img src="img/G1-5.png" /></li>
                    <li class="slide_pic"><img src="img/G2.png" /></li>
                    <li class="slide_pic"><img src="img/G3.png" /></li>
                </ul>
            </div>
            <div class="news_data">
                <div class="top">NEWS -</div>
                <ul>
                <?php
					while($row = mysqli_fetch_array($result)){
						?>
                    <hr size="1" align="left" noshade width="100%" color="FFFFFF"><br />
                    <li><a href="news_data.php?a_id=<?php echo $row['id']?>"><?php echo $row['date']?> - <?php echo $row['title']?></a></li>
                    <?
					}
					?>
                </ul>
            </div>
         </div>
     </div>
    <?php include("footer.php")?>
</body>
<?php include("script.php")?>
</html>