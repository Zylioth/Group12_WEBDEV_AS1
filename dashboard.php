<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="icon" href="Assets/IK_logo.png">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'includes/header.php' ?>

  <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
  <a href="Functions/logout.php">Logout</a>

  <h2>Your Upcoming Appointments: </h2>

  <?php include 'Functions/Ambil_Appointment.php'; ?>

  <!-- buat table arh dashboard spya user dpot liat coming appt -->

  <?php if ($result && $result->num_rows > 0): ?>
    <table class="appointment-meja" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Details</th>
            <th>Status</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo date('F d, Y', strtotime($row['appointment_date'])); ?></td>
            <td><?php echo date('h:i A', strtotime($row['appointment_time'])); ?></td>
            <td><?php echo ($row['details']); ?></td> 
            <td><?php echo ($row['status']); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
<?php else: ?>
    <p>No upcoming appointments found.</p>
<?php endif; ?>


  <!-- ani is the footer -->
  <?php include 'includes/footer.php'; ?> 

  <!-- script js tuk menu -->
  <script src="js/hamburger.js"></script>
  <script src="https://kit.fontawesome.com/fbacd2348c.js" crossorigin="anonymous"></script>

</body>
</html>
