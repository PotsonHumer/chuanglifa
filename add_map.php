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
<title>創立發國際有限公司 - 聯絡我們</title>
</head>
<?php
include("db_localhost/dbc_link.php");

$id = $_GET["a_id"];

$project = $_POST['project'];
$query = "SELECT * FROM bg_news WHERE id = '".$id."'";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
$row = mysqli_fetch_array($result);

mysqli_close($dbc);
?>
<body>
    <div class="outer" id="top"></div>
    <?php include("menu.php")?>
    <div class="outer" id="line"></div>
    <div class="outer" id="main_box">
        <div id="main_2">
            <div class="left">
                <div class="title">CONTACT</div>
                <div class="service">
                    <div class="roject"><a href="contact.php">線上詢價</a></div>
                    <div class="roject"><a href="add_map.php">聯絡我們</a></div>
                </div>
                <?php include("FB.php")?>
            </div>
            <div class="right">
            	<div class="path">
                    <ul>
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                    </ul>
                </div>
                <div class="h"><h1>聯絡我們</h1><span>contact</span></div>
   		    	<div class="text">
                創立發國際有限公司(台中總公司)<br />
                TEL : 04-2278 0866<br />
                FAX : 04-2278 2733<br />
                PHONE : 0973-663799<br />
                台中市太平區富宜路146巷7號<br /><br />
                業務電話 - <br />
                李朋憲 經理 0973-801658(負責區域：雲林、嘉義、台南、高雄、屏東)<br />
                戴文祥 經理 0926-835383(負責區域：新竹、苗栗、台中、彰化)<br />
                李中銘 經理 0986-270198/0932-392205(負責區域：基隆、台北、新北市、桃園)<br /><br />
                <img src="img/LINE.png" width="30" height="30" border="0" align="absmiddle" /><font color="#99CC00"> ID : CHUANGLIFA</font><br /><br />
                <iframe src="https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d910.1858089368291!2d120.72027506432944!3d24.145653763194122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!1i0!3e6!4m5!1s0x346922ae44d6d8b1%3A0xf317676e9943a648!2zNDEx5Y-w5Lit5biC5aSq5bmz5Y2A5a-M5a6c6LevMTQ25be3!3m2!1d24.145741899999997!2d120.7197042!4m3!3m2!1d24.145706099999998!2d120.72005829999999!5e0!3m2!1szh-TW!2stw!4v1416801437449" width="500" height="350" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <?php include("footer.php")?>
</body>
<?php include("script.php")?>
</html>