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
//資料表篩選(bg_editor)編輯者
$query_editor = "SELECT * FROM bg_editor";
$result_editor = mysqli_query($dbc,$query_editor)
	or die ('資料庫連結失敗');
?>
<?php mysqli_close($dbc); ?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
<div class="path">
	<ul>
    	<li><a href="chuanglifa_bg">首頁</a></li>
        <li><a href="#">新增Q&A內容</a></li>
    </ul>
</div>
<form action="bg_business_INSERT.php" method="post">
    <input type="hidden" name="id" class="text_1"/>
	<p>選項名稱:</p>
    <input type="text" name="project"/><font color="Green" face="微軟正黑體" size="0"> ▪ 必填欄位</font></a><br />
    <p>選項英文:</p>
    <input type="text" name="en_name"/><font color="Green" face="微軟正黑體" size="0"> ▪ 必填欄位</font></a>
    <p>內容:</p>
    <textarea id="elm2" name="textarea" class="t01"/></textarea><br />
    <p>作者:</p>
    <select name="editor"/>
        <?php
		while($row_editor = mysqli_fetch_array($result_editor)){
			?>
        <option value="<?php echo $row_editor['editor_name'] ?>"><?php echo $row_editor['editor_name'] ?></option>
        <?
		}
        ?>
    </select>
     <p>時間:</p>
    <input type="date" name="date" class="text_2" value="0000/00/00" />
    <input type="submit" value="送出" class="button" />
    <input type="reset" value="重填" class="button" />
</form>
</div>
</body>
</html>