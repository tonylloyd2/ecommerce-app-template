<?php
session_start();
include "../connector/conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form when it's submitted

    // Validate the form data
    $errors = [];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $user_id = $_POST['user_id'];
    if (empty($firstname)) {
        $errors[] = "First Name is required.";
    }
    if (empty($lastname)) {
        $errors[] = "Last Name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email Address is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($errors)) {


        $update_query = "UPDATE users SET firstname='$firstname', lastname='$lastname' , email='$email' where id='$user_id'";

        if ($conn->query($update_query) === TRUE) {
            // Record updated successfully
            echo "Record updated successfully.";
            $_SESSION['email'] = $email;

            // redirect to success.php
            header("Location: ../../my-account.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();

        exit();
    }
}
?>