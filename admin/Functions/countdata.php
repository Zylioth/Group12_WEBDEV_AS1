<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

include '../database/db.php'; 

// Fetch total users
$query_users = "SELECT COUNT(*) as total_users FROM users";
$result_users = $conn->query($query_users);
$total_users = 0; // Default value

if ($result_users) {
    $row_users = $result_users->fetch_assoc();
    $total_users = $row_users['total_users'];
} else {
    echo "Error fetching user count: " . $conn->error;
}

// Fetch total portfolio items
$query_portfolio = "SELECT COUNT(*) as total_portfolio FROM portfolio";
$result_portfolio = $conn->query($query_portfolio);
$total_portfolio = 0; // Default value

if ($result_portfolio) {
    $row_portfolio = $result_portfolio->fetch_assoc();
    $total_portfolio = $row_portfolio['total_portfolio'];
} else {
    echo "Error fetching portfolio count: " . $conn->error;
}

// Close the database connection
$conn->close();
?>