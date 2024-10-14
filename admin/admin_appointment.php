<?php
session_start();
include '../database/db.php';

// Redirect if not logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

// Fetch appointment details
$query = "SELECT a.*, u.username FROM appointments a JOIN users u ON a.user_id = u.id";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Appointments</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="admin-dashboard">

<?php include 'includes/sidebar.php' ; ?>

    <main class="main-content">
        <h1>Manage Appointments</h1>

        <!-- Add Appointment button -->
        <a href="add_appointment.php" class="btn">Add New Appointment</a>

        <!-- Display Appointments Table -->
        <table class="users-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Details</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($appointment = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($appointment['id']); ?></td>
                            <td><?php echo htmlspecialchars($appointment['username']); ?></td>
                            <td><?php echo htmlspecialchars($appointment['appointment_date']); ?></td>
                            <td><?php echo htmlspecialchars($appointment['appointment_time']); ?></td>
                            <td><?php echo htmlspecialchars($appointment['status']); ?></td>
                            <td><?php echo htmlspecialchars($appointment['details']); ?></td>
                            <td>
                                <a href="edit_appointment.php?id=<?php echo $appointment['id']; ?>" class="btn">Edit</a>
                                <a href="delete_appointment.php?id=<?php echo $appointment['id']; ?>" class="btn" onclick="return confirm('Are you sure you want to delete this appointment?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No appointments found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>
</div>
</body>
</html>
