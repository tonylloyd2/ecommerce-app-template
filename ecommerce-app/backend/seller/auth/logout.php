<?php 
session_start();
if (isset($_SESSION['email'])) {
    session_destroy();

}
else {
    echo "<script>alert('you are logged out')
    location.replace('../../../seller/login.php');
    </script>";
    // header("location : ../../index.php");
}
?>