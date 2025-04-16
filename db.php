<?php
$host = "localhost";    // The server is local
$user = "root";         // Username for MySQL
$pass = "";             // No password by default on XAMPP
$db = "crud";           // The database name
$port = 3307;           // Custom port for MySQL (default is 3306, use 3307 if needed)

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
