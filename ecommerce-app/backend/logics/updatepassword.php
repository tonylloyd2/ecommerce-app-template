<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../connector/conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form when it's submitted
    // echo "Posted";

    // Validate the form data
    $errors = [];
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $verifyPassword = $_POST['verify_password'];

    
    if ($newPassword !== $verifyPassword) {
        $errors[] = "New Password and Verify Password do not match.";
    }

    
        // echo 'hello';

        // Fetch user's current hashed password from the database using their unique identifier (user_id or email)
        $user_id = $_SESSION['email']; // Replace with your session variable
        $fetch_query = "SELECT password FROM users WHERE email='$user_id'";
        $result = $conn->query($fetch_query);
        // echo "Password updated successfully.";

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $currentHashedPassword = $row['password'];


            // Verify the current password
            if (password_verify($currentPassword, $currentHashedPassword)) {
                echo "Password updated successfully.";
                // Hash the new password
                $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                
                // Update the new hashed password in the database
                $update_query = "UPDATE users SET password='$newHashedPassword' WHERE email='$user_id'";
                if ($conn->query($update_query) === TRUE) {
                    // Password updated successfully
                    // echo "Password updated successfully.";
                    // Redirect to success.php or display a success message
                } else {
                    echo "Error updating password: " . $conn->error;
                }
            } else {
                echo "Current password is incorrect.";
            }
        } else {
            echo "User not found.";
        }

        $conn->close();

        exit();
    }

else{
    echo "error";
}

?>