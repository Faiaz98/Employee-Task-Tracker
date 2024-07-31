CREATE DATABASE task_tracker;
USE task_tracker;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(100),
    task_description TEXT,
    assigned_by VARCHAR(100),
    due_date DATE,
    status VARCHAR(50)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    role VARCHAR(50) -- 'employee' or 'manager'
);
