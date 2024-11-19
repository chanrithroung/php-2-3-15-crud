<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid bg-dark p-5 text-light text-center">
        <h1>PHP CRUDE</h1>
        <a class="btn btn-success" href="list_user.php">View all Users</a>
    </div>

    <div class="container p-3">
        <?php 
            if (isset($_GET['message'])) {
                $alert = (strpos($_GET['message'], 'success') !== false) ? "success" : "danger";
               echo '<div class="alert alert-'.$alert.'" role="alert">User create '.htmlspecialchars($_GET['message']).'!</div>';
            }
        ?>
        <form action="../controller/contorller.php" method="post">
            <div class="mb-4">
                <label for="username">Username</label>
                <input id="username" name="username" require class="form-control" type="text">
            </div>
            <div class="mb-4">
                <label for="email">Email</label>
                <input id="email" name="email" require class="form-control" placeholder="email" type="email">
            </div>

            <button class="btn btn-primary">
                <i class="bi bi-bag-plus-fill"></i> Save User
            </button>
        </form>
    </div>
    
</body>
</html>