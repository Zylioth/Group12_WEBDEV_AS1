<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- product css -->
  <!-- <link rel="stylesheet" href="css/products.css"> -->

    <title>Iqlas Kreation - Products and Services</title>
    <link rel="icon" href="Assets/IK_logo.png">

</head>

<style>
  html,body {
  height: 100%;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;}
</style>

<body>
<!-- pakai include so code nda messy -->
<?php include 'includes/header.php'; ?>

<!-- Product Info Part -->
<div class="content">

  <div class="tagline">Tailoring Perfection, One Suit at a Time</div>
  <h1>Products and Services</h1>

<div class="product_info">
    <div><img src="Assets/1FM00960.JPG" alt="Product Image 1"></div>
    <div><img src="Assets/1FM01031.JPG" alt="Product Image 2"></div>
    <div><img src="Assets/caraMleyu.png" alt="Product Image 3"></div>
    <div><img src="Assets/1FM00969.JPG" alt="Product Image 4"></div>
  </div>

</div>

<!-- Suits Part -->
<div class="suits-section">
    <h2 class="suits-title">Suits</h2>
    <div class="suits-container">
        <div class="suits-image">
            <img src="Assets/1FM00960.JPG" alt="Suits Display">
        </div>
        <div class="suits-info">
            <ul>
                <li>Two Piece Suit <span class="suits-price">Starting at $250</span></li>
                <li>Three Piece Suit <span class="suits-price">Starting at $300</span></li>
                <li>Blazer <span class="suits-price">Starting at $200</span></li>
                <li>Vest <span class="suits-price">Starting at $75</span></li>
            </ul>
        </div>
    </div>
    <p class="suits-disclaimer">Available for both men and women. Prices may vary based on individual preferences, such as fabric choice and cut.</p>
</div>

<!-- Professional Wear Part -->
<div class="professional-wear-section">
    <h2 class="professional-title">Professional Wear</h2>
    <div class="professional-wear-container">
        <div class="professional-wear-image">
            <img src="Assets/1FM01031.JPG" alt="Professional Wear Image">
        </div>
        <div class="professional-wear-info">
            <ul>
                <li>Shirt <span class="professional-price">Starting at $25</span></li>
                <ul class="professional-shirt-details">
                    <li>• Short Sleeve</li>
                    <li>• Long Sleeve</li>
                </ul>
                <li>Pants <span class="professional-price">Starting at $30</span></li>
            </ul>
        </div>
    </div>
    <p class="professional-disclaimer">Available for both men and women. Prices may vary based on individual preferences, such as fabric choice and cut.</p>
</div>

<!-- Traditional Wear Part -->
<div class="traditional-wear-section">
    <h2 class="traditional-title">Traditional Wear</h2>
    <div class="traditional-wear-container">
        <div class="traditional-wear-image">
            <img src="Assets/caraMleyu.png" alt="Traditional Wear Image">
        </div>
        <div class="traditional-wear-info">
            <ul>
                <li>Kurta <span class="traditional-price">Starting at $20</span></li>
                <li>Baju Melayu <span></span></li>
                <li class="sub-item">• Adult <span class="traditional-sub-price">Starting at $25</span></li>
                <li class="sub-item">• Children <span class="traditional-sub-price">Starting at $15</span></li>
                <li>Baju Kurung <span></span></li>
                <li class="sub-item">• Adult <span class="traditional-sub-price">Starting at $25</span></li>
                <li class="sub-item">• Children <span class="traditional-sub-price">Starting at $15</span></li>
            </ul>
        </div>
    </div>
    <p class="traditional-disclaimer">Our prices may vary based on individual preferences, such as fabric choice and cut.</p>
</div>

<!-- Alteration Wear Part -->
<div class="alterations-section">
    <h2 class="alterations-title">Alterations</h2>
    <div class="alterations-container">
        <div class="alterations-image">
            <img src="Assets/1FM00969.JPG" alt="Alterations Display">
        </div>
        <div class="alterations-info">
            <ul>
                <li>Suit <span class="alterations-price">Starting at $20</span></li>
                <li>Baju Melayu <span class="alterations-price">Starting at $5</span></li>
                <li>Baju Kurung <span class="alterations-price">Starting at $2</span></li>
                <li>Others <span class="alterations-price">Starting at $5</span></li>
            </ul>
        </div>
    </div>
    <p class="alterations-disclaimer">Available for both men and women. Prices may vary based on individual preferences, such as fabric choice and cut.</p>
</div>

<!-- ani is the footer -->
<?php include 'includes/footer.php'; ?> 

<!-- script js tuk menu -->
<script src="js/hamburger.js"></script>
<script src="https://kit.fontawesome.com/fbacd2348c.js" crossorigin="anonymous"></script>

</body>
</html>