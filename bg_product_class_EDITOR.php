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
$id = $_GET["ed_id"];
	
$query = "SELECT * FROM bg_product_class WHERE id = '".$id."'";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
$row = mysqli_fetch_array($result);

$query_1 = "SELECT * FROM bg_product_link";
$result_1 = mysqli_query($dbc,$query_1)
	or die ('資料庫連結失敗');
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
<form action="bg_product_class_UPDATE.php?a_id=<?=$row["id"]?>" method="post">
    <input type="hidden" name="id" class="text_1" value="<?php echo $row['id'] ?>"/>
	<p>圖片:</p>
    <input type="text" name="class_imge" value="<?php echo $row['class_imge'] ?>" /><a href="#" target="_new" class="img_manage"><input type="button" value="▶ 點擊選擇圖片" /></a><font color="Green" face="微軟正黑體" size="0">建議尺寸:w200 x h150 / 72dpi</font><br />
    <p>系列:</p>
    <select name="class_title"/>
    	<option value="<?php echo $row['class_title'] ?>">Default-<?php echo $row['class_title'] ?></option>
    <?php
	while($row_class = mysqli_fetch_array($result_1)){
		?>
        <option value="<?php echo $row_class['pr_name']?>"><?php echo $row_class['pr_name']?></option>
        <?
	}
	?>
    </select>
    <br/>
    <p>大類:</p>
    <input type="text" name="class_name" value="<?php echo $row['class_name'] ?>" /><font color="Green" face="微軟正黑體" size="0">◉若無更新，請勿隨意更動!</font><br />
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