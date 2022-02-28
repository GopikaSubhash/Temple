<?php
include 'auth.php'; 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/password.css">
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
				<div class="form col-sm-4">
					<h3>CHANGE PASSWORD</h3>
					<hr class="mb-3"><b>

					  <div class="form-group">
					    <label for="PASS_WORD">Current Password </label>
                        <input type="password" class="form-control" id="PASS_WORD" placeholder="Enter current password "  value=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
					  </div>

					  <div class="form-group">
					    <label for="NPASS_WORD">New Password </label>
                        <input type="password" class="form-control" id="NEW_PASS_WORD" name="NEW_PASS_WORD" placeholder="Enter a strong password "  value=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
					  </div>
					  <div class="form-group">
					  					   <label for="CPASS_WORD">Confirm Password </label>
                        <input type="password" class="form-control" id="CPASS_WORD" placeholder="Confirm password" value="" >
                        <span id="messages" style="color:red;"> </span>
                        </div>					
                        </b>
                        <div class="buttons">
			    	<input type="submit" name="submit" class="btn btn-primary mx-2" value="Change" >
			    	
			    </div>			
				</div>
			</div>
		</div>

	</form>
	<?php
	include("auth.php");
	
?>

</div>
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
<?php
 if ($_POST["PASS_WORD"] == $row["PASS_WORD"]) {
        mysqli_query($conn, "UPDATE devotee_info set password='" . $_POST["NEW_PASS_WORD"] . "' WHERE DEVT_ID='" . $_SESSION["$id"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
?>

<?php
	include "footer1.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
