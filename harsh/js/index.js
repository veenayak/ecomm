$(window).on("scroll",function(){
	console.log($(window).scrollTop()+"asdsd"+$(document).height()/3);
	if($(window).scrollTop()>$(document).height()/3){
		if($("#up").css("opacity")==0){
			$("#up").animate({opacity:1})
		}
	}
	else{
		if($("#up").css("opacity")==1){
			$("#up").animate({opacity:0});	
			
		}
	}
});	
$(document).ready(function(){
	$("#up").click(function(){
		$("html").animate({scrollTop:0},800);
	});
	if($(window).innerWidth()<768){
		$("#search_button").click(function(){
			if($("#search").css("display")=="none"){
				$("#search").addClass("full1");
				$("#search").css("width","85%");
				$("#search+button").addClass("full2");
				$("#search+button").css("width","15%");
				$("#search_background").show();
			}
			else{
				// $("#search").removeClass("full1");
				// $("#search").css("width","auto");
				// $("#search+button").removeClass("full2");
				// $("#search+button").css("width","auto");
				// $(this).hide();
			}
		});
		$("#search_background").click(function(){
			$("#search").removeClass("full1");
			$("#search").css("width","auto");
			$("#search+button").removeClass("full2");
			$("#search+button").css("width","auto");
			$(this).hide();
		});
	}
	$("#cart button").click(function(){
		window.location.assign("checkout.php");
	});
});