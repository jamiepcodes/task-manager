<?php 
require 'dbConnect.php';

// var_dump($_POST['taskName']);

// for future implementation of functionality to edit tasks

$taskNameUpdate = $_POST['taskNameUpdate'];
$taskId = $_POST['taskId'];
$query = "UPDATE task_list SET task_name=? WHERE task_id=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$taskNameUpdate, $taskId]);




?>


