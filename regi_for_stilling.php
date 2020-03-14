<?php include("header.php"); ?>
<br>
<br>


<body class="text-left">
	<h4 class="mb-3">Registreringsskjema for stillingsutlysning KD 2020</h4>
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
		<button class="btn btn-primary btn-lg btn-block" type="submit">Send inn forespørsel</button>
	</form>
</body>

<?php include ("footer.php"); ?>		