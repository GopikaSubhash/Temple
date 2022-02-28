<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/view-cart037.css">
	<title>soltox</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>
<body>
<?php
	include "header.php";
?>



	<div class="form-header">
		<div class="container">
			<div class="heading">
				<h2>Billing Details</h2>
			</div>			
		</div>		
	</div>

	<form class="booking-form">
		<div class="row">
			<div class="col-lg-9">
			
				<div class="cart mb-4">
				   <div class="row">
				    	<div class=" col-sm-6 mb-3">
			      			<label for="DEVT_NAME">Name</label>
								<input type="text" class="form-control" id="DEVT_NAME" placeholder="Enter name for billing" required>
			      		</div>
				 	 	<div class=" col-sm-6 mb-3">
			      			<label for="DEVT_MOBL">Mobile </label>
							<input type="tel" class="form-control" id="DEVT_MOBL" placeholder="012-3456-789" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" title="Enter only number and only from 0 to 9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "10 "required>
			      		</div>
	       			</div>
				    <div class="row">
				    	<div class=" col-sm-6 mb-3">
			      			<label for="DEVT_MAIL">E-mail</label>
							<input type="email" class="form-control" id="DEVT_MAIL"  placeholder="Enter email-id"required>
			      		</div>
				  		<div class=" col-sm-6 mb-3">
			      			<label for="DEVT_ADDR">Address</label>
							<textarea name="Address" cols="40" rows="10" class="form-control" id="DEVT_ADDR" placeholder="Enter full address with name" required></textarea>
			      		</div>
	       			</div>
	       			<div class="buttons">
	       				<button class="w3-button w3-green">Checkout</button>
	       				<button class="w3-button w3-deep-orange" onclick="window.location.href = 'book-puja.php'">Add to cart</button>
	       			</div>
	       		</div>
	       	</div>
       			<div class="  col-lg-2 ">
       					<div class="total-price mb-4">
			       	<h5>Price detail</h5>
			       	<hr class="mb-2">
			       	<p>Price</p>
			       	<p>other</p>
			       	<hr class="mb-2">
			       	<h5>Total Price</h5>
			       	<div class="buttons">
				 		<button class="w3-button w3-green">Checkout</button>
				 	</div>
				</div>
			</div>
       	</div>
    </form>
<?php
	include "footer1.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
