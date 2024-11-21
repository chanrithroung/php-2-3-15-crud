<?php
    require_once "../service/user_service.php";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $email    = $_POST['email'];
        echo $username.$email;
        createUser(username:$username, email:$email);
        header("Location: ../views/home.php?message=success");
    }



    