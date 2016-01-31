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

$news_1 = '最新消息';
$news_2 = '相關新聞';
$news_3 = '參展資訊';

//資料表篩選(bg_about)
$query_1 = "SELECT * FROM bg_about";
$result_1 = mysqli_query($dbc,$query_1)
	or die ('資料庫連結失敗');

//資料表篩選(bg_business)
$query_2 = "SELECT * FROM bg_business";
$result_2 = mysqli_query($dbc,$query_2)
	or die ('資料庫連結失敗');
	
//資料表篩選(bg_order)
$query_3 = "SELECT * FROM bg_order";
$result_3 = mysqli_query($dbc,$query_3)
	or die ('資料庫連結失敗');

//資料表篩選(bg_news)
$query_4 = "SELECT * FROM bg_news";
$result_4 = mysqli_query($dbc,$query_4)
	or die ('資料庫連結失敗');
	
//資料表篩選(bg_product)
$query_5 = "SELECT * FROM bg_product_link";
$result_5 = mysqli_query($dbc,$query_5)
	or die ('資料庫連結失敗');

$query_5A = "SELECT * FROM bg_product_link";
$result_5A = mysqli_query($dbc,$query_5A)
	or die ('資料庫連結失敗');

$query_5_hover = "SELECT * FROM bg_product_link";
$result_5_hover = mysqli_query($dbc,$query_5_hover)
	or die ('資料庫連結失敗');

$query_6 = "SELECT * FROM bg_product_class";
$result_6 = mysqli_query($dbc,$query_6)
	or die ('資料庫連結失敗');
	
$row = mysqli_fetch_array($result_5);
mysqli_close($dbc);
?>
<body>
<?php include("bg_left.php"); ?>
<div id="right">
<div class="path">
	<ul>
    	<li><a href="chuanglifa_bg">首頁</a></li>
        <li><a href="#">新增產品項目</a></li>
    </ul>
</div>
<form action="bg_product_list_INSERT.php" method="post">
    <input type="hidden" name="id" class="text_1"/>
	<p>
    系列:
    <select name="list_category"/>
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
    <?php
	while($row_class = mysqli_fetch_array($result_6)){
		?>
        <option value="<?php echo $row_class['class_name']?>"><?php echo $row_class['class_name']?></option>
        <?
	}
	?>
    </select>
    清單頁名稱:<input type="text" name="list_product"/> 
    內容頁名稱:<input type="text" name="list_name"/>
    產品編號:<input type="text" name="list_number" />
    </p>
    <p>類別圖片:<input type="text" name="list_imge"><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a></p>
    <p>產品圖片-01:<input type="text" name="list_imge_1"><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a></p>
    <p>產品圖片-02:<input type="text" name="list_imge_2"><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a></p>
    <p>產品圖片-03:<input type="text" name="list_imge_3"><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a></p>
    <p>產品圖片-04:<input type="text" name="list_imge_4"><a class="img_manage" href="#"><input type="button" value="▶ 點擊選擇圖片" /></a></p>
	<textarea name="list_description" >填寫商品描述(<br />◄ 斷行用)</textarea>
    <textarea name="list_characteristic" >
填寫範例(<br />◄ 斷行用)
■ 特色 1<br />
■ 特色 2<br />
■ 特色 3
    </textarea>
    <p>建議售價:<input type="text" name="list_price" /> 商品規格:<input type="text" name="list_size" /></p>
    <p>產品內容:</p>
    <textarea id="elm2" name="list_textarea" ></textarea><br />
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