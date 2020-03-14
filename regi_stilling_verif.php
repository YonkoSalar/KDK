<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "kdk";
	
	$bedriftsnavn = $_POST['bedrift'];
	$fulltNavn = $_POST['fulltNavn'];
	$email = $_POST['email'];
	$stillingstittel = $_POST['stilling'];
	$stillingstype = $_POST['tittel'];
	$stillingstekst = $_POST['stillingtekst'];
	$date = $_POST['date'];
	$url = $_POST['img'];
	
	$conn = mysqli_connect($servername, $username, $password, $db);
	
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT INTO stilling (Bedriftsnavn, FulltNavn, Email, Stillingstittel, Stillingstype, Stillingstekst, Søknadsfrist, URL) 
			VALUES ('$bedriftsnavn', '$fulltNavn', '$email', '$stillingstittel', '$stillingstype', '$stillingstekst', '$date', '$url')";

	
	if (mysqli_query($conn, $sql)) {
			
		} 	
		
		else {
			
		}
?>