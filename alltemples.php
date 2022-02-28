<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/alltemples.css">
	<title>soltox</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>
<body>

  <?php
	include "header.php";
?> 
<div class="main-container"> 
<div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div> 
  
<div id="mobile-filter">
    <div>  
    
<div>
        <h6 class="p-1 border-bottom">Details</h6>
        <ul>
            <li><a href="alltemples.php">Temples</a></li>
            <li><a href="deity1.php">Deity</a></li>
        </ul>
    </div>
   <div class="offcanvas-body px-0">
        	<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">

            
            	<li class="nav-link">
                	<select name="optwo" id="state11" size="1" data-bs-toggle="collapse" class="nav-link px-0 align-middle" >
                    <option value="" selected="selected">state</option>
                	</select>
           		</li>
         		<li class="nav-link">
                	<select name="opttwo" id="city11" size="1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                  	<option value="" selected="selected">city</option>
                	</select>
            	</li>
           		<li class="nav-link">
                	<select name="opttwo" id="deity11" size="1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                  	<option value="" selected="selected">Deity</option>
                	</select>
            	</li>
            	<li class="nav-link">
                	<select name="opttwo" id="puja11" size="1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                  	<option value="" selected="selected">Puja</option>
                	</select>
            	</li>
            </ul>
</div>
</div>  
</div>
<div id="sidebar">
    <div>
        <br><br>
        <h6 class="p-1 border-bottom">Details</h6>
        <ul>
            <li><a href="alltemples.php">Temples</a></li>
            <li><a href="deity1.php">Deity</a></li>
        </ul>
    </div>
   <div class="offcanvas-body px-0">
    <h6 class="p-1 border-bottom">Filter by</h6>
        	<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">       
            	<li class="nav-link">
                	<select name="optwo" id="state" size="1" data-bs-toggle="collapse" class="nav-link px-0 align-middle" >
                    <option value="" selected="selected">state</option>
                	</select>
           		</li>
         		<li class="nav-link">
                	<select name="opttwo" id="city" size="1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                  	<option value="" selected="selected">city</option>
                	</select>
            	</li>
           		<li class="nav-link">
                	<select name="opttwo" id="deity" size="1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                  	<option value="" selected="selected">Deity</option>
                	</select>
            	</li>
            <li class="nav-link">
                	<select name="opttwo" id="puja11" size="1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                  	<option value="" selected="selected">Puja</option>
                	</select>
            	</li>
            </ul>
    </div>
  </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="card" href=""> <img class="card-img-top" src="images/temple.jpg" alt="Card image cap">
                    <div class="card-body">
                         <figcaption>temple name </figcaption>
	                         <figcaption>temple place </figcaption>
                    
                </div>
                 </a>
            </div>

            <div class="col-lg-3 offset-lg-0 col-sm-4 offset-sm-2 col-11 offset-1">
                <a class="card" href=""><img class="card-img-top" src="images/temple3.jpg" alt="Card image cap">
                    <div class="card-body">
                         <figcaption>temple name </figcaption>
	                         <figcaption>temple place </figcaption>
                    
                </div>
                 </a>
            </div>
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="card" href=""><img class="card-img-top" src="images/t.jpg" alt="Card image cap">
                    <div class="card-body">
                        <figcaption>temple name </figcaption>
	                         <figcaption>temple place </figcaption> 
                    
                </div>
                 </a>
            </div>
            <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
                <a class="card" href=""><img class="card-img-top" src="images/background.jpg" alt="Card image cap">
                    <div class="card-body">
                        <figcaption>temple name </figcaption>
	                         <figcaption>temple place </figcaption>
                   
                </div>
                 </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="card" href=""><img class="card-img-top" src="images/temple.jpg" alt="Card image cap">
                    <div class="card-body">
                        <figcaption>temple name </figcaption>
	                         <figcaption>temple place </figcaption>
                    
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
                <a class="card" href=""><img class="card-img-top" src="images/temple3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <figcaption>temple name </figcaption>
	                         <figcaption>temple place </figcaption>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="card" href=""> <img class="card-img-top" src="images/t.jpg" alt="Card image cap">
                    <div class="card-body">
                         <figcaption>temple name </figcaption>
	                         <figcaption>temple place </figcaption>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
                <a class="card" href=""> <img class="card-img-top" src="images/background.jpg" alt="Card image cap">
                    <div class="card-body">
                         <figcaption>temple name </figcaption>
	                         <figcaption>temple place </figcaption> 
                    </div>
                </a>
            </div>
        </div>
    </div>


<script>
var subjectObject = {
"Kerala": ["Ernakulam", "Palakkad", "Trissur", "Malappuram"],
"Karnataka": ["Banglore", "East city"],
"Tamil Nadu": ["Chennai", "Ooty", "Coimbature"]
}
window.onload = function() {
var stateSel = document.getElementById("state");
var citySel = document.getElementById("city");
for (var x in subjectObject) { 
	
stateSel.options[stateSel.options.length] = new Option(x, x);
}
stateSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    citySel.length = 1;
    var cities = subjectObject[this.value];
//display correct values
for (var y in cities) {
citySel.options[citySel.options.length] = new Option(cities[y]);
}
}


}
</script>
</div>
<br>
<?php include("footer1.php") ?>
</body>
</html>
