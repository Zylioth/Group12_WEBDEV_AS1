<header>
    <a href="index.php"><img alt="Iqlas Kreation Logo" height="50" src="Assets/IK_headerLogo.png" width="150"/></a>
    
    <!-- Hamburger icon for mobile -->
    <div class="hamburger" id="hamburger">
      <i class="fas fa-bars"></i>
    </div>
  
    <!-- Navigation Links/ PHP sini used to ambil current active page -->
    <nav id="nav-menu">
      <a href="index.php" class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">HOME</a>
      <a href="about.php" class="<?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'active'; ?>">ABOUT</a>
      <a href="#" class="<?php if (basename($_SERVER['PHP_SELF']) == 'portfolio.php') echo 'active'; ?>">PORTFOLIO</a>
      <a href="#" class="<?php if (basename($_SERVER['PHP_SELF']) == 'products.php') echo 'active'; ?>">PRODUCTS</a>
      
      <!-- liat if user login -->
      <?php if (isset($_SESSION['username'])): ?>
        <a href="dashboard.php"> <i class="fa-solid fa-user"></i> <?php echo htmlspecialchars($_SESSION['username']); ?></a>
      <?php else: ?>
        <a href="login.php">LOGIN/REGISTER</a>
      <?php endif; ?>

    </nav>
  </header>