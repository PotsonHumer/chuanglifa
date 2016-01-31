<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/php.css" type="text/css" rel="stylesheet" />
<title>無標題文件</title>
</head>

<body>
<form action="mail_2.php" method="post">
	姓名:<input type="text" name="name" class="text" /><br />
    信箱:<input type="text" name="email" class="text" /><br />
    電話:<input type="text" name="phone" class="text" /><br />
    地址:<input type="text" name="address" class="text" /><br />
    留言:<textarea rows="6" name="msn" class="msn_1" /></textarea><br />
    款式:<select name="type" class="sel" />
       　<option  value="G1">G1</option>
        <option value="G2">G2</option>
        <option value="G3">G3</option>
    </select>
    <input type="submit" value="送出" class="button" />
    <input type="reset" value="重填" class="button" />
</form>  
</body>
</html>