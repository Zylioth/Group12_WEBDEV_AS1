<?php
session_start();
include '../database/db.php';

// admin can dropdown to select users ikut nama
$user_query = "SELECT id, CONCAT(id, ' - ', username) AS user_display FROM users ORDER BY id ASC"; 
$user_result = $conn->query($user_query);

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- header -->
    <?php include 'includes/header.php'; ?>

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
            <select id="user_id" name="user_id" required>
                <option value="">Select User</option> <!-- Default option -->
                <?php while ($row = $user_result->fetch_assoc()): ?>
                    <option value="<?php echo $row['id']; ?>">
                        <?php echo htmlspecialchars($row['user_display']); ?>
                    </option>
                <?php endwhile; ?>
            </select>

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

<script src="js/hamburger.js"></script>

</body>
</html>
