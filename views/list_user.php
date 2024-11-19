<?php 
    require_once "../orm/orm.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container p-4 bg-dark text-light">
        <h1>List User</h1>
    </div>

    <div class="container">
        <table class="table table dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
    
                    $users = getUsers('tb_users');
                    
                    if (empty($users)) {
                        echo "No users found.";
                    } else {

                        foreach ($users as $user) {
                            echo '<tr>';
                                echo '<td>' . $user['id'] . '</td>';
                                echo '<td>' . $user['username'] . '</td>';
                                echo '<td>' . $user['email'] . '</td>';
                                // Format the 'created_at' field if necessary
                                $created_at = new DateTime($user['created_at']);
                                echo '<td>' . $created_at->format('Y-m-d H:i:s') . '</td>';
                                echo '<td><a href="edit_user.php?id=' . $user['id'] . '">Edit</a> | <a href="delete_user.php?id=' . $user['id'] . '">Delete</a></td>';
                            echo '</tr>';
                        }
                    }

                    
                ?>
                
            </tbody>
        </table>

    </div>


    
    
</body>
</html>