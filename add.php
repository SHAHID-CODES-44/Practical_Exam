<?php
include 'db.php';

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $field1 = $_POST['field1'];  // Student Name
    $field2 = $_POST['field2'];  // Student Email
    $field3 = $_POST['field3'];  // Student Course

    // SQL query to insert new record into the database
    $sql = "INSERT INTO data (field1, field2, field3) VALUES ('$field1', '$field2', '$field3')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");  // Redirect to the main page after successful insertion
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Record</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJg1sQjrhGmZ0FiTrPgmQ2z1Rxtz5tSts2Y6krLOI+4IMQjoxrKwYKiAN9xt" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Add New Record</h2>
    
    <form method="POST">
        <div class="mb-3">
            <label for="field1" class="form-label">Name:</label>
            <input type="text" name="field1" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="field2" class="form-label">Email:</label>
            <input type="email" name="field2" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="field3" class="form-label">Course:</label>
            <input type="text" name="field3" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Add Record</button>
            <a href="index.php" class="btn btn-secondary">Back to Records</a>
        </div>
    </form>
</div>

<!-- Bootstrap JS (for features like modal, dropdown, etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0zOhsD00oTrb8g98YvVrXz5Rx1fypqIbSeHp/3o/64Pmpm5N" crossorigin="anonymous"></script>

</body>
</html>
