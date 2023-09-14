<?php
    session_start();
    include('../dbconfig.php');
    
    $email= $_POST['email'];
    $password= $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    // var_dump($result[0]['email']);
    // exit();
    if(count($result)){
        $_SESSION['email'] = $result[0]['email'];
        header('location:../users/index.php');
    }else{
        if(!isset($_SESSION['attempt'])){
            $_SESSION['attempt'] = 0;
        }
        
        $_SESSION['attempt'] += 1;
        
        if($_SESSION['attempt'] === 3){
            $_SESSION['msg'] = "3 Times Login Failed! And Your Login is disabled wait 10mins";
            $_SESSION['check'] = 1;
            $_SESSION['attempt_again'] = time() + (10*60);
        }else{
            $_SESSION['msg'] = "Invalid Username and Password!";
        }
        
        header('location:login.php');
    }
?>