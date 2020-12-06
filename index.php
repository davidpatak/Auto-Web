<!-- HEADER + NAVBAR -->
<?php include_once 'header.php'?>
	<!-- Image Carousel -->
	<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="6500"><!--6.5 sec transition speed-->

		<!-- Carousel Content -->
		<div class="carousel-inner">
			<!--SLIDE 1-->
			<div class="carousel-item active">
				<img src="img/carousel/1.jpg" alt="" class="w-100">
				<div class="carousel-caption">	<!--Text Overlay-->
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-8 bg-custom d-none d-md-block py-3 px-0"> <!--Remove on small/medium screens, py-3 for padding-->
								<h1>Megbízható járművek!</h1>
								<div class="border-top border-secondary w-50 mx-auto my-3"></div> <!--margin 0 auto, my-3 side padding-->
								<h3 class="pb-3">Felújított használt és vadonat új autók!</h3> <!--pb-3 padding bottom 3rem-->
								<a href="hasznaltauto.php" class="btn btn-danger btn-lg mr-2">Használt</a>
								<a href="ujauto.html" class="btn btn-primary btn-lg ml-2">Új Autó</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--SLIDE 2-->
			<div class="carousel-item">
				<img src="img/carousel/2.jpg" alt="" class="w-100">
				<div class="carousel-caption">	<!--Text Overlay-->
					<div class="container">
						<div class="row justify-content-end text-right"> <!--Position content and text right-->
							<div class="col-6 bg-custom d-none d-md-block py-3 px-0 pr-3"> <!--Remove on small/medium screens, py-3 for padding-->
								<p class="lead pb-3 slide2paragraph">Ha berreg, ha nem ránk számíthatsz!</p>
								<a href="szerviz.html" class="btn btn-primary btn-md">Keress fel minket!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--SLIDE 3-->
			<div class="carousel-item">
				<img src="img/carousel/3.jpg" alt="" class="w-100">
				<div class="carousel-caption">	<!--Text Overlay-->
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-8 bg-custom d-none d-md-block py-3 px-0"> <!--Remove on small/medium screens, py-3 for padding-->
								<h3 class="pb-3"><strong>MUNKATÁRSAKAT KERESÜNK</strong></h3> <!--pb-3 padding bottom 3rem-->
								<p class="lead slide3paragraph">Szorgos tapasztalt kezekre van szükségünk</p>
								<a href="karrier.php" class="btn btn-primary btn-md ml-2">JELENTKEZEM</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Carousel Content -->

		<!-- Previous & Next Buttons -->
		<!-- Fontawesome Icons -->
		<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="fas fa-chevron-left fa-3x"></span>
		</a>

		<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
			<span class="fas fa-chevron-right fa-3x"></span>
		</a>
		<!-- End Fontawesome Icons-->
		<!-- End Previous & Next Buttons -->

	</div>
	<!-- End Image Carousel -->


	<!-- Main Page Heading -->
	<div class="col-12 text-center mt-5">
		<h1 class="text-dark pt-4">Munkatársaink</h1>
		<div class="border-top border-secondary w-25 mx-auto my-3"></div> <!--margin 0 auto, my-3 side padding-->
		<p class="lead">Nálunk jó kezekben tudhatja járművét</p>
	</div>

	<!-- Three Column Section -->
	<div class="container">
		<div class="row my-5">

			<div class="col-md-4 my-4">
				<img src="img/cards/mechanic1.jpg" alt="" class="w-100 cardImage"> <!--cardImage to resize in css later-->
				<h4 class="my-4">"Olajos varázskezek"</h4>
				<p>Tibi mindenkit levett a lábáról miután rekordot állított az egy perc alatt legtöbb autóban végrehajtott olajcsere kategóriában!</p>
				<a href="hirek.html" class="btn btn-outline-dark btn-md">Ismerje meg!</a>
			</div>

			<div class="col-md-4 my-4">
				<img src="img/cards/mechanic2.jpg" alt="" class="w-100 cardImage">
				<h4 class="my-4">"Tűzön vízen át"</h4>
				<p>Fanni arcán nem látszik mosoly miután rekordját Tibi megdöntötte az egy perc alatt legtöbb autóban végrehajtott olajcsere kategóriában!</p>
				<a href="hirek.html" class="btn btn-outline-dark btn-md">Ismerje meg!</a>
			</div>

			<div class="col-md-4 my-4">
				<img src="img/cards/mechanic3.jpg" alt="" class="w-100 cardImage">
				<h4 class="my-4">"Ki lesz a következő?"</h4>
				<p>Tárt karokkal várunk szakembereket szervízünkbe! Nézze meg állás ajánlatainkat.</p>
				<a href="karrier.php" class="btn btn-outline-dark btn-md">Jelentkezzen!</a>
			</div>
		</div>
	</div>
	<!-- End Three Column Section -->

	<!-- Start Fixed Background IMG -->
	<div class="fixed-background">

		<div class="row text-light py-5">
			<div class="col-12 text-center">
				<h1>Javítasson nálunk!</h1>
				<h3 class="py-4">Szervízünkben széles választék áll rendelkezésre alkatrészekből</h3>
				<a href="szerviz.html" class="btn btn-primary btn-lg">Böngésszen ajánlataink között!</a>
			</div>
		</div>

		<div class="fixed-wrap">
			<div class="fixed"></div>
		</div>
	</div>
	<!-- End Fixed Background IMG -->
 
	<!-- Start Jumbotron -->
	<div class="jumbotron py-5 mb-0">
		<div class="container">
			<div class="row">

				<div class="col-md-7 col-lg-8 col-xl-9 my-auto">
					<h4>Még van kérdése? Folytassuk a beszélgetést személyesen, vagy üzenetben.</h4>
				</div>

				<div class="col-md-5 col-lg-4 col-xl-3 pt-4 pt-md-0">
					<a href="kapcsolat.php" class="btn btn-primary btn-lg">Kapcsolatfelvétel</a>
				</div>

			</div>
		</div>
	</div>
	<!-- End Jumbotron -->

<!-- Footer -->
<?php include_once 'footer.php'?>