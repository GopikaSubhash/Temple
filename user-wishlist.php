<?php include("auth.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/userwishlist560.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>soltox</title>
</head>
<body>
    <?php include("header.php");?>  
<div class="user-profile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="background-color: purple;">
                <div class="account-sidebar ">
                    <div class="author-card pb-3" style="text-align:center;">            
                        <div class="author-card-profile">
                            <div class="author-card-avatar"><img class="rounded-circle mt-2" src="images/profile.jpg" width=200px height="200px">
                            </div>
                          <div class="author-card-details"  style="color:yellow;">
                                <h5 class="author-card-name text-lg"><?php echo $singleRow['USER_NAME']; ?></h5><br><span class="author-card-position">Joined <?php echo $singleRow['CRTE_DATE']; ?></span>
                            </div>
                        </div>
                    </div>
                         <br><br><br>
                    <div class="wizard" >
                       <nav class="sidebar card py-2 mb-4">
<ul class="nav flex-column" id="nav_accordion">
    <li class="nav-item">
        <a class="nav-link" href="user-wishlist.php"> Favourite Temples </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="user-bookinghistory.php"> Booking History </a>
    </li>
    <li class="nav-item has-submenu" >
        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
My Account
  </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
   <a class="dropdown-item" href="user-profile.php">Edit-Profile </a>
    <a class="dropdown-item" href="passwordsetting.php">Change-Password</a>
   
  </div>
    </li>
   
</ul>
</nav>

                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="wishlist pb-2">                         
                        <button class="btn btn-outline-danger clear-wishlist" type="submit" onclick="window.location.href = 'all-temples.php'" style="font-size: 18px;">Clear Wishlist</button><br>  
                          <h3> &nbsp My Favourite Temples</h3>
                          <br>
                <div class="row">
                    <div class="col-sm-4">
                            <a class="card" href="">
                            <img class="gallery" src="images/t.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                    <a class="card" href="">
                            <img class="gallery" src="images/temple.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                <a class="card" href="">
                            <img class="gallery" src="images/background.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                                <a class="card" href="">
                            <img class="gallery" src="images/temple3.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                            <a class="card" href="">
                            <img class="gallery" src="images/t.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                                <a class="card" href="">
                            <img class="gallery" src="images/background.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>
                      </div>
                <div class="row">
                       <div class="col-sm-4">
                            <a class="card" href="">
                            <img class="gallery" src="images/t.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                            <a class="card" href="">
                            <img class="gallery" src="images/temple.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                    </div>

                    <div class="col-sm-4">
                                <a class="card" href="">
                            <img class="gallery" src="images/temple3.jpg">
                             <figcaption>temple name </figcaption>
                             <figcaption>temple place </figcaption>
                        </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php include("footer1.php");?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

  

