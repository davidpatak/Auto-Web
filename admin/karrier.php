<!-- HEADER + NAVBAR -->
<?php include '../php/david/karrierform.php';?>
<?php
	include_once '../php/david/header_admin.php';
	include_once '../php/david/dbh.inc.php'
?>
    <!-- PERMISSION CHECK -->
    <?php
	    if(!isset($_SESSION["useruid"])){
	    	header("Location: login.php?error=invalidaccess");	
	    }
    ?>
    
<!-- BODY START -->
<div class="container py-3">
    <h4 class="text-center py-3">Hírdetések feladó felület</h4>
    <!-- Fail / Success MSG database -->
            <?php 
			    if(isset($_GET["error"])) {
					if($_GET["error"] == "none"){
						echo "<br><div id=\"uzenet\" class=\"alert-success\">Hírdetés sikeresen feladásra került!</div><br>";
					}
					else if($_GET["error"] == "stmtfailed") {
						echo "<br><div id=\"uzenet\" class=\"alert-danger\"> Valamilyen hiba történt! Próbálkozzon újra!</div><br>";
					}}					
			?>
    <form action="karrier.php" method="post"> 
    <div class="form-group">
        <label>Feladó neve</label>
        <input type="text" name="felNev" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Feladó Telefonszáma</label>
        <input type="tel" name="felTel" class="form-control" placeholder="Tel.: +36-821-8482" pattern="\++[0-9]{2,3}-[0-9]{3}-[0-9]{4,}" title="+36-821-8482" required>
    </div>
    <div class="form-group">
		<label for="selectLogo">Munkáltató Hírdetés Logo</label>
			<select id="selectLogo" name="selectLogo" class="form-control">
				<option value="placeholder.jpg" hidden>Válasszon az alábbiak közül</option>
				<option value="1.jpg">Bárdi Auto Keresed az utad?</option>
				<option value="2.jpg">BKV Zrt önnek jár</option>
                <option value="3.jpg">Informatikus fokszauto</option>
                <option value="4.jpg">Szervíz sped</option>
			</select>
    </div>
    <div class="form-group">
        <label>Munka neve</label>
        <input type="text" name="munkaNev" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Munka rövid leírása</label>
	    <textarea type="text" name="msgRovid" class="form-control mb-3" cols="10" rows="5" id="comment" placeholder="..." required></textarea>
    </div>
    <div class="form-group">
        <label>Amit kínálunk</label>
	    <textarea type="text" name="msgKinal" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Elvárások és főbb feladatok</label>
	    <textarea type="text" name="msgElvar" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Szükséges tapasztalat és végzettség</label>
	    <textarea type="text" name="msgTapasz" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Igényelt nyelvtudás</label>
        <input type="text" name="nyelv" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Munkavégzés helye</label>
        <input type="text" name="helyszin" class="form-control" required>
    </div>
    <button class="btn btn-primary float-right" type="submit" name="submit">Állásajánlat Feladása</button>
    </form>
</div>
	
	
<!-- FOOTER & SCRIPTS -->
<?php
	include_once '../php/david/footer_admin.php'
?>