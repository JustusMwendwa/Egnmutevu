<?php
// DB config
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "movementdb";

// Connect to DB
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $county = $conn->real_escape_string($_POST["county"]);
    $constituency = $conn->real_escape_string($_POST["constituency"]);
    $location = $conn->real_escape_string($_POST["location"]);
    $message = $conn->real_escape_string($_POST["message"]);

    $sql = "INSERT INTO join_requests (name, email, phone, county, constituency, location, message)
            VALUES ('$name', '$email', '$phone', '$county', '$constituency', '$location', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Thank you, $name. Your information has been received.</h3>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
