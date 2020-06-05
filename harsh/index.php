<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
		include('imports.php');
	?>
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
		#main2{
			position: relative;
		}
		#main2>div{
			padding-bottom: 10%;
		}
		#main2 img{
			width: 100%;
			height: 80vh;
			object-fit: cover;
			filter: brightness(0.8);
			clip-path: circle(20%);
		}
		.maind{
			position: absolute;
		    left: 0;
		    width: 100%;
		    top: 50%;
		    transform: translateY(-50%);
		    text-align: center;
		}
		#main2>div:first-child:after{
		    content: "";
		    position: absolute;
		    bottom: 90px;
		    top: 0;
		    left: 0;
		    background: rgb(233, 237, 245);
		    width: 100%;
		    z-index: -1;
		    clip-path: circle(21%);
		}
		.maind div:nth-child(1){
			text-align: left;
			margin: auto;
		}		

		/*SECTION*/
		.sec4 h2{
			margin-bottom: 20px;
		}
		.sec4>div>div:first-child{
			width: 100%;
		}		
		/*SECTION END*/
		/*Recom*/
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
		.recom button:focus{
			box-shadow: 0;
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
		/*Recom*/
		/*TESTIMONIALS*/	
		#test{
			overflow-x: hidden;
		    padding: 20px 5px;
			white-space: nowrap;	
			transition: all 2s;
		}
		#test p{
			white-space: initial;
		}
		#test div{
		    width: 33.33%;
		    display: inline-block;
		    opacity: 0.7;
		    transform: scale(0.7);
		    transition: all 2s;
		    position: relative;
		}
		#test>div p:last-child{
			text-align: right;
		}
		/*TESTIMONIALS END*/
		/*SEC2 CONTACT*/	
		.con>div{
		    border-radius: 10px;
		    text-align: left;
		    overflow: hidden;
		}
		.con button{
			float: right;
			margin-top: 20px;
		}
		.con label{
			float: left;
		}
		.con h2{
			margin-bottom: 20px;
		}
		/*SEC2 CONTACT END*/			

		@media only screen and (min-width:768px){
			.maind h1{
		    	font-size: 5rem;
		    	font-weight: bold;
			    color: #fff;
			    padding: 10px 20px;
			    color: #e9edf5!important;
			    text-shadow: 0px 2px 2px #a9b3c7;
			}
			.maind div{
				width: 40%;
			}
			.con{		    
			    position: relative;
			    display: inline-block;
			    width: 65%;
			    float: left;
			    padding: 15px;
			}
			.con:first-child{
				width: 100%;
			}
			.con:nth-child(2){
				width: 55%;
			}
			.con:nth-child(3){
				width: 45%;
			}
			.con>div{
		    	box-shadow: 0px 2px 10px #e6e6e6;
				padding: 20px;
			}
			.con iframe{
				box-shadow: 0px 2px 10px #e6e6e6;
			}
			#test div{
			    padding: 0px 50px;
			}
			#test div:nth-child(2){
				opacity: 1;
				transform: scale(1);
				transition: all 1s;
			}		
		}
		@media only screen and (min-width:1220px){
			main .row>div{
				position: relative;
			}
			.sec2{
				overflow: hidden;
				clear: both;
				width: 80%;
				max-width: 1220px;
			}
			.sec2 img{
				width: 100%;
			    object-fit: cover;
			    float: left;
			    height: 575px;
			    border-radius: 10px;
			}
			.con iframe{
				width: 100%;
				padding: 0px 0px 0px 0px;
				border-radius: 10px;
			}

			.recom{
				width: 80%;
				margin: auto;
				float: left;
				max-width: 1220px;
				margin-top: 40px;
			}
			#test{
				width: 80%;
				max-width: 1220px;
				margin: auto;
			}
			#test img{
				width: 100%;
				object-fit: cover;
				max-width: 220px;
				margin-bottom: 20px;
			} 
		}
		@media only screen and (max-width:1220px){
			main{
				padding: 0px!important;
			}
			main .row{
				margin: 0px;
			}
			.secd {
				position: relative;
			}
			.con iframe{
				width: 100%;
			    border-radius: 10px;
			}
			.recom{
			    width: 100%;
			    float: left;
			    margin-top: 20px;
			    padding: 20px 0;
			}
			.recom br{
				display: none;
			}
			.secd>button{
				width: 200px;
				float: right;
			}
			#test{
   			    transition: all 2s;
				white-space: unset;
			}
			#test img{
			    width: 65px;
			    margin-bottom: 5px;
			    object-fit: cover;
			} 
			#test div{
		        text-align: left;
			    width: 100%;
			    margin-bottom: 20px;
			    padding: 15px;
			    box-shadow: 0px 2px 10px #e6e6e6;
			    border-radius: 15px;
				opacity: 1;
				transform: scale(1);
			}	
			#test i{
				font-size: 30px!important;
			}
			#test p{
				margin-top: 20px;
			}
			#test h5{
				float: right;
				font-size: 1.68rem;
			}
			.sec4>div>div:first-child{
				text-align: left;
				padding-left: 5px;
			}
			#submit{
				float: right;
			}


		}
		@media only screen and (max-width : 768px){			
			.maind h1{
	    		font-weight: bold;
			    padding: 10px 20px;
			    color: #fff;
			    color: #e9edf5!important;
			    text-shadow: 0px 2px 2px #a9b3c7;
			    text-align: left;
			}
			.maind div{
				width: auto;
			}
			.con{
				width: 100%;
				padding: 20px 10px;
			}
			.con>div{
				border: 0px;
			}
			section{
				clear: both;
			}			
			.con iframe{
				height: 200px;
			}
			.recom>div{
				width: 100%;
				margin: 0;
				margin-bottom: 10px;
			}
			#main2 img{
				width: 100%;
				height: 82vh;
				object-fit: cover;
				filter: brightness(0.8);
				clip-path: circle(25%);
			}
			#main2>div:first-child:after{
			    content: "";
			    position: absolute;
			    bottom: 0px;
			    top: 0;
			    left: 0;
			    background: rgb(233, 237, 245);
			    width: 100%;
			    z-index: -1;
			    clip-path: circle(26%);
			}
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){;
			var interval = null;
			var width = $(document).outerWidth();
			if(width>=1220){
				$("#test").mouseenter(function(){
					interval = setInterval(function(){
						child = $("#test").children("div");
						console.log(child);
						$(child[0]).remove();
						$("#test").append($(child[0]));
					},2500);
				});
				$("#test").mouseleave(function(){
					clearInterval(interval);
				});
			}
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
		$(document).ready(function(){			
			var height = $(".con:last-child").outerHeight();
			var width = $(document).outerWidth();
			if(width>=768)
			$(".con iframe").css("height",height-30);
		});
	</script>
</head>
<body>
	<?php
		include('cart.php');
	 ?>
	<main class="container-fluid">
		<div class=" row">
			<?php
				include('nav.php');
			 ?>			
		</div>
	</main>
	<div id="main2">
		<div>
			<img src="http://paperlief.com/images/fashion-wallpaper-3.jpg">
		</div>
		<div class="maind">
			<div>
				<h1>Kathpal<br>Fancy<br>Dress</h1>
			</div>

		</div>	
	</div>
	<section class="container-fluid sec1">
		<div class=" row secd">
			<div>
				<h2>New Arrivals</h2>
				<p>Shop Now</p>
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
				<div data-toggle="modal" data-target="#myModal2">
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

	<section class="container-fluid sec2" id="contact">
		<div class="con">
			<div>
				<h2>About</h2>
				<div>
					<p>You can send your feedback and we will get in touch with you asap or you can contact on 1234567890</p>
				</div>
			</div>	
		</div>		
		<div class="con">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6911.98401312211!2d76.8499341263896!3d29.979659720989957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e473c41806b9b%3A0xc1ac7aca4cc83158!2sMohan+Nagar%2C+Kurukshetra%2C+Haryana+136118!5e0!3m2!1sen!2sin!4v1553949003773!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
		</div>
		<div class="con">
			<div>
				<h2>Leave a Comment</h2>
				<div class="form-group">
				  <label for="usr">Your Name</label>
				  <input type="text" class="form-control" id="name2" placeholder="Your Name">
				</div>
				<div class="form-group">
				  <label for="email">Your Email</label>
				  <input type="email" class="form-control" id="email2" placeholder="Your Email">
				</div>
				<div class="form-group">
				  <label for="no">Your Phone</label>
				  <input type="number" class="form-control" id="phone2" placeholder="Phone Number">
				</div>
				<div class="form-group">
				  <label for="message">Message</label>
				  <textarea class="form-control" rows="4" id="message2" placeholder="Enter Message here"></textarea>
				</div>
				<button type="button" id="submit">
					<span>Send&nbsp;&nbsp;<i class="fa fa-send"></i></span>
<!-- 					<span>Send Review</span>
 -->				</button>
			</div>	
		</div>
	</section>

	<section class="container-fluid sec1">
		<div class=" row secd">
			<div>
				<h2>Products</h2>
				<p>we recommend</p>
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


	<section class="container-fluid sec4">
		<div class=" row">
			<div>
				<h2>Testimonials</h2>
			</div>
			<div id="test">
				<div>
					<img src="https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png">
					<h5>John Doe</h5>
					<p><i class='fas fa-quote-left' style='font-size:36px'></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamc1&nbsp;&nbsp;<i class='fas fa-quote-right' style='font-size:36px'></i>
					</p>
					<p>12 jan 1998 07:00:00</p>
				</div>
				<div>
					<img src="https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png">
					<h5>John Doe</h5>
					<p><i class='fas fa-quote-left' style='font-size:36px'></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamc1&nbsp;&nbsp;<i class='fas fa-quote-right' style='font-size:36px'></i>
					</p>
					<p>12 jan 1998 07:00:00</p>
				</div>
				<div>
					<img src="https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png">
					<h5>John Doe</h5>
					<p><i class='fas fa-quote-left' style='font-size:36px'></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamc1&nbsp;&nbsp;<i class='fas fa-quote-right' style='font-size:36px'></i>
					</p>
					<p>12 jan 1998 07:00:00</p>
				</div>
			</div>
		</div>
	</section>
	<?php include('view-product.php');?>
	<?php include('login.php');?>
	<?php include('footer.php');?>
</body>
</html>