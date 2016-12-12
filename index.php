<!DOCTYPE html>
<?php
	include("session.php");
	include('connect.php');
	if ($_SERVER["REQUEST_METHOD"] == "POST") {		
		$username = $_POST['inputUsername'];
		$password = $_POST['inputPassword'];
		$registered = false;
		//execute query
		$sqlQuery = "SELECT * FROM user WHERE Username = '" . $username . "';";
		$result = $conn->query($sqlQuery);
		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
		} else if ($result->num_rows > 1) {
			echo "Too many rows";
			exit;
		} else if ($result->num_rows == 0) {
			echo "No rows found: Invalid username";
			exit;
		}
		
		//check password
		if ($password == $row['Password']) {
			$registered = true;
			$admin = $row['Admin'];
		} else {
			echo "Wrong password";
			exit;
		}
		$password = null; //clear password
		
		//add to session data
		$_SESSION['username'] = $username;
		$_SESSION['admin'] = $admin;
		$_SESSION['registered'] = $registered;
		//echo $_SESSION['registered'];
		//close connection
		$conn->close();
	}
?>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="icon" href="images/bees.png">
	
	<title>Home | TravelBees</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/jumbotron.css">
</head>
<body>
	<?php 
	//echo ($_SERVER["REQUEST_METHOD"] == "POST");
		if(isset($registered)) {
			//echo isset($registered);
		}
	?>
	<div class="container">
		<!--======== Navigation ========-->
		<?php include 'header.php'; ?>
		
		<!--======== Masthead ========-->
		<!-- **Possibly add a carousel instead later**-->		
		<div class="row">
			<div class="jumbotron">
				<div class="container">
					<h1>TravelBees</h1>
					<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
				</div>
			</div>		
		</div>
	
		<!--======== Search form ========-->
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form>
					<div class="form-group search-form">
						<div class="input-group">
							<input type="text" class="form-control" id="itemQuery" placeholder="Search">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</div>
				</form>		
			</div><!--/col-sm-4 col-sm-offset-4-->
		</div><!--/row-->
	</div><!--/container-->

	<!--include JS scripts-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>