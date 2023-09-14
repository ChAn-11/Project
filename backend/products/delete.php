<?php
    include('../adminheader.php');
    include('../dbconfig.php');
    $sql = "DELETE FROM products where id='".$_GET['id']."'";
    $query = $dbConn->prepare($sql);
    $query->execute();

    header('location:index.php');
    
?>