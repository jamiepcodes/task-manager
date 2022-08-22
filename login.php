<?php 
require 'dbConnect.php';
session_start();

$username =$_POST['username'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
    $query = "SELECT * FROM users WHERE user_id=? ";
    $stmt = $pdo->prepare($query);
    $stmt->execute($username);
} catch(PDOException $e) {
    echo "Error : " . $e->getMessage();
}



?>