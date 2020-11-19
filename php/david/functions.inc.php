<?php

function emptyInputSignup($name, $email, $userName, $pwd, $pwdRepeat){ 
    $result;
    if (empty($name) || empty($email) || empty($userName) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($userName){ 
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){ 
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){ 
    $result;
    if ($pwd !== $pwdRepeat){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){ 
    $sql = "SELECT * FROM felh WHERE felhUid = ? OR felhEmail =?;";
    $stmt = mysqli_stmt_init($conn);                            //Prepared statement, prevent code injections to database
    if (!mysqli_stmt_prepare($stmt, $sql)){                     //Check the SQL for errors
        header("location: ../../admin/signup.php?error=stmtfailed");
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){           //Ha van adat ezzel a username-el akkor ...
        return $row;                                       //Kiadjuk az összes adatot a létező usertől.
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username , $pwd){ 
    $sql = "INSERT INTO felh (felhNev, felhEmail, felhUid, felhPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);                            
    if (!mysqli_stmt_prepare($stmt, $sql)){                    
        header("location: ../../admin/signup.php?error=stmtfailed");
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); //Pwd hashing

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username , $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../../admin/signup.php?error=none");
    exit();
}

//LOGIN
function emptyInputLogin($userName, $pwd){ 
    $result;
    if (empty($userName) || empty($pwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);    //uidExists-be bármelyik jó

    if ($uidExists === false){
        header("location: ../../admin/login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["felhPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("location: ../../admin/login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"]=$uidExists["felhID"];
        $_SESSION["useruid"]=$uidExists["felhUid"];
        header("location: ../../admin/login.php?error=none");
        exit();
    }
}
//Contact Data Insert into database entry
function contactSend($conn, $vezNev, $kerNev, $mail , $tel, $selectPrimary, $msgMain){ 
    $sql = "INSERT INTO felker (vezNev, kerNev, felhEmail, felhTel, kerTipus, kerUzenet) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);                            
    if (!mysqli_stmt_prepare($stmt, $sql)){                    
        header("location: kapcsolat.php?error=stmtfailed");
    }

    mysqli_stmt_bind_param($stmt, "ssssss", $vezNev, $kerNev, $mail , $tel, $selectPrimary, $msgMain);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: kapcsolat.php?error=none");
    exit();
}