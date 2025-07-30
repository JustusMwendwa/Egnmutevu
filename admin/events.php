<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
    <style>
       
        .event-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .event-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
            background: white;
        }

        .event-card img {
            width: 100%;
            display: block;
            transition: 0.3s ease;
        }

        .event-info {
            position: absolute;
            bottom: -100%;
            left: 0;
            width: 100%;
            background: rgba(0,0,0,0.7);
            color: #fff;
            padding: 1rem;
            box-sizing: border-box;
            transition: 0.4s ease;
        }

        .event-card:hover .event-info {
            bottom: 0;
        }

        .event-title {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .event-desc {
            font-size: 0.95rem;
            line-height: 1.4;
        }

        h2 {
            text-align: center;
            margin-bottom: 2rem;
            color: #333;
        }
    </style>
</head>
<body>

    <h2>Upcoming Events</h2>

    <div class="event-gallery">
        <?php
        $result = $conn->query("SELECT * FROM events ORDER BY id DESC");
        while ($row = $result->fetch_assoc()):
        ?>
        <div class="event-card">
            <img src="admin/uploads/<?= htmlspecialchars($row['image']) ?>" alt="Event Image">
            <div class="event-info">
                <div class="event-title"><?= htmlspecialchars($row['title']) ?></div>
                <div class="event-desc"><?= htmlspecialchars($row['description']) ?></div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

</body>
</html>
