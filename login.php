<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iqlas Kreation - login</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <a href="index.html"><img alt="Iqlas Kreation Logo" height="50" src="Assets/IK_headerLogo.png" width="150"/></a>
    
    <!-- Hamburger icon for mobile -->
    <div class="hamburger" id="hamburger">
      <i class="fas fa-bars"></i>
    </div>
  
    <!-- Navigation Links -->
    <nav id="nav-menu">
      <a href="index.html">HOME</a>
      <a href="about.html">ABOUT</a>
      <a href="#">PORTFOLIO</a>
      <a href="#">PRODUCTS</a>
      <a href="#">CONTACT</a>
      <a class="active" href="login.php" >LOGIN/REGISTER</a>
    </nav>
  </header>

    <h2>Login</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>

    <p>Haven't Register Before? <a href="register.php"> Click here! </a></p>

    <?php include 'Functions/sign-in.php'; ?> <!-- Including the PHP logic -->
    
</body>
</html>