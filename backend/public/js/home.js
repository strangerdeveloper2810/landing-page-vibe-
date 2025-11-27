document.addEventListener('DOMContentLoaded', function () {
  let currentSlide = 0;
  const slides = document.querySelectorAll('.slide');
  const infoBoxes = document.querySelectorAll('.info-box');

  const container = document.querySelector('.container-toggle');
  const boxes = document.querySelectorAll('.box');
  let swapped = [1, 0, 0, 0];

  window.showSlide = function (index) {
    if (!slides.length || !infoBoxes.length) return;
    slides[currentSlide].classList.remove('active');
    infoBoxes[currentSlide].classList.remove('active');
    currentSlide = index;
    slides[currentSlide].classList.add('active');
    infoBoxes[currentSlide].classList.add('active');
  };

  function nextSlide() {
    if (!slides.length || !infoBoxes.length) return;
    const nextIndex = (currentSlide + 1) % slides.length;
    window.showSlide(nextIndex);

    if (!container || boxes.length < 4) return;

    const firstRects = Array.from(boxes).map(function (b) { return b.getBoundingClientRect(); });

    switch (swapped.indexOf(1)) {
      case 0:
        container.insertBefore(boxes[1], boxes[0]);
        swapped = [0, 1, 0, 0];
        break;
      case 1:
        container.insertBefore(boxes[2], boxes[0]);
        swapped = [0, 0, 1, 0];
        break;
      case 2:
        container.insertBefore(boxes[3], boxes[0]);
        swapped = [0, 0, 0, 1];
        break;
      case 3:
        container.insertBefore(boxes[0], boxes[1]);
        swapped = [1, 0, 0, 0];
        break;
      default:
        break;
    }

    const lastRects = Array.from(boxes).map(function (b) { return b.getBoundingClientRect(); });

    boxes.forEach(function (box, i) {
      const dx = firstRects[i].left - lastRects[i].left;
      const dy = firstRects[i].top - lastRects[i].top;
      box.style.transform = 'translate(' + dx + 'px, ' + dy + 'px)';
      box.style.transition = 'none';
      box.offsetWidth;
      box.style.transform = '';
      box.style.transition = 'transform 0.6s cubic-bezier(.22,.9,.28,1)';
    });
  }

  setInterval(nextSlide, 5000);

  const imageCards = document.querySelectorAll('.image-card');

  function getImageCardResponsiveConfig(width) {
    if (width <= 380) {
      return { shrink: '0 0 25%', expand: '0 0 25%', reset: '0 0 50%' };
    }
    if (width > 380 && width <= 430) {
		return { shrink: '0 0 25%', expand: '0 0 25%', reset: '0 0 50%' };
    }
    if (width > 430 && width <= 780) {
		return { shrink: '0 0 25%', expand: '0 0 25%', reset: '0 0 50%' };
    }
    return { shrink: '0 0 18%', expand: '0 0 46%', reset: '0 0 25%' };
  }

  imageCards.forEach(function (card) {
    card.addEventListener('mouseenter', function () {
      const config = getImageCardResponsiveConfig(window.innerWidth);
      imageCards.forEach(function (c) {
        if (c !== card) {
          c.style.flex = config.shrink;
        } else {
          c.style.flex = config.expand;
        }
      });
    });

    card.addEventListener('mouseleave', function () {
      const config = getImageCardResponsiveConfig(window.innerWidth);
      imageCards.forEach(function (c) {
        c.style.flex = config.reset;
      });
    });
  });

  // Scroll animations now handled by Intersection Observer in content.blade.php for better performance

  // Handle capabilities tabs styling
  const capabilitiesTabs = document.querySelectorAll('#capabilities-tabs button');
  if (capabilitiesTabs.length > 0) {
    // Ensure only one tab pane is visible on page load
    const allTabPanes = document.querySelectorAll('.tab-pane');
    allTabPanes.forEach(function (pane) {
      const hasShow = pane.classList.contains('show');
      const hasActive = pane.classList.contains('active');

      if (hasShow && hasActive) {
        // Keep this pane visible
        pane.style.display = 'block';
      } else {
        // Hide all other panes
        pane.classList.remove('show', 'active');
        pane.style.display = 'none';
      }
    });

    // Set initial active tab icon size (20x20px) and make it bright
    const activeTab = document.querySelector('#capabilities-tabs button.active');
    if (activeTab) {
      const activeIcon = activeTab.querySelector('img');
      if (activeIcon) {
        activeIcon.width = '20';
        activeIcon.height = '20';
        activeIcon.style.filter = 'brightness(0) invert(1)';
      }
    }

    // Set initial inactive tabs icon size (28x28px) and make them dark
    capabilitiesTabs.forEach(function (tab) {
      if (!tab.classList.contains('active')) {
        const inactiveIcon = tab.querySelector('img');
        if (inactiveIcon) {
          inactiveIcon.width = '28';
          inactiveIcon.height = '28';
          inactiveIcon.style.filter = 'brightness(0)';
        }
      }
    });

    capabilitiesTabs.forEach(function (tab) {
      // Handle tab change - set styles BEFORE Bootstrap shows the tab
      tab.addEventListener('show.bs.tab', function (event) {
        // Reset all tabs to inactive style immediately
        capabilitiesTabs.forEach(function (t) {
          t.classList.remove('active');
          t.style.background = 'none';
          t.style.backgroundColor = '#ffffff';
          t.style.backgroundImage = 'none';
          t.style.color = '#000000';
          t.style.border = '1px solid #e0e0e0';
          t.style.borderRadius = '12px';
          t.style.padding = '12px';
          t.style.fontFamily = "'Be Vietnam Pro', sans-serif";
          t.style.fontWeight = '500';
          t.style.fontSize = '18px';
          t.style.lineHeight = '28px';
          t.style.letterSpacing = '0.15px';
          t.style.textDecoration = 'none';

          // Reset icon size and filter for inactive tabs
          const inactiveIcon = t.querySelector('img');
          if (inactiveIcon) {
            inactiveIcon.width = '28';
            inactiveIcon.height = '28';
            inactiveIcon.style.filter = 'brightness(0)';
          }
        });

        // Hide all tab panes first
        const allTabPanes = document.querySelectorAll('.tab-pane');
        allTabPanes.forEach(function (pane) {
          pane.classList.remove('show', 'active');
          pane.style.display = 'none';
        });

        // Show only the target tab pane
        const targetPaneId = event.target.getAttribute('data-bs-target');
        if (targetPaneId) {
          const targetPane = document.querySelector(targetPaneId);
          if (targetPane) {
            targetPane.classList.add('show', 'active');
            targetPane.style.display = 'block';
          }
        }

        // Set active tab style IMMEDIATELY, before tab is shown
        const targetTab = event.target;
        targetTab.classList.add('active');

        // Set color FIRST to prevent color flicker, then all other styles
        targetTab.style.color = '#FFFFFF';
        targetTab.style.background = 'linear-gradient(135deg, var(--s, #152D41) 0%, rgba(15, 35, 52, 0.95) 50%, var(--s, #152D41) 100%)';
        targetTab.style.backgroundColor = 'transparent';
        targetTab.style.border = 'none';
        targetTab.style.borderRadius = '12px';
        targetTab.style.padding = '12px';
        targetTab.style.fontFamily = "'Be Vietnam Pro', sans-serif";
        targetTab.style.fontWeight = '600';
        targetTab.style.fontSize = '18px';
        targetTab.style.lineHeight = '28px';
        targetTab.style.letterSpacing = '0.15px';
        targetTab.style.textDecoration = 'none';

        // Update icon size and filter for active tab (20x20px, bright)
        const activeIcon = targetTab.querySelector('img');
        if (activeIcon) {
          activeIcon.width = '20';
          activeIcon.height = '20';
          activeIcon.style.filter = 'brightness(0) invert(1)';
        }
      });

      // Remove underline on hover
      tab.addEventListener('mouseenter', function() {
        this.style.textDecoration = 'none';
      });

      tab.addEventListener('mouseleave', function() {
        this.style.textDecoration = 'none';
      });
    });
  }

  // Disabled auto scroll snap to fix Bug #21 - scroll jumping issue
  // Users can now scroll naturally without sections auto-snapping
  /*
  function setupAutoScrollSnap(sectionId) {
    const section = document.getElementById(sectionId);
    if (!section) {
      return;
    }

    let isSnapping = false;
    let releaseTimer;

    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting || isSnapping) {
            return;
          }

          const targetTop = section.getBoundingClientRect().top + window.pageYOffset;
          const distance = Math.abs(window.pageYOffset - targetTop);

          if (distance < 2) {
            return;
          }

          isSnapping = true;

          window.scrollTo({
            top: targetTop,
            behavior: 'smooth',
          });

          clearTimeout(releaseTimer);
          releaseTimer = setTimeout(function () {
            isSnapping = false;
          }, 800);
        });
      },
      {
        threshold: 0.3,
        rootMargin: '0px',
      }
    );

    observer.observe(section);
  }

  [
    'hero-slider',
    'content-container',
    'capabilities-section',
    'business-hero',
    'ai-section',
    'feater-section',
    'contact-section',
  ].forEach(setupAutoScrollSnap);
  */
});
