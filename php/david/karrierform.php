<?php

if(filter_has_var(INPUT_POST, 'submit')){
        //Get Form Data
        $datum = date("Y-m-d H:i:s");   //current date
        $felNev = htmlspecialchars($_POST['felNev']);       //Feladó Neve
        $felTel = htmlspecialchars($_POST['felTel']);       //Feladó Telefonszáma
        $selectLogo = $_POST['selectLogo'];                 //Kiválasztott Logo
        $munkaNev = htmlspecialchars($_POST['munkaNev']);   //Munka megnevezése
        $msgRovid = htmlspecialchars($_POST['msgRovid']);   //Rövid Leírás
        $msgKinal = htmlspecialchars($_POST['msgKinal']);   //Mit kínálunk
        $msgElvar = htmlspecialchars($_POST['msgElvar']);   //Elvárások stb.
        $msgTapasz = htmlspecialchars($_POST['msgTapasz']); //Tapasztalat szakképzés stb.
        $nyelv = htmlspecialchars($_POST['nyelv']);         //Nyelvtudás ha kell
        $helyszin = htmlspecialchars($_POST['helyszin']);   //Munkavégzés helyszíne

        //Database Write
        require_once 'dbh.inc.php'; //Database connection
        require_once 'functions.inc.php'; //Insert functions contactSend();
        
        karrierSend($conn, $datum, $felNev, $felTel , $selectLogo, $munkaNev, $msgRovid, $msgKinal, $msgElvar, $msgTapasz, $nyelv, $helyszin);
}