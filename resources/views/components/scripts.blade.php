<script>
// Enhanced functionality with modern features
document.addEventListener('DOMContentLoaded', function() {
    // Loading screen
    const loadingScreen = document.getElementById('loading-screen');
    if (loadingScreen) {
        setTimeout(() => {
            loadingScreen.style.opacity = '0';
            setTimeout(() => {
                loadingScreen.style.display = 'none';
            }, 1000);
        }, 1500);
    }
    
    // Mobile menu functionality
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const navbar = document.getElementById('navbar');
    
    // Toggle mobile menu
    function toggleMobileMenu() {
        mobileMenu.classList.toggle('open');
        mobileMenuOverlay.classList.toggle('open');
        document.body.classList.toggle('overflow-hidden');
        
        // Update aria-expanded
        const isOpen = mobileMenu.classList.contains('open');
        mobileMenuBtn.setAttribute('aria-expanded', isOpen);
    }
    
    // Event listeners
    mobileMenuBtn?.addEventListener('click', toggleMobileMenu);
    mobileMenuClose?.addEventListener('click', toggleMobileMenu);
    mobileMenuOverlay?.addEventListener('click', toggleMobileMenu);
    
    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
            toggleMobileMenu();
        }
    });
    
    // Enhanced navbar scroll effect
    let lastScrollY = window.scrollY;
    let ticking = false;
    
    function updateNavbar() {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
        
        // Show/hide scroll to top button
        const scrollToTop = document.getElementById('scroll-to-top');
        if (scrollToTop) {
            if (currentScrollY > 300) {
                scrollToTop.style.opacity = '1';
                scrollToTop.style.pointerEvents = 'auto';
            } else {
                scrollToTop.style.opacity = '0';
                scrollToTop.style.pointerEvents = 'none';
            }
        }
        
        lastScrollY = currentScrollY;
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateNavbar);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestTick, { passive: true });
    
    // Scroll to top functionality
    const scrollToTop = document.getElementById('scroll-to-top');
    if (scrollToTop) {
        scrollToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Enhanced Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe all animation elements
    const animationClasses = ['.fade-in-up', '.fade-in-scale', '.slide-in-left', '.slide-in-right'];
    animationClasses.forEach(className => {
        document.querySelectorAll(className).forEach(el => {
            observer.observe(el);
        });
    });
    
    // Cookie consent functionality
    const cookieModal = document.getElementById('cookie-modal');
    const cookieCustomizeModal = document.getElementById('cookie-customize-modal');
    const acceptCookies = document.getElementById('accept-cookies');
    const customizeCookies = document.getElementById('customize-cookies');
    const declineCookies = document.getElementById('decline-cookies');
    const closeCookieModal = document.getElementById('close-cookie-modal');
    const closeCustomizeModal = document.getElementById('close-customize-modal');
    const savePreferences = document.getElementById('save-preferences');
    const acceptAllCustomize = document.getElementById('accept-all-customize');
    
    // Check if cookies consent was already given
    function checkCookieConsent() {
        const consent = localStorage.getItem('cookie-consent');
        console.log('Cookie consent check:', consent);
        console.log('Cookie modal element:', cookieModal);
        if (!consent) {
            console.log('No consent found, showing modal in 2 seconds');
            setTimeout(() => {
                showCookieModal();
            }, 2000);
        }
    }
    
    function showCookieModal() {
        console.log('showCookieModal called');
        if (cookieModal) {
            console.log('Cookie modal found, showing...');
            cookieModal.style.display = 'flex';
            cookieModal.style.opacity = '0';
            setTimeout(() => {
                cookieModal.style.opacity = '1';
                const glassCard = cookieModal.querySelector('.glass-card');
                if (glassCard) {
                    glassCard.style.transform = 'translateY(0)';
                }
            }, 100);
        } else {
            console.error('Cookie modal element not found!');
        }
    }
    
    function hideCookieModal() {
        if (cookieModal) {
            cookieModal.style.opacity = '0';
            const glassCard = cookieModal.querySelector('.glass-card');
            if (glassCard) {
                glassCard.style.transform = 'translateY(100%)';
            }
            setTimeout(() => {
                cookieModal.style.display = 'none';
            }, 500);
        }
    }
    
    function showCustomizeModal() {
        if (cookieCustomizeModal) {
            cookieCustomizeModal.style.display = 'flex';
            setTimeout(() => {
                cookieCustomizeModal.style.opacity = '1';
                const glassCard = cookieCustomizeModal.querySelector('.glass-card');
                if (glassCard) {
                    glassCard.style.transform = 'scale(1)';
                }
            }, 100);
        }
    }
    
    function hideCustomizeModal() {
        if (cookieCustomizeModal) {
            cookieCustomizeModal.style.opacity = '0';
            const glassCard = cookieCustomizeModal.querySelector('.glass-card');
            if (glassCard) {
                glassCard.style.transform = 'scale(0.95)';
            }
            setTimeout(() => {
                cookieCustomizeModal.style.display = 'none';
            }, 300);
        }
    }
    
    // Cookie event listeners
    acceptCookies?.addEventListener('click', () => {
        localStorage.setItem('cookie-consent', JSON.stringify({
            essential: true,
            analytics: true,
            marketing: true,
            timestamp: Date.now()
        }));
        hideCookieModal();
    });
    
    customizeCookies?.addEventListener('click', () => {
        hideCookieModal();
        setTimeout(() => {
            showCustomizeModal();
        }, 500);
    });
    
    declineCookies?.addEventListener('click', () => {
        localStorage.setItem('cookie-consent', JSON.stringify({
            essential: true,
            analytics: false,
            marketing: false,
            timestamp: Date.now()
        }));
        hideCookieModal();
    });
    
    closeCookieModal?.addEventListener('click', hideCookieModal);
    closeCustomizeModal?.addEventListener('click', hideCustomizeModal);
    
    savePreferences?.addEventListener('click', () => {
        const analyticsToggle = document.getElementById('analytics-toggle');
        const marketingToggle = document.getElementById('marketing-toggle');
        
        localStorage.setItem('cookie-consent', JSON.stringify({
            essential: true,
            analytics: analyticsToggle?.checked || false,
            marketing: marketingToggle?.checked || false,
            timestamp: Date.now()
        }));
        hideCustomizeModal();
    });
    
    acceptAllCustomize?.addEventListener('click', () => {
        localStorage.setItem('cookie-consent', JSON.stringify({
            essential: true,
            analytics: true,
            marketing: true,
            timestamp: Date.now()
        }));
        hideCustomizeModal();
    });
    
    // Clear any existing consent for testing (remove this line in production)
    localStorage.removeItem('cookie-consent');
    
    // Initialize cookie consent check
    checkCookieConsent();
    
    // Manual trigger for testing - show modal immediately
    setTimeout(() => {
        console.log('Manual trigger - forcing modal display');
        showCookieModal();
    }, 1000);
    
    // Counter Animation
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // The lower the slower
        
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    }
    
    // Trigger counter animation when statistics section is in view
    const statsSection = document.querySelector('.counter');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });
        observer.observe(statsSection);
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add loading states to buttons
    document.querySelectorAll('button[type="submit"], .btn-submit').forEach(button => {
        button.addEventListener('click', function() {
            if (!this.disabled) {
                const originalText = this.innerHTML;
                this.innerHTML = '<div class="loading-spinner inline-block mr-2"></div>Loading...';
                this.disabled = true;
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.disabled = false;
                }, 3000);
            }
        });
    });
});
</script>
