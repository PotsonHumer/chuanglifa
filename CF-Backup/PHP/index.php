<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/php.css"rel="stylesheet"  type="text/css" />
<title>無標題文件</title>
</head>

<body>
<div id="box">
<?php	

for($y=1;$y<=8;$y++){
	for($x=1;$x<=8;$x++){
		$c = $x + $y;
		if($c % 2 == 0){
			//偶數
			$class = 'A';
		}else{
			//奇數
			$class = 'B';
		}
		
		echo '<div class="'.$class.'"></div>';
	}
}
?>
</div>
</body>
</html>