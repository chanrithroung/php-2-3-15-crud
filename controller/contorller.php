<?php

    require_once "../orm/orm.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email    = $_POST['email'];
        
        createUser(username:$username, email:$email);
        $message = "User create successfully";
        return header("Location: ../views/home.php?message=$message");
    }
