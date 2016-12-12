<!DOCTYPE html>
<?php
	include("session.php");
?>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="icon" href="images/bees.png">
	
	<title>Post Trip | TravelBees</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/jumbotron.css">
	<link rel="stylesheet" href="style/post.css">
</head>
<body>
	<div class="container">
		<div class="row">
		<!--======== Navigation ========-->
		<?php include 'header.php'; ?>

		<!--======== Form ========-->
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form class="form-post">
					<h2 class="form-post-heading">Post Trip</h2>				
					<div class="form-group">
						<label for="itemCountry">Country</label>
						<select class="form-control" name="country" id="country">
							<option value="">Choose Country</option>
							<option value="Australia">Australia</option>
							<option value="Japan">Japan</option>
						</select>
					</div>
					<div class="form-group">
						<label for="arrivalDate">Arrival date to country</label>
						<input type="date" class="form-control" id="arrivalDate" name="arrivalDate">
						<!-- useful for warnings-->
						<p class="help-block">Example block-level help text here.</p>				
					</div>						
					<div class="form-group">
						<label for="returnDate">Return date to Australia</label>
						<input type="date" class="form-control" id="returnDate" name="returnDate">
						<!-- useful for warnings-->
						<p class="help-block">Example block-level help text here.</p>				
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