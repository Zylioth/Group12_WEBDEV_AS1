  // tuk ambil the elements
  const hamburger = document.getElementById('hamburger');
  const navMenu = document.getElementById('nav-menu');

  // Add click event to the hamburger menu
  hamburger.addEventListener('click', function() {
    // Toggle 'nav-active' class to show or hide the menu
    navMenu.classList.toggle('nav-active');
  });
