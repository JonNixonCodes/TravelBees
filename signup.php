<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="icon" href="images/bees.png">
	
	<title>Sign Up | TravelBees</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/jumbotron.css">
	<link rel="stylesheet" href="style/signup.css">	
</head>
<body>
	<div class="container">
		<!--======== Navigation ========-->
		<?php include 'header.php'; ?>
		
		<!--======== Form ========-->
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<form class="form-signin">
					<h2 class="form-signin-heading">Sign Up</h2>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="inputEmail" type="text" class="form-control" name="inputEmail" placeholder="Email">
					</div>	
					<!-- useful for warnings-->
					<p class="help-block">Example block-level help text here.</p>				
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="inputUsername" name="inputUsername" placeholder="Username">
					</div>
					<!-- useful for warnings-->				
					<p class="help-block">Example block-level help text here.</p>			
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="inputPassword1" name="inputPassword1" placeholder="Password">
					</div>
					<!-- useful for warnings-->
					<p class="help-block">Example block-level help text here.</p>				
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="inputPassword2" name="inputPassword2" placeholder="Password">
					</div>
					<!-- useful for warnings-->
					<p class="help-block">Example block-level help text here.</p>				
					
					<button class="btn btn-lg btn-success btn-block" type="submit">Sign Up</button>
				</form>			
			</div><!--/col-sm-4 col-sm-offset-4-->
		</div><!--/row-->
	</div> <!-- /container -->

	<!--include JS scripts-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>