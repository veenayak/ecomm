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
		#con2{
			display: none;
		}
		#con div{
/*			clear: both;
*/		}
		#con i{
		    color: #3e4550!important;
		    float: right;
		    font-size: 20px;
		}
		#con h3,#con2 h3{
			display: inline-block;
			width: 100%;
		}
		#con button{
    		clear: both;
    		float: right;
		}
		#side ul{
			list-style-type: none;
			padding: 15px;
			box-shadow: 0px 2px 10px #e6e6e6;
			width: 100%;
			border-radius: 20px;
		}
		#side ul li{
			padding: 10px;
		}
		#con,#con2{
			padding: 15px;
			box-shadow: 0px 2px 10px #e6e6e6;
			float: left;
			text-align: left;
			border-radius: 20px;
		}
		.active{
		    border-radius: 10px;
		    color: #fff;
		    background: #96a9c8;
		}
		#side li:hover{
			cursor: pointer;
		}
		@media only screen and (min-width:1220px){			
			.recom{
			    width: 80%;
			    margin: auto;
			    float: left;
			    max-width: 1220px;
			    margin-top: 40px;
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
			#side{
				float: left;
				padding: 0!important;
				text-align: left;
			}
			#con .con_div{
				width: 100%;
				padding: 10px 0;
				float: left;
			}
		}		
		@media only screen and (min-width:768px){
			#side{
				float: left;
				padding-right: 20px;
				text-align: left;
			}
			#con .con_div:nth-of-type(odd){
				width: 50%;
				padding: 15px 10px 15px 0;
				float: left;
			}
			#con .con_div:nth-of-type(even){
				width: 50%;
				padding: 15px 0 15px 10px;
				float: left;
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
			$("#profile").click(function(){
				$("#con").show();
				$("#con2").hide();
				$(this).addClass("active");
				$("#order").removeClass("active");
			});
			$("#order").click(function(){
				$("#con2").show();
				$("#con").hide();
				$(this).addClass("active");
				$("#profile").removeClass("active");
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
				<h2>My Account</h2>
			</div>
			<div class="recom">	
				<div>
					<div class="col-12 col-md-3" id="side">
						<ul>
							<li class="active" id="profile">Profile</li>
							<li id="order">Orders</li>
						</ul>
					</div>

					<div class="col-12 col-md-9" id="con">
						<div class="con_div">
							<h4>Personal info</h4>
							<div class="form-group">
							    <label for="name">Name</label>
							    <input type="text" class="form-control" id="name">
						    </div>
						    <div class="form-group">
							    <label for="phone">Phone Number</label>
							    <input type="tel" class="form-control" id="phone">
						    </div>	
						</div>
					    <div class="con_div">
					    	<h4>Account info</h4>
	        				<div class="form-group">
							    <label for="email">Email address</label>
							    <input type="email" class="form-control" id="email">
						    </div>
							<div class="form-group">
							    <label for="pwd">Password</label>
							    <input type="password" class="form-control" id="pwd">
					        </div>
					    </div>
						<div class="con_div">
							<h4>Delivery Address</h4>
					        <div class="form-group">
							    <label for="state">State</label>
							    <select class="form-control" id="state">
							    	<option value="haryana">Haryana</option>
							    </select>
						    </div>
						    <div class="form-group">
							    <label for="city">City</label>
							    <input type="text" class="form-control" id="city">
					        </div>
					        <div class="form-group">
							    <label for="address">Address</label>
							    <input type="text" class="form-control" id="address">
					        </div>
					    </div>
						<button type="submit">Save changes</button>
					</div>		

					<div class="col-12 col-md-9" id="con2">	
						<div>
							<h3>Orders</h3>

						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>
	<?php include('cart.php');?>
	<?php include('footer.php');?>
</body>
</html>
