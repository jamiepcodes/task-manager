<?php 

$password = $_POST['user_password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

?>