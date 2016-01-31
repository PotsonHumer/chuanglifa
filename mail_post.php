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
<title>創立發國際有限公司 專營杯蓋,紙杯,飲料包材等相關</title>
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
                        <li><a href="contact.php">線上詢價</a></li>
                    </ul>
                </div>
                <div class="h"><h1>線上詢價</h1><span>contact</span></div>
   		    	<div class="text">
<?php
//將上傳的檔案由暫存目錄移動至指定目錄
if ($_FILES["myfile"]["error"] > 0){
	echo "Error: " .$_FILES["myfile"]["error"];
}else{
	echo "檔案名稱: " .$_FILES["myfile"]["name"]."<br/>";
	echo "檔案類型: " .$_FILES["myfile"]["type"]."<br/>";
	echo "檔案大小: " .($_FILES["myfile"]["size"]/1024)." Kb<br/><br/>";
	
	if(file_exists("Dowload/".$_FILES["myfile"]["name"])){
		echo '<font color="#CC0000">檔案已經存在，請勿重覆上傳相同檔案</font><br/>';
	}else{
	move_uploaded_file($_FILES["myfile"]["tmp_name"],"Dowload/".$_FILES["myfile"]["name"]);
	}
}

$company = $_POST['company']; //行號
$name = $_POST['name']; //姓名
$department = $_POST['department']; //部門
$job = $_POST['job']; //職稱
$tel = $_POST['tel']; //電話
$extension = $_POST['extension']; // 分機
$fax = $_POST['fax']; //傳真
$address = $_POST['address']; //住址
$email = $_POST['email']; // 信箱

$category = $_POST['category']; //產品類別
$size = $_POST['size']; //規格尺寸
$pic = $_POST['pic']; //圖樣選擇
$quantity = $_POST['quantity']; //需求數量

$cu_content = $_POST['cu_content']; //內容意見
$myfile_tmp_name = $_FILES["myfile"]["tmp_name"]; //上傳的路徑
$myfile_type = $_FILES["myfile"]["type"]; //上傳的檔案種類
$myfile_name = $_FILES["myfile"]["name"]; //上傳的檔案名稱

$to = 'chuanglifa@gmail.com'; //寄件信箱
$subject = '線上詢價 功能表單'; //信件標題
$msg = 
	"由 $name 來信之詢價需求.\n".
	"以下為 $name 的基本資料 .\n".
	"行號 : $company .\n". 
	"部門 : $department.\n".
	"職銜 : $job .\n".
	"聯絡電話 : $tel 分機 : $extension.\n". 
	"傳真號碼 : $fax .\n". 
	"住址 : $address .\n". 
	"信箱 : $email .\n".
	"產品類別 : $category .\n".
	"規格尺寸 : $size .\n".
	"圖樣選擇 : $pic .\n".
	"需求數量 : $quantity .\n".
	"詢問需求 : $cu_content .\n".
	"上傳檔案路徑 : $myfile_tmp_name .\n".
	"上傳檔案種類 : $myfile_type .\n".
	"上傳檔案名稱 : $myfile_name";
	
if((!empty($company))&&(!empty($name))&&(!empty($tel))&&(!empty($tel))&&(!empty($address))&&(!empty($address))&&(!empty($email))&&(!empty($cu_content))){
	mail($to,$subject,$msg,'From:'.$email);
	echo '感謝'.$name.'的詢問需求.<br/>';
	echo "我們在收到信件後，會盡快與您聯絡.<br/>";
}else{
	echo '公司/店名、姓名、電話、地區、信箱、內容，為必填欄位';
	}
?>
<br /><a href="contact.php"><font color="#99CC00"> ▶ 返回上一頁</font></a>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <?php include("footer.php")?>
</body>
<?php include("script.php")?>
</html>