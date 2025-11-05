<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "T#0000@black";
$dbName ="login_register";  
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$conn){
    die("Something went wrong;");
}
?>