
<?php 
	if(!isset($_POST["StillingID"])){
		header("location: stillingsutlysning.php");
		exit;
	
	}
	
	include("header.php"); ?>

<br>
<br>
<div class="container">
	<blockquote class="blockquote">
		<h2 class="mb-0">Stillingsutlysning</h2>
		<footer class="blockquote-footer">Her legger vi ut stillingsutlysninger fra bedrifter som deltar</footer>
	</blockquote>
	
	
	<?php if(isset($_SESSION['email'])){   ?>
		<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Legg til Stillingsutlysning
		</button>
		
		
		<div class="collapse" id="collapseExample">
			<div class="card card-body">
				<form action = "regi_stilling_verif.php" class="needs-validation" method = "POST" novalidate="">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="bedriftsnavn">Bedriftsnavn</label>
							<input type="text" name="bedrift" class="form-control" required="">
							
						</div>
						
						<div class="col-md-6 mb-3">
							<label for="fullNavn">Fullt navn</label>
							<input type="text" name="fulltNavn" class="form-control" required="">     
						</div>
					</div>
					
					<div class="mb-3">
						<label for="email">Email </label>
						<input type="email" name = "email" class="form-control" id="email" placeholder="you@example.com" required = "">
						
					</div>
					
					<div class="mb-3">
						<label for="stillingstittel">Stillingstittel</label>
						<input type="text" name = "stilling" class="form-control" required="">
					</div>
					
					<hr class="mb-4">
					
					<h4 class="mb-3">Stillingstype</h4>
					
					<div class="d-block my-3">
						
						
						
						<div class="custom-control custom-radio">
							<input id="customradio1" value="Sommerjobb" name="tittel" type="radio" class="custom-control-input" required>
							<label for="customradio1" class="custom-control-label" >Sommerjobb</label>
						</div>
						<div class="custom-control custom-radio">
							<input id="customradio2" value="Deltidsjobb" name="tittel" type="radio" class="custom-control-input" required>
							<label for="customradio2" class="custom-control-label">Deltidsjobb</label>
						</div>
						<div class="custom-control custom-radio">
							<input id="customradio3" value="Fulltidsjobb" name="tittel" type="radio" class="custom-control-input" required>
							<label for="customradio3" class="custom-control-label">Fulltidsjobb</label>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<h5 class="mb-3">Stillingstekst</h5>
								<textarea class="form-control" name = "stillingtekst" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							
							<div class="mb-3">
								<label for="stillingstittel">URL</label>
								<input type="text" name = "img" class="form-control" required="">
							</div>
							<br>
							<div class="mb-3">
								<h5 class="mb-3">Søknadsfrist</h5>
								<input type="date" id="start" name="date" class="form-control" value="2018-07-22" min="2020-01-01" max="2021-12-31">
							</div>
						</div>
					</div>
					
					<hr class="mb-4">
					<button class="btn btn-primary btn-lg btn-block" type="submit">Publiser</button>
				</form>
			</div>
		</div>
		
		
	<?php } ?>
	
	<hr class="mb-4">
	
	
	<?php
		$conn = new mysqli("localhost", "root", "", "kdk");
		
		$sql1 = "SELECT StillingID, Bedriftsnavn, FulltNavn, Email, Stillingstittel, 
		Stillingstype, Stillingstekst,Søknadsfrist, Approved, URL FROM stilling WHERE Approved = 1 ";
		
		$sql2 = sprintf("SELECT StillingID, Bedriftsnavn, FulltNavn, Email, Stillingstittel, 
		Stillingstype, Stillingstekst,Søknadsfrist, Approved, URL FROM stilling WHERE StillingID = %s", $_POST["StillingID"]);
		
		if(isset($_SESSION['email'])){   
			
			$result = $conn->query($sql2);
		}	
		
		else {
			$result = $conn->query($sql1);	
		}
		
		
		
		if ($result->num_rows > 0) {
			// output data of each row
			
			$row = $result->fetch_assoc();
			
			
			
		?>
		<?php if(isset($_SESSION['email'])){  ?>
			
			<form action = "oppdater_redigering.php" method = "POST">
				<div class="jumbotron">
					<div class = "container">
						<h1> <textarea  name="b" class="form-control-sm" id="exampleFormControlTextarea1" rows="3"><?php echo $row["Bedriftsnavn"]; ?></textarea></h1>
						<h2><textarea  name="t" class="form-control-sm" id="exampleFormControlTextarea2" value=""rows="3">	<?php echo $row["Stillingstype"]; ?> </textarea></h2>
						<h4><textarea name="frist" class="form-control-sm" id="exampleFormControlTextarea3" rows="3"><?php echo $row["Søknadsfrist"]; ?></textarea></h4>
						<p><textarea name="s" class="form-control" id="exampleFormControlTextarea3" rows="3"><?php echo $row["Stillingstekst"]; ?></textarea></p>
						<h6><textarea name="url" class="form-control-sm" id="exampleFormControlTextarea3" rows="3"><?php echo $row["URL"]; ?></textarea></h6>
						
						
						<div class = "row">
							<input value = "Ferdig" type ="submit" class = "btn btn-secondary   ml-auto">
							<input type="hidden" value="<?php echo ($row["StillingID"]);?>" name="StillingID">
						</form>
						
						<?php if($row["Approved"] == 0 ){?>
							<form action = "approved_annonse.php" method = "POST">
								<input value = "Godkjenn" type ="submit" class = "btn btn btn-primary  ml-auto">
								<input type="hidden" value="<?php echo ($row["StillingID"]);?>" name="StillingID">
							</form>	
						<?php } ?> 
						</div>
					</div>
					
							</div><?php }} ?>
</div>

</div>						

<?php include ("footer.php"); ?>