<?php
session_start();
include '../database/db.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

// Check if the appointment ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL query to delete the appointment
    $query = "DELETE FROM appointments WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);  // Bind appointment ID as integer
    $stmt->execute();

    // Redirect back to the appointments page after deletion
    header('Location: admin_appointment.php');
    exit();
} else {
    // Redirect to the appointments page if no ID is provided
    header('Location: admin_appointment.php');
    exit();
}
?>
