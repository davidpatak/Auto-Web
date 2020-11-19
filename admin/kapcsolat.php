<!-- HEADER + NAVBAR -->
<?php
	include_once '../php/david/header_admin.php';
	include_once '../php/david/dbh.inc.php'
?>
<!-- BODY START -->
	<?php
	if(!isset($_SESSION["useruid"])){
		header("Location: login.php?error=invalidaccess");	
	}
	?>
	<!-- Kiiratas db-ből tesztek -->
	<div class="container">
	<br>
		<div class="accordion" id="ticketList">
	<?php
		$sql = "SELECT * FROM felker;";
		$result = mysqli_query($conn, $sql); //sql select futtatása
		$resultCheck = mysqli_num_rows($result);	//ellenőrzése, létezik

		if ($resultCheck > 0){	//ha van mit kiírni akkor...
			while ($row = mysqli_fetch_assoc($result)){		//$row egy tömb ami tartalmazza egy teljes sort
			//assoc array felkerId -> Data

			//Formatálva
			echo '<div class="card">';
			echo "<div class=\"card-header\" id=\"heading".$row['felkerId']."\">";
			echo '<h5 class="mb-0">';
			echo "<button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse".$row['felkerId']."\" aria-expanded=\"true\" aria-controls=\"collapse".$row['felkerId']."\">";
			echo $row['kerTipus'];
			echo '</button>';
			echo '</h5>';
			echo '</div>';
			echo '';
			echo "<div id=\"collapse".$row['felkerId']."\" class=\"collapse\" aria-labelledby=\"heading".$row['felkerId']."\" data-parent=\"#ticketList\" >";
			echo '<div class="card-body">';
			echo "<h6>Üzenet feladója: ".$row['vezNev']." ".$row['kerNev']."</h6>";
			echo "<h6>E-Mail címe: ".$row['felhEmail']."</h6>";
			echo "<h6>Telefon száma: ".$row['felhTel']."</h6>";
			echo "<h6>Kérés típusa: ".$row['kerTipus']."</h6>";
			echo '<br>';
			echo $row['kerUzenet'];
			echo '</div>';
			echo '</div>';
			echo '</div>';
			}
		}
	?>
		</div>
	</div>
<!-- FOOTER & SCRIPTS -->
<?php
	include_once '../php/david/footer_admin.php'
?>