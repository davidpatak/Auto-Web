<!-- HEADER + NAVBAR -->
<?php include_once 'header.php'?>
<?php include_once 'php/david/dbh.inc.php'?>


<!-- MAIN BODY -->
<section id="header" class="jumbotron text-center">
	<div class="container pb-2 bg-custom">
    	<h1 class="display-4">FOKSZ-AUTO</h1>
		<p class="lead">A telephelyünkön található használt autóink önre várnak!</p>
	</div>
</section>

<section id="hasznaltautok">
	<div class="container">
		<div class="row">
			<?php
				$sql = "SELECT * FROM hasznalt;";
				$result = mysqli_query($conn, $sql); //sql select futtatása
				$resultCheck = mysqli_num_rows($result);	//ellenőrzése, létezik

				if ($resultCheck > 0){
					while ($row = mysqli_fetch_assoc($result)){

					//Ide jön a kártya sorozat	src=\"img/hasznalt/{$row['hasznaltId']}.jpg
					print "<div class=\"col-lg-4 mb-4\">\n";
					print "    <div class=\"card\">\n";
					print "      <img src=\"img/hasznalt/{$row['hasznaltId']}.jpg\" alt=\"\" class=\"card-img-top\">\n";
					print " <div class=\"card-img-overlay\">"; //overlay start
					print "        <h5 class=\"card-title bg-custom\">{$row['autoMarka']}</h5>\n";
					print " </div>";//overlay end
					print "  <div class=\"card-body\">\n";
					print "        <p class=\"card-text\"><i class=\"fas fa-coins\"></i> {$row['autoAr']} Ft <i class=\"fas fa-car-side\"></i> {$row['kilometerOra']}Km</p>\n";
					print "        <p class=\"card-text\"><i class=\"fas fa-gas-pump\"></i> {$row['autoUzemanyag']} <i class=\"fas fa-motorcycle\"></i> {$row['autoHengerur']} &#13220; <i class=\"far fa-clock\"></i> {$row['autoEvjarat']}</p>\n";
					print "        <p class=\"card-text\"><i class=\"fas fa-briefcase-medical\"></i> {$row['autoAllapot']} <i class=\"fas fa-car-side\"></i> {$row['autoTipus']} <i class=\"fas fa-male\"></i> {$row['autoUlesek']}</p>\n";
					print "  </div>\n";
					print "    <div class=\"card-footer d-flex flex-column\">\n";
					print "        <a href=\"#\" class=\"btn btn-primary btn-md\">Megnézem</a>\n";
					print "		</div>\n";
					print "</div>\n";
					print "</div>";
					}
				}
			?>
		</div>
	</div>
</section>
<!-- Footer -->
<?php include_once 'footer.php'?>