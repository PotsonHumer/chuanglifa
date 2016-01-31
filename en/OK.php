        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />       
			   <?php
			   
					include("Mysql_host.php");
					$seldb = @mysql_select_db("chuanglifa");
					if (!$seldb) {
					die("資料庫選擇失敗!");
					}else{
					echo "資料庫選擇成功";
					}
				?>