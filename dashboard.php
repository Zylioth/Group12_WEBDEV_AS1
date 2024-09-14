<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: sign-in.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
  <a href="Functions/logout.php">Logout</a>
</body>
</html>
