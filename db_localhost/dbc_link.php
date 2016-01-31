<?php
	/*$dbc = mysqli_connect("localhost","ankh","ankh168","chuanglifa")
		or die ('資料庫連接失敗');*/
		
	$dbc = mysqli_connect("localhost","s870887s","ankh0513","chuanglifa")
		or die ('資料庫連接失敗');
		
	mysqli_query($dbc,"SET NAMES 'utf8'");
?>