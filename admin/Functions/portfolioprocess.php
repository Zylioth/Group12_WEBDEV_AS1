<?php
// ani tuk edit_portfolio.php, kun remove session as theres already session starts

// session_start();
 include '../database/db.php';

// Redirect if not logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

// Fetch portfolio ikut ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM portfolio WHERE id = $id";
    $result = $conn->query($query);
    $portfolio = $result->fetch_assoc();
}

// Update portfolio 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image_url = $portfolio['image_url']; // Default to current image

    // Handle if a new image is provided
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_url = uniqid() . '-' . $image_name;
        move_uploaded_file($image_tmp, "../uploads/" . $image_url);
    }

    // Update the database
    $query = "UPDATE portfolio SET title = '$title', description = '$description', image_url = '$image_url' WHERE id = $id";
    if ($conn->query($query)) {
        header('Location: admin_portfolio.php');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>