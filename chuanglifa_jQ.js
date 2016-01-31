// JavaScript Document
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
})