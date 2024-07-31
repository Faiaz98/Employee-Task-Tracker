<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Tasks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">All Tasks</h1>
        <?php
        include 'database.php';

        $sql = "SELECT * FROM tasks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-bordered'><thead><tr><th>ID</th><th>Employee Name</th><th>Task Description</th><th>Assigned By</th><th>Due Date</th><th>Status</th><th>Action</th></tr></thead><tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["employee_name"]."</td><td>".$row["task_description"]."</td><td>".$row["assigned_by"]."</td><td>".$row["due_date"]."</td><td>".$row["status"]."</td><td>
                <form action='update_status.php' method='POST' class='updateStatusForm'>
                    <input type='hidden' name='task_id' value='".$row["id"]."'>
                    <select name='status' class='form-control'>
                        <option value='Pending'".($row["status"] == "Pending" ? " selected" : "").">Pending</option>
                        <option value='In Progress'".($row["status"] == "In Progress" ? " selected" : "").">In Progress</option>
                        <option value='Completed'".($row["status"] == "Completed" ? " selected" : "").">Completed</option>
                    </select>
                    <button type='button' class='btn btn-primary mt-2' onclick='confirmAction(event, this)'>Update</button>
                </form>
                <div class='spinner-border text-primary mt-2' role='status' id='loadingSpinner".$row["id"]."' style='display: none;'>
                    <span class='sr-only'>Loading...</span>
                </div>
                </td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p class='text-center'>No tasks found</p>";
        }

        $conn->close();
        ?>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirm Action</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you sure you want to proceed?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="confirmAction">Confirm</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        let formToSubmit = null;

        function confirmAction(event, button) {
            event.preventDefault();
            formToSubmit = button.closest('form');
            $('#confirmationModal').modal('show');
        }

        document.getElementById('confirmAction').addEventListener('click', function() {
            $('#confirmationModal').modal('hide');
            if (formToSubmit) {
                formToSubmit.submit();
                formToSubmit.querySelector('.spinner-border').style.display = 'block';
            }
        });
    </script>
</body>
</html>
