<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="icon" href="Assets/IK_logo.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background: rgb(216,203,144);background: linear-gradient(90deg, rgba(216,203,144,1) 22%, rgba(199,175,98,1) 100%);">

<div class="login-container">
    <h2>Admin Login</h2>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="error-message">
            <?php 
            echo htmlspecialchars($_SESSION['error']); 
            unset($_SESSION['error']); // Clear the message after displaying it
            ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="Functions/admin_sign_in.php">
        <label for="admin_username">Username:</label>
        <input type="text" id="admin_username" name="admin_username" required>
        
        <label for="admin_password">Password:</label>
        <input type="password" id="admin_password" name="admin_password" required>
        
        <input type="submit" value="Login" style=" width: 100%; ">
    </form>
    <p>Back to <a href="../index.php">Homepage</a></p>
</div>

</body>
</html>
