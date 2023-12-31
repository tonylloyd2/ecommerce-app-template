<?php
include "../../connector/conn.php";

// Function to encrypt the password
function encryptPassword($password)
{
  // Add your encryption logic here
  $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
  // Replace the above line with your encryption logic
  return $encryptedPassword;
}

// Retrieve the form data and escape it to prevent SQL injection
if (isset($_POST["submit"])) {



  $email = $_POST['email'];
  $firstname = $_POST['first-name'];
  $lastname = $_POST['last-name'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $company = $_POST['company'];
  $bussiness_account = $_POST['bussiness-account-number'];
  $Encryptedpassword = encryptPassword($password);


  $target_dir = "../../../image/seller/";
  $target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["filetoupload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["filetoupload"]["name"])) . " has been uploaded.";
      // insert into database
      $sql = "INSERT INTO sellers (email, first_name, last_name, phone, password, profile , bussiness_name ,bussiness_account
            ) VALUES ('$email', '$firstname', '$lastname', '$phone', '$Encryptedpassword', '$target_file' , '$company' , '$bussiness_account')";
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../../../seller/login.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();

    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

}