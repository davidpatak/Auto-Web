<!-- HEADER + NAVBAR -->
<?php
	include_once '../php/david/header_admin.php'
?>
	<!-- Signup Form -->
	<div class="container pt-5">
		<form action="../php/david/signup.inc.php" method="post">
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
                <input type="password" name="pwd" class="form-control" placeholder="Jelszó...">
            </div>
            <div class="form-group">
                <input type="password" name="pwdrepeat" class="form-control" placeholder="Jelszó ismétlése...">
            </div>

            <?php 
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "emptyinput"){
                        echo "<div class=\"alert-danger\"> Minden mező kitöltése kötelező!</div>";
                    }
                    else if($_GET["error"] == "invaliduid") {
                        echo "<div class=\"alert-danger\"> Válasszon másik nevet!</div>";
                    }
                    else if($_GET["error"] == "invalidemail") {
                        echo "<div class=\"alert-danger\"> Használjon korrekt email-t!</div>";
                    }
                    else if($_GET["error"] == "passwordsdontmatch") {
                        echo "<div class=\"alert-danger\"> Jelszavak nem azonosak!</div>";
                    }
                    else if($_GET["error"] == "stmtfailed") {
                        echo "<div class=\"alert-danger\"> Valamilyen hiba történt! Próbálkozzon újra!</div>";
                    }
                    else if($_GET["error"] == "usernametaken") {
                        echo "<div class=\"alert-danger\"> Felhasználó vagy email már foglalt!</div>";
                    }
                    else if($_GET["error"] == "none") {
                        echo "<div class=\"alert-success\"> Sikeres regisztráció!</div>";
                    }
                }
            ?><br>
            <button type="submit" name="submit" class="btn btn-primary">Regisztráció</button>
	  	</form>
        
	</div>
	<!-- End Signup Form -->




<!-- FOOTER & SCRIPTS -->
<?php
	include_once '../php/david/footer_admin.php'
?>