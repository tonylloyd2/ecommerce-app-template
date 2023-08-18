<?php 
session_start();

session_unset();
    session_destroy();
    

    echo "<script>alert('you are logged out')
    location.replace('../../index.php');
    </script>";

?>