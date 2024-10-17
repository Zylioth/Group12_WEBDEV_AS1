<?php
session_start();
include '../database/db.php';

// Redirect if not logged in
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}

// Fetch portfolio details
$query = "SELECT * FROM portfolio";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="admin-dashboard">

<?php include 'includes/sidebar.php'; ?>

    <main class="main-content">
        <h1>Manage Portfolio</h1>

        <!-- Add Portfolio Button -->
        <a href="add_portfolio.php" class="btn">Add New Portfolio Item</a>

        <!-- Display Portfolio Table -->
        <table class="users-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($portfolio = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($portfolio['id']); ?></td>
                            <td><?php echo htmlspecialchars($portfolio['title']); ?></td>
                            <td><?php echo htmlspecialchars($portfolio['description']); ?></td>
                            <td><img src="../uploads/<?php echo htmlspecialchars($portfolio['image_url']); ?>" alt="<?php echo htmlspecialchars($portfolio['title']); ?>" width="100"></td>
                            <td>
                                <a href="edit_portfolio.php?id=<?php echo $portfolio['id']; ?>" class="btn">Edit</a>
                                <a href="delete_portfolio.php?id=<?php echo $portfolio['id']; ?>" class="btn" onclick="return confirm('Are you sure you want to delete this portfolio item?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No portfolio items found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>
</div>
</body>
</html>
