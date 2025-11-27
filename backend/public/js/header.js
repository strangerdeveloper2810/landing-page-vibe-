document.addEventListener('DOMContentLoaded', function () {
  var toggleButton = document.querySelector('header .lang .menu-toggle');
  var nav = document.getElementById('site-nav');
  var overlay = document.querySelector('.mobile-menu-overlay');
  var closeButton = document.querySelector('.mobile-menu-close');

  if (!toggleButton || !nav) { return; }

  // Function to open menu
  function openMenu() {
    nav.classList.add('is-open');
    if (overlay) overlay.classList.add('is-open');
    toggleButton.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
  }

  // Function to close menu
  function closeMenu() {
    nav.classList.remove('is-open');
    if (overlay) overlay.classList.remove('is-open');
    toggleButton.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = ''; // Restore scrolling
  }

  // Toggle menu on hamburger click
  toggleButton.addEventListener('click', function () {
    if (nav.classList.contains('is-open')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  // Close menu when clicking overlay
  if (overlay) {
    overlay.addEventListener('click', closeMenu);
  }

  // Close menu when clicking close button
  if (closeButton) {
    closeButton.addEventListener('click', closeMenu);
  }

  // Close menu when clicking navigation links
  document.querySelectorAll('#site-nav a').forEach(function(link) {
    link.addEventListener('click', closeMenu);
  });

  // Smooth scroll for navigation links
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function (e) {
      var href = this.getAttribute('href');
      if (href === '#' || href.length <= 1) return;

      e.preventDefault();
      var target = document.querySelector(href);
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
});


