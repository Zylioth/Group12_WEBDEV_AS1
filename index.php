<?php
session_start();
?>

<html>
 <head>
  <title>
   Iqlas Kreation
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <a class="active" href="index.html">HOME</a>
      <a href="about.html">ABOUT</a>
      <a href="#">PORTFOLIO</a>
      <a href="#">PRODUCTS</a>
      
      <!-- liat if user login -->
      <?php if (isset($_SESSION['username'])): ?>
        <a href="dashboard.php"> <i class="fa-solid fa-user"></i> <?php echo htmlspecialchars($_SESSION['username']); ?></a>
      <?php else: ?>
        <a href="login.php">LOGIN/REGISTER</a>
      <?php endif; ?>

    </nav>
  </header>

  <!-- Ani the Banner rh Home -->

  <div class="hero-image">

    <!-- gambar masuk arh css nya udah -->
   
    <div class="hero-text">
    TAILORING PERFECTION, ONE SUIT AT A TIME
   </div>

  </div>

  <div class="sections">

    <!-- Link to About Page -->
    <a href="about.html" class="section-link">
      <div class="section">
         <h3>ABOUT</h3>
         <img alt="About Image" src="Assets/Home_about.JPG"/>
         <div class="caption">Go to About Page</div>
      </div>
    </a>
 
    <!-- Link to Portfolio Page -->
    <a href="portfolio.html" class="section-link">
      <div class="section">
         <h3>PORTFOLIO</h3>
         <img alt="Portfolio Image" src="Assets/Home_portfolio.JPG"/>
         <div class="caption">Go to Portfolio Page</div>
      </div>
    </a>
 
    <!-- Link to Products and Services Page -->
    <a href="products.html" class="section-link">
      <div class="section">
         <h3>PRODUCTS AND SERVICES</h3>
         <img alt="Products and Services Image" src="Assets/Home_prodNserv.JPG"/>
         <div class="caption">Go to Products and Services Page</div> 
      </div>
    </a>
 
 </div>

  <!-- script js tuk menu -->
  <script src="js/hamburger.js"></script>
  <script src="https://kit.fontawesome.com/fbacd2348c.js" crossorigin="anonymous"></script>
  
 </body>
</html>