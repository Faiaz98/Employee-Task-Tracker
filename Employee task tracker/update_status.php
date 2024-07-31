<?php
include 'database.php';

$task_id = $_POST['task_id'];
$status = $_POST['status'];

$sql = "UPDATE tasks SET status='$status' WHERE id=$task_id";

if ($conn->query($sql) === TRUE) {
    echo "Task status updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="view_tasks.php">Go Back</a>
