<?php 
    require_once "header.php";
    require_once "../model/db_connection.php";


    $statement = db_connection();
    $sql = "SELECT * FROM `users`;";

    $pdo = $statement->query($sql);
    $users = $pdo->fetchAll(PDO::FETCH_ASSOC);
    
?>


    <div class="container p-5 bg-light">
        <table class="table table-light table-hover table-snipped" style="table-layout: fixed;">
            <thead>
                <th>id</th>
                <th>username</th>
                <th>email</th>
                <th>created at</th>
                <th>action</th>
            </thead>

            <tbody>
            <?php
                foreach($users as $user) {
                    echo'
                    <tr>
                        <td>'.$user['id'].'</td>
                        <td>'.$user['username'].'</td>
                        <td>'.$user['email'].'</td>
                        <td>'.$user['created_at'].'</td>
                        <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="update_user.php?id='.$user['id'].'"> <i class="bi bi-pencil-square"></i> Edit</a></li>
                                <li><a class="dropdown-item" href="#"> <i class="bi bi-trash3-fill"></i>  Delete</a></li>
                            </ul>
                            </div>
                        </td>
                    </tr>';
                }
            ?>

            </tbody>
        </table>
    </div>




</body>
</html>