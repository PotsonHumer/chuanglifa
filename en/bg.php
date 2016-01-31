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