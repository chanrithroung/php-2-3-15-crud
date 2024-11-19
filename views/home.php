<?php 
    include "header.php";
?>

    <div class="container p-5">

        <?php 
            if ($_GET['message']) {
                echo '<div class="alert alert-success">User create succcess</div>';
            }
        ?>

        <h1 class="text-center">Register User</h1>
        <form action="../controller/contorller.php" method="post">
            <div class="mb-2">
                <label for="username">Username</label>
                <input name="username" id="username" class="form-control" type="text">
            </div>
            <div class="mb-2">
                <label for="email">email</label>
                <input name="email" id="email" class="form-control" type="email">
            </div>
            <button class="btn btn-primary px-5">Submit</button>
        </form>
    </div>

</body>
</html>