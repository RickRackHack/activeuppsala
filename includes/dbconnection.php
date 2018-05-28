<?php

	$serverName = "localhost";
	$username = "root";
	$password = "root"; // Kan behöva vara null istället
	$dbname = "activeuppsala";

	// Create connection

	$conn = new mysqli($serverName, $username, $password, $dbname);

	// Check connection

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

 ?>
