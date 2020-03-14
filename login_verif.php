<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "kdk";
	
	$conn = mysqli_connect($servername, $username, $password, $db);
	
	
	
	//Start sessions if not started
	if(!isset($_SESSION)){
		session_start();
	}
    
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		echo ($_POST['email']);
		$sql = sprintf('SELECT email, password FROM user WHERE email = "%s"', $_POST["email"]); 
		$data = $conn->query($sql);
		
		$rad = mysqli_fetch_array($data);
		
			if($rad){
				if($_POST['password'] == $rad["password"]){
					$_SESSION['email'] = $rad["email"];
					$_SESSION['password'] = $rad["password"];
					header("location: index.php");
					exit;
				}
				
				else{
					echo "Feil email/ passord";
				}
			}
			
			else{
				echo "Feil email/passord";
			}
	}
	
	
	





?>