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
                                <h5 class="author-card-name text-lg">  Daniel Adams</h5><br><span class="author-card-position">Joined February 06, 2017</span>
                            </div>
                        </div>
                    </div>
                         <br><br><br>
                    <div class="wizard" >
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
            </div>
            <div class="col-sm-8">
              <div class="profile">
<form action="" method="post" enctype="multipart/form-data">
                    <h3 class="heading mb-3" style="text-align:center;margin-top: 5%;">Profile</h3>
         
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
                        <input  class="form-control" id="USER_MOBL" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" title="Enter only number and only from 0 to 9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "10 "required>
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
                       <div class="form-group col-sm-6 mt-2">
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
                  <div class="buttons mb-3" style="text-align:center">
                        <input type="submit" name="submit" class="btn btn-primary mt-2" value="submit" >
                        <input type="submit" name="cancel" class="btn btn-danger mt-2" value="cancel" >
                        
              </div> 
            
                </div>
            </div>
        </div>

    </form>  
</div>
                
            </div>
        </div>
    </div>
</div>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     <?php 
    include("footer1.php");
?>
</body>
</html>

  

