<?php 
// returns user to home page if no tasks are selected, tried to pass fail message back to home page but failed
if(!$_POST['check_list']) {
    header('Location:javascript://history.go(-1)?fail=1');
    die();
}
require 'dbConnect.php';
date_default_timezone_set('Europe/London');

// checks task checklist and sets which tasks are due to be included on timetable
$tasks_todo = $_POST['check_list'];
foreach($tasks_todo as $task) {
    $query = "UPDATE task_list SET todo=1 WHERE task_id=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$task]);
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Timetable <?php echo date('d-m-Y'); ?> </title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container p-5 my-5 justify-content-center">
        <div class="row">
            <div class="col-md-12 p-2"> 
                <a style="float: left" class="button text-left" href="/taskmanager/index.php">Back</a>
                <h1 class="text-center">Your Timetable</h1>
                <h5 class="text-center"><?php echo date('d-m-y'); ?></h5>
                <table cellpadding=5 border=1 class="center-table" >
                    <tr>
                        <th>Task</th>
                        <th>Location</th>
                        <th>Category</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Completed?</th>
                    </tr>
                    <?php 
                    // order choice variable defines what kind of task goes first, either most difficult or most important.
                    $order_choice = $_POST['order_choice'];
                    try {
                        // get time to format timestamps for tasks
                        $currentTime = time();
                        $query = "SELECT * FROM task_list ORDER BY " . 
                                (($order_choice[0]=='priority') ? 'priority' : 'difficulty') . " ASC";
                        $result = $pdo->query($query);
                        if($result->rowCount() > 0){
                            while($row = $result->fetch()){
                                if($row['todo'] == 1) {
                                    echo "<tr> 
                                    <td>{$row['task_name']}</td>
                                    <td>{$row['location']}</td>
                                    <td>{$row['category']}</td>
                                    <td>" . date('h:i A', $currentTime) . " </td> " . 
                                    // $current time is incremented by the time taken for each task, then reassigned and incremented as long as tasks are printed out
                                    "<td>" . date('h:i A', $currentTime = $currentTime + $row['time_range']) . "</td>
                                    <td class='text-center'><input type='checkbox' " . 
                                        (($row['task_complete']==1) ? 'checked' : '');  
                                        // Add onclick event that changes DB when task is completed by user
                                    echo "></td></tr>";
                                } else {
                                    continue;
                                }
                            }
                        }
                        unset($result);
                        require_once 'resetTodoList.php';
                        // once timetable is printed, resets todo variable of each task, ready for another timetable to be printed.
                    } catch(PDOException $e) {
                        echo "Error : " . $e->getMessage();
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>