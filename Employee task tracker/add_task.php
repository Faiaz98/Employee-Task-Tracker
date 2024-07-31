<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Add New Task</h1>
        <form action="add_task_process.php" method="POST" class="mt-4" id="addTaskForm">
            <div class="form-group">
                <label for="employee_name">Employee Name:</label>
                <input type="text" id="employee_name" name="employee_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="task_description">Task Description:</label>
                <textarea id="task_description" name="task_description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date:</label>
                <input type="date" id="due_date" name="due_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
        <div class="spinner-border text-primary mt-3" role="status" id="loadingSpinner" style="display: none;">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('addTaskForm').addEventListener('submit', function() {
            document.getElementById('loadingSpinner').style.display = 'block';
        });
    </script>
</body>
</html>
