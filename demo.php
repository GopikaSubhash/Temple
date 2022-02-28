<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/user-profile560.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
                        <nav class="list-group ">    
                   
                            <a class="list-group-item " href="user-wishlist.php">
                            
                                <div><i class="fa fa-shopping-bag mr-1 text-muted"></i><div class="d-inline-block font-weight-medium text-uppercase">
                                  Favourite Temples</div>
                                </div>
                            
                            </a>
                            <a class="list-group-item " href="user-bookinghistory.php">
                            
                                <div><i class="fa fa-shopping-bag mr-1 text-muted"></i><div class="d-inline-block font-weight-medium text-uppercase">
                                    Booking History</div>
                                </div>

                            
                            </a>
                             <a class="list-group-item dropdown-toggle " href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-shopping-bag mr-1 text-muted"></i>
                                   Settings
  

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="user-profile.php">Profile</a>
    <a class="dropdown-item" href="passwordsetting.php">Password Settings</a>
   
 </div>
                                
                            
                            </a>




                        </nav>
                    </div>
                </div>
            </div>