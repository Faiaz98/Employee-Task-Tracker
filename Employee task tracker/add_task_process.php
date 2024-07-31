<?php
include 'database.php';

$employee_name = $_POST['employee_name'];
$task_description = $_POST['task_description'];
$due_date = $_POST['due_date'];
$status = "Pending";

$sql = "INSERT INTO tasks (employee_name, task_description, due_date, status)
VALUES ('$employee_name', '$task_description', '$due_date', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "New task added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="index.php">Go Back</a>

