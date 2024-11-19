<?php   
    require_once "../model/db_connection.php";
    $stmt = db_conection();
    function createUser($username, $email) {
        global $stmt;
        $query = "INSERT INTO `users`(`username`, `email`) 
                    VALUES 
                  ('$username', '$email');";

        $stmt->exec($query);
        echo "create user is working";
    }