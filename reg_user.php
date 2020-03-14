<?php include("header.php"); ?>
<br>
<br>
<div class="col-md-8 order-md-1">
  <h4 class="mb-3">Sign up</h4>
  <form action = "reg_new_user.php" method = "POST" class="needs-validation" novalidate="">
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="firstName">Fornavn</label>
			<input type="text" class="form-control" name = "fornavn" id="firstName" required="">
			
		</div>
		  
		<div class="col-md-6 mb-3">
			<label for="lastName">Etternavn</label>
			<input type="text" name = "etternavn" class="form-control" id="lastName" required="">

		</div>
	</div>


        <div class="mb-3">
          <label for="email">E-mail</label>
          <input type="email" name = "email" class="form-control" id="email" placeholder="you@example.com">
        
        </div>
		
		<div class="mb-3">
          <label for="address">Passord</label>
          <input type="password" name = "passord" class="form-control" id="password" required="">
          <!-- CHECK WITH DATABASE -->
        </div>
		
		<div class="mb-3">
          <label for="email">Studielinje</label>
          <input type="email" name = "studielinje" class="form-control" id="email" placeholder="Dataingeniør">
        </div>

        <div class="mb-3">
          <label for="address">Addresse</label>
          <input type="text" name = "adresse" class="form-control" id="address" placeholder="1234 Main St" required="">
     
        </div>
	

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Registrer bruker</button>
      </form>
    </div>