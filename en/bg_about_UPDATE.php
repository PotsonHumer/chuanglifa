<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bg_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="js/chuanglifa_jQ.js"></script>
<title>無標題文件</title>
</head>
<?php include("db_localhost/dbc_link.php"); ?>
<?php include("chbg_left.php"); ?>
<?php mysqli_close($dbc);?>

<body>
<?php include("bg_left.php"); ?>
<div id="right">
    <p>
		<?php 
        include("db_localhost/dbc_link.php");
        
        $id = $_GET["up_id"];
		$fb_title = $_POST["web_title"];
		$fb_imge = $_POST["fb_imge"];
		$fb_ds = $_POST["fb_ds"];
        $project = $_POST['project'];
        $en_name = $_POST['en_name'];
        $textarea = $_POST['textarea'];
        $date = $_POST['date'];
        $editor = $_POST['editor'];
        
        $query = "UPDATE bg_about SET id='".$id."',web_title='".$fb_title."',fb_imge='".$fb_imge."',fb_ds='".$fb_ds."',project='".$project."',en_name='".$en_name."',textarea='".$textarea."',date='".$date."',editor='".$editor."' WHERE id='".$id."'";
        
        $result = mysqli_query($dbc,$query)
            or die ('資料庫連結失敗');	
        
        mysqli_close($dbc);
        
        echo '成功修改一則最新消息<br>';
        echo '以下為資料確認<br><br>';
        echo '項目 : '.$project.'<br>';
        echo '英文 : '.$en_name.'<br>';
        echo '內容 : '.$textarea.'<br>';
        echo '日期 : '.$date.'<br>';
        echo '作者 : '.$editor.'<br>';
        echo '<br>';
        echo '<a href="chuanglifa_bg.php">返回首頁</a>';
        ?>
    </p>
</div>
</body>
</html>