<?php include("auth.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/user-booking701.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>soltox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 
href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
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
    <a class="dropdown-item" href="#">Edit-Profile </a>
    <a class="dropdown-item" href="#">Change-Password</a>
   
  </div>
    </li>
   
</ul>
</nav>

                    </div>
                </div>
            </div>
            <div class="col-sm-8">
               <div class="cart-data">    
                    <h1 style="text-align:center">Booking History</h1>
                    <div class="row">         
                        <div class="cart" id="pooja-booked">
                            <div class="table-responsive">
                                <table id="myTable" class="display table" width="100%" > 
                                    <thead role="rowgroup">
                                        <tr role="row">
                                            <th role="columnheader" class="view-cart">Sl No</th>
                                            <th role="columnheader" class="view-cart">Temple name</th>
                                            <th role="columnheader" class="view-cart">Devotee name</th>
                                            <th role="columnheader" class="view-cart">Puja</th>
                                            <th role="columnheader" class="view-cart">Offering Date</th>
                                            <th role="columnheader" class="view-cart">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody role="rowgroup" class="view-data">
                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">Temple name</td>
                                            <td role="cell">raman</td>
                                            <td role="cell">dhara</td>
                                            <td role="cell">17/01/2022</td>
                                            <td role="cell">Completed</td>
                                        </tr>
                         
                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">Temple name</td>
                                            <td role="cell">radha</td>
                                            <td role="cell">vilak</td>
                                            <td role="cell">20/01/2022</td>
                                            <td role="cell">Scheduled</td>
                                        </tr>   

                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">Temple name</td>
                                            <td role="cell">raman</td>
                                            <td role="cell">dhara</td>
                                            <td role="cell">17/01/2022</td>
                                            <td role="cell">Completed</td>
                                        </tr>

                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">Temple name</td>
                                            <td role="cell">radha</td>
                                            <td role="cell">vilak</td>
                                            <td role="cell">20/01/2022</td>
                                            <td role="cell">Scheduled</td>
                                        </tr> 

                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">Temple name</td>
                                            <td role="cell">radha</td>
                                            <td role="cell">vilak</td>
                                            <td role="cell">20/01/2022</td>
                                            <td role="cell">Completed</td>
                                        </tr> 
                                    </tbody>      
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       <script type="text/javascript" 
src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" 
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
<script>
$('#myTable').dataTable( {
  "pageLength": 100
} );
</script>



<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</body>
</html>

  
<?php 
    include("footer1.php");
?>