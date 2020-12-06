<?php
	include_once 'php/david/dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FOKSZ-AUTO KFT</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/david/style.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

	<!-- Top Bar telefonszam + nyitvatartas -->
	<div class="top-bar">
		<div class="container">
			<div class="col-12 text-right">
				<p><a href="tel: +3670668XXXX">Hívjon minket: +36 70-668-XXXX</a></p>
			</div>
		</div>
	</div>
	<!-- End Top Bar -->

	<!-- Navigation -->
	<nav class="navbar bg-light navbar-light navbar-expand-lg">
		<div class="container">
			<a href="index.html" class="navbar-brand"><img src="img/logo.png" alt="FOKSZ-AUTO KFT." title="FOKSZ-AUTO"></a>

			<!-- Hamburger Menu Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Navigation Bar List -->
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.html" class="nav-link active">Kezdőlap</a></li>
					<li class="nav-item"><a href="hirek.html" class="nav-link">Hírek</a></li>
					<li class="nav-item"><a href="ujauto.html" class="nav-link">Új Autók</a></li>
					<li class="nav-item"><a href="hasznaltauto.html" class="nav-link">Használt Autók</a></li>
					<li class="nav-item"><a href="szerviz.html" class="nav-link">Szervíz</a></li>
					<li class="nav-item"><a href="karrier.html" class="nav-link">Karrier</a></li>
					<li class="nav-item"><a href="kapcsolat.php" class="nav-link">Kapcsolat</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navigation -->

	<!-- Main Page -->

	<!-- Search Navigation
	<div class="container">
		<form class="form py-3">
			<input class="form-control" type="text" id="searchJob" placeholder="Böngésszen állásajánlataink között..." aria-label="Search">
		</form>		
	</div>
	End Search Navigation-->
	<?php
		$sql = "SELECT * FROM karrierdb;";
		$result = mysqli_query($conn, $sql); //sql select futtatása
		$resultCheck = mysqli_num_rows($result);	//ellenőrzése, létezik

		if ($resultCheck > 0){	
			while ($row = mysqli_fetch_assoc($result)){		
			//Karrier Hírdetések generálása
				print "<div class=\"container\">\n";
				print "		<div class=\"row main-row p-2\">\n";
				print "			<div class=\"col-lg-4 col-md-12 col-sm-12\">\n";
				print "				<div class=\"blog-img\">\n";
				print "					<img src=\"img/jobs/{$row['selectLogo']}\" alt=\"allasAjanlo\" class=\"img-fluid\">\n";
				print "				</div>\n";
				print "				<div class=\"row\">\n";
				print "					<div class=\"col-sm-12 mb-2\">\n";
				print "						<ul class=\"list-group list-group-vertical listShort\">\n";
				print "							<li class=\"list-group-item\">{$row['felNev']}</li>\n";
				print "							<li class=\"list-group-item\">{$row['felTel']}</li>\n";
				print "						</ul>\n";
				print "					</div>\n";
				print "				</div>\n";
				print "			</div>\n";
				print "			<div class=\"col-lg-8 col-md12 col-sm-12\">\n";
				print "				<div class=\"blog-read-more\">\n";
				print "					<button type=\"button\" class=\"btn btn-primary float-right\" data-toggle=\"collapse\" data-target=\"#job_{$row['karrierId']}\">Tudj meg többet!</button>\n";
				print "				</div>\n";
				print "				<div class=\"blog-title\">\n";
				print "					<h3 id=\"Job{$row['karrierId']}\">{$row['munkaNev']}</h3>\n";
				print "				</div>\n";
				print "				<div class=\"blog-date\">\n";
				print "					<span><strong>Frissítve: </strong></span>\n";
				print "					<span id=\"refreshDate\">{$row['datum']}</span>\n";
				print "				</div>\n";
				print "				<div class=\"blog-desc\">\n";
				print "					<p id=\"shortDesc\">{$row['msgRovid']}</p>\n";
				print "				</div>\n";
				print "				<div id=\"job_{$row['karrierId']}\" class=\"collapse\">\n";
				print "					<h5>Amit Kínálunk:</h5>\n";
				print "					<p>{$row['msgKinal']}</p>\n";
				print "\n";
				print "					<h5>Elvárások és feladatkör:</h5>\n";
				print "					<p>{$row['msgElvar']}</p>\n";
				print "\n";
				print "					<h5>Szükséges tapasztalat és végzettség:</h5>\n";
				print "					<p>{$row['msgTapasz']}</p>\n";
				print "\n";
				print "					<h5>Szükséges nyelvtudás:</h5>\n";
				print "					<p>{$row['nyelv']}</p>\n";
				print "\n";
				print "					<h5>Munkavégzés helye:</h5>\n";
				print "					<p>{$row['helyszin']}</p>\n";
				print "\n";
				print "					<h7>Jelentkezés feladónál telefonon, vagy érdeklődjön a <a href=\"kapcsolat.php\" style=\"color:#85cc21\">KAPCSOLAT</a> fül alatt!</h7>\n";
				print "				</div>\n";
				print "				<!--<div class=\"blog-read-more\">\n";
				print "					<button type=\"button\" class=\"btn btn-primary float-right\" data-toggle=\"collapse\" data-target=\"#{$row['karrierId']}\">Tudj meg többet!</button>\n";
				print "				</div>-->\n";
				print "			</div>\n";
				print "		</div>\n";
				print "	</div>";
			}
		}
	?>
	<!-- Job Posting Template 
	<div class="container">
		<div class="row main-row p-2">
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="blog-img">
					<img src="img/placeholders/bardiAutoAllas.jpg" alt="allasAjanlo" class="img-fluid">
				</div>
				<div class="row">
					<div class="col-sm-12 mb-2">
						<ul class="list-group list-group-vertical listShort">
							<li class="list-group-item">Feladó Neve</li>
							<li class="list-group-item">+36/70-668-XXXX</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md12 col-sm-12">
				<div class="blog-read-more">
					<button type="button" class="btn btn-primary float-right" data-toggle="collapse" data-target="#job_enum">Tudj meg többet!</button>
				</div>
				<div class="blog-title">
					<h3 id="jobTitle">IDE A MEGNEVEZÉS</h3>
				</div>
				<div class="blog-date">
					<span><strong>Frissítve: </strong></span>
					<span id="refreshDate">IDE A DÁTUM</span>
				</div>
				<div class="blog-desc">
					<p id="shortDesc">RÖVID LEÍRÁS HELYE</p>
				</div>
				<div id="job_enum" class="collapse">
					<h5>Amit Kínálunk:</h5>
					<p>IDE AMIT KÍNÁLUNK</p>

					<h5>Főbb Feladatok:</h5>
					<p>IDE A FELADATKÖR</p>

					<h5>Álláshoz tartozó elvárások:</h5>
					<p>IDE A ELVÁRÁSOK</p>

					<h5>Szükséges tapasztalat és végzettség:</h5>
					<p>IDE A SZÜKSÉGES TAPASZTALAT</p>

					<h5>Szükséges nyelvtudás:</h5>
					<p>IDE A SZÜKSÉGES NYELVTUDÁS</p>

					<h5>Munkavégzés helye:</h5>
					<p>IDE A MUNKAVÉGZÉS HELYE</p>

					<h7>Jelentkezés feladónál telefonon, vagy érdeklődjön a <a href="kapcsolat.php" style="color:#85cc21">KAPCSOLAT</a> fül alatt!</h7>
				</div>
				div class="blog-read-more">
					<button type="button" class="btn btn-primary float-right" data-toggle="collapse" data-target="#job_enum">Tudj meg többet!</button>
				</div>
			</div>
		</div>
	</div>

	
	End Job Posting Template -->

	<!-- End Main Page-->

	<!--Start Footer-->
	<footer></footer>
	<!-- End Footer-->
    <!-- Start Socket -->
	<div class="socket text-light text-center py-3">
		<p>&copy; <a href="www.fokszautokft.hu" target="_blank">fokszautokft.hu</a></p>
	</div>
    <!-- End Socket -->
    
	<!-- Script Source Files -->

	<!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap 4.5 JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Font Awesome -->
	<script src="js/all.min.js"></script>
	<!-- David -->
	<script src="js/david.js"></script>

	<!-- End Script Source Files -->
</body>
</html>