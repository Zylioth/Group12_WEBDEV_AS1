<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php'); // Redirect to login page if not logged in
    exit();
}

include '../database/db.php'; // Include database connection

// Check if the user ID is set in the URL
if (isset($_GET['id'])) {
    $user_id = $_GET['id']; // Get the user ID from the URL

    // Prepare the DELETE statement
    $query = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $user_id); // Bind the user ID parameter

    // Execute the statement
    if ($stmt->execute()) {
        // Successfully deleted the user
        header('Location: admin_users.php'); // Redirect to the user management page
        exit();
    } else {
        // If there's an error, you can display an error message
        echo "Error deleting user: " . $stmt->error;
    }
} else {
    // If no user ID is set, redirect to the user management page
    header('Location: admin_users.php');
    exit();
}
?>
