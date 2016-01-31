<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/php.css"rel="stylesheet"  type="text/css" />
<title>登入畫面</title>
</head>

<body>
<div class="login">
    <form action="connect.php" method="post">
        管理者帳號 : <input type="text" name="m_user" /><br />
        管理者密碼 : <input type="password" name="m_password" /><br />
        <input type="submit" value="會員登入"/>
        <input type="button" value="會員登出" onclick="location.href='logout.php'">
    </form>
</div>
</body>
</html>