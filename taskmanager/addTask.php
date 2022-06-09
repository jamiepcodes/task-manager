<?php 
require 'dbConnect.php';

// var_dump();

// for future implementation to add more tasks

$newTaskName = ucwords($_POST('newTaskName'));
$newTaskPriority = $_POST('newTaskPriority');
$newTaskDifficulty = $_POST('newTaskDifficulty');
$newTaskPreference = $_POST('newTaskPreference');
$newTaskCategory = $_POST('newTaskCategory');
$newTaskSku = preg_replace('/\s+/', '_', strtolower($newTaskName));
$newTaskLocation = ucwords($_POST('newTaskLocation'));
$newTaskTimeRange = $_POST('newTaskTimeRange');
$newTaskTodo = $_POST('newTaskTodo');

if($newTaskTimeRange < 1000) {
    $newTaskTimeRange = $newTaskTimeRange * 60;
}

$query = "INSERT INTO task_list (task_sku, task_name, difficulty, preference,
            category, location, time_range, priority, todo)
            VALUES (?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($query);
$stmt->execute([$newTaskSku, $newTaskName, $newTaskDifficulty, $newTaskPreference,
                $newTaskCategory, $newTaskLocation, $newTaskTimeRange, $newTaskPriority, 
                $newTaskTodo]);

?>