<?php
require 'dbConnect.php';
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
            <div class="col-12"> 
                <h1>Add a task...</h1>

                <!-- for future implementation to add more tasks to database -->

                <form action="addTask.php" method="POST">
                <pre>Task Name: <input type="text" value="Enter here..."
                    name="newTaskName">
                </pre>
                <pre>Task Location:<select type="text" value="Enter here..."
                    name="newTaskLocation">
                    <option value="kitchen">Kitchen</option>
                    <option value="bedroom">Bedroom</option>
                    <option value="living_room">Living Room</option>
                    <option value="hallway">Hallway</option>
                    <option value="everywhere">Everywhere</option>
                </pre>
                <pre>Task Preference:<input type="text" value="Enter here..."
                    name="newTaskPreference">
                </pre>
                <pre>Task Difficulty:<input type="text" value="Enter here..."
                    name="newTaskDifficulty">
                </pre>
                <pre>Task Priority:<input type="text" value="Enter here..."
                    name="newTaskPriority">
                </pre>
                <pre>Task Category:<input type="text" value="Enter here..."
                    name="newTaskCategory">
                </pre>
                <pre>Task Time Range:<input type="text" value="Enter here..."
                    name="newTaskTimeRange">
                </pre>
                
                </form>

            </div>
        </div>
        
    </div>
</body>
</html>
