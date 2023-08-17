<?php
session_start();
require "../backend/connector/conn.php";

if (isset($_SESSION['emailseller'])) {
    $session_var = $_SESSION['emailseller'];
    $sql = "SELECT * FROM sellers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $session_var);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        // User with the given email exists
        $row = $result->fetch_assoc();
        $name = $row['first_name'] . " " . $row['last_name'];
        $image = $row['profile'];
        $orgname = $row['bussiness_name'];
    }


} else {
    echo "<script>
    alert('you are not logged in');
location.replace('./login.php');
    </script>";

}

?>