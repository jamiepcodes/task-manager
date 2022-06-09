<?php
// Attempt MySQL server connection
try{
    $pdo = new PDO("mysql:host=localhost;dbname=task_manager", "root", "");
    
    // Set to PDO error mode to throw exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Close connection
// unset($pdo);

?>