<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin" action="admin.php" method="POST">
                            <div class="form-label-group">
                                <input type="text" id="user" class="form-control" placeholder="User" name="username" required autofocus>
                                <label for="user">User</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                                <label for="password">Password</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>