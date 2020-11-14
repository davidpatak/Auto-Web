<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "daviddatabase";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    //If Database Connection Failed
    die("Connection failed: " . mysqli_connect_error());
}