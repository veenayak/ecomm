<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('imports.php');?>
	<style type="text/css">
		.desc,.stock,.cat{
			display: none;
		}
		.bg-dark{
			position: relative;
		}
		@media only screen and (min-width:1220px){			
			.recom{
			    width: 80%;
			    margin: auto;
			    float: left;
			    max-width: 1220px;
			    margin-top: 40px;
			}
			.recom>div{
			    width: 20%;
			    display: inline-block;
			    max-width: 220px;
			    margin-bottom: 20px;
			}
		}
		@media only screen and (max-width:1220px){
			.recom{
			    width: 100%;
			    float: left;
			    margin-top: 20px;
			    padding: 20px 0;
			}
		}
		@media only screen and (max-width : 768px){
			.recom>div{
			    width: 50%;
			    float: left;
			    display: none;
			    margin-bottom: 20px;
			}
		}		
		@media only screen and (min-width:768px){
			.recom>div{
			    width: 20%;
			    display: inline-block;
			    max-width: 220px;
			    margin-bottom: 20px;
			}
		}
	</style>
</head>
<script type="text/javascript">
		$(document).ready(function(){;			
			$("#bag").on("click",function(){
				$("#cart").show();				
				if($(window).innerWidth()<768){
					$("#cart").animate({width: 100+"%"},function(){
						$("#cart").animate({padding: 20+"px" });
						$("#cart i").show();
					});
				}
				else{
					$("#cart").animate({width: 400+"px"},function(){
						$("#cart").animate({padding: 20+"px" });
						$("#cart i").show();
					});
				}
			});
			$("#cart i").on("click",function(){
				$(this).hide();
				$("#cart").animate({padding: 10+"px"});
				$("#cart").animate({width:0},function(){
					$("#cart").hide();
				});
			});
		});


		$(document).on("click",".left",function(){	
			$(".recom br").remove();
			var rec0 = $(this).parents(".secd").find(".recom");
			var rec = $(this).parents(".secd").find(".recom>div");
			var length = $(rec).length;
			if(length>4){
				// $(this).parents("section").animate({opacity:0.7}); 
				initial = 0;
				while(initial!=4){
					$(rec).eq(initial).animate({opacity:0.5},400,function(){
						$(this).remove();
						$(this).css("opacity","1");
						$(rec0).append($(this));
					});
					initial++;						
				}

			}
			else{
				alert("no more items");
			}
		});
		$(document).on("click",".right",function(){			
			var initial = 0;
			var ini = 0;
			$(".recom br").remove();
			var rec0 = $(this).parents(".secd").find(".recom");
			var rec = $(this).parents(".secd").find(".recom>div");
			var length = $(rec).length;
			var cont;
			console.log(length);
			if(length>4){
				// $(this).parents("section").animate({opacity:0.7}); 
				initial = 0;
				ini = length - 4;
				console.log(ini);
				while(initial!=ini){
					$(rec).eq(initial).animate({opacity:0.5},400,function(){
						$(this).remove();
						$(this).css("opacity","1");
						$(rec0).append($(this));
					});
					initial++;							
				}
			}
			else{
				alert("no more items");
			}
		});	
	</script>
</head>
<body>
	<main class="container-fluid">
		<div class=" row fird">
			<?php include('nav.php');?>
		</div>
	</main>	
	<section class="container-fluid sec1">
		<div class=" row secd">
			<div>
				<h2>Items</h2>
				<p></p>
			</div>
			<div class="recom">

				
		</div>
	</section>
	<?php include('cart.php');?>
	<?php include('footer.php');?>
</body>
</html>
