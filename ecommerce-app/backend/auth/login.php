<?php
session_start(); // Start the session
include "../connector/conn.php"; // Include the database connection file

// Function to verify the password
function verifyPassword($password, $hashedPassword)
{
    return password_verify($password, $hashedPassword);
}

// Retrieve the form data and escape it to prevent SQL injection
$email = $_GET['email'];
$password = $_GET['password'];

# echo posted data
// echo $email;
// echo $password;

// Prepare and execute the SQL query to fetch the user with the given email
$sql = "SELECT email, password FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

// Get the result
$result = $stmt->get_result();
if ($result->num_rows === 1) {
    // User with the given email exists
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password'];

    // Verify the password
    if (verifyPassword($password, $hashedPassword)) {
        // Set the email as a session variable
        $_SESSION['email'] = $email;

        // Perform further actions after successful login
        // For example, redirect to a dashboard or home page
        header("Location: ../../index.php");
        // echo "<script>alert('".$_SESSION['email']."')</script>";
        exit(); // Always use exit() after header redirect to prevent further code execution
    } else {
        echo "<script>alert('invalid email or password')</script>";

    }
} else {
    echo "<script>
    alert('invalid email or password');
    location.replace();
    </script>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
