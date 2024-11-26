<?php   
    require_once "header.php";
    require_once "../model/db_connection.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $pdo = db_connection();

        $sql = "SELECT `username`, `email` FROM  `users` WHERE `id` = '$id';";
        $stmt = $pdo->query($sql);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // print_r($user);
    }
?>

    <div class="container-sm p-5">
        <div class="row justify-content-center">
            <div class="col-4 shadow p-5">
                <h2>Update Uer</h2>
                <form method="post" action="../controller/update_controller.php">
                    <input hidden value="<?php echo $id ?>" type="text" name="id" id="">
                    <div class="mb-2">
                        <label for="">Username</label>
                        <input name="username" required value="<?php echo $user[0]['username'] ?>" class="form-control" type="text">
                    </div>
                    <div class="mb-2">
                        <label for="">Email</label>
                        <input name="email" value="<?php echo $user[0]['email'] ?>" required class="form-control" type="email">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-success">Save change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    </body>
</html>