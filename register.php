
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "kdk";

	$bedriftsNavn = $_POST['bn'];
	$forNavn = $_POST['fornavn'];
	$etterNavn = $_POST['etternavn'];
	$eMail = $_POST['email'];
	$stand = $_POST['standTypes'];
	$telefonNr = $_POST['tlf'];
	
	
	$conn = mysqli_connect($servername, $username, $password, $db);
	
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT INTO company (Firmanavn, Fornavn, Etternavn, Email, pakkeType, Telefonnummer) 
			VALUES ('$bedriftsNavn', '$forNavn', '$etterNavn', '$eMail', '$stand', '$telefonNr')";
			
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} 	
		
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
	?>