<!-- HEADER + NAVBAR -->
<?php
	include_once '../php/header_admin.php'
?>
	<!-- Signup Form -->
	<div class="container pt-5">
		<form action="signup.inc.php" method="post">
            <div class="form-group">
                <input type="text" name="name" class="form-control" aria-describedby="userName" placeholder="Teljes neve...">
            </div>
            <div class="form-group">
                <input type="text" name="uid" class="form-control" aria-describedby="userName" placeholder="Felhasználónév...">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="email: pelda@pelda.hu">
            </div>
            <div class="form-group">
                <input type="text" name="password" class="form-control" placeholder="Jelszó...">
            </div>
            <div class="form-group">
                <input type="password" name="pwdrepeat" class="form-control" placeholder="Jelszó ismétlése...">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Regisztráció</button>
	  	</form>
	</div>
	<!-- End Signup Form -->




<!-- FOOTER & SCRIPTS -->
<?php
	include_once '../php/footer_admin.php'
?>