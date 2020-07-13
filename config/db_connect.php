<?php 
	// Connect to database
	$conn = mysqli_connect('localhost', 'Gudy', 'temitopeobi@24', 'gudy pizza');

	//check connection

	if(!$conn) {
		echo "connection error: " . mysqli_connect_error();
	}

 ?>