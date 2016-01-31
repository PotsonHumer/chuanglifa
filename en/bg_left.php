<div id="left">
	<div class="logo"><a href="chuanglifa_bg.php"><img src="img/LOGO-bg.png" width="200" height="150" border="0" /></a></div>
    <div class="menu_box">
		<div class="roject"><a href="#">品牌故事</a></div>
        <ul class="st_01">
        <?php
		while($row_1 = mysqli_fetch_array($result_1_hover)){
			?>
        	<li><a href="bg_about.php?a_id=<?php echo $row_1['id']?>"><?php echo $row_1['project']?></a></li>
		<?
		}
		?>
        </ul>
        <div class="roject"><a href="#">服務項目</a></div>
        <ul class="st_01">
        <?php
		while($row_2 = mysqli_fetch_array($result_2_hover)){
			?>
        	<li><a href="bg_business.php?bs_id=<?php echo $row_2['id']?>"><?php echo $row_2['project']?></a></li>
		<?
		}
		?>
        </ul>
        <div class="roject"><a href="#">產品介紹</a></div>
        <ul class="st_01">
        <?php
		while($row_5 = mysqli_fetch_array($result_5_hover)){
			?>
        	<li><a href="bg_product_CLASS.php?cl_id=<?php echo $row_5['id']?>"><?php echo $row_5['pr_name']?></a></li>
		<?
		}
		?>
        </ul>
        <div class="roject"><a href="#">Q&A</a></div>
        <ul class="st_01">
        <?php
		while($row_3 = mysqli_fetch_array($result_3_hover)){
			?>
        	<li><a href="bg_order.php?qa_id=<?php echo $row_3['id']?>"><?php echo $row_3['project']?></a></li>
		<?
		}
		?>
        </ul>
        <div class="roject"><a href="#">最新消息</a></div>
        <ul class="st_01">
        <?php
		while($row_4 = mysqli_fetch_array($result_4_hover)){
			?>
        	<li><a href="bg_news.php?news_id=<?php echo $row_4['id']?>"><?php echo $row_4['new_title']?></a></li>
		<?
		}
		?>
        </ul>
    </div>
    <div class="Copyright">
    	Maintain - <br />
        HENGZUAN Art studio<br />
    	Producer - ANKH<br />
    	Date - 2014/06/20<br /><br />
        User - <font color="#99CC00"><?php echo $row_login['admin']?></font><br />
        ▶ [ <a href="logout.php">系統登出System logout</a> ]<br />
        <br />
        ▶ <a href="index.php" target="_new">前台預覽</a>
    </div>
    <br />
</div>