<?php
	//資料庫主機設定
	$db_host = "localhost";
	$db_database = "chuanglifa";
	$db_username = "ankh";
	$db_password = "ankh168";
	//連結伺服器
	$_db_link = @mysql_pconnect($db_host, $db_username, $db_password);
	if(!$_db_link) die("資料連結失敗");
	//設定字元集連現校對
	mysql_query("SET NAMES utf8");
?>