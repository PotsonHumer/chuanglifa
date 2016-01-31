<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 800, // Slide transition speed
        pauseTime: 5000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>
<script type="text/javascript">
$("#main_4").super_slide_box({
			SHOW_NUM : 3, //一次顯示數量
			TYPE : 0, // 0 => 移動 (slide) , 1 => 漸層 (fade)
			OUTER_WIDTH : 20, //額外間距
			ACT_TIMER : 1400, //動作間隔時間
			POSITION : 0, // 起始位置
			AUTO : true, // true => 自動動作 , false => 手動動作
			WIDTH : 150, // 圖片大小
			HEIGHT : 150, // 圖片高度
			HOVER : true, // 滑鼠hover停止動作 , true => 停止 , false => 不停止
			CYCLE : true, // 循環 / 回放切換 , true => 循環 , false => 回放
			VERTICAL : false, //移動方向 , true => 垂直 , false => 水平
		},function(KEY){
			$("#main_4_keyshow").html("KEY : "+ KEY);
		});
</script>
<script type="text/javascript">
$("#marquee_block").marquee_box({
			ACT_TIMER : 15, //每像素移動時間
			HOVER : true, // 滑鼠hover停止動作 , true => 停止 , false => 不停止
			AFTER :  function() {  }, // 動作後執行擴充
		});
</script>
<script type="text/javascript">
	$("#main_2").resize(function(){
		footer_counter();
	});
	$(".mag").mag_box({
			W : 250, //放大鏡寬
			H : 250, //放大鏡高
		});
</script>
<script type="text/javascript">
$(function(){
    $("#gotop").click(function(){
        jQuery("html,body").animate({
            scrollTop:0
        },1000);
    });
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 300){
            $('#gotop').fadeIn("fast");
        } else {
            $('#gotop').stop().fadeOut("fast");
        }
    });
});
</script>
<script type="text/javascript">
$(document).scroll_box({
			ACT_TIMER : 1500, //動作花費時間
		}, function(DATA){
			//callback
		});
</script>
<!--<script type="text/javascript">
$(document).ready(function() {
    $(".pr_box img").hoverpulse({
        size: 25,  // 圖片縮放的大小
        speed: 400 // 圖片變換大小的速度 
    });
});
</script>-->
<script type="text/javascript">
$("#show .adv_box .close a").click(function(){
  $("#show").fadeOut(1500);
});
</script>