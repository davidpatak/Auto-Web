<?php
	include_once 'php/david/dbh.inc.php'
?>
<!-- HEADER + NAVBAR -->
<?php include_once 'header.php'?>

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
	
	<!-- End Main Page-->

<!-- Footer -->
<?php include_once 'footer.php'?>