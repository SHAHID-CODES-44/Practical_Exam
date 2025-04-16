<?php
include 'db.php';

// Get the ID of the record to delete
$id = $_GET['id'];

// SQL query to delete the record
$sql = "DELETE FROM data WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");  // Redirect to the main page after successful deletion
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
