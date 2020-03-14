<!DOCTYPE html>
<html>
	<head>
		<meta charset = "uft-8">
		<meta name = viewport content >
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<div class = "text-center">	
		<nav class = "d-flex navbar navbar-light bg-dark navbar-expand">	
			
			<a class="navbar-brand text-white" href="index.php"> Karrieredagen i Kongsberg</a>
			
			<div class=" collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" href = "#" id="navbarDropdown" 
						role="button" data-toggle="dropdown" aria-haspopup="true" 
						aria-expanded="false">For Bedrifter</a>
						
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Info om Bedrifter</a>
							<a class="dropdown-item" href="regi_bed.php">Registreringskjema</a>
							<a class="dropdown-item" href="regi_for_stilling.php">Registrering for stillingsutlysning</a>
							
							
							
						</div>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" href = "#" id="navbarDropdown" 
						role="button" data-toggle="dropdown" aria-haspopup="true" 
						aria-expanded="false">For Studenter</a>
						
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Bedrifter</a>
							<a class="dropdown-item" href="stillingsutlysning.php">Stillingsutlysning</a>
							
						</div>
					</li>
					
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" href = "#" id="navbarDropdown" 
						role="button" data-toggle="dropdown" aria-haspopup="true" 
						aria-expanded="false">Om Oss</a>
						
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Generell informasjon</a>
							<a class="dropdown-item" href="#">Teamet</a>
							
						</div>
					</li>
					
					<?php 
						
						if(!isset($_SESSION)){
							session_start();
						}
						
						//Emailen lagret i server og ikke på pcen, sever lager cookie og kan sjekke med pcen
						if(isset($_SESSION['email'])){ ?>
						<a class="btn btn-outline-primary" href="signOut.php">Sign Out</a>
						<a class="btn btn-outline-primary" href="reg_user.php">Sign up</a>
						<?php	}
						
						else{
						?>
						
						<br>
						<a class="btn btn-outline-primary" href="login_user.php">Login</a>
					<?php	} ?>
					
					
				</ul>
			</div>
			<br>
			<br>
			
		</nav>
	</div>
	<div class="container">
		