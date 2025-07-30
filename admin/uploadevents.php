<?php include 'db.php'; ?>


<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: adminlogin.php");
    exit;
}
// Upload Event
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $stmt = $conn->prepare("INSERT INTO events (title, description, image) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $desc, $image);
        $stmt->execute();
        $message = "Event uploaded successfully!";
    } else {
        $message = "Failed to upload image.";
    }
}

// Update Event
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $conn->query("UPDATE events SET title='$title', description='$desc', image='$image' WHERE id=$id");
    } else {
        $conn->query("UPDATE events SET title='$title', description='$desc' WHERE id=$id");
    }
    $message = "Event updated successfully!";
}

// Delete Event
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $getImg = $conn->query("SELECT image FROM events WHERE id=$id")->fetch_assoc();
    if (file_exists("uploads/" . $getImg['image'])) {
        unlink("uploads/" . $getImg['image']);
    }
    $conn->query("DELETE FROM events WHERE id=$id");
    $message = "Event deleted successfully!";
}

// Load event for editing
$editEvent = null;
if (isset($_GET['edit'])) {
    $editId = $_GET['edit'];
    $editEvent = $conn->query("SELECT * FROM events WHERE id=$editId")->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Events</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background: #f4f4f4;
        }

        h2 {
            margin-bottom: 1rem;
        }

        form {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        input[type="text"], textarea, input[type="file"] {
            width: 100%;
            margin-bottom: 1rem;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 0.8rem 1.2rem;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 1rem;
            text-align: center;
        }

        table img {
            width: 100px;
        }

        .edit-btn {
            background: orange;
            padding: 0.4rem 0.8rem;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .delete-btn {
            background: red;
            padding: 0.4rem 0.8rem;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .msg {
            background: #d4edda;
            padding: 1rem;
            color: #155724;
            border: 1px solid #c3e6cb;
            margin-bottom: 1rem;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h2><?= $editEvent ? "Edit Event" : "Upload New Event" ?></h2>

    <?php if (isset($message)): ?>
        <div class="msg"><?= $message ?></div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $editEvent['id'] ?? '' ?>">
        <input type="text" name="title" placeholder="Event Title" required value="<?= $editEvent['title'] ?? '' ?>">
        <textarea name="description" placeholder="Event Description" required><?= $editEvent['description'] ?? '' ?></textarea>
        <?php if ($editEvent): ?>
            <p>Current Image:</p>
            <img src="uploads/<?= $editEvent['image'] ?>" width="150"><br>
        <?php endif; ?>
        <input type="file" name="image" <?= $editEvent ? '' : 'required' ?>>
        <button type="submit" name="<?= $editEvent ? 'update' : 'submit' ?>">
            <?= $editEvent ? 'Update Event' : 'Upload Event' ?>
        </button>
    </form>

    <h3>All Events</h3>
    <table>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM events ORDER BY id DESC");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><img src="uploads/<?= $row['image'] ?>"></td>
            <td><?= $row['title'] ?></td>
            <td><?= $row['description'] ?></td>
            <td>
                <a href="?edit=<?= $row['id'] ?>" class="edit-btn">Edit</a>
                <a href="?delete=<?= $row['id'] ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this event?');">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>
