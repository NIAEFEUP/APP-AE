$(document).ready(function(){
	
	
	$("header ul li div").css("visibility","hidden");
	
	$("header ul li").hover(function(){
		
		
		$(this).children("div").css("visibility","visible");
	},function(){
		
		
		$(this).children("div").css("visibility","hidden");
	});
	
	
});