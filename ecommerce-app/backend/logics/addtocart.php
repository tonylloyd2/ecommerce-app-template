<?php
session_start();
include "../connector/conn.php";
$id = $_GET['product_id'];
$session_var = $_SESSION['email'];

$sql_prod = "SELECT * FROM product_information WHERE id = ?";
$stmt = $conn->prepare($sql_prod);
$stmt->bind_param("s", $id);
$stmt->execute();

// Get the result
$result_products = $stmt->get_result();
if ($result_products->num_rows === 1) {
    // User with the given email exists
    $row = $result_products->fetch_assoc();
    $product_name =  $row['item_name'];
    $product_image = $row['image_primary'];
    $product_price =  $row['price'];
    $product_id = $_GET['product_id'];
    
}
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $session_var);
$stmt->execute();

// Get the result
$result = $stmt->get_result();
if ($result->num_rows === 1) {
    // User with the given email exists
    $row = $result->fetch_assoc();
    $user_id = $row['id'];

}

$sql_cart = "INSERT INTO cart (product_name, product_image, product_price, product_id, user_id) 
VALUES ('$product_name', '$product_image', '$product_price', '$product_id', '$user_id')";
if ($conn->query($sql_cart) === TRUE) {
    echo "New record created successfully";
    header("Location:../../index.php#tab1");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
?>