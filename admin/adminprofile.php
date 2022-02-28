<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/adminprofile.css">
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

<div class="profile">
<form action="" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
                <div class="form col-sm-10">
                    <div class="heading">
                    <h3>Profile</h3>
                  <div class="img2"><img class="rounded-circle mt-2" src="images/profile.jpg" width=200px height="200px" > </span></div>
              </div>
                        <div class="row">
                  <div class="form-group col-sm-6">
                        <label for="USER_NAME">First Name</label>
                        <input type="text" class="form-control" id="USER_NAME" placeholder="First name " required>
                      </div>
                        <div class="form-group col-sm-6">
                        <label for="USER_NAME">Last Name</label>
                        <input type="text" class="form-control" id="USER_NAME" placeholder="Last name" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-9 ">
                        <label for="USER_NAME">  User Name</label>
                        <input type="text" class="form-control" id="USER_NAME" placeholder="User name or mobile number" required>
                      </div >
                          </div>
                    <div class="row">
                        <div class="form-group  col-sm-9">
                            <label for="DEVT_ADDR">Address</label>
                            <textarea name="Address" cols="20" rows="5" class="form-control" id="DEVT_ADDR" placeholder="Enter full address" required></textarea>
                        </div>
                    </div>
                                
                        <div class="row"> 
                      <div class="form-group  col-sm-9 ">
                        <label for="USER_MOBL">Mobile Number</label>
                        <input type="tel" class="form-control" id="USER_MOBL" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" title="Enter only number and only from 0 to 9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "10 " required>
                      </div>
                  </div>
                    <div class="row"> 
                        <div class="form-group  col-sm-9">
                        <label for="USER_MAIL">Email</label>
                        <input type="email" class="form-control" id="USER_MAIL" placeholder="Email" required>
                      </div>
                    </div>
                    <a href="javascript:void(0);" onclick="javascript:cpassword();">Change Password</a>
                    <div class="changepassword" id="change-password">                      
                        <div class="row">
                       <div class="form-group col-sm-6">
                        <label for="PASS_WORD">Current Password </label>
                        <input type="password" class="form-control" id="PASS_WORD" placeholder="Enter current password "  value=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
                      </div>
                  </div>
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label for="PASS_WORD">New Password </label>
                        <input type="password" class="form-control" id="NEW_PASS_WORD" placeholder="Enter a strong password "  value=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
                      </div>    
                        <div class="form-group col-sm-6">
                        <label for="CPASS_WORD">Confirm Password </label>
                        <input type="password" class="form-control" id="CPASS_WORD" placeholder="Confirm password" value="" required>
                        <span id="messages" style="color:red;"> </span>
                      </div>
                  </div>

                  </div>
                  <div class="buttons">
                        <input type="submit" name="insert" class="btn btn-primary mt-2" value="submit" >
                        <button class="btn btn-danger">cancel</button>
                        
              </div> 
            
                </div>
            </div>
        </div>

    </form>
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
</script>
<script type="text/javascript">
   var password = document.getElementById("NEW_PASS_WORD")
  var confirm_password = document.getElementById("CPASS_WORD");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


window.onload = function() {
        $("#change-password").hide();
      }
function cpassword(){

    var newe = $('#change-password').toggle(); 

}

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

  



