<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

include '../database/db.php'; 

// total users
$query_users = "SELECT COUNT(*) as total_users FROM users";
$result_users = $conn->query($query_users);
$total_users = 0; // Default value

if ($result_users) {
    $row_users = $result_users->fetch_assoc();
    $total_users = $row_users['total_users'];
} else {
    echo "Error fetching user count: " . $conn->error;
}

// total portfolio items
$query_portfolio = "SELECT COUNT(*) as total_portfolio FROM portfolio";
$result_portfolio = $conn->query($query_portfolio);
$total_portfolio = 0; // Default value

if ($result_portfolio) {
    $row_portfolio = $result_portfolio->fetch_assoc();
    $total_portfolio = $row_portfolio['total_portfolio'];
} else {
    echo "Error fetching portfolio count: " . $conn->error;
}

// total Appointments items
$query_appointment = "SELECT COUNT(*) as total_appointment FROM appointments";
$result_appointment = $conn->query($query_appointment);
$total_appointment = 0; // Default value

if ($result_portfolio) {
    $row_appointment = $result_appointment->fetch_assoc();
    $total_appointment = $row_appointment['total_appointment'];
} else {
    echo "Error fetching appointment count: " . $conn->error;
}

// Close the database connection
$conn->close();
?>