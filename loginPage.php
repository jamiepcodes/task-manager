<?php
require 'dbConnect.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container p-5 my-5">
        <div class="row">
            <div class="col-12 p-2">
                <form action="login.php" class="tm-form" method="POST">
                    Username: <input type="text" value="Username"
                        name="username" class="tm-input">
                    <br>
                    Password: <input type="text" value="Password"
                        name="password" class="tm-input">
                    <button type="submit" class="tm-btn-soft">Login</button>

                </form>
            </div>
        </div>
    </div>
</body>