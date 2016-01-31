<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/php.css" type="text/css" rel="stylesheet" />
<title>無標題文件</title>
</head>

<body>
<?php 
include("db_localhost/dbc_link.php");

$query = "UPDATE message FROM SET name=%s, WHERE id =%s";

$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
	
$row = mysqli_fetch_array($result);	
mysqli_close($dbc);

?>
<form action="mail_2.php" method="post">
	姓名:<input type="text" name="name" class="text" value="<?php echo $row['name']?>"/><br />
    信箱:<input type="text" name="email" class="text" value="<?php echo $row['email']?>" /><br />
    電話:<input type="text" name="phone" class="text" value="<?php echo $row['phone']?>" /><br />
    地址:<input type="text" name="address" class="text" value="<?php echo $row['address']?>" /><br />
    留言:<textarea rows="6" name="msn" class="msn_1" value="<?php echo $row['msn']?>" /><br />
    款式:<select name="type" class="sel" value="<?php echo $row['type']?>" />
       　<option  value="G1">G1</option>
        <option value="G2">G2</option>
        <option value="G3">G3</option>
    </select>
    <input type="submit" value="送出" class="button" />
    <input type="reset" value="重填" class="button" />
</form>  
</body>
</html>