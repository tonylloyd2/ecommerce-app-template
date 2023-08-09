<?php
include "../connector/conn.php";

// Function to encrypt the password
function encryptPassword($password)
{
    // Add your encryption logic here
    $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Replace the above line with your encryption logic
    return $encryptedPassword;
}

// Retrieve the form data and escape it to prevent SQL injection
$email = $_GET['email'];
$firstname = $_GET['first-name'];
$lastname = $_GET['last-name'];
$phone = $_GET['phone'];
$password = $_GET['password'];

// Encrypt the password
$encryptedPassword = encryptPassword($password);

// Prepare and execute the SQL query
$sql = "INSERT INTO users (email, firstname,lastname,phone, password) VALUES (?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $email, $firstname,$lastname,$phone ,  $encryptedPassword);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "Data inserted successfully";
    # set the session to email
    // $_SESSION['email'] = $email;
    # redirect to dashboard.php
    header("Location: ../../login.php");
} else {
    echo "Failed to insert data";
}

// Close the statement
$stmt->close();
