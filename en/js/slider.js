// JavaScript Document
$(function(){

		   
	$(".menu li a").eq(0).css({color:"#FFF"});//一開始的按鈕hover顏色設定
	   
	$(".menu li").mouseover(
							  
		function(){
		var NN=$(this).position().left;
		var WW=$(this).width();
		//alert(WW);
		$("#pass").stop().animate({left:NN},550,"easeOutQuart","jswing");//移動速度+效果
		$("#pass").css({width:WW});
		$(".menu li a").css({color:"#FFFFFF"});//按紐顏色
		$(this).find("a").css({color:"#FFF"});//按紐hover顏色
		}).filter('.pass_on').mouseover();	 
		
		$("#menu").mouseleave(function(){
		var AA=$(".pass_on").position().left;
		var BB=$(".pass_on").width();
		$("#pass").stop().animate({left:AA},550,"easeOutQuart","jswing");   
		$("#pass").css({width:BB});
		$(".menu li a").css({color:"#FFFFFF"});
		$(".pass_on a").css({color:"#FFF"});
	})


});