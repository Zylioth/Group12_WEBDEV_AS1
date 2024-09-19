<?php

include 'database/db.php'; // supaya ia connect to our db

// ani will grab current login user punya appt
$user_id = $_SESSION['user_id'];
$query = "SELECT appointment_date, appointment_time,status, details 
          FROM appointments 
          WHERE user_id = ? AND appointment_date >= CURDATE() 
          ORDER BY appointment_date ASC, appointment_time ASC";

if ($stmt = $conn->prepare($query)) {
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    echo "Error: " . $conn->error;
    exit();
}
?>
