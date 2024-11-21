<?php 

    require_once "db_connection.php";

    $pdo = db_connection();
    function createTable() {
        global $pdo;
        $sql = "CREATE TABLE IF NOT EXISTS users(
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        $pdo->exec($sql);
        echo "Table user create successfully!";
    }
    createTable();