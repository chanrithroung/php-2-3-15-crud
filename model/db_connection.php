<?php 
    $HOST        = "127.0.0.1";
    $DB_USER     = "root";
    $DB_PASSWORD = "";
    $DB_NAME     = "php_crud"; 


    function db_conection() {
        global $HOST, $DB_PASSWORD, $DB_USER, $DB_NAME;
        try {
            $pdo = new PDO("mysql:host=$HOST", $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE IF NOT EXISTS $DB_NAME;";
            $pdo->exec($sql);
            
            $pdo->exec("USE $DB_NAME");
            return $pdo;
        } catch (PDOException $e) {
            echo "Have something when wrong : ".$e->getMessage();
            return null;
        } 
    }

    db_conection();

    