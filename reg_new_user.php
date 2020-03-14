<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "kdk";

	$fornavn = $_POST['fornavn'];
	$etternavn = $_POST['etternavn'];
	$email = $_POST['email'];
	$passord = $_POST['passord'];
	$adresse = $_POST['adresse'];
	$studielinje = $_POST['studielinje'];
	
	
	$conn = mysqli_connect($servername, $username, $password, $db);
	
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT INTO user (FirstName, LastName, Email, studyLine, Adress, Password) 
			VALUES ('$fornavn', '$etternavn', '$email', '$passord', '$adresse', '$studielinje')";
			
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} 	
		
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
	?>