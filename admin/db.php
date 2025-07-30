<?php
$conn = new mysqli("localhost", "root", "", "movementdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
