<?php
    require_once "../model/db_connection.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $id = $_POST['remove-id'];
        $pdo = db_connection();

        $sql = "DELETE FROM `users` WHERE `id` = '$id'";
        $pdo->exec($sql);

        header("Location: ../views/list_users.php");
    }