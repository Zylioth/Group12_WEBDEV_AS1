<?php
session_start();
?>

<html>
 <head>
  <title>Iqlas Kreation</title>
  <link rel="icon" href="Assets/IK_logo.png">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  

 </head>

 <body>

 <!-- pakai include so code nda messy -->

 <?php include 'includes/header.php'; ?>

  <!-- Ani the Banner rh Home -->

  <div class="hero-image">

    <!-- gambar masuk arh css nya udah -->
   
    <div class="hero-text">
    TAILORING PERFECTION, ONE SUIT AT A TIME
   </div>

  </div>


  <div class="appointment-form">

    <!-- Booking Appointment Fomr -->
  <h2>Book an Appointment</h2>
    <form action="Functions/appointment.php" method="POST">
        <label for="date">Select Date:</label><br>
        <input type="date" id="date" name="date" required><br><br>

        <label for="time">Select Time:</label><br>
        <input type="time" id="time" name="time" required><br><br>

        <label for="details">Details:</label><br>
        <textarea id="details" name="details" rows="4" cols="50" placeholder="Any specific instructions or details"></textarea><br><br>

        <input type="submit" value="Book Appointment">
    </form>

  </div>


  <div class="sections">

    <!-- Link to About Page -->
    <a href="about.php" class="section-link">
      <div class="section">
         <h3>ABOUT</h3>
         <img alt="About Image" src="Assets/Home_about.JPG"/>
         <div class="caption">Go to About Page</div>
      </div>
    </a>
 
    <!-- Link to Portfolio Page -->
    <a href="portfolio.php" class="section-link">
      <div class="section">
         <h3>PORTFOLIO</h3>
         <img alt="Portfolio Image" src="Assets/Home_portfolio.JPG"/>
         <div class="caption">Go to Portfolio Page</div>
      </div>
    </a>
 
    <!-- Link to Products and Services Page -->
    <a href="products.php" class="section-link">
      <div class="section">
         <h3>PRODUCTS AND SERVICES</h3>
         <img alt="Products and Services Image" src="Assets/Home_prodNserv.JPG"/>
         <div class="caption">Go to Products and Services Page</div> 
      </div>
    </a>
 
 </div>

  <!-- ani is the footer -->
  <?php include 'includes/footer.php'; ?> 

  <!-- script js tuk menu -->
  <script src="js/hamburger.js"></script>
  <script src="https://kit.fontawesome.com/fbacd2348c.js" crossorigin="anonymous"></script>
  
 </body>
</html>