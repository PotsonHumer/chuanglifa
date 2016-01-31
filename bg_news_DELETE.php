<?php 
include("db_localhost/dbc_link.php");
$id = $_GET["news_id"];

/*$title = $_POST['title'];
$date = $_POST['date'];
$articles = $_POST['articles'];
$author = $_POST['author'];*/

$query = "DELETE FROM bg_news WHERE id='".$id."'";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');	

mysqli_close($dbc);
//將網頁重新導向
header("Location:chuanglifa_bg.php");
exit();

/*echo '成功修改一則最新消息<br>';
echo '以下為資料確認<br><br>';
echo '標題 : '.$title.'<br>';
echo '內容 : '.$articles.'<br>';
echo '作者 : '.$author.'<br>';
echo '日期 : '.$date.'<br>';
echo '<br>';
echo '<a href="news.php">返回上一頁</a>';*/
?>