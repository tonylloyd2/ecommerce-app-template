<?php

include "../connector/conn.php";
if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];

    $sql_prod = "DELETE  FROM cart WHERE id = ? ";
    $stmt = $conn->prepare($sql_prod);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    
    // if
    header("Location:../../index.php#tab1");
}



?>