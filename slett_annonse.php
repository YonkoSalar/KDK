<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "kdk";


	$idnr = $_POST["StillingID"];
	$conn = mysqli_connect($servername, $username, $password, $db);

	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "DELETE FROM stilling WHERE StillingID = '$idnr' ";
	
	if (mysqli_query($conn, $sql)) {
			header("location: stillingsutlysning.php");
		} 	 	
	
	
?>