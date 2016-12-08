<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="icon" href="images/bees.png">
	
	<title>Post Request | TravelBees</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/jumbotron.css">
	<link rel="stylesheet" href="style/post.css">
</head>
<body>		
	<div class="container">
		<!--======== Navigation ========-->
		<?php include 'header.php'; ?>

		<!--======== Form ========-->
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form class="form-post">
					<h2 class="form-post-heading">Post Item Request</h2>
					<div class="form-group">
						<label for="itemName">Name</label>
						<input type="text" class="form-control" id="itemName" placeholder="Enter item name in full">
						<!-- useful for warnings-->
						<p class="help-block">Example block-level help text here.</p>				
					</div>
					<div class="form-group">
						<label for="itemDescription">Description</label>
						<textarea class="form-control" rows="5" id="itemDescription" placeholder="Describe your item e.g. size, quantity, colour, packaging, how to buy"></textarea>
						<!-- useful for warnings-->
						<p class="help-block">Example block-level help text here.</p>
					<div class="form-group">
						<label for="category">Category</label>
						<select class="form-control" name="category" id="itemCategory">
							<option value="All">All Categories</option>
							<option value="foodDrinks">Food and Drinks</option>
							<option value="collectibles">Collectibles</option>
						</select>
					</div>
					<div class="form-group">
						<label for="inputImage">Upload a picture</label><br>
						
						<center><img src="http://placehold.it/250x250"></center>
						<input type="file" class="form-control" name="inputImage" id="inputImage" accept="image/*">
						<!-- useful for warnings-->
						<p class="help-block">Example block-level help text here.</p>				
					</div>
					<div class="form-group">
						<label for="inputURL">URL</label>
						<input type="text" class="form-control" id="inputURL" placeholder="(Optional)">
						<!-- useful for warnings-->
						<p class="help-block">Example block-level help text here.</p>				
					</div>
					<div class="form-group">
						<label for="itemCountry">Country</label>
						<select class="form-control" name="country" id="country">
							<option value="">Choose Country</option>
						
							<option value="Australia">Australia</option>
							<option value="Japan">Japan</option>
						</select>			
					</div>
					<div class="form-group">
						<label class="checkbox-inline"><input type="checkbox" value="" id="inputPerishable">Perishable</label>
						<label class="checkbox-inline"><input type="checkbox" value="" id="inputFragile">Fragile</label>
					</div>
					<div class="form-group">
						<label for="itemSize">Item Size</label>
						<select class="form-control" name="itemSize" id="itemSize">
							<option value="small">Small</option>
							<option value="medium">Medium</option>
							<option value="large">Large</option>
						</select>				
					</div>
					<div class="form-group">
						<label for="inputPrice">Amount you are willing to pay:</label>
						<input type="number" class="form-control" id="inputPrice">
					</div>
					<div class="form-group">
						<label for="inputServiceFee">Service Fee:</label>
						<p class="form-control-static" id="serviceFee">$99.99</p>
					</div>
					<div class="form-group">
						<label for="inputDeliveryFee">Delivery Fee:</label>
						<p class="form-control-static" id="deliveryFee">$99.99</p>
					</div>
					<div class="form-group">
						<label for="inputDeliveryFee">Total Price:</label>
						<p class="form-control-static" id="totalPrice">$99.99</p>
					</div>					
					<button class="btn btn-lg btn-success btn-block" type="submit">Submit</button>
				</form>
			</div><!--/col-sm-4 col-sm-offset-4-->
		</div><!--/row-->
	</div> <!-- /container -->
	
	<!--include JS scripts-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>