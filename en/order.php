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
<title>創立發國際有限公司 - Q&A 一般訂購、客制訂購、印刷須知</title>
</head>
<?php
include("db_localhost/dbc_link.php");
$id = $_GET["a_id"];
$project = $_POST['project'];
$query = "SELECT * FROM bg_order WHERE id = '".$id."'";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
$row_2 = mysqli_fetch_array($result);

$query_1 = "SELECT * FROM bg_order ORDER BY id ASC";
$result = mysqli_query($dbc,$query_1)
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
                <div class="title">Q&A</div>
                <div class="service">
                <?php
				while($row_1 = mysqli_fetch_array($result)){
					?>
                    <div class="roject"><a href="order.php?a_id=<?php echo $row_1['id']?>"><?php echo $row_1['project']?></a></div>
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
                        <li><a href="#"><?php echo $row_2['project']?></a></li>
                    </ul>
                </div>
                <div class="h"><h1><?php echo $row_2['project']?></h1><span><?php echo $row_2['en_name']?></span></div>
   		    	<div class="text"><?php echo $row_2['textarea']?></div>
                <div style="clear: both;"></div>
                <p class="style_1"><?php echo $row_2['date']?> Edited by <?php echo $row_2['editor']?></p>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <?php include("footer.php")?>
</body>
<?php include("script.php")?>
</html>