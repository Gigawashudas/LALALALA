<?php
$servername = "localhost"; // Change if your MySQL server is on a different host
$username = "your_db_user"; // Replace with your MySQL username
$password = "your_db_password"; // Replace with your MySQL password
$dbname = "ecommerce_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>