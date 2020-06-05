<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	<a class="navbar-brand" href="#"><img src="images/kfd6.png"></a>

	  <!-- Toggler/collapsibe Button -->
 	<div id="navicon">
	    <input type="text" class="form-control" id="search" placeholder="search for a product">
		<button id="search_button"><i class="fas fa-search"></i></button>		    		

        <div class="dropdown">        	
	  	  <button data-toggle="dropdown"><i class="fas fa-user"></i></button>
		  <ul class="dropdown-menu dropdown-menu-right">
		    <li><a href="#">veenayak</a></li>
	      	<li class="dropdown-header">17-8-1998 07:00:00</li>
		    <li class="dropdown-divider"></li>
		    <li><a href="#login" data-toggle="modal" data-target="#myModal">Login</a></li>
		  </ul>
		</div>
        <button id="bag"><i class="fas fa-shopping-cart"></i></button>
		<button type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	  	    <span class="fas fa-list"></span>
	 	</button>
	</div>
  <!-- Navbar links -->
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
 		<!-- <ul class="navbar-nav">
 			<li class="nav-item dropdown">
	      		<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Shop</a>
		      	<div class="dropdown-menu">
			        
		      	</div>
	    	</li>
    	</ul> -->
		<!-- Links -->
		<ul class="navbar-nav two">
			<li class="nav-item">
		      <a class="nav-link" href="index.php">Home</a>
		    </li>
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="products.php" id="navbardrop" data-toggle="dropdown">
		        Products
		      </a>
		      <div class="dropdown-menu">
		        <a class="dropdown-item" href="#">Link 1</a>
		        <a class="dropdown-item" href="#">Link 2</a>
		        <a class="dropdown-item" href="#">Link 3</a>
		      </div>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="index.php#contact">Feedback</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="myaccount.php">Account/Orders</a>
		    </li>
	 	</ul>
    </div> 
</nav>