<?php
	session_start();
	
	/*$dbc = mysqli_connect("localhost","ankh","ankh168","chuanglifa")
		or die ('資料庫連接失敗');*/
		
	$dbc = mysqli_connect("localhost","s870887s","ankh0513","chuanglifa")
		or die ('資料庫連接失敗');
		
	mysqli_query($dbc,"SET NAMES 'utf8'");
	
	$m_id = $_POST['m_id'];
	$m_user = $_POST['m_user'];
	$m_pw = $_POST['m_password'];
	
	$query_login = "SELECT * FROM member WHERE m_id = '".$m_id."'";
	
	$result_login = mysqli_query($dbc,$query_login)
		or die ('資料庫連結失敗');
	
	$row_login = mysqli_fetch_array($result_login);
?>