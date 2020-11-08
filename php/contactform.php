<?php


if (isset($_POST['submit'])) {
    $vezNev = $_POST['vezNev'];
    $kerNev = $_POST['kerNev'];
    $mailFrom = $_POST['mail'];
    $tel = $_POST['tel'];
    $selectPrimary = $_POST['selectPrimary'];
    $msgMain = $_POST['msgMain'];



}
    //e-mail on send, localhost limitations
    /*
    $mailTo = "test24124124@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Ügyfél Kapcsolatkezelés ".$vezNev." ".$kerNev.".\n\n".$msgMain;

    mail($mailTo, $selectPrimary, $txt, $headers);
    header("Location: index.php;mailsen");
}*/
