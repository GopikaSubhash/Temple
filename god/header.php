<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header56.css">
		<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-latest.min.js"></script> 
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>soltox</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- FontAwesome -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<body>

	<header>
		 <div class="header ">	
		 	<div class="header-left"> 		 	
		 		<h3 class="logo"><font face="Verdana">SolTox</font></h3>
		 	</div>
		 	<div class="header-right">
	  			<a href="view-cart.php" class="cart-logo position-relative d-inline-flex" aria-label="View your shopping cart">
          		<i class="fas fa fa-shopping-cart fa-lg"></i>
          			<span class="cart-basket d-flex align-items-center justify-content-center">
           		 	0
         		 	</span>
       			</a>
				<div class="dropdown show ">
  					<a class="account dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						 <i class="my-account fa fa-user"></i>My account
  					</a>

  					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    				<a class="dropdown-item" href="#">My account</a>
    				<a class="dropdown-item" href="#">Email</a>
    				<a  class="nav-link  " href="#">Sign out</a>
  					</div>
				</div>	
  			</div>
  		</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark "><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    		<div class="collapse navbar-collapse" id="navbarColor02">
        		<ul class="navbar-nav mr-auto mx-4">
            		<li class="nav-item mx-4"> <a class="nav-link" href="index.php" data-abc="true">Home </a> </li>
            		<li class="nav-item mx-4"> <a class="nav-link" href="all-temples.php" data-abc="true">Temples</a> </li>
            		<li class="nav-item mx-4"> <a class="nav-link" href="about.php" data-abc="true">About Us</a> </li>
            		<li class="dropdown show">
  						<a class=" nav-link dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					Login
  						</a>
  						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  	 						<a class="nav-link" href="login.php">Login</a>
    						<a class="nav-link" href="user-signup.php">User Signup</a>
    						<a class="nav-link" href="admin-signup.php">Temple Signup</a>
  						</div>
					</li>
       	 		</ul>
			</div>
			<div class="searchbar input-group ">
  				<input type="search" class="form-control rounded" placeholder="Search for temples  " aria-label="Search" aria-describedby="search-addon" />
  				<button type="button" class="btn btn-danger">search</button>
			</div>
		</nav>
	</header>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$(".fa-search").click(function() {
				$(".icon").toggleClass("active");
				$("input[type='text']").toggleClass("active");
			});
		});
	</script>
</body>
</head>
