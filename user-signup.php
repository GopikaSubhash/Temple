<?php include ('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<title>soltox</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	
</head>
<body>
<?php
	include "header.php";

?>


<div class="signup">
<form action="" method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<div class="form col-sm-9">
					<h3>Registration form</h3>
					<hr class="mb-3"><b>
						<div class="row">
				  <div class="form-group col-sm-6">
					    <label for="USER_NAME">First Name</label>
					    <input type="text" class="form-control" id="DEVT_FNAME" name="DEVT_FNAME" placeholder="First name " required>
					  </div>
					    <div class="form-group col-sm-6">
					    <label for="USER_NAME">Last Name</label>
					    <input type="text" class="form-control" id="DEVT_LNAME" name="DEVT_LNAME" placeholder="Last name" required>
					  </div>
					</div>
					<div class="row">
					  <div class="form-group col-sm-6">
					    <label for="USER_NAME">  User Name</label>
					    <input type="text" class="form-control" id="USER_NAME" name="USER_NAME" placeholder="User name or mobile number" required>
					  </div >
					  	<div class="form-group col-sm-6">
			      			<label for="DEVT_ADDR">Address</label>
							<textarea name="DEVT_ADDR" cols="20" rows="5" class="form-control" id="DEVT_ADDR" placeholder="Enter full address" required></textarea>
			      		</div>
			      	</div>
			      	<div class="row"> 
 					  <div class="form-group col-sm-6">
					    <label for="USER_MOBL">Mobile Number</label>
					    <input type="tel" class="form-control" id="USER_MOBL" name="USER_MOBL" placeholder="012-3456-789" pattern="[0-9]{10}" title="Enter only number and only from 0 to 9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "10 " required>
					  </div>

						<div class="form-group col-sm-6">
					    <label for="USER_MAIL">Email</label>
					    <input type="email" class="form-control" name="USER_MAIL"id="USER_MAIL" placeholder="Email" required>
					  </div>
					</div>
			      			<div class="row">
					  <div class="form-group col-sm-6">
					    <label for="PASS_WORD"> Password </label>
					    <input type="password" class="form-control" name="PASS_WORD" id="PASS_WORD" placeholder="Enter a strong password "  value=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
					  </div>	
					    <div class="form-group col-sm-6">
					    <label for="CPASS_WORD">Confirm Password </label>
					    <input type="password" class="form-control" id="CPASS_WORD" placeholder="Confirm password" value="" required>
					    <span id="messages" style="color:red;"> </span>
					  </div></div>			
						
					

                  </b>
                  <div class="buttons">
			    		<input type="submit" id="register" name="submit"  class="btn btn-primary mt-2" value="signup"  >
			    			
	              <p>Already a member then<a href="login.php">login</a></p>
			    		
              </div> 
    		
				</div>
			</div>
		</div>

	</form>
	</div>
	<?php 


if(isset($_POST['submit']))
{   
 
$DEVT_FNAME = $_REQUEST['DEVT_FNAME'];
$DEVT_LNAME = $_REQUEST['DEVT_LNAME'];
$USER_NAME =  $_REQUEST['USER_NAME'];
$DEVT_ADDR=  $_REQUEST['DEVT_ADDR'];
$USER_MOBL = $_REQUEST['USER_MOBL'];
$USER_MAIL =  $_REQUEST['USER_MAIL'];
$PASS_WORD= $_REQUEST['PASS_WORD'];
$sql="INSERT INTO devotee_info (DEVT_FNAME,DEVT_LNAME,USER_NAME,DEVT_ADDR,DEVT_MOBL,DEVT_MAIL,PASS_WORD) VALUES ('$DEVT_FNAME','$DEVT_LNAME','$USER_NAME','$DEVT_ADDR','$USER_MOBL','$USER_MAIL','$PASS_WORD')"; 

 if(mysqli_query($conn, $sql)){
	echo "<script> alert('inserted')</script>";
}



}
          

?>

<script type="text/javascript">
   var password = document.getElementById("PASS_WORD")
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
</script>

	</script>


<?php
	include "footer1.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
