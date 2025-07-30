<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: adminlogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial; text-align: center; padding: 50px; }
        .btn {
            display: inline-block;
            margin: 20px;
            padding: 15px 30px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .logout {
            margin-top: 30px;
            display: inline-block;
            padding: 10px 20px;
            background: red;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout:hover {
            background: darkred;
        }
    </style>
</head>
<body>
    <h1>Welcome Admin</h1>
    <a class="btn" href="view.php">View Join Requests</a>
    <a class="btn" href="uploadevents.php">Upload Events</a>
    <br>
    <a class="logout" href="logout.php">Logout</a>
</body>
</html>
