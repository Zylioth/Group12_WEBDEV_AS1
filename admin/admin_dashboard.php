<?php
include 'Functions/countdata.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="../Assets/IK_logo.png">
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
        <h1>Admin Dashboard</h1>
        <div class="summary">
            <h2>Summary</h2>
            <div class="card-container">
                <div class="card">
                    <i class="fas fa-users card-icon"></i> <!-- Ani icon for users -->
                    <p>Total Users</p>
                    <p class="card-number"><?php echo htmlspecialchars($total_users); ?></p>
                </div>
                <div class="card">
                    <i class="fas fa-trophy card-icon" style="color: #FFD43B;"></i> <!-- Ani icon for portfolio -->
                    <p>Total Portfolio Items</p>
                    <p class="card-number"><?php echo htmlspecialchars($total_portfolio); ?></p>
                </div>
                <div class="card">
                <i class="fas fa-calendar-check card-icon" style="color: #74C0FC;"></i> <!-- Ani icon for Appointment -->
                    <p>Total Appointments Items</p>
                    <p class="card-number"><?php echo htmlspecialchars($total_appointment); ?></p>
                </div>                
            </div>
        </div>

        <!-- Quick Actions buttons -->
        <section class="quick-actions">
            <h2>Quick Actions</h2>
            <a href="add_user.php" class="quick-link">Add New User</a>
            <a href="add_appointment.php" class="quick-link">Create Appointment</a>
            <a href="edit_portfolio.php" class="quick-link">Edit Portfolio Items</a>
        </section>

    </main>
</div>

    <script src="js/hamburger.js"></script>

</body>
</html>
