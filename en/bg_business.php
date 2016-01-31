<?php session_start(); ?>
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
<?php include("db_localhost/dbc_link.php"); ?>
<?php include("chbg_left.php"); ?>
<?php
$id = $_GET['bs_id'];
$query_2A = "SELECT * FROM bg_business WHERE id = '".$id."'";
$result_2A = mysqli_query($dbc,$query_2A)
	or die ('資料庫連結失敗');
$row = mysqli_fetch_array($result_2A);

//資料表篩選(bg_editor)編輯者
$query_editor = "SELECT * FROM bg_editor";
$result_editor = mysqli_query($dbc,$query_editor)
	or die ('資料庫連結失敗');

?>
<?php mysqli_close($dbc); ?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
<?php
	if($_SESSION['m_user']!= null){
?>
<div class="path">
	<ul>
    	<li><a href="chuanglifa_bg">首頁</a></li>
        <li><a href="#"><?php echo $row['project']?></a></li>
    </ul>
</div>
<p><a href="bg_business_DATA.php">✚ 新增服務項目</a> ︱ <a href="bg_business_DELETE.php?dl_id=<?php echo $row['id'] ?>">✖ 刪除本篇內容</a></p>
<form action="bg_business_UPDATE.php?up_id=<?=$row["id"]?>" method="post">
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
        <?php
		while($row_editor = mysqli_fetch_array($result_editor)){
			?>
        <option value="<?php echo $row_editor['editor_name'] ?>"><?php echo $row_editor['editor_name'] ?></option>
        <?
		}
        ?>
    </select>
     <p>時間:</p>
    <input type="text" name="date" class="text_2" value="<?php echo $row['date'] ?>" />
    <input type="submit" value="送出" class="button" />
    <input type="reset" value="重填" class="button" />
</form>
<?
}else{
        echo '您無權觀看此頁面!!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
    }
?>
</div>
</body>
</html>