<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

include '../database/db.php'; 

// Fetch user details for editing
$user_id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    // Update user details in the database
    $query = "UPDATE users SET username = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssi', $username, $email, $user_id);

    if ($stmt->execute()) {
        header('Location: admin_users.php'); // Redirect to user management page
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
        <h1>Edit User</h1>

        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

            <button type="submit">Update User</button>
        </form>
    </main>
</div>

</body>
</html>
