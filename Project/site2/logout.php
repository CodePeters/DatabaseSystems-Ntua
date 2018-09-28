<?php
	// logout the user and get him back to the login page
	session_start();
	unset($_SESSION['username']);
	header("Location:http://localhost:8888/site2/login.php");
?>