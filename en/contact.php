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
<title>CHUANG LI FA - Online requiring</title>
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
                    <div class="roject"><a href="contact.php">Online requiring</a></div>
                    <div class="roject"><a href="add_map.php">contact</a></div>
                </div>
                <?php include("FB.php")?>
            </div>
            <div class="right">
            	<div class="path">
                    <ul>
                        <li><a href="index.php">index</a></li>
                        <li><a href="contact.php">Online requiring</a></li>
                    </ul>
                </div>
                <div class="h"><h1>Online requiring</h1><span>contact</span></div>
   		    	<p>
                	<form action="mail_post.php" method="post" name="contact" enctype="multipart/form-data" >
                    	<div class="step">Step1 (Please filling up all the information, especially with mark "✼")</div>
                    	<fieldset>
                        <legend>Basic information</legend> 
                    	<div class="box">
                            <div class="tr">Company/Store Name : <input type="text" name="company" placeholder="Please enter your company or store name" maxlength="150" size="25" />✼</div>
                            <div class="tr">Name : <input type="text" name="name" placeholder="Please enter your name" maxlength="100" size="30" />✼</div>
                            <div class="tr">Department : <input type="text" name="department" placeholder="Please enter your department" maxlength="100" size="30" /></div>
                            <div class="tr">Position : <input type="text" name="job" placeholder="Please enter your position" maxlength="100" size="30" /></div>
                            <div class="tr">
                            Tel : <input type="text" name="tel" placeholder="Please enter your contact no. and extension no." maxlength="100" size="25"  />✼
                            Extension : <input type="text" name="extension" maxlength="10" size="3"  />
                            </div>
                            <div class="tr">Fax : <input type="text" name="fax" placeholder="Please enter your fax no." maxlength="100" size="25"  /></div>
                            <div class="tr">Address : <input type="text" name="address" placeholder="Please enter your address" maxlength="120" size="38"  />✼</div>
                            <div class="tr">Email : <input type="email" name="email" placeholder="Please enter your e-mail address" maxlength="100" size="38"  />✼</div>
                        </div>
                        </fieldset>
                        <div class="step">Step2 (Please enter your requiring)</div>
                      Requirement details (for example) : <br /><br />
                        <div class="box">
                        	<div class="tr">Product category : <input type="text" name="category" placeholder="lid, paper cup, plastic bag, sleeve…etc." maxlength="100" size="50" /></div>
                            <div class="tr">Dimension : <input type="text" name="size" placeholder="90mm/12oz/660cc…etc." maxlength="100" size="50" /></div>
                            <div class="tr">Logo Selection : <input type="text" name="pic" placeholder="Public version, white, custom design" maxlength="100" size="50" /></div>
                            <div class="tr">Quantity : <input type="text" name="quantity" placeholder="Minimum order per month" maxlength="100" size="50" /></div><br />
                        </div>
                      comment<br />
                        <textarea cols="72" rows="8" placeholder="Other requirement" name="cu_content"/></textarea>
                        <p>
※If you cannot find products on the website please update a similar photo for clarify.<br />
※We will response your requirement soon.<br />
※If you have any special ideas about design please descript it as clear as a bell, we will contact you shortly.
                    </p>
                        <!--<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />-->
                        <div class="UPLOAD_box"><a href="https://drive.google.com/open?id=0B0jqJJNA6jTgflJzRlNwdzZLQ3FvV2NtWW9GX3ozbTB6aDlVVmtIYVBrTEl4Wi1lOEF0TnM&authuser=0" target="_new">UPLOAD FILE</a></div>
                        <div class="step">Step3 (Please double confirm all the details with mark "✼")</div>
                        <div class="submit"><button type="submit">Send</button><button type="reset">Remove</button></div>
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