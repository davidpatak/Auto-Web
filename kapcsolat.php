<?php include 'php/david/contactform.php';?>
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
<body onload="dayHighlight()">

	<!-- Top Bar telefonszam + nyitvatartas -->
	<div class="top-bar">
		<div class="container">
			<div class="col-12 text-right">
				<p><a href="tel: +3670668XXXX">Hívjon minket: +36 70-668-XXXX</a></p>
			</div>
		</div>
	</div>
	<!-- End Top Bar -->

	<!-- Start Navigation -->
	<nav class="navbar bg-light navbar-light navbar-expand-lg">
		<div class="container">
			<a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="FOKSZ-AUTO KFT." title="FOKSZ-AUTO"></a>

			<!-- Hamburger Menu Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Navigation Bar List -->
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link active">Kezdőlap</a></li>
					<li class="nav-item"><a href="hirek.html" class="nav-link">Hírek</a></li>
					<li class="nav-item"><a href="ujauto.html" class="nav-link">Új Autók</a></li>
					<li class="nav-item"><a href="hasznaltauto.php" class="nav-link">Használt Autók</a></li>
					<li class="nav-item"><a href="szerviz.html" class="nav-link">Szervíz</a></li>
					<li class="nav-item"><a href="karrier.php" class="nav-link">Karrier</a></li>
					<li class="nav-item"><a href="kapcsolat.php" class="nav-link">Kapcsolat</a></li>
				</ul>

			</div>

		</div>
	</nav>
	<!-- End Navigation -->

	<!-- Start Contact Form-->
	<!-- Main Section Side Information-->
	<section class="head pb-1">
		<div class="container py-5">
			<div class="card">
				<div class="card-body">
					<h1 class="font-weight-light text-center py-3">Üzenjen nekünk!</h1>
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="row pt-3">
								<div class="col-lg-10 col-md9 col-sm9 col-9">
									<h3>Érdeklődjön személyesen</h3>
									<p>Egyetem utca 10<br>
										8200 Veszprém<br>
										Magyarország
									</p>
								</div>
							</div>
							<div class="row pt-3">								
								<div class="col-lg-10 col-md9 col-sm9 col-9">
									<h3>Telefonon</h3>
                  					<p>Honkler Károly<br>
                   						+36 70-668-XXXX<br>
                    					Hétköznap 8:00-14:00<br>
                    					Hétvégén 8:00-10:00
                  					</p>
								</div>
							</div>
							<div class="row pt-3">								
								<div class="col-lg-10 col-md9 col-sm9 col-9">
									<div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 200px">
										<iframe src="https://maps.google.com/maps?q=pannon%20egyetem&t=&z=15&ie=UTF8&iwloc=&output=embed"
										  frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
						<!-- Main Form-->
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
											<!-- Fail / Success MSG EMAIL -->
											<?php if($msg != ''): ?>
											<div class="alert <?php echo $msgClass; ?>"><?php echo $msg;?></div>
											<?php endif; ?>
											<!-- Fail / Success MSG database -->
											<?php 
											if(isset($_GET["error"])) {
												if($_GET["error"] == "none"){
													echo "<br><div id=\"uzenet\" class=\"alert-success\"> Üzenetét megkaptuk, mihamarabb felvesszük önnel a kapcsolatot!</div><br>";
												}
												else if($_GET["error"] == "stmtfailed") {
													echo "<br><div id=\"uzenet\" class=\"alert-danger\"> Valamilyen hiba történt! Próbálkozzon újra!</div><br>";
												}}					
											?>
							<form class="contact-form" action="kapcsolat.php" onsubmit="return checkForm(this);" method="post">
								<label>Hogyan szólíthatjuk?</label>
								<div class="form-row">									
									<div class="form-group col-lg-6 col-md12 col-sm-12 col-12">
										<input type="text" name="vezNev" class="form-control" placeholder="Vezetéknév" required value="<?php echo isset($_POST['vezNev']) ? $vezNev : ''; ?>">
									</div>
									<div class="form-group col-lg-6 col-md12 col-sm-12 col-12">
										<input type="text" name="kerNev" class="form-control" placeholder="Keresztnév" required value="<?php echo isset($_POST['kerNev']) ? $kerNev : ''; ?>">
									</div>
								</div>
								<label>Ön elérhetőségei (e-mail és telefonszám)?</label>
								<div class="form-row">
									<div class="form-group col-lg-6 col-md12 col-sm-12 col-12">
										<input type="text" name="mail" class="form-control" placeholder="pelda@pelda.hu" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required value="<?php echo isset($_POST['mail']) ? $mail : ''; ?>">
									</div>
									<div class="form-group col-lg-6 col-md12 col-sm-12 col-12">
										<input type="tel" name="tel" class="form-control" placeholder="Tel.: +36-821-8482" pattern="\++[0-9]{2,3}-[0-9]{3}-[0-9]{4,}" title="+36-821-8482" required value="<?php echo isset($_POST['tel']) ? $tel : ''; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="selectPrimary">Miben segíthetünk önnek?</label>
									<select id="selectPrimary" name="selectPrimary" class="form-control">
										<option value="Üresen hagyva" hidden>Válasszon az alábbiak közül</option>
										<option value="Szakszervíz">Szakszervíz</option>
										<option value="Új autó vásárlása">Új autó vásárlása</option>
										<option value="Használt autó árajánlat">Használt autó árajánlat</option>
										<option value="Alkatrész beszerzése">Alkatrész beszerzése</option>
										<option value="Forgalmi vizsgáztatás">Forgalmi vizsgáztatás</option>
										<option value="Vontatás">Vontatás</option>
										<option value="Egyéb...">Egyéb...</option>
									</select>
								</div>
								<label>Az ön üzenete számunkra</label>
								<textarea type="text" name="msgMain" class="form-control mb-3" cols="10" rows="5" id="comment" placeholder="..." required value="<?php echo isset($_POST['msgMain']) ? $msgMain : ''; ?>"></textarea>
									<div class="checkbox">
										<label style="font-size:0.7rem"><input type="checkbox" required name="checkboxPriv"> Hozzájárulok ahhoz, hogy az általam megadott személyes és nem személyes adatok a FOKSZ-AUTO az <a data-toggle="modal" data-target=".privacyNotice" href="#privacyNotice" style="color:#73b21c">Adatvédelemi nyilatkozatunk</a> alapján automatikusan feldolgozásra kerülhetnek. Az adatok kizárólag a kérdések megválaszolása céljából kerülnek mentésre és harmadik félnek nem adjuk át.</label>
										<div class="modal fade privacyNotice" tabindex="-1" role="dialog" aria-labelledby="privacyNoticeLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
											  <div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="privacyNoticeLabel">Adatvédelmi Nyilatkozatunk</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">x</span>
													</button>
												</div>
												<div class="modal-body">	<!-- Filler Text Ring-Auto -->
													<p>FOKSZ-AUTÓ KFT.</p>
													<p>1. BEVEZETÉS<br>
														2. ADATKEZELŐ ADATAI<br>
														3. AZ ADATKEZELÉSHEZ KAPCSOLÓDÓ FOGALMAK ÉS AZ ADATKEZELÉS ELVEI<br>
														4. AZ ÖN JOGAI<br>
														5. ADATBIZTONSÁG<br>
														6. ADATTOVÁBBÍTÁS<br>
													</p>
													<p><br><strong>1. BEVEZETÉS</strong><br><br>A FOKSZ-AUTO Kft. (a továbbiakban: Adatkezelő) tevékenysége során fokozottan ügyel a személyes adatok védelmére, a kötelező jogi rendelkezések betartására, a biztonságos és tisztességes adatkezelésre. Adatkezelő elismeri a természetes személyek személyes adataik védelméhez és kezeléséhez kapcsolódó elveket és szabályokat, melyek alapján adatkezelését végzi.</p>
													<p>Adatkezelő tájékoztatja a természetes személyeket az adatkezelés elveiről, folyamatáról és garanciáiról. Adatkezelő elismeri a természetes személyek azon jogát, hogy saját személyes adataik felett maguk rendelkezzenek. Ugyanakkor felhívja a figyelmet, hogy a személyes adatok védelméhez való jog nem abszolút jog, azt az arányosság elvével összhangban kell figyelembe venni és egyensúlyba állítani más alapvető jogokkal.</p>
													<p>Adatkezelő az adatkezelés folyamatát az Egységes Szerkezetű Adatvédelmi Tájékoztató szabályaiban (továbbiakban Szabályzat) foglalja össze. Adatkezelő az Adatvédelmi Szabályzat alapján – az átláthatóság elvére figyelemmel – Adatkezelési Tájékoztatót készít ügyfelei részére, hogy megfelelően tájékoztatást nyújtson az adatkezelési folyamatokról, illetőleg az érintettek jogairól.</p>
													<p>Jelen Tájékoztató Adatkezelő ONLINE, ILLETVE TELEFONON ELÉRHETŐ tevékenységeivel összefüggő adatkezelési folyamatait foglalja össze. Részletesebb tájékoztatás érdekében kérjük, olvassa el a Szabályzatot. Tájékoztatjuk, hogy a Szabályzat elérhető Adatkezelő titkárságán, illetve bármely kérdése felmerül, Adatkezelő munkatársai állnak rendelkezésére.Kérjük figyelmesen olvassa el a Tájékoztatót, annak érdekében, hogy megértse, hogy hogyan kezeljük az Ön személyes adatait és megismerje az adatkezeléssel kapcsolatos jogait.</p>
													<p><br><strong>2. ADATKELŐ ADATAI</strong><br><br></p>
													<p>Az Ön adatait elsősorban Adatkezelő, illetve Adatkezelő munkatársai, valamint az Adatkezelővel szerződéses kapcsolatban álló partnerek kezelik. Az adatkezelés során törekszünk arra, hogy kizárólag a szükséges mértékben kezeljük az adatokat.</p>
													<p>Cégnév:&nbsp;&nbsp;&nbsp;&nbsp;FOKSZ-AUTO Kft.<br>
														Székhely:&nbsp;&nbsp;&nbsp;8200 Veszprém, Egyetem Utca 10.<br>
														Weblapok:&nbsp;&nbsp;&nbsp;<a href="#">www.fokszauto.hu</a><br>
														Kapcsolattartás:&nbsp;&nbsp;Nagy Dalma adatvédelmi referens<br>
														Telefon:&nbsp;&nbsp;&nbsp;+36 30 333 4444<br>
														E-mail:&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:adatkezeles@fokszauto.hu">adatkezeles@fokszauto.hu</a><br>
														Adatvédelmi tisztviselő:&nbsp;&nbsp;&nbsp;&nbsp;Patak Dávid Károly<br>
														Telefon:&nbsp;&nbsp;&nbsp;+36 30 111 2222<br>
														E-mail:&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:patak@fokszauto.hu">patak@fokszauto.hu</a></p>
													<p>Adatvédelmi kérelmek: amennyiben bármilyen kérése vagy kérdése van az adatkezeléssel kapcsolatban, kérelmét postai úton vagy elektronikusan fenti címeink bármelyikére küldheti. Válaszainkat késedelem nélkül, de legfeljebb 30 napon belül küldjük az Ön által kért címre.</p>
													<p><br><strong>3. AZ ADATKEZELÉSHEZ KAPCSOLÓDÓ FOGALMAK ÉS AZ ADATKEZELÉS ELVEI</strong><br><br></p>
													<p>Az adatkezelési műveletek tekintetében Ön érintettnek minősül, amennyiben valamely személyes adata alapján közvetlenül vagy közvetve azonosíthatóvá válik, illetve amennyiben Önnel kapcsolatban Adatkezelő adatkezelést végez (pl.: érdeklődő, vásárló, hírlevél feliratkozó, stb…). Az Adatkezelővel szerződéses kapcsolatban álló Importőr a Porsche Hungária Kft. (1139 Budapest, Fáy utca 27. – érintett márkák: VW, VW Haszongépjármű, Seat, Audi, Skoda) és a Magyar Suzuki Zrt. (2500 Esztergom, Schweidel J. u. 52/A., érintett márka: Suzuki)</p>
													<p>Az adatkezelési műveletek során alkalmazott fogalmakkal kapcsolatos részletesebb tájékoztatás érdekében kérjük, olvassa el a Szabályzatot.</p>
													<p>Adatkezelő a személyes adatok során az adatkezelés alábbi alapelveivel összhangban jár el:</p>
													<p>- célhoz kötöttség elve (adatkezelés adott célt szolgál)<br>
														- szükségesség-arányosság elve (érdekmérlegelési teszttel alátámasztott adatkezelés)<br>
														- jogszerűség és tisztességes eljárás elve (az adatkezelés megfelel a mindenkor hatályos jogszabályoknak)<br>
														- átláthatóság elve (az Érintettek számára is megismerhető adatkezelési folyamatok alkalmazása)<br>
														- adattakarékosság elve (az adatkezelés csak a feltétlenül szükséges mértékben valósuljon meg)<br>
														- arányosság elve (az Érintettek információs önrendelkezési jogának kizárólag jogos érdek érvényesíthetőség érdekében korlátozható)<br>
														- elszámoltathatóság elve (az adatkezelés és megfelelő tájékoztatás folyamatát Adatkezelő megfelelően dokumentálja)<br></p>
													<p>Az adatkezelés elveiről bővebb információkat talál a 2016/679 EK Rendelet (a továbbiakban Rendelet) 5. cikkében, valamint a 2011. évi CXII törvény az információs önrendelkezési jogról és az infoszabadságról szóló törvényben.</p>
													<p><br><strong>4. AZ ÖN JOGAI</strong><br><br></p>
													<p>Ön az adatkezelés során mindenkor jogosult:<br><br>
														a. tájékoztatást kérni személyes adatai kezeléséről<br>
														b. amennyiben az adat nem helyes, kérni ennek kijavítását<br>
														c. kérni a személyes adatok kezelésének korlátozását<br>
														d. kérni a személyes adatai törlését<br>
														e. kérni személyes adatainak más Adatkezelő részére való továbbítását (adathordozhatóság)<br>
														f. tiltakozni személyes adatainak közvetlen üzletszerzés céljára történő felhasználása ellen<br>
														g. bármely megadott hozzájárulását bármikor, indoklás nélkül, ingyenesen visszavonhatja<br>
														h. panaszt tenni és jogorvoslattal élni, illetékes törvényszék előtt pert indítani<br><br>														
														Ön az adatkezeléssel kapcsolatos jogait Adatkezelőhöz intézett kérelem útján gyakorolhatja. Adatkezelő bármely elérhetőségén történő megkeresésre haladéktalanul, de legkésőbb 30 napon belül válaszol.<br>														
														Ön bármikor tiltakozhat az Önre vonatkozó személyes adatok közvetlen üzletszerzés céljából történő kezelése ellen. Tiltakozása esetén a továbbiakban nem küldünk Önnek reklámanyagot.<br>
														Ön kéréseivel, kérdéseivel, panaszaival, Adatkezelő magatartására vonatkozó észrevételével fordulhat közvetlenül Adatkezelő képviselőjéhez, elérhetősége fent részletezve.<br>
													</p>
													<p><br><strong>5. ADATBIZTONSÁG</strong><br><br></p>
													<p>Adatkezelő a „privacy-by-design”, azaz az alapértelmezett és beépített adatvédelem alapelve szerint egész adatvédelmi folyamatának kialakítása során figyelemmel van az adatbiztonság követelményére.<br>
														Adatkezelő célja, hogy az adatkezelési kockázatok csökkentése érdekében a személyes adatok kezelését a minimálisra csökkentse. Adatkezelő a kezelt személyes adatokat átlátható és ellenőrizhető módon kezeli az adatvédelmi incidensek azonnali észlelése céljából.<br>														
														Adatkezelő adatbiztonsági feladatkörében<br>														
														- technikai és szervezési intézkedéseket tesz az elektronikusan tárolt adatok biztosítása tekintetében<br>
														- biztosítja a jogszabály által megkövetelt adatbiztonsági szabályok érvényesülését<br>
														- biztosítja az adatvédelmi, illetve titokvédelmi szabályok érvényesülését<br>
														- megakadályozza az adatokhoz való jogosulatlan hozzáférést<br>
														- megteszi a szükséges intézkedéseket az adatok sérülésének megelőzése érdekében<br>
														- elősegíti az adatkezelési tudatosságot munkavállalói tekintetében az adatbiztonság biztosítása céljából<br>
														- biztosítja a papír alapon tárolt adatok fizikai védelmét<br>
														- biztosítja az elektronikusan tárolt adatokhoz használt eszközök fizikai védelmét<br>
														- gondoskodik az adatok rendszeres biztonsági mentéséről<br>
														- biztosítja, hogy az adatokhoz való hozzáférés kizárólag az arra jogosultak számára legyen engedélyezett<br>														
														</p>
													<p><br><strong>6. ADATTOVÁBBÍTÁS</strong><br><br></p>
													<p>Adatkezelő főként saját munkatársai segítségével végzi el az adatkezelési műveleteket. Kiszervezett feladatok, illetve egyéb együttműködés esetén Adatkezelő adatot továbbít a Szabályzat 1. és 2. számú mellékletében foglalt Partnerek részére.</p>
													<p>Adatkezelő biztosítja, hogy az adattovábbítás során is megvalósuljanak a jogszabályi feltételei az adatkezelésnek (cél, jogalap), illetve az adattovábbítás ne járjon az Ön jogainak sérelmével.</p>
												</div>
												<!-- <div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Elutasítom</button>
													<button type="button" class="btn btn-primary" data-dismiss="modal">Elfogadom</button>
												</div>-->
											  </div>
											</div>
										  </div>										  
									</div>
								<button class="btn btn-primary float-right" type="submit" name="submit">Elküldés</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Form-->

	<!-- Start Opening Hours-->
	<section class="head pb-5">
		<div class="container">
			<div class="card">
				<div class="card-body">
					<h1 class="font-weight-light text-center py-3">Nyitvatartási idő</h1>
					<div id="openingHours" class="table-responsive">
						<table class="openinghours-table table text-center">
							<thead>
								<tr>
									<th scope="col"></th>
									<th id="Hetfo1" scope="col">Hétfő</th>
									<th id="Kedd1" scope="col">Kedd</th>
									<th id="Szerda1" scope="col">Szerda</th>
									<th id="Csutortok1" scope="col">Csütörtök</th>
									<th id="Pentek1" scope="col">Péntek</th>
									<th id="Szombat1" scope="col">Szombat</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">Értékesítés</th>
									<td id="Hetfo2"><span>08:00-17:00</span></td>
									<td id="Kedd2"><span>08:00-17:00</span></td>
									<td id="Szerda2"><span>08:00-17:00</span></td>
									<td id="Csutortok2"><span>08:00-17:00</span></td>
									<td id="Pentek2"><span>08:00-17:00</span></td>
									<td id="Szombat2"><span>09:00-12:00</span></td>
								</tr>
								<tr>
									<th scope="row">Szervíz</th>
									<td id="Hetfo3"><span>08:00-17:00</span></td>
									<td id="Kedd3"><span>08:00-17:00</span></td>
									<td id="Szerda3"><span>08:00-17:00</span></td>
									<td id="Csutortok3"><span>08:00-17:00</span></td>
									<td id="Pentek3"><span>08:00-17:00</span></td>
									<td id="Szombat3"><span>-</span></td>
								</tr>
								<tr>
									<th scope="row">Információ</th>
									<td id="Hetfo4"><span>08:00-17:00</span></td>
									<td id="Kedd4"><span>08:00-17:00</span></td>
									<td id="Szerda4"><span>08:00-17:00</span></td>
									<td id="Csutortok4"><span>08:00-17:00</span></td>
									<td id="Pentek4"><span>08:00-17:00</span></td>
									<td id="Szombat4"><span>-</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<h5 class="font-weight-light text-center py-3">Nyitvatartási időn kívül 0-24h információ</h5>
					<div class="container">
						<div class="row">
							<div class="col-sm text-center"><a href="mailto:surgos@fokszauto.hu" style="color:#85cc21!important"><i class="fa fa-envelope" aria-hidden="true"></i>surgos@fokszauto.hu</a></div>
							<div class="col-sm text-center"><a href="tel:+368884444" style="color:#85cc21!important"><i class="fa fa-phone" aria-hidden="true"></i> +368884444</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Opening Hours-->

	<!-- Start google maps
	<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=pannon%20egyetem&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
	End google maps-->


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