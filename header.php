<div class="row">			
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Welcome, Traveller</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="browse.php">Browse Requests</a><li>					
<?php if($registered === true): ?> <!--User only-->
					<li><a href="postRequest.php">Post Request</a><li>
					<li><a href="postTrip.php">Post Trip</a><li>
<?php endif ?>
					<li><a href="how-it-works.php">How It Works</a><li>					
<?php if($registered === true): ?> <!--User only-->
					<li><a href="#">Inbox</a><li>
<?php endif ?>
				</ul>
<?php if($registered != true): ?>
				<form class="navbar-form navbar-right" action="index.php" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="inputUsername" type="text" class="form-control" name="inputUsername" placeholder="Username"> <!--Can add signin by email later-->
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="inputPassword" type="password" class="form-control" name="inputPassword" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary">Sign in</button>
					<button class="btn btn-success" type="button" onClick="location.href='signup.php';">Sign up</button>
				</form>
<?php else: ?>
				<div class="navbar-form navbar-right">
					<button class="btn btn-primary" type="button" onClick="location.href='signout.php';">Sign out</button>
				</div>
<?php endif ?>
			</div><!--/.navbar-collapse -->
		</div>
	</nav>		
</div>