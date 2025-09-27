document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbar');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const hamburgerLines = document.querySelectorAll('.hamburger-line');
    let isMenuOpen = false;

    // Ensure elements are properly initialized
    if (!mobileMenuBtn || !mobileMenu || !mobileMenuOverlay) {
        console.error('Mobile menu elements not found');
        return;
    }

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
    function toggleMobileMenu(e) {
        if (e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        isMenuOpen = !isMenuOpen;
        console.log('Toggling menu, isOpen:', isMenuOpen);
        
        // Toggle menu visibility
        if (isMenuOpen) {
            // Show menu
            mobileMenu.style.transform = 'translateX(0)';
            mobileMenu.style.opacity = '1';
            mobileMenu.style.visibility = 'visible';
            mobileMenu.style.pointerEvents = 'auto';
            
            // Show overlay
            mobileMenuOverlay.style.opacity = '1';
            mobileMenuOverlay.style.visibility = 'visible';
            mobileMenuOverlay.style.pointerEvents = 'auto';
            
            document.body.style.overflow = 'hidden';
        } else {
            // Hide menu
            mobileMenu.style.transform = 'translateX(100%)';
            mobileMenu.style.opacity = '0';
            mobileMenu.style.visibility = 'hidden';
            mobileMenu.style.pointerEvents = 'none';
            
            // Hide overlay
            mobileMenuOverlay.style.opacity = '0';
            mobileMenuOverlay.style.visibility = 'hidden';
            mobileMenuOverlay.style.pointerEvents = 'none';
            
            document.body.style.overflow = '';
        }
        
        // Animate hamburger
        animateHamburger(isMenuOpen);
        
        // Update button aria-expanded
        mobileMenuBtn.setAttribute('aria-expanded', isMenuOpen);
    }

    // Close menu when clicking on menu links
    function closeMobileMenu() {
        if (isMenuOpen) {
            toggleMobileMenu();
        }
    }

    // Event listeners
    window.addEventListener('scroll', handleScroll);
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function(e) {
            console.log('Mobile menu button clicked');
            toggleMobileMenu(e);
        });
        
        // Also add touch event for mobile
        mobileMenuBtn.addEventListener('touchstart', function(e) {
            console.log('Mobile menu button touched');
            toggleMobileMenu(e);
        });
    }
    
    if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener('click', function(e) {
            console.log('Overlay clicked');
            toggleMobileMenu(e);
        });
    }
    
    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', function(e) {
            console.log('Close button clicked');
            toggleMobileMenu(e);
        });
    }

    // Close menu when clicking on menu links
    if (mobileMenu) {
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
    }

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
