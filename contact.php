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
<title>創立發國際有限公司 - 線上詢價</title>
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
   		    	<p>
                	<form action="mail_post.php" method="post" name="contact" enctype="multipart/form-data" >
                    	<div class="step">步驟一、(請先填寫您的基本資料,✼號為必填，以方便我們聯絡到您)</div>
                    	<fieldset>
                        <legend>貴公司基本資料</legend> 
                    	<div class="box">
                            <div class="tr">公司/店名 : <input type="text" name="company" placeholder="請輸入您的公司行號或店名" maxlength="100" size="25" />✼</div>
                            <div class="tr">姓名 : <input type="text" name="name" placeholder="請輸入您的大名" maxlength="100" size="30" />✼</div>
                            <div class="tr">部門 : <input type="text" name="department" placeholder="請輸入您的部門" maxlength="100" size="30" /></div>
                            <div class="tr">職稱 : <input type="text" name="job" placeholder="請輸入您的職務名稱" maxlength="100" size="30" /></div>
                            <div class="tr">
                            電話 : <input type="text" name="tel" placeholder="請輸入您連絡電話" maxlength="100" size="25"  />✼
                            分機 : <input type="text" name="extension" maxlength="10" size="3"  />
                            </div>
                            <div class="tr">傳真 : <input type="text" name="fax" placeholder="請輸入您傳真號碼" maxlength="100" size="25"  /></div>
                            <div class="tr">地區 : <input type="text" name="address" placeholder="請輸入您地址" maxlength="120" size="38"  />✼</div>
                            <div class="tr">信箱 : <input type="email" name="email" placeholder="請輸入您連絡信箱" maxlength="100" size="38"  />✼</div>
                        </div>
                        </fieldset>
                        <div class="step">步驟二、(填寫需要為您回覆的需求)</div>
                        詢問事項( 如下格式 ) : <br /><br />
                        <div class="box">
                        	<div class="tr">產品類別 : <input type="text" name="category" placeholder="杯蓋、紙杯、塑膠袋、杯套...等" maxlength="100" size="50" /></div>
                            <div class="tr">規格尺寸 : <input type="text" name="size" placeholder="90口徑、12oz、660cc...等" maxlength="100" size="50" /></div>
                            <div class="tr">圖樣選擇 : <input type="text" name="pic" placeholder="公版、白杯、客製印刷" maxlength="100" size="50" /></div>
                            <div class="tr">需求數量 : <input type="text" name="quantity" placeholder="平均每月使用數量" maxlength="100" size="50" /></div><br />
                        </div>
                        備註<br />
                        <textarea cols="72" rows="8" placeholder="其他需求請填於此欄位" name="cu_content"/></textarea>
                        <p>
※如產品介紹上沒有您想詢問的產品，請上傳圖片提供我們參考。<br />
※填寫完畢後，我們將會盡速為您服務。<br />
※若是特殊設計部份，請盡量填寫您欲設計的相關細節，我們收到後將會有專人與您聯絡。<br />(請註明方便聯絡的時間)
                        </p>
                        <!--<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />-->
                        <div class="UPLOAD_box"><a href="https://drive.google.com/open?id=0B0jqJJNA6jTgflJzRlNwdzZLQ3FvV2NtWW9GX3ozbTB6aDlVVmtIYVBrTEl4Wi1lOEF0TnM&authuser=0" target="_new">UPLOAD FILE</a></div>
                        <div class="step">步驟三、(按下送出，讓我們知道您的需求)</div>
                        <div class="submit"><button type="submit">寫好了，我要送出</button><button type="reset">清除重寫</button></div>
                    </form>
                </p>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <?php include("footer.php")?>
</body>
<?php include("script.php")?>
</html>