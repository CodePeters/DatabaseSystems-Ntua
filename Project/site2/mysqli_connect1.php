<?php
	// this file is imported in every other php file
	// contains sensitive data that allows remote db access
	// and is used to establish a connection with the database
	
	// database access information - for the "Drugstore" db specifically
	DEFINE ('db_user', 'root');
	DEFINE ('db_password', 'root');
	DEFINE ('db_host', 'localhost:8889');
	DEFINE ('db_name', 'Creds');
	
	// make the connection
	$conn = @mysqli_connect(db_host, db_user, db_password, db_name) 
		or die ('Could not connect to MySQL: '.mysqli_connect_error());
	// set the encoding
	mysqli_set_charset($conn, 'utf8');