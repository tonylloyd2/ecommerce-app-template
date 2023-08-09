<?php
# conncect to database php
$servername = "localhost";
$username = "root";
$password = "1212";
$dbname = "ecommerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}


?>