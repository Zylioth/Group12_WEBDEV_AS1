<?php
session_start();
include 'database/db.php'; // Connection to the database

// Fetch portfolio items from the database
$query = "SELECT * FROM portfolio";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <h1>Our Portfolio</h1>

    <div class="portfolio-grid">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="portfolio-item">
                <img src="uploads/<?php echo $row['image_url']; ?>" alt="<?php echo $row['title']; ?>">
                <h3><?php echo $row['title']; ?></h3>
                <p><?php echo $row['description']; ?></p>

            </div>
        <?php endwhile; ?>
    </div>

    <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
        <a href="add_portfolio.php">Add New Portfolio Item</a>
    <?php endif; ?>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
