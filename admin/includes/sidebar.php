<aside class="sidebar">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></h2>
        <nav>
            <ul>
                <li><a href="admin_dashboard.php">Dashboard</a></li>
                <li><a href="admin_users.php">Users</a></li>
                <li><a href="admin_appointment.php">Appointments</a></li>
                <li><a href="admin_portfolio.php">Portfolio</a></li>
                <li><a href="Functions/logout.php">Logout</a></li>
            </ul>
        </nav>
</aside>