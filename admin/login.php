<!-- HEADER + NAVBAR -->
<?php
	include_once '../php/header_admin.php'
?>
	<!-- Login Form -->
	<div class="container pt-5">
		<form>
		<div class="form-group">
		  <label>Felhasználónév</label>
		  <input type="text" class="form-control" aria-describedby="userName" placeholder="Felhasználónév...">
		</div>
		<div class="form-group">
		  <label>Password</label>
		  <input type="password" class="form-control" placeholder="Jelszó...">
		  <small id="warningText" class="form-text text-muted">Belépési adatait ne ossza meg senkivel.</small>
		</div>
		<!--<div class="form-check">
		  <input type="checkbox" class="form-check-input" id="rememberLogin">
		  <label class="form-check-label" for="rememberLogin">Emlékezzen rám</label>
		</div>-->
		<button type="submit" class="btn btn-primary">Belépés</button>
	  	</form>
	</div>
	<!-- End Login Form -->




<!-- FOOTER & SCRIPTS -->
<?php
	include_once '../php/footer_admin.php'
?>