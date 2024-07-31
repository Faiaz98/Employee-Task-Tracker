<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="register_process.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label for="role">Role:</label><br>
        <select id="role" name="role">
            <option value="employee">Employee</option>
            <option value="manager">Manager</option>
        </select><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
