<?php 
    require_once "header.php";
    require_once "../model/db_connection.php";


    $statement = db_connection();

    $sql = "SELECT * `users`;";

    $pdo = $statement->query($sql);
   
    $users = $pdo->fetchAll(PDO::FETCH_ASSOC);
    print_r($users);
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
                <td>1001</td>
                <td>chanrith</td>
                <td>chanrithroung2@gmail.com</td>
                <td>2024-5-15 12:30:56</td>
                <td>
                <div class="dropdown">
                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-trash3-fill"></i>  Delete</a></li>
                    </ul>
                    </div>
                </td>
            </tbody>
        </table>
    </div>




</body>
</html>