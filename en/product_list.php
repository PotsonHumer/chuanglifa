<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_localhost/dbc_link.php");
$id = $_GET["list_id"];
$query_4 = "SELECT * FROM bg_product_list WHERE id = '".$id."'";
$result_4 = mysqli_query($dbc,$query_4)
	or die ('資料庫連結失敗');
$row_4 = mysqli_fetch_array($result_4);

$title = $row_4['list_species'];
?>
<?php include("keywords.php")?>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/chuanglifa_jQ.js"></script>
<!--<script type="text/javascript" src="js/jquery.hoverpulse.js"></script>-->
<title>CHUANG LI FA-<?php echo $title ?>-<?php echo $row_key['meta_title'] ?></title>
</head>
<?php
include("db_localhost/dbc_link.php");
$id = $_GET["list_id"];
$project = $_POST['project'];

$query = "SELECT * FROM bg_product_link";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');

$query_1 = "SELECT * FROM bg_product_link";
$result_1 = mysqli_query($dbc,$query_1)
	or die ('資料庫連結失敗');

$query_2 = "SELECT * FROM bg_product_link";
$result_2 = mysqli_query($dbc,$query_2)
	or die ('資料庫連結失敗');
	
$query_3 = "SELECT * FROM bg_product_list WHERE id = '".$id."'";
$result_3 = mysqli_query($dbc,$query_3)
	or die ('資料庫連結失敗');	
$row_3 = mysqli_fetch_array($result_3);

mysqli_close($dbc);
?>
<body>
    <div class="outer" id="top"></div>
    <?php include("menu.php")?>
    <div class="outer" id="line"></div>
    <div class="outer" id="main_box">
        <div id="main_2">
            <div class="left">
                <div class="title">PRODUCT</div>
                <div class="service">
					<?php
                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <div class="roject"><a href="product_class.php?cl_id=<?php echo $row['id']?>"><?php echo $row['pr_name']?></a></div>
                        <?
                    }
                    ?>
                </div>
                <div class="title">PRODUCT LINK</div>
                <div class="service">
					<?php
                    while($row_1 = mysqli_fetch_array($result_1)){
                        ?>
                        <div class="pr_box">
                        	<a href="product_class.php?cl_id=<?php echo $row_1['id']?>"><img src="<?php echo $row_1['pr_imge']?>" width="130" height="130" /></a>
                            <p><?php echo $row_1['pr_name']?></p>
                        </div>
                        <?
                    }
                    ?>
                </div>
            </div>
            <div class="right">
            	<div class="path">
                    <ul>
                        <li><a href="index.php">index</a></li>
                        <li><?php echo $row_3['list_category']?></li>
                        <li><?php echo $row_3['list_species']?></li>
                    </ul>
                </div>
                <div class="h"><h1><?php echo $row_3['list_species']?></h1></div>
                <div class="prbox">
                	<div class="pr_imge_box">
                    	<div class="pr_imge"><img src="<?php echo $row_3['list_imge_1']?>" class="mag" width="280" height="280" border="0" id ="s0"/></div>
                        <div class="pr_imges">
                        	<div class="imges"><a href="#"><img src="<?php echo $row_3['list_imge_1']?>" width="50" height="50" border="0"/></a></div>
                            <div class="imges"><a href="#"><img src="<?php echo $row_3['list_imge_2']?>" width="50" height="50" border="0"/></a></div>
                            <div class="imges"><a href="#"><img src="<?php echo $row_3['list_imge_3']?>" width="50" height="50" border="0"/></a></div>
                            <div class="imges"><a href="#"><img src="<?php echo $row_3['list_imge_4']?>" width="50" height="50" border="0"/></a></div>
                        </div>
                        <p>Item No. : <?php echo $row_3['list_number']?></p>
                    </div>
                </div>
                <div class="prdata_box">
                	<h1><?php echo $row_3['list_name']?></h1>
                    <h2><?php echo $row_3['list_description']?></h2><br /> 
                    <h3><?php echo $row_3['list_characteristic']?></h3><br />
                    <p>
                    	Price : NT.<?php echo $row_3['list_price']?><br />
                        Specification :  <?php echo $row_3['list_size']?><br />
                        Payment : Cash on Delivery<br />
                        <input type="button" value="Online requiring" onclick="window.open('contact.php')" class="price_button"/>
                    </p>
                </div>
                <hr color="e3e4e1" size="1" class="hr" ><br/>     
            </div>
            <div class="textarea"><?php echo $row_3['list_textarea']?></div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <?php include("footer.php")?>
    <div id="top_btn"><a href="#document">⋀</a></div>
</body>
<?php include("script.php")?>
</html>