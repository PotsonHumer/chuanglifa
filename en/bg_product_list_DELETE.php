<?php 
include("db_localhost/dbc_link.php");
$id = $_GET["dl_id"];

$query = "DELETE FROM bg_product_list WHERE id='".$id."'";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');	

mysqli_close($dbc);
//將網頁重新導向
header("Location:bg_product.php");
exit();

?>