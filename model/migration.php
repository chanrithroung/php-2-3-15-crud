<?php 
    require_once "db_connection.php";


    try {
        $pdo = db_conection();
        $tb_users = "CREATE TABLE tb_users(
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            username varchar(100),
            email varchar(100),
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP);";
        $pdo->exec($tb_users);
        echo "table users create successfully!"; 
    } catch(PDOException $e) {
        echo "db error : ".$e->getMessage();
    }