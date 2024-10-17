<?php
session_start();
include '../database/db.php';

// ani cek session if none then ke admin login page
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

// remove portfolio based on ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the image URL to delete the file
    $query = "SELECT image_url FROM portfolio WHERE id = $id";
    $result = $conn->query($query);
    $portfolio = $result->fetch_assoc();
    $image_url = $portfolio['image_url'];

    // remove image file from uploads folder
    if (file_exists("../uploads/" . $image_url)) {
        unlink("../uploads/" . $image_url);
    }

    // remove the portfolio from the database
    $query = "DELETE FROM portfolio WHERE id = $id";
    if ($conn->query($query)) {
        header('Location: admin_portfolio.php');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
