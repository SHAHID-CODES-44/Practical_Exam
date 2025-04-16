<?php
include 'db.php';

// Get the record to edit
$id = $_GET['id'];
$sql = "SELECT * FROM data WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $field1 = $_POST['field1'];  // Student Name
    $field2 = $_POST['field2'];  // Student Email
    $field3 = $_POST['field3'];  // Student Course

    $sql = "UPDATE data SET field1 = '$field1', field2 = '$field2', field3 = '$field3' WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");  // Redirect to the main page
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
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form method="POST">
        <label for="field1">Name:</label><br>
        <input type="text" name="field1" value="<?= $row['field1'] ?>" required><br><br>
        
        <label for="field2">Email:</label><br>
        <input type="email" name="field2" value="<?= $row['field2'] ?>" required><br><br>

        <label for="field3">Course:</label><br>
        <input type="text" name="field3" value="<?= $row['field3'] ?>" required><br><br>

        <input type="submit" value="Update Student">
    </form>
    <br>
    <a href="index.php">Back to Records</a>
</body>
</html>
