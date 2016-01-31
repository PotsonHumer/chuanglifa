<?php session_start(); ?>
<?php	
	/*$dbc = mysqli_connect("localhost","ankh","ankh168","chuanglifa")
		or die ('資料庫連接失敗');*/
		
	$dbc = mysqli_connect("localhost","ankh168","ankh0513","chuanglifa_en")
		or die ('資料庫連接失敗');
		
	mysqli_query($dbc,"SET NAMES 'utf8'");
?>