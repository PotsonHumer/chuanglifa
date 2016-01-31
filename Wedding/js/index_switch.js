// JavaScript Document

function delay(){
	TIMER = setTimeout("bg_img_switch()",3000);
}

function bg_img_switch(){
	var BG_NUM = $(".bg_img").length;
	var BG_INDEX = $(".bg_img.current").index(".bg_img") + 1;
	
	$(".bg_img.current").removeClass("current").fadeOut("slow");
	$(".Preview_box").css({ "outline":"none" });
	
	if(BG_INDEX < BG_NUM){
		$(".bg_img:eq("+ BG_INDEX +")").addClass("current").fadeIn("slow");
		$(".Preview_box:eq("+ BG_INDEX +")").css({ "outline":"2px solid #FFF" });
	}else{
		$(".bg_img:eq(0)").addClass("current").fadeIn("slow");
		$(".Preview_box:eq(0)").css({ "outline":"2px solid #FFF" });
	}
		
	delay();
}

function bg_img_bottom(KEY){
	var BG_NUM = $(".bg_img").length;
	var BG_INDEX = $(".bg_img.current").index(".bg_img");
	
	if(KEY == 1){
		BG_INDEX = BG_INDEX - -1;
	}else{
		BG_INDEX = BG_INDEX - 1;
	}
	
	$(".Preview_box").css({ "outline":"none" });
	$(".Preview_box:eq("+ BG_INDEX +")").css({ "outline":"2px solid #FFF" });
	
	if(BG_INDEX < BG_NUM && BG_INDEX >= 0){
		$(".bg_img.current").removeClass("current").fadeOut("slow");
		$(".bg_img:eq("+ BG_INDEX +")").addClass("current").fadeIn("slow");
	}
	
	clearTimeout(TIMER);
	delay();
}

function bg_img_select(){	
	$(".Preview_box").click(function(){
		var BG_INDEX = $(".Preview_box").index(this);
		var CURRENT_INDEX = $(".bg_img.current").index(".bg_img");
		
		$(".Preview_box").css({ "outline":"none" });
		$(this).css({ "outline":"2px solid #FFF" });
		
		if(BG_INDEX != CURRENT_INDEX){
			$(".bg_img.current").removeClass("current").fadeOut("slow");
			$(".bg_img:eq("+ BG_INDEX +")").addClass("current").fadeIn("slow");
		}
		
		clearTimeout(TIMER);
		delay();
	});
}

$(function(){
	$(".bg_img").not(".bg_img:eq(0)").hide();
	$(".bg_img:eq(0)").addClass("current");
	
	delay();
	
	$(".arrow").click(function(){
		var INDEX = $(".arrow").index(this);
		
		bg_img_bottom(INDEX);
	});
	
	bg_img_select();
});

function win_size(){
	var div_widch = $(window).width();
	var div_height = $(window).height();
	}
$(function(){	
	win_size();
	$(window).resize(function(){
		win_size();
	});
});
