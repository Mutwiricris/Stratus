<script>
// Enhanced navbar scroll behavior with performance optimization
let ticking = false;
let lastScrollY = 0;

function updateNavbar() {
    const navbar = document.getElementById('navbar');
    const mobileMenu = document.getElementById('mobile-menu');
    const currentScrollY = window.scrollY;
    const scrolled = currentScrollY > 50;
    
    // Only update if scroll direction or state changed
    if (Math.abs(currentScrollY - lastScrollY) > 5) {
        if (scrolled) {
            navbar.classList.remove('navbar-transparent');
            navbar.classList.add('navbar-scrolled');
            if (mobileMenu) {
                mobileMenu.classList.add('scrolled');
            }
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.classList.add('navbar-transparent');
            if (mobileMenu) {
                mobileMenu.classList.remove('scrolled');
            }
        }
        lastScrollY = currentScrollY;
    }
    ticking = false;
}

function requestNavbarUpdate() {
    if (!ticking) {
        requestAnimationFrame(updateNavbar);
        ticking = true;
    }
}

window.addEventListener('scroll', requestNavbarUpdate, { passive: true });

// Enhanced mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    let isMenuOpen = false;
    
    function openMobileMenu() {
        if (isMenuOpen) return;
        
        isMenuOpen = true;
        mobileMenu.classList.add('open');
        mobileMenuOverlay.classList.add('open');
        document.body.style.overflow = 'hidden';
        
        // Update ARIA attributes
        mobileMenuBtn.setAttribute('aria-expanded', 'true');
        mobileMenu.setAttribute('aria-hidden', 'false');
        mobileMenuOverlay.setAttribute('aria-hidden', 'false');
        
        // Focus management
        mobileMenuClose.focus();
    }
    
    function closeMobileMenu() {
        if (!isMenuOpen) return;
        
        isMenuOpen = false;
        mobileMenu.classList.remove('open');
        mobileMenuOverlay.classList.remove('open');
        document.body.style.overflow = '';
        
        // Update ARIA attributes
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
        mobileMenu.setAttribute('aria-hidden', 'true');
        mobileMenuOverlay.setAttribute('aria-hidden', 'true');
        
        // Return focus to menu button
        mobileMenuBtn.focus();
    }
    
    // Event listeners
    if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMobileMenu);
    if (mobileMenuClose) mobileMenuClose.addEventListener('click', closeMobileMenu);
    if (mobileMenuOverlay) mobileMenuOverlay.addEventListener('click', closeMobileMenu);
    
    // Close mobile menu when clicking on navigation links
    if (mobileMenu) {
        const mobileLinks = mobileMenu.querySelectorAll('a[href^="/"], a[href^="#"]');
        mobileLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
    }
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && isMenuOpen) {
            closeMobileMenu();
        }
    });
    
    // Trap focus within mobile menu when open
    if (mobileMenu) {
        mobileMenu.addEventListener('keydown', function(e) {
            if (!isMenuOpen || e.key !== 'Tab') return;
            
            const focusableElements = mobileMenu.querySelectorAll(
                'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
            );
            const firstElement = focusableElements[0];
            const lastElement = focusableElements[focusableElements.length - 1];
            
            if (e.shiftKey && document.activeElement === firstElement) {
                e.preventDefault();
                lastElement.focus();
            } else if (!e.shiftKey && document.activeElement === lastElement) {
                e.preventDefault();
                firstElement.focus();
            }
        });
    }
});

// Smooth scrolling for anchor links with mobile menu integration
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                // Close mobile menu if open before scrolling
                const mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu && mobileMenu.classList.contains('open')) {
                    const event = new CustomEvent('closeMobileMenu');
                    document.dispatchEvent(event);
                    
                    // Delay scroll to allow menu close animation
                    setTimeout(() => {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 200);
                } else {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
});

// Enhanced Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const animationObserver = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

// Initialize animations on DOM load
document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll('.fade-in-up, .card-hover');
    animateElements.forEach((el, index) => {
        animationObserver.observe(el);
    });
});

// Performance optimization: Add loading states
window.addEventListener('load', function() {
    document.body.classList.add('loaded');
    
    // Preload critical images
    const criticalImages = document.querySelectorAll('img[src*="logo"], img[src*="hero"]');
    criticalImages.forEach(img => {
        if (!img.complete) {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });
        }
    });
});

// Listen for custom mobile menu close event
document.addEventListener('closeMobileMenu', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    
    if (mobileMenu && mobileMenu.classList.contains('open')) {
        mobileMenu.classList.remove('open');
        mobileMenuOverlay.classList.remove('open');
        document.body.style.overflow = '';
        
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
        mobileMenu.setAttribute('aria-hidden', 'true');
        mobileMenuOverlay.setAttribute('aria-hidden', 'true');
    }
});
</script>
