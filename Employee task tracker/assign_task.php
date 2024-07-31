<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Task</title>
</head>
<body>
    <h1>Assign Task</h1>
    <form action="assign_task_process.php" method="POST">
        <label for="task_id">Task ID:</label><br>
        <input type="number" id="task_id" name="task_id" required><br><br>
        <label for="assigned_by">Assigned By:</label><br>
        <input type="text" id="assigned_by" name="assigned_by" required><br><br>
        <button type="submit">Assign Task</button>
    </form>
</body>
</html>
