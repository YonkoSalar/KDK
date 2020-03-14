<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "kdk";
	
	$bedrift = $_POST['b'];
	$tittel = $_POST['t'];
	$tekst = $_POST['s'];
	$idnr = $_POST['StillingID'];
	
	$frist =$_POST['frist'];
	$url = $_POST['url'];
	
	
	$conn = mysqli_connect($servername, $username, $password, $db);

	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "UPDATE stilling SET  Bedriftsnavn = '$bedrift', Stillingstype = '$tittel', Stillingstekst = '$tekst', Søknadsfrist = '$frist'
	,URL = '$url' WHERE StillingID = '$idnr'";
	
	if (mysqli_query($conn, $sql)) {
			header("location: stillingsutlysning.php");
		} 	
	
	
	
	
	
	
?>