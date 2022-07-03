<?php
    session_start();
        unset($_SESSION["username"]);        
        unset($_SESSION["email"]);
        unset($_SESSION["display_name"]);
        unset($_SESSION["role"]);
        header('location:login.php');
?>