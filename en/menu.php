<?php
$root = '/en/';
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
        </div>
		<script>
            $(function(){
                $("select[name=jumpMenu]").change(function(){
                    var LAN_SRC = $(this).find("option:selected").val();
                    window.open(LAN_SRC,'_self')
                });
            });
        </script>
    </div>
	<div class="menu">
            <ul>
                <li><a href="index.php" title="INDEX">INDEX</a></li>
                <li><a href="about.php?a_id=1" title="BRAND STORY">BRAND STORY</a></li>
                <li><a href="business.php?b_id=1" title="BUSINESS">BUSINESS</a></li>
                <li><a href="product.php" title="PRODUCT">PRODUCT</a></li>
                <li><a href="order.php?a_id=3" title="ORDER PROCESS">ORDER PROCESS</a></li>
                <li><a href="news.php?a_id=1" title="NEWS">NEWS</a></li>
                <li><a href="contact.php" title="CONTACT US">CONTACT US</a></li>
                <!--<li><a href="#" title="Site Map">網站地圖</a></li>-->
            </ul>
        </div>
</div>
<div class="skype_box">
	<img src="img/ols.png" width="180" height="50" border="0" />
    <div class="watch">start to chat with us</div>
    <div class="contact_box">
    	<div class="sk_name">LISA </div>
        <div class="sk_img"><a href="skype:pai.lisa1?chat"><img src="img/skype.jpg" width="60" height="20" border="0" /></a></div>
    </div>
    <div class="watch">or...Leave a message. I will get back to you shortly.</div>
</div>