<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="css/deity1.css">
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
        <div class="row  mt-3">
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                
                <a class="car" href="god/shiva.php"><img class="card-img-top" src="images/god/siva.jpeg" alt="Card image cap" >
                    <div class="title">
                         <figcaption>Lord siva</figcaption>
                    </div>
                </a>
           
            </div>
            <div class="col-lg-3 offset-lg-0 col-sm-4 offset-sm-2 col-11 offset-1">
                <a class="car" href="god/vishnu.php"> <img class="card-img-top" src="images/god/vishnu.jpg"  alt="Card image cap">
                    <div class="title">
                         <figcaption>Lord vishnu</figcaption>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="car" href="god/parvathi.php"><img class="card-img-top" src="images/god/parvathy.jpg" alt="Card image cap">
                    <div class="title">
                        <figcaption>Goddess parvathy</figcaption> 
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
                <a class="car" href="god/lakshmi.php"><img class="card-img-top" src="images/god/lakshmi.jpg"  alt="Card image cap">
                    <div class="title">
                        <figcaption>Goddess Lakshmi</figcaption>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="car" href="god/ayyapa.php"><img class="card-img-top" src="images/god/ayyapa.jpg" alt="Card image cap">
                    <div class="title">
                        <figcaption>Lord Ayyapa</figcaption>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
                <a class="car" href="god/ganesha.php"><img class="card-img-top" src="images/god/ganesha.jpeg" alt="Card image cap">
                    <div class="title">
                        <figcaption>Lord Ganesha</figcaption>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="car" href="god/karthikeya.php"><img class="card-img-top" src="images/god/karthikeya.jpg" alt="Card image cap">
                    <div class="title">
                         <figcaption>Lord karthikeya</figcaption>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
                <a class="car" href="god/saraswati.php"><img class="card-img-top" src="images/god/Saraswathi.jpg" alt="Card image cap">
                    <div class="title">
                        <figcaption>Goddess Saraswathi</figcaption>
                    </div>
                </a>
            </div>
              <div class="row mt-3">
             
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="car" href="god/hanuman.php"> <img class="card-img-top" src="images/god/Hanuman.jpg" alt="Card image cap">
                    <div class="title">
                         <figcaption> Hanuman</figcaption> 
                    </div>
                </a>
            </div>
             <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
                <a class="car" href="god/nagaraja.php"> <img class="card-img-top" src="images/god/nagaraja.jpg" alt="Card image cap">
                    <div class="title">
                         <figcaption> Nagaraja</figcaption>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="car" href="god/durga.php">  <img class="card-img-top" src="images/god/Durga.jpg" alt="Card image cap">
                    <div class="title">
                          <figcaption>Goddess Durga</figcaption> 
                    </div>
                </a>
            </div>
             <div class="col-lg-3 col-sm-7 offset-lg-0 offset-sm-3 col-11 offset-1">
                <a class="car" href="god/badrakali.php">  <img class="card-img-top" src="images/god/Bhadrakali.jpg" alt="Card image cap">
                    <div class="title">
                         <figcaption>Goddess Bhadrakali</figcaption>
                    </div>
                </a>
            </div>
            <div class="row mt-3">
            
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="car" href="god/rama.php">  <img class="card-img-top" src="images/god/Rama.jpg" alt="Card image cap">
                    <div class="title">
                         <figcaption>Lord Rama</figcaption> 
                    </div>
                </a>
            </div>
             <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-3 col-11 offset-1">
                <a class="car" href="god/krishna.php">  <img class="card-img-top" src="images/god/Krishna.jpg" alt="Card image cap">
                    <div class="title">
                         <figcaption>Lord Krishna</figcaption> 
                    </div>
                </a>
            </div>
           
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a class="car" href="god/narasimha.php"> <img class="card-img-top" src="images/god/Narasimha.jpg" alt="Card image cap">
                    <div class="title">
                          <figcaption>Lord Narasimha</figcaption>
                    </div>
                </a>
            </div>

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
