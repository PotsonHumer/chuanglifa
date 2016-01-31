<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
$upload_dir = "./img/";
$upload_file = $upload_dir.iconv("UTF-8","Big5",$_FILES["imge"]["name"]);

//將上傳的檔案由暫存目錄移動至指定目錄
if(move_uploaded_file($_FILES["imge"]["tmp_name"],$upload_file)){
	echo '上傳成功'.'<hr>';
	//顯示檔案資訊
	echo '檔案名稱 : '.$_FILES["imge"]["name"].'<br/>';
	echo '暫存檔名 : '.$_FILES["imge"]["tmp_name"].'<br/>';
	echo '檔案大小 : '.($_FILES["imge"]["size"]/1024) .'kb<br/>';
	echo '檔案種類 : '.$_FILES["imge"]["type"].'<br/>';
	echo "<a href='javascript:history.back()'>繼續上傳</a>";
	}else{
		echo '上傳失敗，請重新上傳'.$_FILES["imge"]["error"].'<br/>';
		echo "<a href='javascript:history.back()'>重新上傳</a>";
	}
?>
</body>
</html>