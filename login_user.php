<?php include("header.php"); ?>
<div class = "container" style="width: 25rem;">
	<div class = "card-deck mb-2 text-left ">
		<div class="card-body card-deck mb-8">

			<form action="login_verif.php" method="POST" class="5e59855fe206a751">
				<br>
				<br>
				<br>
				<label for="username">Email</label>			
				<input class="form-control" type="text" id="username" name="email" aria-label="Brukernavn" required="" autofocus="">

				<label for="password">Passord</label>
				<input class="form-control" type="password" id="password" name="password" aria-label="Passord" required="">

				<br>
				<hr>
		
				<input type="submit" class="btn btn-lg btn-block btn-primary"></input>
			</form>
		
		</div>
	</div>
</div>
