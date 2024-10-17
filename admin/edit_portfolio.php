<?php
session_start();
include 'Functions/portfolioprocess.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Portfolio Item</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="admin-dashboard">

<?php include 'includes/sidebar.php'; ?>

    <main class="main-content">
        <h1>Edit Portfolio Item</h1>

        <form action="edit_portfolio.php?id=<?php echo $portfolio['id']; ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $portfolio['id']; ?>">

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($portfolio['title']); ?>" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required><?php echo htmlspecialchars($portfolio['description']); ?></textarea>

            <label for="image">Image (Leave blank if not changing):</label>
            <input type="file" id="image" name="image" accept="image/*">

            <button type="submit" class="btn">Update Portfolio Item</button>
        </form>
    </main>
</div>
</body>
</html>
