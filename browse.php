<!DOCTYPE html>
<?php
	include("session.php");
	echo $_SESSION['registered'];
?>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="icon" href="images/bees.png">
	
	<title>TravelBees</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/jumbotron.css">
	<link rel="stylesheet" href="style/signup.css">
	<link rel="stylesheet" href="style/browse.css">
</head>
<body>
	<div class="container">
		<!--======== Navigation ========-->
		<?php include 'header.php'; ?>
		
		<!--======== Search form ========-->	
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form>
					<div class="form-browse search-form">
						<div class="input-group">
							<input type="text" class="form-control" id="itemQuery" placeholder="Search">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
						<div class="form-inline">
							<label for="country">Filter by:</label>
							<select name="country" id="country">
								<option value="Countries">Countries</option>
							
								<option value="Australia">Australia</option>
								<option value="Japan">Japan</option>
							</select>
							<select name="category" id="category">
								<option value="All">All Categories</option>
								<option value="foodDrinks">Food and Drinks</option>
								<option value="collectibles">Collectibles</option>
							</select>			
						</div>						
					</div>
				</form>		
			</div><!--/col-sm-4 col-sm-offset-4-->
		</div><!--/row-->
	</div><!--/container-->
	
	<!--======== Table of Requests ========-->
	<div class="container" id="tableRequests">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<center>
				<h2>Table of Requests</h2>
				<p>Requests made by other TravelBees:</p>
				</center>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Request ID</th>
							<th>Image</th>
							<th>Name</th>
							<th>Description</th>
							<th>Category</th>
							<th>Price</th>
							<th>Country</th>
							<th>Collection Info</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1111</td>
							<td><a href="#"><img src="http://placehold.it/140x140"></a></td>
							<td>John Doe</td>
							<td>Descrption</td>
							<td>Audio</td>
							<td>$99.99</td>
							<td>China</td>
							<td>Drop off location</td>
						</tr>
					</tbody>			
				</table>
			</div><!--/col-sm-4 col-sm-offset-4-->
		</div><!--/row-->
	</div><!--/container-->
	
	<!--include JS scripts-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>