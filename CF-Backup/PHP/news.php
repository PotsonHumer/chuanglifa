<?php session_start(); ?>
<?php
	include("db_localhost/dbc_link.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/php.css" type="text/css" rel="stylesheet" />
<title>最新消息系統</title>
</head>
<?php 
$page_num = 2; //每一頁要顯示的列數
if($_GET["page"]==0){ //當頁數序號等於0的時候
	$now_page = 0; //$now_page 就是0
}else{
	$now_page = ($_GET["page"] * $page_num) - $page_num; //$now_page = (頁數序號 * 當頁列數) 減掉當頁列數
}

$query_page = "SELECT * FROM news";
$result_page = mysqli_query($dbc,$query_page)
	or die ('資料庫連結失敗');

$all_num = mysqli_num_rows($result_page);

$query = "SELECT * FROM news limit ".$now_page.",".$page_num;

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
	
mysqli_close($dbc);
?>
<body>
<div id="WP">
	<p><a href="#">▶ 最新消息系統</a></p>
	<p><a href="news_newdate.php">+ 新增消息</a></p>
    <div class="table">
        <div class="tr">
            <div class="title">標 題</div>
          <div class="articles">內 容</div>
          <div class="author">作 者</div>
          <div class="author">時 間</div>
            <div class="editor"></div>
            <div class="editor"></div>
        </div>
        <?php
        if($_SESSION['m_user'] != null){
        
			while($row = mysqli_fetch_array($result)){
			?>
			<div class="tr">
				<div class="title"><a href="news_data.php?n_id=<?=$row["id"]?>"><?php echo $row["title"] ?></a></div>
			  <div class="articles"><?=$row["articles"] ?></div>
			  <div class="author"><?php echo $row["author"] ?></div>
			  <div class="author"><?php echo $row["date"] ?></div>
				<div class="editor"><a href="news_Editor.php?n_id=<?=$row["id"]?>">UPDATE</a></div>
				<div class="editor"><a href="news_DELETE.php?n_id=<?=$row["id"]?>">DELETE</a></div>
			</div>
			<?
			}
			
			$all_page = ceil($all_num / $page_num);
			$prev = $_GET['page'] - 1; //上一頁要減1
			if($prev<=$all_page && $prev >= 1){ //如果頁數序號 <= 總頁數 和 序號頁數 >= 1，都成立就顯示以下，沒有就不顯示
				echo '<a href="news.php?page='.$prev.'">上一頁</a>';
			}
			for($p=1;$p<=$all_page;$p++){
				echo '<a href="news.php?page='.$p.'">'.$p.'</a>';
			}
			$next = $_GET['page'] + 1; //下一頁要加1
			if($next<=$all_page && $next >= 1){ //如果頁數序號 <= 總頁數 和 序號頁數 >= 1，都成立就顯示以下，沒有就不顯示
				echo '<a href="news.php?page='.$next.'">下一頁</a>';
			}
		}else{
			echo '您無權觀看此頁面!!';
			echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
		}
        ?>
    </div> 
</div>
</body>
</html>