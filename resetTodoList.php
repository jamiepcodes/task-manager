<?php
require 'dbConnect.php';

// resets todo variable ready for another timetable to be printed by user
$query = "UPDATE task_list SET todo=0 WHERE todo=1";
$stmt = $pdo->prepare($query);
$stmt->execute();
?>