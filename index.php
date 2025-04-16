<?php
include 'db.php';

// Query for fetching all records (you can change this based on your topic)
$sql = "SELECT * FROM data";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System - CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Student Records</h2>
    <a href="add.php">Add New Student</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th> <!-- Change field names here -->
            <th>Email</th> <!-- Change field names here -->
            <th>Course</th> <!-- Change field names here -->
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['field1'] ?></td> <!-- Change field names -->
            <td><?= $row['field2'] ?></td> <!-- Change field names -->
            <td><?= $row['field3'] ?></td> <!-- Change field names -->
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
