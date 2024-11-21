<?php 
    $HOST        = "127.0.0.1";
    $DB_USER     = "root";
    $SERVER_PORT = "3307";
    $DB_PASSWORD = "";
    $DB_NAME     = "crud_php"; 


    function db_connection() {
        global $HOST, $DB_PASSWORD, $DB_USER, $DB_NAME, $SERVER_PORT;
        
        try {
            $pdo = new PDO("mysql:host=$HOST;port=$SERVER_PORT", $DB_USER, $DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE IF NOT EXISTS $DB_NAME;";
           
            $pdo->exec($sql);
            $pdo->exec("USE $DB_NAME");
            return $pdo;
        } catch (PDOException $e) {
            echo "Have something when wrong : ".$e->getMessage();
        } 
    }





    