<?php
session_start();
include 'database/db.php';

// amibl all from portfolio table
$query = "SELECT * FROM portfolio";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iqlas Kreation - Portfolio</title>
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


    <?php include 'includes/footer.php'; ?>

    <script src="js/hamburger.js"></script>
    <script src="https://kit.fontawesome.com/fbacd2348c.js" crossorigin="anonymous"></script>
</body>
</html>
