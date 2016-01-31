<?php
$root = '/';
function lang_switch_sync($root){
	$lang_handle = str_replace('/',"\\/",$root);
	return preg_replace('/'.$lang_handle.'/','',$_SERVER["REQUEST_URI"],1);
}
$uri = lang_switch_sync($root);
?>
<div class="outer" id="head">
	<div class="logo">
    	<a href="index.php"><img src="img/WEB_TOP.png" width="900" height="80" border="0" /></a>
    	<div class="Language">
			<select name="jumpMenu"  onChange="location = this.options[this.selectedIndex].value;">
            	<option value="#"> LANGUAGE</option>
            	<option value="/<?php echo $uri ?>"> 繁體(Traditional)</option>
             	<option value="/en/<?php echo $uri ?>"> 英文(English)</option>
            </select>
		<script>
            $(function(){
                $("select[name=jumpMenu]").change(function(){
                    var LAN_SRC = $(this).find("option:selected").val();
                    window.open(LAN_SRC,'_self')
                });
            });
        </script>
        </div>
    </div>
	<div class="menu">
            <ul>
                <li><a href="index.php" title="Index">首頁</a></li>
                <li><a href="about.php?a_id=1" title="Brand story">品牌故事</a></li>
                <li><a href="business.php?b_id=1" title="Business">服務項目</a></li>
                <li><a href="product.php" title="Product">產品介紹</a></li>
                <li><a href="order.php?a_id=3" title="Order Process">Q&A</a></li>
                <li><a href="news.php?a_id=1" title="News">最新消息</a></li>
                <li><a href="contact.php" title="Contact Us">聯絡我們</a></li>
                <!--<li><a href="#" title="Site Map">網站地圖</a></li>-->
            </ul>
        </div>
</div>
<div class="skype_box">
	<img src="img/ols.png" width="180" height="50" border="0" />
    <div class="watch">您好，可直接洽詢客服人員</div>
    <div class="contact_box">
    	<div class="sk_name">Patina</div>
        <div class="sk_img"><a href="skype:chuanglifa?chat"><img src="img/skype.jpg" width="60" height="20" border="0" /></a></div>
    </div>
    <div class="contact_box">
    	<div class="sk_name">ANKH - 設計</div>
        <div class="sk_img"><a href="skype:kyo87077421@hotmail.com?chat"><img src="img/skype.jpg" width="60" height="20" border="0" /></a></div>
    </div>
    <div class="watch">
    ※小叮嚀<br />點擊人名右側(Chat)，即可與服務人員進行對談。<br /><br />
    亦可與該區業務經理聯絡<br /><br />
	(北部)李中銘0986-270198<br />
    (中部)戴文祥0926-835383<br />
    (南部)李朋憲0973-801658<br /><br />
    上班時間<br/>
    週一~周五09:00~18:00
    </div>
</div>