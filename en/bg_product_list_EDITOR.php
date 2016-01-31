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

$query_5A = "SELECT * FROM bg_product_link";
$result_5A = mysqli_query($dbc,$query_5A)
	or die ('資料庫連結失敗');
	
$query_6 = "SELECT * FROM bg_product_list WHERE id = '".$id."'";
$result_6 = mysqli_query($dbc,$query_6)
	or die ('資料庫連結失敗');
$row_6 = mysqli_fetch_array($result_6);

$query_7 = "SELECT * FROM bg_product_class";
$result_7 = mysqli_query($dbc,$query_7)
	or die ('資料庫連結失敗');
?>
<?php mysqli_close($dbc); ?>

<body>
<?php include("bg_left.php"); ?>
<div id="right">
<div class="path">
	<ul>
    	<li><a href="chuanglifa_bg">首頁</a></li>
        <li><a href="#">編輯產品項目</a></li>
    </ul>
</div>
<form action="bg_product_list_UPDATE.php?up_id=<?php echo $row_6['id']?>" method="post">
    <input type="hidden" name="id" class="text_1"/>
	<p>
    系列:
    <select name="list_category"/>
    	<option value="<?php echo $row_6['list_category'] ?>">Default-<?php echo $row_6['list_category'] ?></option>
    <?php
	while($row_1 = mysqli_fetch_array($result_5A)){
		?>
        <option value="<?php echo $row_1['pr_name']?>"><?php echo $row_1['pr_name']?></option>
        <?
	}
	?>
    </select>
    大類:
    <select name="list_species"/>
    	<option value="<?php echo $row_6['list_species'] ?>">Default-<?php echo $row_6['list_species'] ?></option>
    <?php
	while($row_class = mysqli_fetch_array($result_7)){
		?>
        <option value="<?php echo $row_class['class_name']?>"><?php echo $row_class['class_name']?></option>
        <?
	}
	?>
    </select>
    清單頁名稱:<input type="text" name="list_product" value="<?php echo $row_6['list_product']?>" /> 
    內容頁名稱:<input type="text" name="list_name" value="<?php echo $row_6['list_name']?>" />
    產品編號:<input type="text" name="list_number" value="<?php echo $row_6['list_number']?>" />
    </p>
    <p>類別圖片:<input type="text" name="list_imge" value="<?php echo $row_6['list_imge']?>"><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a><font color="Green" face="微軟正黑體" size="0">建議尺寸:w150 x h150 / 72dpi</font></p>
    <p>產品圖片-01:<input type="text" name="list_imge_1" value="<?php echo $row_6['list_imge_1']?>" ><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a><font color="Green" face="微軟正黑體" size="0">建議尺寸:w280 x h230 / 72dpi</font></p>
    <p>產品圖片-02:<input type="text" name="list_imge_2" value="<?php echo $row_6['list_imge_2']?>"><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a><font color="Green" face="微軟正黑體" size="0">建議尺寸:w280 x h230 / 72dpi</font></p>
    <p>產品圖片-03:<input type="text" name="list_imge_3" value="<?php echo $row_6['list_imge_3']?>"><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a><font color="Green" face="微軟正黑體" size="0">建議尺寸:w280 x h230 / 72dpi</font></p>
    <p>產品圖片-04:<input type="text" name="list_imge_4" value="<?php echo $row_6['list_imge_4']?>"><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a><font color="Green" face="微軟正黑體" size="0">建議尺寸:w280 x h230 / 72dpi</font></p>
	<textarea name="list_description" ><?php echo $row_6['list_description']?></textarea>
    <textarea name="list_characteristic" >
<?php echo $row_6['list_characteristic']?>
    </textarea>
    <p>建議售價:<input type="text" name="list_price" value="<?php echo $row_6['list_price']?>" /> 商品規格:<input type="text" name="list_size" value="<?php echo $row_6['list_size']?>" /></p>
    <p>產品內容:</p>
    <textarea id="elm2" name="list_textarea" ><?php echo $row_6['list_textarea']?></textarea><br />
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