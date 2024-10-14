<?php
session_start();
include '../database/db.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

$id = $_GET['id'];

// Fetch appointment details by ID
$query = "SELECT * FROM appointments WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $id);  // Bind appointment ID as integer
$stmt->execute();
$result = $stmt->get_result();
$appointment = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $status = $_POST['status'];
    $details = $_POST['details'];

    // Update appointment details
    $updateQuery = "UPDATE appointments SET appointment_date = ?, appointment_time = ?, status = ?, details = ? WHERE id = ?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param('ssssi', $appointment_date, $appointment_time, $status, $details, $id);  // Bind all as strings, except the ID
    $stmt->execute();

    header('Location: admin_appointment.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointment</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="login-container">
    <h2>Edit Appointment</h2>

    <form action="edit_appointment.php?id=<?php echo $appointment['id']; ?>" method="post">
        <label for="appointment_date">Date:</label>
        <input type="date" name="appointment_date" value="<?php echo htmlspecialchars($appointment['appointment_date']); ?>" required>

        <label for="appointment_time">Time:</label>
        <input type="time" name="appointment_time" value="<?php echo htmlspecialchars($appointment['appointment_time']); ?>" required>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="Pending" <?php echo ($appointment['status'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
            <option value="Accepted" <?php echo ($appointment['status'] == 'Accepted') ? 'selected' : ''; ?>>Accepted</option>
            <option value="Completed" <?php echo ($appointment['status'] == 'Completed') ? 'selected' : ''; ?>>Completed</option>
            <option value="Cancelled" <?php echo ($appointment['status'] == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
        </select>

        <label for="details">Details:</label>
        <textarea name="details" required><?php echo htmlspecialchars($appointment['details']); ?></textarea>

        <input type="submit" value="Update Appointment">
    </form>
</div>
</body>
</html>
