<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>CHUANGLIFA - 登入系統</title>
<style type="text/css">
body{
	background: #333;
}
</style>
</head>

<body>
<div id="login">
	<img src="img/LOGO-NEW.png" width="260" height="130" border="0"/>
	<form action="connect.php" method="post">
    	<input type="text" name="m_user" placeholder="管理者帳號" /><br />
        <input type="text" name="m_password" placeholder="管理者密碼" /><br />
        <input type="submit" value="LOGIN" /><input type="reset" value="RESET" />
    </form>
</div>
</body>
</html>