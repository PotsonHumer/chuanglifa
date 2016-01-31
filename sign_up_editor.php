<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/sup_style.css" type="text/css" rel="stylesheet" />
<title>亞太會員註冊</title>
</head>
<?php 
include("db_localhost/dbc_link.php"); 

//$query = "SELECT * FROM bg_sign WHERE user_name = '".$_SESSION['user_name']."'";
$query = "SELECT * FROM bg_sign WHERE user_name = 'aaaaaaaa'";
$result = mysqli_query($dbc,$query)
	or die ('資料庫連結失敗');
	
$row = mysqli_fetch_array($result);
?>
<body>
<div id="WP">
	<div id="head_box">
    	<div class="head">
        	<div class="logo ot"><img src="img/sup_logo.png" title="會員註冊" /></div>
        </div>
    </div>
    <div id="main_box">
    	<div class="main ot">
        	<form action="sign_up_insert.php" method="post">
            	<input type="hidden" name="s_id" />
                <div class="tnput_t">姓　名 : <input type="text" placeholder="填寫正確姓名，以確保會員使用權益" name="s_name" value="<?= $row['s_name']?>" /> * 必填欄位</div>
                <div class="tnput_t">性　別 : <?= $row['myradio']?><input type="radio" value="男" name="myradio" />男<input type="radio" value="女" name="myradio" />女</div>
                <div class="tnput_t">出生日期 : <input type="date" placeholder="" name="s_date" value="<?= $row['s_date']?>" /> * 必填欄位</div>
                <div class="tnput_t">ＩＤ身分證字號 : <input type="text" placeholder="填寫正確字號，以確保會員使用權益" name="id_number" value="<?= $row['id_number']?>" /> * 必填欄位</div>
                <div class="tnput_t">連絡電話 : <input type="tel" placeholder="填寫正確字號，以確保會員使用權益" name="tel" value="<?= $row['tel']?>" /> * 必填欄位</div>
                <div class="tnput_t">連絡地址 : <input type="text" placeholder="請填寫完整地址" name="addr" value="<?= $row['addraddr']?>" /> * 必填欄位</div>
                <div class="tnput_t">QQ通訊 : <input type="text" placeholder="QQ或微信" name="qq_number" value="<?= $row['qq_number']?>" /> * 必填欄位</div>
                	<fieldset>
                		<legend>個人匯款資料(需確實填寫正確)</legend>
                        	銀行戶名 : <input type="text" placeholder="填寫戶名" name="bank_name" class="min" value="<?= $row['bank_name']?>"><br /><br />
                            銀行帳號 : <input type="text" placeholder="填寫銀行帳號" name="bank_account" value="<?= $row['bank_account']?>"> * 必填欄位，以確保獎金能正確匯入<br /><br />
                            行號 : <input type="text" placeholder="填寫行號" name="line_number" class="min" value="<?= $row['line_number']?>">
                            行別(分行號) : <input type="text" placeholder="填寫行別" name="branch" class="min" value="<?= $row['branch']?>">
                    </fieldset>
                <div class="tnput_t">信　箱 : <input type="email" placeholder="填寫正確信箱，以方便連絡" name="email" value="<?= $row['email']?>" /> * 必填欄位</div>
                <div class="tnput_t"><input type="submit" placeholder="填寫完成，送出" /><input type="reset" value="清除重新填寫" /></div>
            </form>
        </div>
    </div>
    <div id="footer_box">
    	<div class="footer ot">
        	<ul>	
            	<li><a href="#">公司介紹</a> |</li>
                <li><a href="#">人才招募</a> |</li>
                <li><a href="#">會員中心</a> |</li>
                <li><a href="#">客戶隱私權政策</a> |</li>
                <li><a href="#">聯絡我們</a></li>
            </ul>
            <div class="opyright">© YATAI 2015 HENGZUAN All Rights Reserved.</div>
        </div>
    </div>
</div>
</body>
</html>