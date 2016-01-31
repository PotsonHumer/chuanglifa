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
<?php include("db_localhost/dbc_link.php"); ?>.
<?php include("chbg_left.php"); ?>
<?php
$id = $_GET["news_id"];
	
$query = "SELECT * FROM bg_news WHERE id = '".$id."'";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');	
$row = mysqli_fetch_array($result);

$query_1 = "SELECT * FROM bg_news_title";
$result_1 = mysqli_query($dbc,$query_1)
	or die ('資料庫連結失敗');

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
        <li><a href="#"><?php echo $row['project']?></a></li>
    </ul>
</div>
<form action="bg_news_UPDATE.php?a_id=<?=$row["id"]?>" method="post">
    <input type="hidden" name="id" class="text_1" value="<?php echo $row['id'] ?>"/>
	<p>網站抬頭:</p>
    <input type="text" name="web_title" value="<?php echo $row['web_title'] ?>" /><br />
    <p>FB預覽圖:</p>
    <input type="text" name="fb_imge" value="<?php echo $row['fb_imge'] ?>"><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a><font color="Green" face="微軟正黑體" size="0">建議尺寸:w150 x h150 / 72dpi</font><br />
	<p>FB內容描述:</p>
    <textarea name="fb_ds"/><?php echo $row['fb_ds'] ?></textarea><br />
	<p>圖片:</p>
    <input type="text" name="image" value="<?php echo $row['image'] ?>" /><a href="#" target="_new" class="img_manage"><input type="button" value="▶ 點擊選擇圖片" /></a><font color="Green" face="微軟正黑體" size="0">建議尺寸:w200 x h150 / 72dpi</font><br />
	<p>選項名稱:</p>
    <select name="project"/>
        <option value="<?php echo $row['project'] ?>">Default-<?php echo $row['project'] ?></option>
        <?php
		while($row_title = mysqli_fetch_array($result_1)){
			?>
            <option value="<?php echo $row_title['new_title'] ?>"><?php echo $row_title['new_title'] ?></option>
            <?
		}
		?>
    </select>
    <p>選項英文:</p>
    <input type="text" name="en_name" value="<?php echo $row['en_name'] ?>" /><font color="Green" face="微軟正黑體" size="0">◉若無更新，請勿隨意更動!</font>
    <p>標題名稱:</p>
    <input type="text" name="title" class="title_text" value="<?php echo $row['title'] ?>" />
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
</div>
</body>
<script>
	$(function(){
		$(document).tiny_box({
			SWITCH : 1, // 0 => 全部 , 1 => 圖片 , 2 => 檔案
			ID : ".img_manage", // 綁定元素 (同css選取器)，可設定多個元素，使用 , 分隔
			ROOT : "/" // 根目錄位置
		});
		
		$(document).tiny_box({
			SWITCH : 2, // 0 => 全部 , 1 => 圖片 , 2 => 檔案
			ID : ".file_manage", // 綁定元素 (同css選取器)，可設定多個元素，使用 , 分隔
			ROOT : "/" // 根目錄位置
		});
		
		$(document).tiny_box({
			SWITCH : 0, // 0 => 全部 , 1 => 圖片 , 2 => 檔案
			ID : ".all_manage", // 綁定元素 (同css選取器)，可設定多個元素，使用 , 分隔
			ROOT : "/" // 根目錄位置
		});
	});
</script>
</html>