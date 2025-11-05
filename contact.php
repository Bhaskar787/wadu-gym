<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "T#0000@black";
$dbName = "login_register";

$check = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if ($check) {
    echo "Connection ok<br>";
} else {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form values safely
$fname = $_POST['firstName'] ?? '';
$lname = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$city = $_POST['city'] ?? '';

if (!empty($fname) && !empty($lname) && !empty($email)) {
    // Use the correct table and column names
    $send = "INSERT INTO user_details (first_name, last_name, email, phone, city)
             VALUES ('$fname', '$lname', '$email', '$phone', '$city')";
    
    $data = mysqli_query($check, $send);
    
    if ($data) {
        echo "Data send successfully!";
    } else {
        echo "Data is not send. Error: " . mysqli_error($check);
    }
} else {
    echo "Please fill all required fields!";
}

mysqli_close($check);
?>
