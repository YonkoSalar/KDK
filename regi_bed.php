<?php
	include("header.php");
	?>	
	<br>
	<br>
	<br>
	<div class="card-deck mb-3 text-center">
    <div class="bg-warning card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Gull(4 stk)</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">22 500 Kr </h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Speedintervju</li>
          <li>Bedriftpresentasjon(15-20 min)</li>
          <li>Stand Plass</li>
          <li>Fremvist logo og info på
			sosiale medier</li>
			
		  <li>Stillings utlysning</li>
		  <li>Lunsj og kaffe </li>
		
        </ul>
      </div>
    </div>
    <div class="bg-light card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Sølv (8 stk)</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">17 500 Kr</h1>
        <ul class="list-unstyled mt-3 mb-4">
           <li><strike>Speedintervju</strike></li>
          <li><strike>Bedriftpresentasjon(15-20 min)</strike></li>
          <li>Stand Plass</li>
          <li>Fremvist logo og info på
			sosiale medier</li>
		  <li>Stillings utlysning</li>
		  <li>Lunsj og kaffe </li>
        </ul>
      </div>
    </div>
    <div class="bg-info card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Standplass(20 stk)</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">12 500 Kr </h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li><strike>Speedintervju</strike></li>
          <li><strike>Bedriftpresentasjon(15-20 min)</strike></li>
          <li>Stand Plass</li>
          <li>Fremvist logo og info på
			sosiale medier</li>
		  <li><strike>Stillings utlysning</strike></li>
		  <li>Lunsj og kaffe </li>
        </ul>
      </div>
    </div>
  </div>
	
	
	<div class="col-md-8 order-md-1">
        <h4 class="mb-3">Registrering</h4>
		<form action = "register.php" method="POST" class="needs-validation" novalidate>
			<div class="mb-3">
				<label for="email">Bedriftsnavn:</label>
				<input name = 'bn' type="text" class="form-control" placeholder="" required>
			</div>
			  
			  
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="firstName">Fornavn:</label>
					<input name = "fornavn" type="text" class="form-control" id="firstName" placeholder="" value="" required>
				</div>
				<div class="col-md-6 mb-3">
					<label for="lastName">Etternavn:</label>
					<input name = "etternavn" type="text" class="form-control" id="lastName" placeholder="" value="" required>

				</div>
			</div>
			
			<div class="mb-3">
				<label for="email">Email</label>
				<input name = "email" type="email" class="form-control" id="email" placeholder="you@example.com" required>
			</div>
				
			<hr class="mb-4">

			<h4 class="mb-3">Type stand: </h4>

			<div class="d-block my-3">
				<div class="custom-control custom-radio">
					<input id="customradio1" value="gold" name="standTypes" type="radio" class="custom-control-input" required>
					<label for="customradio1" class="custom-control-label" >Gull</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="customradio2" value="silver" name="standTypes" type="radio" class="custom-control-input" required>
					<label for="customradio2" class="custom-control-label">Sølv</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="customradio3" value="stand" name="standTypes" type="radio" class="custom-control-input" required>
					<label for="customradio3" class="custom-control-label">Stand</label>
				</div>
		  
				<hr class="mb-4">

				<h4 class="mb-3">Telefonnummer </h4>
			  
				<div class="mb-3">
					<input name = "tlf" class="form-control" type="tel" id="">
				</div>
			</div>
			
			<hr class="mb-4">
			<button class="btn btn-primary btn-lg btn-block" type="submit">Registrer</button>
	  </form>
	</div>
	
<?php include("footer.php"); ?>