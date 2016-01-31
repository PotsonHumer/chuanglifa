// JavaScript Document
function footer_counter(){
	var HTML_H = $("html").outerHeight();
	var BODY_H = $("body").outerHeight();
	var MAIN_H = $("#main_box").outerHeight();
	var LINE_H = 31;//$("#line").outerHeight();
	var TOP_H = 5;
	var HEAD_H = $("#head").outerHeight();
	
//	var FOOTER_TOP = MAIN_H - -LINE_H - -HEAD_H - -TOP_H;
	//IMG_LOAD(FOOTER_TOP,HTML_H);
	var FOOTER_TOP = MAIN_H - -LINE_H - -HEAD_H - -TOP_H;
	
	if(FOOTER_TOP > (HTML_H - 135)){
		$("body").animate({ "height":FOOTER_TOP + 200 +"px" });
	}
}

//重新讀取圖片
/*function IMG_LOAD(FOOTER_TOP,HTML_H){
	var IMG_H_PLUS = 0;
	var IMG_NUM = $(".right").find("img").length;
	
	$(".right").find("img").each(function(KEY){
		var IMG = new Image();
		IMG.src = $(this).attr("src");
		var IMG_LOAD = IMG.complete;
		
		$(IMG).load(function(){
			if(IMG_LOAD == false){
				IMG_H_PLUS = IMG_H_PLUS + IMG.height;
			}
			
			if((KEY - -1) == IMG_NUM){
				FOOTER_TOP = FOOTER_TOP - -IMG_H_PLUS;
				if(FOOTER_TOP > (HTML_H - 135)){
					$("body").animate({ "height":FOOTER_TOP + 200 +"px" });
				}
			}
		});
	});
}*/

$(function(){
	footer_counter();
	
	$(".roject").click(function(E){
		var UL_NUM = $(this).next("ul").length;
		
		if(UL_NUM > 0){
			E.preventDefault();
			
			$(this).next("ul").slideToggle(500,function(){
				footer_counter();
			});
		}
	});	
	// footer counter
});

/* 使用方法

	$(document).scroll_box({
		ACT_TIMER : 1000, //動作花費時間
	}, function(DATA){
		//callback
	});
	
	
	**********************************************************************
	INFO :
	連結設為 #document 即可實現卷軸置頂功能
*/

(function($){
	$.fn.scroll_box = function(OPTION,CALLBACK){
		var SCROLL = jQuery.extend({
			ACT_TIMER : 1000, //動作花費時間
			
			//----
			//AFTER_TIMER : 0,
		}, OPTION);
				
		var $BODY = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
		
		$(document).on("click","a",function(E){
			try{
				var LOCATION = $(this).attr("href");
				var LOCATION_TOP = (LOCATION == "#document")?0:$("*[name="+ LOCATION.replace("#","") +"]").offset().top;
			}
			catch(e){ return true; }
			
			E.preventDefault();
			$BODY.animate({ scrollTop: LOCATION_TOP }, SCROLL.ACT_TIMER,function(){
				CALLBACK(LOCATION);
			});
		});
	};
})(jQuery);

$(function(){	
	$(".pr_imges .imges img").mouseenter(function(){
		var change = $(this).attr("src");
		$("#s0").attr("src",change);
		$(".pr_imge img").fadeOut(100);
		$(".pr_imge img").fadeIn(500);
	});
});