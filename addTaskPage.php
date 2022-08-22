<?php
require 'dbConnect.php';
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Task</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container p-5 my-5">
        <div class="row">
            <div class="col-12 p-2">
            <a class="back-btn" href="/taskmanager/index.php">Back</a> 
                <h1 class="text-center">Add a task...</h1>

                <!-- for future implementation to add more tasks to database -->

                <form action="addTask.php" method="POST">
                    Task Name: <input type="text" value="Enter here..."
                        name="newTaskName" class="tm-input">
                    <br>
                    Task Location: <select type="text" name="newTaskLocation"
                        class="tm-input tm-select">
                        <option value="kitchen">Kitchen</option>
                        <option value="bedroom">Bedroom</option>
                        <option value="living_room">Living Room</option>
                        <option value="hallway">Hallway</option>
                        <option value="everywhere">Everywhere</option>
                    </select>
                    <br>
                    Task Preference: <input type="number" min="1" max="5"
                        name="newTaskPreference" class="tm-input">
                    <br>
                    Task Difficulty: <input type="number" min="1" max="5"
                        name="newTaskDifficulty" class="tm-input">
                    <br>
                    Task Priority: <input type="number" min="1" max="5"
                        name="newTaskPriority" class="tm-input">
                    <br>
                    Task Category: <select type="text" name="newTaskCategory" 
                        class="tm-input tm-select">
                        <option value="cleaning">Cleaning</option>
                        <option value="maintenance">Maintenance</option>
                        <option value="work">Work</option>
                    </select>
                    <br>
                    Task Time Taken (in minutes): <input type="number" min="1" max="999"
                        name="newTaskTimeRange" class="tm-input">
                    <br>
                    <button type="submit" class="tm-btn-soft">Add Task</button>
                    
                </form>

            </div>
        </div>
        
    </div>
</body>
</html>
