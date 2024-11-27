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
                                <li><button class="dropdown-item btn-remove" data-bs-toggle="modal" href="#exampleModalToggle" data-remove-id="'.$user['id'].'" role="button" > <i class="bi bi-trash3-fill"></i>  Delete </button> </li>
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
<script>

    $(document).ready(function() {
        $(".btn-remove").click(function(){
            const removeId = $(this).attr('data-remove-id');
            $("#remove-id").val(removeId);
        })
    })

</script>
</html>


<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Are you sure! you want ot delete this user?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="alert alert-danger" rol="alert"><i class="bi bi-exclamation-triangle-fill"></i> When you deleted user, you can't backup data </div>
      </div>
      <div class="modal-footer">
            <button class="btn btn-outline-secondary"><i class="bi bi-x-circle"></i> Cancel </button>
            <form action="../controller/delete_user.php" method="post">
                <input type="text" hidden id="remove-id" name="remove-id">
                <button type="submit" class="btn btn-danger"> <i class="bi bi-check"></i> Confirm Delete </button>
            </form>

      </div>
    </div>
  </div>
</div>