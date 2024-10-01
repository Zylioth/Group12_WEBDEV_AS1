<?php
include 'Functions/countdata.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="Assets/IK_logo.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="admin-dashboard">
    <aside class="sidebar">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></h2>
        <nav>
            <ul>
                <li><a href="admin_dashboard.php">Dashboard</a></li>
                <li><a href="admin_users.php">Users</a></li>
                <li><a href="admin_portfolio.php">Portfolio</a></li>
                <li><a href="Functions/logout.php">Logout</a></li>
            </ul>
        </nav>
    </aside>

    <main class="main-content">
        <h1>Admin Dashboard</h1>
        <div class="summary">
            <h2>Summary</h2>
            <p>Total Users: <?php echo htmlspecialchars($total_users); ?> </p>
            <p>Total Portfolio Items: <?php echo htmlspecialchars($total_portfolio); ?></p>
            <!-- dpt di tambah later on -->
        </div>
    </main>
</div>

</body>
</html>
