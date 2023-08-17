<?php 


    session_destroy();
    session_unset();

    echo "<script>alert('you are logged out')
    location.replace('../../index.php');
    </script>";

?>