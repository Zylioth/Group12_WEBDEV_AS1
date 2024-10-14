<?php
session_start();
include '../database/db.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $status = $_POST['status'];
    $details = $_POST['details'];

    // Insert into appointments table
    $sql = "INSERT INTO appointments (user_id, appointment_date, appointment_time, status, details) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $user_id, $appointment_date, $appointment_time, $status, $details);
    
    if ($stmt->execute()) {
        $success_message = "Appointment added successfully!";
    } else {
        $error_message = "Error adding appointment: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Appointment</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="admin-dashboard">
    <?php include 'includes/sidebar.php'; ?>

    <main class="main-content">
        <h1>Add New Appointment</h1>

        <?php if (isset($success_message)): ?>
            <p class="success-message"><?php echo htmlspecialchars($success_message); ?></p>
        <?php endif; ?>
        <?php if (isset($error_message)): ?>
            <p class="error-message"><?php echo htmlspecialchars($error_message); ?></p>
        <?php endif; ?>

        <form action="add_appointment.php" method="POST" class="form-container">
            <label for="user_id">User ID:</label>
            <input type="number" id="user_id" name="user_id" required>

            <label for="appointment_date">Appointment Date:</label>
            <input type="date" id="appointment_date" name="appointment_date" required>

            <label for="appointment_time">Appointment Time:</label>
            <input type="time" id="appointment_time" name="appointment_time" required>

            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="Pending">Pending</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Cancelled">Cancelled</option>
            </select>

            <label for="details">Details:</label>
            <textarea id="details" name="details" rows="4"></textarea>

            <input type="submit" value="Add Appointment" class="btn">
        </form>
    </main>
</div>

</body>
</html>
