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
<?php
include("db_localhost/dbc_link.php");

$id = $_GET["a_id"];

//資料表篩選(bg_about)
$query_1 = "SELECT * FROM bg_about";
$result_1 = mysqli_query($dbc,$query_1)
	or die ('資料庫連結失敗');

//資料表篩選(bg_business)
$query_2 = "SELECT * FROM bg_business";
$result_2 = mysqli_query($dbc,$query_2)
	or die ('資料庫連結失敗');
	
$query_1A = "SELECT * FROM bg_about WHERE id = '".$id."'";
$result_1A = mysqli_query($dbc,$query_1A)
	or die ('資料庫連結失敗');
	
$row = $row = mysqli_fetch_array($result_1A);
mysqli_close($dbc);
?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
<div class="path">
	<ul>
    	<li><a href="chuanglifa_bg">首頁</a></li>
        <li><a href="#"><?php echo $row['project']?></a></li>
    </ul>
</div>
<form action="bg_about_UPDATE.php?a_id=<?=$row["id"]?>" method="post">
    <input type="hidden" name="id" class="text_1" value="<?php echo $row['id'] ?>"/>
	<p>選項名稱:</p>
    <input type="text" name="project" value="<?php echo $row['project'] ?>" /><br />
    <p>選項英文:</p>
    <input type="text" name="en_name" value="<?php echo $row['en_name'] ?>" />
    <p>內容:</p>
    <textarea id="elm2" name="textarea"/><?php echo $row['textarea'] ?></textarea><br />
     <p>作者:</p>
    <select name="editor"/>
        <option value="<?php echo $row['editor'] ?>">Default-<?php echo $row['editor'] ?></option>
        <option value="ANKH">ANKH</option>
        <option value="SAM">SAM</option>
        <option value="SAI">SAI</option>
    </select>
     <p>時間:</p>
    <input type="text" name="date" class="text_2" value="<?php echo $row['date'] ?>" />
    <input type="submit" value="送出" class="button" />
    <input type="reset" value="重填" class="button" />
</form>
</div>
</body>
</html>