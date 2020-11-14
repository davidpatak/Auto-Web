<!-- HEADER + NAVBAR -->
<?php
	include_once '../php/david/header_admin.php'
?>
	<!-- Login Form -->
	<div class="container pt-5">
		<form action="../php/david/login.inc.php" method="post">
		<div class="form-group">
		  <label>Felhasználónév</label>
		  <input type="text" class="form-control" aria-describedby="userName" name="uid" placeholder="Felhasználónév / Email ...">
		</div>
		<div class="form-group">
		  <label>Password</label>
		  <input type="password" class="form-control" placeholder="Jelszó..." name="pwd">
		  <small id="warningText" class="form-text text-muted">Belépési adatait ne ossza meg senkivel!</small>
		</div>
		<?php 
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "emptyinput"){
                        echo "<div class=\"alert-danger\"> Minden mező kitöltése kötelező!</div>";
                    }
                    else if($_GET["error"] == "usernametaken") {
                        echo "<div class=\"alert-danger\"> Hibás belépési adatok!</div>";
                    }
                    else if($_GET["error"] == "none") {
                        echo "<div class=\"alert-success\"> Sikeres bejelentkezés!</div>";
                    }
                }
            ?><br>
		<button type="submit" name="submit" class="btn btn-primary">Belépés</button>
	  	</form>
	</div>
	<!-- End Login Form -->




<!-- FOOTER & SCRIPTS -->
<?php
	include_once '../php/david/footer_admin.php'
?>