<?php
session_start(); // Start the session
include "../../connector/conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST["item_name"];
    $category = $_POST["category"];
    $items_number = $_POST["items_number"];
    $price = $_POST["price"];
    $new_arrival_tag = isset($_POST["new_arrival_tag"]) ? "true" : "false";
    $in_demand_tag = isset($_POST["in_demand_tag"]) ? "true" : "false";
    $trending_tag = isset($_POST["trending_tag"]) ? "true" : "false";
    $flash_sale_tag = isset($_POST["flash_sale_tag"]) ? "true" : "false";
    $coming_soon = isset($_POST["coming_soon"]) ? "true" : "false";
    $description = $_POST["description"];

    // Process the data or perform database operations

    $uploadDirectory = "../../../image/products/"; // Directory to store uploaded images
    $imageFields = ["image_primary", "image2", "image3", "image4", "image5", "image6"];
    $uploadedImages = [];

    foreach ($imageFields as $fieldName) {
        if ($_FILES[$fieldName]["error"] === UPLOAD_ERR_OK) {
            $filename = $_FILES[$fieldName]["name"];
            $destination = $uploadDirectory . $filename;

            if (move_uploaded_file($_FILES[$fieldName]["tmp_name"], $destination)) {
                $uploadedImages[] = $filename;
            } else {
                echo "Failed to upload $filename.";
            }
        }
    }

    $imagePrimary = $uploadedImages[0];
    $image2 = $uploadedImages[1];
    $image3 = $uploadedImages[2];
    $image4 = $uploadedImages[3];
    $image5 = $uploadedImages[4];
    $image6 = $uploadedImages[5];

    $sql = "INSERT INTO product_information (item_name, category, image_primary, image2, image3, image4,
     image5, image6, items_number, description, price, new_arrival_tag, in_demand_tag, trending_tag, flash_sale_tag, coming_soon)
            VALUES ('$item_name', '$category', '$imagePrimary', '$image2', '$image3', '$image4', 
            '$image5', '$image6', '$items_number', '$description', '$price', '$new_arrival_tag', '$in_demand_tag', '$trending_tag', '$flash_sale_tag', '$coming_soon')";

    if ($conn->query($sql) === TRUE) {
        echo "Data uploaded successfully!";
        header("Location: ../../../seller/products.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>