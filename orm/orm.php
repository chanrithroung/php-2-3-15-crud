<?php 
    require_once "../model/db_connection.php";

    $pdo = db_conection();

    function createUser($username, $email):void{
        global $pdo;
        try {
            $sql = "INSERT INTO `tb_users`(`username`, `email`) VALUES ('$username', '$email')";
            $pdo->exec($sql);  
            echo "User create successfully!";
        } catch (PDOException $e) {
            echo "Fail create user: ".$e->getMessage();
        }
    }


    function getUsers($tb_name) {
        global $pdo;
        $sql = "SELECT * FROM `$tb_name`";
        $statement = $pdo->query($sql);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }