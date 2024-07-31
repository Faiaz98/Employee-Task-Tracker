<?php
include 'database.php';

$task_id = $_POST['task_id'];
$assigned_by = $_POST['assigned_by'];

$sql = "UPDATE tasks SET assigned_by='$assigned_by' WHERE id=$task_id";

if ($conn->query($sql) === TRUE) {
    echo "Task assigned successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="index.php">Go Back</a>
