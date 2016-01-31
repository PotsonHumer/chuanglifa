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
//資料表篩選(bg_advertising)首頁廣告
$query_adv = "SELECT * FROM bg_advertising";
$result_adv= mysqli_query($dbc,$query_adv)
	or die ('資料庫連結失敗');
$row_adv = mysqli_fetch_array($result_adv);

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
		<br />
		歡迎使用後台系統。
		<p>
			<a href="bg_editor_DATA.php">✚新增編輯作者</a><br /><br />
			<?php
			while($row_editor = mysqli_fetch_array($result_editor)){
			?>
				<?php echo $row_editor['editor_name'] ?><a href="bg_editor_DELETE.php?dl_id=<?php echo $row_editor['id'] ?>"><font color="#CC0000"> ✖ 刪除</font></a> ︱ 
			<?
			}
			?>
		</p>
		<p>跑馬燈字幕編輯</p>
		<form action="bg_marquee_UPDATE.php?a_id=<?php echo $row_marquee['id'] ?>" method="post">
            <textarea class="kk" name="marquee"><?php echo $row_marquee['marquee'] ?></textarea><br />
            <input type="submit" value="送出" />
            <input type="reset" value="清除" />
		</form>
		<form action="bg_advertising_UPDATE.php?adv_id=<?php echo $row_adv['adv_id'] ?>" method="post">
            <p>廣告圖片</p>
            <input type="text" name="adv_img" value="<?php echo $row_adv['adv_img'] ?>"><a href="#" class="img_manage"><input type="button" value="▶ 點擊選擇圖片" /></a><font color="Green" face="微軟正黑體" size="0">建議尺寸:w850 x h550 / 72dpi</font>
            <p>圖片網址連結</p>
            <textarea class="kk" name="adv_link"><?php echo $row_adv['adv_link'] ?></textarea><br />
            <input type="radio" name="adv_status" value="block" /><font face="微軟正黑體" size="1">顯示(block)</font>
            <input type="radio" name="adv_status" value="none" /><font face="微軟正黑體" size="1">隱藏(none)</font>
            <font face="微軟正黑體" size="1" color="#FF6600">目前狀態 :  <?php echo $row_adv['adv_status'] ?></font>
            <br /><br />
            <input type="submit" value="送出" />
            <input type="reset" value="清除" />
		</form><br/>
		<p>
            <font color="#0066CC">FB分享、按讚功能</font><br /><br />
            
            每次新貼文章，須前往 <a href="https://developers.facebook.com/tools/debug/" target="_new"><font color="#FF6600"> > FB-debug 消除預設內容</font></a><br /><br />
            步驟一、於Input URL, Access Token, or Open Graph Action ID下方，貼入網頁中的"網址"<br />
            步驟二、點選下方Debug按鈕，即完成!!<br />
            備註 : 若FB內容有更新，則必須在行如上消除步驟<br />
		</p>
<?
}else{
        echo '您無權觀看此頁面!!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
    }
?>
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