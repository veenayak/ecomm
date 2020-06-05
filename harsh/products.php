<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('imports.php');?>
	<style type="text/css">
		.page-item:first-child .page-link{
		    border-top-left-radius: 10px;
		    border-bottom-left-radius: 10px;
    		color: #868686;
		}
		.page-item:last-child .page-link{
		    border-top-right-radius: 10px;
		    border-bottom-right-radius: 10px;
    		color: #868686;
		}
		.recom>div{
	        width: 30%;
		    text-align: left;
		    display: inline-block;
		    margin: 10px;
		    padding: 15px;
		    box-shadow: 0px 2px 10px #e6e6e6;
		    border-radius: 15px;
		}
		.recom img{
			width: 65px;
			padding: 0;
			float: left;
			margin-bottom: 15px;
			border-radius: 10px;
		}
		.recom button{
			float: right;
		}
		.name{
		    text-align: left;
		    display: inline;
		    float: left;
		    padding: 0;
		    padding: 0 10px;
		    font-size: 17px;
		}
		.stock{
		    position: absolute;
		    left: -5px;
		    top: -5px;
		    border-radius: 20px;
		    background: #e8d384;
		    padding: 2px 5px;
		    color: #fff;
		}
		.rate{
		    float: left;
		    clear: right;
		    padding: 0 10px;
		    color: #666;
		}
		.desc{
		    float: left;
    		clear: both;
		    padding: 10px 0px;

		}
		.amount{
		    float: right;
		    text-align: right;
		    font-size: 20px;
		    font-weight: bold;
		}
		@media only screen and (min-width:1220px){			
			.left,.right{
				display: none;
			}
			.recom{
			    width: 80%;
			    margin: auto;
			    float: left;
			    max-width: 1220px;
			    margin-top: 40px;
			}
		}
		@media only screen and (max-width:1220px){

		}
		@media only screen and (max-width : 768px){
			.recom>div{
				width: 100%;
				margin: 0;
				margin-bottom: 10px;
			}
		}		
		@media only screen and (min-width:768px){
			
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
				<h2>Cat1</h2>
				<p>lorm ipsum</p>
			</div>
			<div class="recom">

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>


				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
			</div>
			<div>
				<ul class="pagination">
				  	<li class="page-item left"><a class="page-link"><i class="fas fa-angle-left fa-lg"></i></a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">1</a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">2</a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item right"><a class="page-link"><i class="fas fa-angle-right fa-lg"></i></a></li>
				</ul>
				<span>view all<i class="fas fa-angle-double-down"></i></span>								
			</div>
		</div>
	</section>

	<section class="container-fluid sec1">
		<div class=" row secd">
			<div>
				<h2>Cat1</h2>
				<p>lorm ipsum</p>
			</div>
			<div class="recom">

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>


				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
			</div>
			<div>
				<ul class="pagination">
				  	<li class="page-item left"><a class="page-link"><i class="fas fa-angle-left fa-lg"></i></a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">1</a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">2</a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item right"><a class="page-link"><i class="fas fa-angle-right fa-lg"></i></a></li>
				</ul>
				<span>view all<i class="fas fa-angle-double-down"></i></span>								
			</div>
		</div>
	</section>

	<section class="container-fluid sec1">
		<div class=" row secd">
			<div>
				<h2>Cat1</h2>
				<p>lorm ipsum</p>
			</div>
			<div class="recom">

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>


				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
			</div>
			<div>
				<ul class="pagination">
				  	<li class="page-item left"><a class="page-link"><i class="fas fa-angle-left fa-lg"></i></a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">1</a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">2</a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item right"><a class="page-link"><i class="fas fa-angle-right fa-lg"></i></a></li>
				</ul>
				<span>view all<i class="fas fa-angle-double-down"></i></span>								
			</div>
		</div>
	</section>

	<section class="container-fluid sec1">
		<div class=" row secd">
			<div>
				<h2>Suggested products</h2>
				<p>lorm ipsum</p>
			</div>
			<div class="recom">

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>


				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>

				<div>
					<div>
						<button><i class="fas fa-shopping-cart"></i></button>
						<img src="https://colorlib.com/preview/theme/theplaza/img/intro/4.jpg" class="image">
						<p class="name">qweqwe<span class="stock">10</span></p>
						<p class="rate"><i class="fas fa-users"></i>&nbsp;2053</p>
<!-- 						<p class="desc">description</p>
-->						<p class="wish"><i class="far fa-heart"></i></p>
						<p class="amount">Rs40</p>
					</div>
									
				</div>
			</div>
			<div>
				<ul class="pagination">
				  	<li class="page-item left"><a class="page-link"><i class="fas fa-angle-left fa-lg"></i></a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">1</a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">2</a></li>
		    	  	<li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item right"><a class="page-link"><i class="fas fa-angle-right fa-lg"></i></a></li>
				</ul>
				<span>view all<i class="fas fa-angle-double-down"></i></span>								
			</div>
		</div>
	</section>
	<?php include('login.php');?>
	<?php include('cart.php');?>
	<?php include('footer.php');?>
</body>
</html>
