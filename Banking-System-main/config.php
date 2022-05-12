<?php
	$servername = 'localhost';
	$user ='id17093932_janardhan';
	$pass = 'U~eZDV/x9SW)vWJV';
	$dbname = 'id17093932_tsf';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}


?>