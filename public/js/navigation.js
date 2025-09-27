document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbar');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const hamburgerLines = document.querySelectorAll('.hamburger-line');
    let isMenuOpen = false;

    // Dynamic navbar styling on scroll
    function handleScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.backdropFilter = 'blur(20px)';
            navbar.style.borderBottom = '1px solid rgba(20, 184, 166, 0.2)';
            navbar.style.boxShadow = '0 8px 32px rgba(20, 184, 166, 0.15), 0 4px 16px rgba(0, 0, 0, 0.1)';
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.style.background = 'rgba(255, 255, 255, 0.8)';
            navbar.style.backdropFilter = 'blur(12px)';
            navbar.style.borderBottom = '1px solid rgba(255, 255, 255, 0.2)';
            navbar.style.boxShadow = 'none';
        }
    }

    // Hamburger animation
    function animateHamburger(open) {
        if (open) {
            hamburgerLines[0].style.transform = 'rotate(45deg) translate(6px, 6px)';
            hamburgerLines[1].style.opacity = '0';
            hamburgerLines[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
        } else {
            hamburgerLines[0].style.transform = 'none';
            hamburgerLines[1].style.opacity = '1';
            hamburgerLines[2].style.transform = 'none';
        }
    }

    // Mobile menu toggle with improved animations
    function toggleMobileMenu() {
        isMenuOpen = !isMenuOpen;
        
        // Toggle menu visibility
        mobileMenu.classList.toggle('open');
        mobileMenuOverlay.classList.toggle('open');
        
        // Animate hamburger
        animateHamburger(isMenuOpen);
        
        // Update button aria-expanded
        mobileMenuBtn.setAttribute('aria-expanded', isMenuOpen);
        
        // Prevent body scroll when menu is open
        if (isMenuOpen) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    }

    // Close menu when clicking on menu links
    function closeMobileMenu() {
        if (isMenuOpen) {
            toggleMobileMenu();
        }
    }

    // Event listeners
    window.addEventListener('scroll', handleScroll);
    mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    mobileMenuOverlay.addEventListener('click', toggleMobileMenu);
    mobileMenuClose.addEventListener('click', toggleMobileMenu);

    // Close menu when clicking on menu links
    const mobileMenuLinks = mobileMenu.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });

    // Handle escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && isMenuOpen) {
            toggleMobileMenu();
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024 && isMenuOpen) {
            toggleMobileMenu();
        }
    });

    // Initial check
    handleScroll();
});
