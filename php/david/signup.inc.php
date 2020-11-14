<?php

//Check if accessed from submit button or "cheated"
if (isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $userName = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';             //Database connections etc.
    require_once 'functions.inc.php';       //Error handling etc.

    //Error handling Called
    if(emptyInputSignup($name, $email, $userName, $pwd, $pwdRepeat) !== false) {
        header("location: ../../admin/signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($userName) !== false) {
        header("location: ../../admin/signup.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email) !== false) {
        header("location: ../../admin/signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../../admin/signup.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false) {
        header("location: ../../admin/signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $userName, $pwd);

} 
else {
    header("location: ../../admin/signup.php"); //Send to correct one
    exit();
}