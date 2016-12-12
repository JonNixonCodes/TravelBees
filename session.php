<?php
	session_start();
	if (isset($_SESSION['registered'])) {
		$admin = $_SESSION['admin'];
		$username = $_SESSION['username'];
		//$email = $_SESSION['email'];
		$registered = true;
	} else {
		$registered = false;
	}
?>