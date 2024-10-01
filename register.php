<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iqlas Kreation - login</title>
    <link rel="icon" href="Assets/IK_logo.png">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

 <!-- pakai include so code nda messy -->

 <?php include 'includes/header.php'; ?>

  <div class="register-form">
    <h2>Register</h2>
    <form action="register.php" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      
      <label for="confirm-password">Confirm Password</label>
      <input type="password" id="confirm-password" name="confirm-password" required>
      
      <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Sign in here</a></p>
  </div>

    <?php include 'Functions/sign-up.php'; ?> <!-- Including the PHP logic -->
    
</body>
</html>