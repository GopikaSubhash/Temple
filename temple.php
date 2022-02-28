<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/temple.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>soltox</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 
href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
</head>
	<body>
	<?php include("header.php");?>	
<div class="img-description">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ">
				<img src="images/temple.jpg" class="image">
			</div>

			 <div class="description col-lg-6">
			 	<h2 >temple name</h2>
			 		<p>Address : Palapetty, Chalakudy, Vellanchira, Ambalam Road, Vellanchira, Thrissur - 680697
								   </p>
								  	<p>phone number :+(91)-487-2836500</p>
								  	<p>mail id : hgftftg@gmail.com</p><br><br><br>
			 	       			<div class="buttons" >
	       				<button class="button3 w3-button w3-deep-orange mb-2" onclick="window.location.href = 'donation.php'">Donation</button>
	       				<button class="button4 w3-button w3-deep-orange mb-2"><i class="fas fa-plus">&nbsp Add to Favorites</i></button>
	       			</div>
			 </div>			
		</div>
	</div>
</div>
<div class="temple-detail">
	<!-- Nav tabs -->
	<div class="vertical-tabs">
	<div class="nav-tabs">
			<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"aria-orientation="vertical">   
				<li class="nav-item">
			    <a class="nav-link active" id="pooja-tab" data-toggle="tab" href="#pooja" role="tab" aria-controls="pooja" aria-selected="true">Poojas</a>
			  </li>
			   <li class="nav-item">
			    <a class="nav-link " id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
			  </li>
			

			  <li class="nav-item">
			    <a class="nav-link" id="announcement-tab" data-toggle="tab" href="#announcement" role="tab" aria-controls="announcement" aria-selected="false">Announcement</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Gallery</a>
			  </li>
			</ul>
</div>
			<!-- Tab panes -->
			<div class="tab-content">
			  
			  	<div class="tab-pane active " id="pooja" role="tabpanel" aria-labelledby="pooja-tab">
                    <div class="row">  
                                        <div class="buttons">
						<button type="button"class="w3-button w3-green" type="submit" onclick="window.location.href = 'pujas.php'"style="float: right;">BOOK NOW</button>					</div>       
					<div class=" col-sm-12">
<br>

                        <div class="cart" id="pooja-booked">
                            <div class="table-responsive">
                                <table id="myTable" class="display table" width="100%" > 
                                    <thead role="rowgroup">
                                        <tr role="row">
                                            <th role="columnheader" class="view-cart">Sl No</th>
                                            <th role="columnheader" class="view-cart">Puja name</th>
                                            <th role="columnheader" class="view-cart">Puja rate</th>
                                            <th role="columnheader" class="view-cart">Puja frequency</th>
                                        </tr>
                                    </thead>
                                    <tbody role="rowgroup" class="view-data">
                                        <tr role="row">
                                            <td role="cell"></td>
                                            <td role="cell">dhara</td>
                                            <td role="cell">&#x20B9;100</td>
                                            <td role="cell">daily</td>
                                        </tr>
                         
                                        <tr role="row">
                               <td role="cell"></td>
                                            <td role="cell">vilak</td>
                                            <td role="cell">&#x20B9;1000</td>
                                            <td role="cell">monthly</td>
                                        </tr>   

                                        <tr role="row">
                         <td role="cell"></td>
                                            <td role="cell">dhara</td>
                                            <td role="cell">&#x20B9;100</td>
                                            <td role="cell">daily</td>
                                        </tr>

                                        <tr role="row">
                                          <td role="cell"></td>
                                            <td role="cell">pushpanjali</td>
                                            <td role="cell">&#x20B9;15</td>
                                            <td role="cell">daily</td>
                                        </tr> 

                                        <tr role="row">
                                        <td role="cell"></td>
                                            <td role="cell">shatrusamharam</td>
                                            <td role="cell">&#x20B9;100</td>
                                            <td role="cell">weekly</td>
                                        </tr> 
                                    </tbody>      
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
					

				</div>
			  	<div class="tab-pane" id="about" role="tabpanel" aria-labelledby="about-tab">
			  		<div class="row">
			  			<div class=" col-sm-12">
			  				<div class="card">
			      			<div class="card-body">
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat odio rutrum, placerat orci quis, tristique odio. Mauris est lectus, semper quis tortor sed, porttitor dapibus sem. Etiam efficitur erat sit amet convallis feugiat. Nullam vehicula ultricies nibh, dictum posuere enim elementum id. Proin dignissim sapien ut posuere porta. Etiam tincidunt tristique purus, quis mattis justo vehicula a. Vestibulum scelerisque rhoncus ex, et rutrum elit.</p>
			 	
						  			</div>
						  		</div>
						</div>
					</div>
				</div>
			  <div class="tab-pane" id="announcement" role="tabpanel" aria-labelledby="announcement-tab">
					<div class="row">
			  			<div class=" col-sm-3">
			  				<div class="card">
			      			<div class="card-body">
								  <h4>📅 13/01/2022</h4>
								  	<h5>NAGAPANCHAMI</h5>
						  			</div>
						  		</div>
						</div>
					   <div class=" col-sm-3">
					  		<div class="card">
					      	<div class="card-body">
							  	 	<h4>📅 18/01/2022</h4>
								  	<h5>THEYYPOOYAM</h5>
								</div>
							</div>
						</div>
					  <div class=" col-sm-3">
					  		<div class="card">
					      	<div class="card-body">
							  	 	<h4>📅 21/01/2022</h4>
								  	<h5>MAKARAVILAK</h5>
								</div>
							</div>
						</div>
						  <div class=" col-sm-3">
					  		<div class="card">
					      	<div class="card-body">
							  	 	<h4>📅 21/01/2022</h4>
								  	<h5>MAKARAVILAK</h5>
								</div>
							</div>
						</div>

					</div>
				</div>
			  <div class="tab-pane" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
					<div class="row">
			  			<div class=" col-sm-4">	
			  					<div class="card">
								 <img class="gallery" src="images/temple.jpg">
								 </div>
						</div>
					   <div class=" col-sm-4">
					   		<div class="card">
							<img class="gallery" src="images/temple3.jpg">
							</div>
						</div>
					  <div class=" col-sm-4">
					  		<div class="card">
					      	<img class="gallery" src="images/background.jpg">
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

<?php
	include "footer1.php";
?>
</body>
</html>
