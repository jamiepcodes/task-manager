<?php
// connect to database
require 'dbConnect.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Home</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container p-5 my-5">
        <div class="row">
            <h1 class="text-center">A Very Ad Hoc Timetable Generator</h1>
            <div class="col text-center">
                <form action="timetable.php" method="POST">
                <div name="tasks" id="list1" class="dropdown-check-list" tabindex="100">
                    <span class="anchor">Select Tasks</span>
                    <ul class="items">
                    <?php
                    try {
                        $query = "SELECT * FROM task_list";
                        $result = $pdo->query($query);
                        if($result->rowCount() > 0){
                            while($row = $result->fetch()){
                                // checkbox list to pick tasks for timetable
                                echo "<li><input type='checkbox' value={$row['task_id']} 
                                        name=check_list[] />&nbsp;{$row['task_name']}</li>";
                            }
                        }

                    } catch(PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    ?>
                    <script>
                        // onclick event for task list drop down
                        var checkList = document.getElementById('list1');
                        checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
                        if (checkList.classList.contains('visible'))
                            checkList.classList.remove('visible');
                        else
                            checkList.classList.add('visible');
                        }
                    </script>
                    </ul>
                    
                    <!-- radio buttons for your preference of task order (hardest or highest priority first) -->
                <div class="order-choice">
                    <input type="radio" id="priority" name="order_choice[]" value="priority">
                    <label for="priority">Priority</label> &nbsp;
                    <input type="radio" id="difficulty" name="order_choice[]" value="difficulty">
                    <label for="difficulty">Difficulty</label>
                </div>
                <button class="tm-btn-soft" action="submit">Make Timetable</button>
                </form>
                </div>
                
            </div>
        </div><!-- Future add/edit task page -->
        <div class="row">
            <div class="col text-center">
                <form class="tm-form" action="addTaskPage.php">
                <button class="tm-btn-soft" action="submit">Add Task Here</button>
                </form>
            </div>
        </div>
            
    </div>
</body>
</html>