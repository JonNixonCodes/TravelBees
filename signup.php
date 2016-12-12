<!DOCTYPE html>
<?php
	include("session.php");
	include('connect.php');
	if ($_SERVER["REQUEST_METHOD"] == "POST") {		
		$email = $_POST['inputEmail'];
		$username = $_POST['inputUsername'];
		$password1 = $_POST['inputPassword1'];
		$password2 = $_POST['inputPassword2'];
		
		$registered = false;
		
		//verify username uniqueness
		$queryUsername = "SELECT * FROM user
											WHERE Username = '" . $username . "';";
		$resultUsername = $conn->query($queryUsername);
		if ($resultUsername->num_rows != 0) {
			echo "An account already exists under this username!";
			exit();
		}
		//verify email uniqueness
		$queryEmail = "SELECT * FROM user
											WHERE Email = '" . $email . "';";
		$resultEmail = $conn->query($queryEmail);
		if ($resultEmail->num_rows != 0) {
			echo "An account already exists under this email!";
			exit();
		}											
		//verify password
		if ($password1 === $password2) {
			$password = $password1;
		} else {
			echo "Passwords do not match";
			exit();
		}
		//execute sign up
		$sqlQuery = "INSERT INTO user (Email, Username, Password)
								 VALUES ('" . $email . "', '" . $username . "', '" . $password . "');";
		$result = $conn->query($sqlQuery);
		if (!$result) {
			echo "Error executing query";
			exit();
		}

		//clear passwords
		$password = null;
		$password1 = null;
		$password2 = null;
		
		//add to session data
		$_SESSION['username'] = $username;
		$_SESSION['admin'] = $admin;
		$_SESSION['registered'] = $registered;
		//echo $_SESSION['registered'];
		//close connection
		$conn->close();
		header("Location: index.php");
	}	
?>
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
				<form class="form-signin" method="post" action="">
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