<?php
// DB config
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "movementdb";
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: adminlogin.php");
    exit;
}

// Connect
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle deletion
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);
    $conn->query("DELETE FROM join_requests WHERE id = $id");
    header("Location: view.php"); // Refresh the page
    exit;
}

// Fetch data
$result = $conn->query("SELECT * FROM join_requests ORDER BY submitted_at DESC");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin - Join Requests</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 2rem; }
    h2 { margin-bottom: 20px; }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 12px; border: 1px solid #ccc; text-align: left; }
    th { background-color: #f4f4f4; }
    .delete-btn {
      color: white;
      background: red;
      padding: 5px 10px;
      text-decoration: none;
      border-radius: 5px;
    }
    .delete-btn:hover {
      background: darkred;
    }
  </style>
</head>
<body>
  <h2>Join the Movement - Submissions</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>County</th>
      <th>Constituency</th>
      <th>Location</th>
      <th>Message</th>
      <th>Submitted At</th>
      <th>Action</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= htmlspecialchars($row['name']) ?></td>
      <td><?= htmlspecialchars($row['email']) ?></td>
      <td><?= htmlspecialchars($row['phone']) ?></td>
      <td><?= htmlspecialchars($row['county']) ?></td>
      <td><?= htmlspecialchars($row['constituency']) ?></td>
      <td><?= htmlspecialchars($row['location']) ?></td>
      <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
      <td><?= $row['submitted_at'] ?></td>
      <td>
        <a class="delete-btn" href="view.php?delete_id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this entry?');">Delete</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>

<?php $conn->close(); ?>
