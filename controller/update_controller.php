<?php 
    require_once "../model/db_connection.php";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pdo = db_connection();


        $sql = "UPDATE `users` SET `username` = '$username', `email` = '$email' WHERE `id` = '$id'";
        
        $pdo->exec($sql);
        
        header("Location: ../views/list_users.php");
        
    }