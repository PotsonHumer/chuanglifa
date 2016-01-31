<?php
//資料表篩選(bg_about)品牌故事
$query_1_hover = "SELECT * FROM bg_about ORDER BY id ASC";
$result_1_hover = mysqli_query($dbc,$query_1_hover)
	or die ('資料庫連結失敗');

//資料表篩選(bg_business)服務項目
$query_2_hover = "SELECT * FROM bg_business";
$result_2_hover = mysqli_query($dbc,$query_2_hover)
	or die ('資料庫連結失敗');

//資料表篩選(bg_order)Q&A項目
$query_3_hover = "SELECT * FROM bg_order ORDER BY id ASC";
$result_3_hover = mysqli_query($dbc,$query_3_hover)
	or die ('資料庫連結失敗');

//資料表篩選(bg_title)最新消息項目列表
$query_4_hover = "SELECT * FROM bg_news_title";
$result_4_hover = mysqli_query($dbc,$query_4_hover)
	or die ('資料庫連結失敗');

//資料表篩選(bg_product)產品資訊
$query_5_hover = "SELECT * FROM bg_product_link";
$result_5_hover = mysqli_query($dbc,$query_5_hover)
	or die ('資料庫連結失敗');

//資料表篩選(bg_marquee)跑馬燈
$query_7 = "SELECT * FROM bg_marquee";
$result_7 = mysqli_query($dbc,$query_7)
	or die ('資料庫連結失敗');
$row_marquee = mysqli_fetch_array($result_7);

$query_login = "SELECT * FROM member WHERE m_id = '1'";
$result_login = mysqli_query($dbc,$query_login)
	or die ('資料庫連結失敗');
$row_login = mysqli_fetch_array($result_login);
?>