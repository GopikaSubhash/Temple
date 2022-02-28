<?php
session_start();
include("config.php"); //Establishing connection with our database
if(isset($_POST["login"]))
{

// Define $username and $password
$USER_NAME=$_POST['USER_NAME'];
$PASS_WORD=$_POST['PASS_WORD'];

// To protect from MySQL injection
$USER_NAME = stripslashes($USER_NAME);
$PASS_WORD = stripslashes($PASS_WORD);
$USER_NAME = mysqli_real_escape_string($conn, $USER_NAME);
$PASS_WORD = mysqli_real_escape_string($conn, $PASS_WORD);

//Check username and password from database
$sql="SELECT * FROM devotee_info WHERE USER_NAME='$USER_NAME' and PASS_WORD='$PASS_WORD'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

if(mysqli_num_rows($result) == 1)
{   $DEVT_ID=$row['DEVT_ID'];
    $_SESSION['DEVT_ID']=$DEVT_ID;
header("location: user-profile.php"); // Redirecting To Other Page
}else
{
echo '<script>alert("Incorrect username or password.")</script>';
}

}

?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/login2.css">
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
					<h3>Login</h3>
					<hr class="mb-3"><b>

					  <div class="form-group">
					    <label for="USER_NAME"> Enter User Name</label>
					    <input type="text" class="form-control" id="USER_NAME" name="USER_NAME" placeholder="User name" required>
					  </div>

					  <div class="form-group">
					    <label for="PASS_WORD">Enter password </label>
					    <input type="password" class="form-control" id="PASS_WORD" name="PASS_WORD" placeholder="password" required>
					  </div>					
                        </b>
                        <div class="buttons">
			    	<input type="submit" name="login" class="btn btn-primary mx-2" value="Log in" >
			    	<a href="forgot-password.php">Forgot password?</a>
			    </div>			
				</div>
			</div>
		</div>

	</form>
</div>

<?php
	include "footer1.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
