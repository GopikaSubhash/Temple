<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/adminpage832.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>soltox</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 
href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
	<body>
	
		 <div class="header">      
        <h3 class="logo"><font face="Verdana">SolTox</font></h3>
      </div>
      <div class="header-right">
          
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
   

<div class="user_header">
 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i></a>
<h4>&nbsp &nbsp WELCOME!!!!</h4>
  </div>
<div class="topnav" id="myTopnav" >
   
  
  <a href="adminpage.php" >Poojas Booked</a>
  <a href="adminprofile.php">Profile</a>
  <a href="pooja-rate.php">Pooja Rates </a>
  <a href="">Temple Staff</a>
  <a href="">Temple Assets</a> 
</div>

    <div class="view-data ">
      <div class="container-fluid">
        <div class="cart-data">    
        <div class="heading">
          <h4>Poojas booked</h4>
          <input type="button" onclick="printDiv('pooja-booked')" value="Print" />
          </div>      
            <div class="row">         
              <div class="cart" id="pooja-booked">
                <div class="table-responsive">
            <table id="myTable" class="display table" width="100%" > 
                <thead role="rowgroup">
                  <tr role="row">
                    <th role="columnheader" class="view-cart">Sl No</th>
                    <th role="columnheader" class="view-cart">Pooja</th>
                    <th role="columnheader" class="view-cart">Offering date</th>
                    <th role="columnheader" class="view-cart">Devotee name</th>
                    <th role="columnheader" class="view-cart">Birth Star</th>

                  </tr>
                </thead>
                
                <tbody role="rowgroup" class="view-data">
                  <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">Vilak</td>
                    <td role="cell">17/01/2022</td>
                    <td role="cell">radha</td>
                    <td role="cell">pooram</td>


                  </tr>
                  <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>   <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>

                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                     <tr role="row">
                    <td role="cell"></td>
                    <td role="cell">dhara</td>
                    <td role="cell">20/01/2022</td>
                    <td role="cell">raman</td>
                    <td role="cell">thiruvathira</td>
                  </tr>
                </tbody>      
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
      <script type="text/javascript" 
src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" 
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
      <script>
    $('#myTable').dataTable();
</script>
<br><br><br>
<footer class="page-footer font-small blue pt-4">
  <div class="container-fluid text-center text-md-left">
          <div class="footer-links mb-md-0 mb-3">
             <h3 class="text-uppercase">For any queries please contact us</h3>
                <ul class="footer-links list-unstyled">
                <li>Call us on  : +9100000000</li>  
                <li> Mail us on : hr@soltox.in</li>        
                </ul>
 
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
</footer>

</body>
</head>
</html>

  



