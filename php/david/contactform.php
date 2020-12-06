<?php
//David Kapcsolatok menu funkcionalitas feladatresz
    //Message Variables
    $msg='';
    $msgClass = '';

    //Check For Submit
    if(filter_has_var(INPUT_POST, 'submit')){
        //Get Form Data
        $vezNev = htmlspecialchars($_POST['vezNev']);
        $kerNev = htmlspecialchars($_POST['kerNev']);
        $teljesNev = $vezNev. ' ' . $kerNev;
        $mail = htmlspecialchars($_POST['mail']);
        $tel = htmlspecialchars($_POST['tel']);
        $selectPrimary = $_POST['selectPrimary'];
        $msgMain = htmlspecialchars($_POST['msgMain']);
        //Check Required Fields
        if(!empty($vezNev) && !empty($kerNev) && !empty($mail) && !empty($tel) 
        && !empty($msgMain)){
            // Passed
            //Check email
            if(filter_var($mail, FILTER_VALIDATE_EMAIL) === false){
                //EMAIL FAILED
                $msg = 'Kérem használjon valid email címet!';
                $msgClass = 'alert-danger';
            }else{
                //EMAIL PASSED
                /*
                //Sending the Email, (Csak szerveren, tesztelve, működik)
                $toEmail ='################@gmail.com';     //Placeholder
                $subject = 'Üzenet érkezett '.$teljesNev.' részéről!'; 
                $body = '<h2>Kapcsolat Felvétel</h2>
                        <h4>Név</h4><p>'.$teljesNev.'</p>
                        <h4>email</h4><p>'.$mail.'</p>
                        <h4>Telefonszám</h4><p>'.$tel.'</p>
                        <h4>Tárgy</h4><p>'.$selectPrimary.'</p>
                        <h4>Név</h4><p>'.$msgMain.'</p>
                        ';
                    //Email Headers
                    $headers = "MIME-Version: 1.0" ."\r\n";
                    $headers .="Content-Type:text/html;charset=UTF-8"."\r\n";
                    //Additional Headers
                    $headers .= "From: ".$teljesNev. "<".$mail.">". "\r\n";
                    if(mail($toEmail, $subject, $body, $headers)){
                        //Email sent
                        $msg = 'Sikeresen elküldve';
                        $msgClass = 'alert-success';
                    } else {
                        //Email Failed To Send
                        $msg = 'Email elküldése sikertelen volt!';
                        $msgClass = 'alert-danger';
                    }*/

                    //Database Write
                    require_once 'php/david/dbh.inc.php'; //Database connection
                    require_once 'php/david/functions.inc.php'; //Insert functions contactSend();
                    
                    contactSend($conn, $vezNev, $kerNev, $mail , $tel, $selectPrimary, $msgMain);

                    $msg = 'Sikeresen elküldve';
                    $msgClass = 'alert-success';

            } 
        }else{
            //Failed
            $msg = 'Kérem töltse ki az összes mezőt!';
            $msgClass = 'alert-danger';
        }
    }
?>