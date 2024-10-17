<?php
session_start();
include '../database/db.php';

// Redirect if not logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image_url = '';

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_url = uniqid() . '-' . $image_name; // To avoid conflicts
        move_uploaded_file($image_tmp, "../uploads/" . $image_url);
    }

    // Insert the portfolio item into the database
    $query = "INSERT INTO portfolio (title, description, image_url) VALUES ('$title', '$description', '$image_url')";
    if ($conn->query($query)) {
        header('Location: manage_portfolio.php');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Portfolio Item</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="admin-dashboard">

<?php include 'includes/sidebar.php'; ?>

    <main class="main-content">
        <h1>Add New Portfolio Item</h1>

        <form action="add_portfolio.php" method="POST" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <button type="submit" class="btn">Add Portfolio Item</button>
        </form>
    </main>
</div>
</body>
</html>
