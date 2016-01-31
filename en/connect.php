<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include("db_localhost/dbc_link.php");

$m_user = $_POST['m_user'];
$m_pw = $_POST['m_password'];

$query = "SELECT * FROM member WHERE m_user = '".$m_user."'";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');

$row = mysqli_fetch_array($result);

mysqli_close($dbc);
if($m_user != null && $m_pw != null && $row[1] ==$m_user && $row[2] ==$m_pw){
	$_SESSION['m_user'] = $m_user;
	echo '登入成功!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=chuanglifa_bg.php>';
}else{
	echo '登入失敗!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}
?>