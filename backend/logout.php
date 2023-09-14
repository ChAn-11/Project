<?php
    session_start();
    // var_dump($_SESSION['email']);
    // exit();
    session_destroy();
    header('location:login/login.php');
?>