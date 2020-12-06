<?php
	session_start();
?>

<!DOCTYPE html>
<!-- David -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FOKSZ-AUTO KFT</title>
	<link rel="shortcut icon" href="../img/favicon.ico">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="../css/david/admin_style.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

	<!-- Top Bar telefonszam + nyitvatartas -->
	<div class="top-bar">
		<div class="container">
			<div class="col-12 text-center">
				<p>Kizárólag alkalmazottak számára fenntartott kezelőfelület! Illetéktelen hozzáférés tilos!</p>
			</div>
		</div>
	</div>
	<!-- End Top Bar -->

	<!-- Navigation -->
	<nav class="navbar bg-light navbar-light navbar-expand-lg">
		<div class="container">
			<a href="../index.html" class="navbar-brand"><img src="../img/logo.png" alt="FOKSZ-AUTO KFT." title="FOKSZ-AUTO"></a>

			<!-- Hamburger Menu Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Navigation Bar List -->
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
				<?php
					if(isset($_SESSION["useruid"])){
						echo "<li class=\"nav-item\"><a href=\"../php/david/logout.inc.php\" class=\"nav-link active\">Kilépés</a></li>";
						echo "<li class=\"nav-item\"><a href=\"signup.php\" class=\"nav-link active\">Új Felhasználó</a></li>";
						echo "<li class=\"nav-item\"><a href=\"karrier.php\" class=\"nav-link active\">Hírdetés</a></li>";
						echo "<li class=\"nav-item\"><a href=\"kapcsolat.php\" class=\"nav-link active\">Ügyfél üzenetek</a></li>";
					}
					else {
						echo "<li class=\"nav-item\"><a href=\"login.php\" class=\"nav-link active\">Belépés</a></li>";
					}
				?>										
					<!--<li class="nav-item"><a href="hirek.html" class="nav-link">Hírek</a></li>
					<li class="nav-item"><a href="ujauto.html" class="nav-link">Új</a></li>
					<li class="nav-item"><a href="hasznaltauto.html" class="nav-link">Használt</a></li>
					<li class="nav-item"><a href="szerviz.html" class="nav-link">Szervíz</a></li>
					<li class="nav-item"><a href="karrier.html" class="nav-link">Karrier</a></li>
					<li class="nav-item"><a href="kapcsolat.php" class="nav-link">Kapcsolat</a></li>
				--></ul>
			</div>

		</div>
	</nav>
	<!-- End Navigation -->
