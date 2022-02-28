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
					<h2>Cart</h2>
					<h4>Poojas booked</h4>
					</div>			
				</div>		
			</div>

		<div class="view-data">
     			<div class="row">
     				<div class="col-lg-9">
     					<div class="cart mb-4">
							<table role="table" >
							  <thead role="rowgroup">
							    <tr role="row">
							      <th role="columnheader" class="view-cart">Sl No</th>
							      <th role="columnheader" class="view-cart">Temple Name</th>
							      <th role="columnheader" class="view-cart">Pooja</th>
							      <th role="columnheader" class="view-cart">Date of offering</th>
							      <th role="columnheader" class="view-cart">Devotee name</th>
							      <th role="columnheader" class="view-cart">Price</th>
							      <th role="columnheader" class="view-cart">Delete</th>

							    </tr>
							  </thead>
							 	
							  <tbody role="rowgroup" class="view-data">
							    <tr role="row">
							      <td role="cell"></td>
							      <td role="cell">abc temple</td>
							      <td role="cell">Vilak</td>
							      <td role="cell">17/01/2022</td>
							      <td role="cell">radha</td>
							      <td role="cell">&#x20B9;100</td>
							      <td role="cell"><button class="btn remove">&#x1F5D1;</button></td>

							    </tr>
							    <tr role="row">
							      <td role="cell"></td>
							      <td role="cell">dcv temple</td>
							      <td role="cell">dhara</td>
							      <td role="cell">20/01/2022</td>
							      <td role="cell">raman</td>
							      <td role="cell">&#x20B9;10</td>
							      <td role="cell"><button class="btn remove">&#x1F5D1;</button></td>
							    </tr>
							  </tbody>			
							</table>
							<div class="buttons input-group" style="align: center;">
								
  				<input type="text"  placeholder="Search for temples  " aria-label="Search" aria-describedby="search-addon" />
  				<button type="button" class="btn btn-success">search</button>
			
							</div>  
						</div>
					</div>
						<div class="col-lg-2">
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
			</div>

	<?php
	include "footer1.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(function () {

    $("body").on("click", ".remove", function () {
        $(this).closest("tr").remove();
    });
});
</script>
</body>
</html>
