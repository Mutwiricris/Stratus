<!-- Welcome Modal - First Time Visitor Captivation -->
<div id="welcome-modal" class="fixed inset-0 z-[9999] flex items-center justify-center p-2 sm:p-4 bg-black/60 backdrop-blur-sm opacity-0 invisible transition-all duration-500" style="pointer-events: none;">
  <div class="relative w-full max-w-xs sm:max-w-md md:max-w-2xl lg:max-w-4xl xl:max-w-5xl bg-white rounded-2xl sm:rounded-3xl shadow-2xl transform scale-95 transition-all duration-500 overflow-hidden max-h-[95vh] overflow-y-auto">
    <!-- Close Button -->
    <button id="close-welcome-modal" class="absolute top-2 right-2 sm:top-4 sm:right-4 z-10 w-8 h-8 sm:w-10 sm:h-10 bg-white/90 hover:bg-white rounded-full flex items-center justify-center text-gray-600 hover:text-gray-800 transition-all duration-200 shadow-lg">
      <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>

    <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[400px] sm:min-h-[500px] lg:min-h-[600px]">
      <!-- Left Side - Hero Image -->
      <div class="relative overflow-hidden bg-gradient-to-br from-teal-600 via-cyan-600 to-blue-600">
        <div class="absolute inset-0">
          <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=1920&q=80" 
               alt="African technology professionals developing innovative solutions" 
               class="w-full h-full object-cover opacity-90">
          <div class="absolute inset-0 bg-gradient-to-br from-teal-600/80 via-cyan-600/70 to-blue-600/80"></div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-4 left-4 sm:top-6 sm:left-6 lg:top-8 lg:left-8 bg-white/20 backdrop-blur-sm rounded-xl lg:rounded-2xl p-2 sm:p-3 lg:p-4 text-white">
          <div class="text-lg sm:text-xl lg:text-2xl font-bold">50+</div>
          <div class="text-xs sm:text-sm opacity-90">Projects Delivered</div>
        </div>
        
        <div class="absolute bottom-4 right-4 sm:bottom-6 sm:right-6 lg:bottom-8 lg:right-8 bg-white/20 backdrop-blur-sm rounded-xl lg:rounded-2xl p-2 sm:p-3 lg:p-4 text-white">
          <div class="text-lg sm:text-xl lg:text-2xl font-bold">98%</div>
          <div class="text-xs sm:text-sm opacity-90">Client Satisfaction</div>
        </div>
        
        <!-- Decorative Elements - Hidden on small screens -->
        <div class="hidden md:block absolute top-1/4 right-4 w-24 h-24 lg:w-32 lg:h-32 bg-white/10 rounded-full blur-2xl"></div>
        <div class="hidden md:block absolute bottom-1/4 left-4 w-16 h-16 lg:w-24 lg:h-24 bg-cyan-300/20 rounded-full blur-xl"></div>
      </div>

      <!-- Right Side - Content -->
      <div class="p-4 sm:p-6 md:p-8 lg:p-12 flex flex-col justify-center order-first lg:order-last">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 text-teal-600 font-semibold text-xs sm:text-sm uppercase tracking-wide mb-4 sm:mb-6 bg-teal-50 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full w-fit">
          <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-teal-500 rounded-full animate-pulse"></div>
          Welcome to Ascend Stratus
        </div>

        <!-- Headline -->
        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-4 sm:mb-6 leading-tight">
          Transform Your Business with 
          <span class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">
            Cutting-Edge Technology
          </span>
        </h2>

        <!-- Value Proposition -->
        <p class="text-sm sm:text-base lg:text-lg text-gray-600 mb-6 sm:mb-8 leading-relaxed">
          Join <strong>50+ successful bussiness Projects</strong> across kenya who have revolutionized their operations with our enterprise software, fintech solutions, and mobile applications.
        </p>

        <!-- Key Benefits -->
        <div class="space-y-3 sm:space-y-4 mb-6 sm:mb-8">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-5 h-5 sm:w-6 sm:h-6 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
              <svg class="w-2.5 h-2.5 sm:w-3 sm:h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
            </div>
            <span class="text-sm sm:text-base text-gray-700 font-medium">Custom enterprise software solutions</span>
          </div>
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-5 h-5 sm:w-6 sm:h-6 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
              <svg class="w-2.5 h-2.5 sm:w-3 sm:h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
            </div>
            <span class="text-sm sm:text-base text-gray-700 font-medium">Fintech & payment processing platforms</span>
          </div>
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-5 h-5 sm:w-6 sm:h-6 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full flex items-center justify-center flex-shrink-0">
              <svg class="w-2.5 h-2.5 sm:w-3 sm:h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
            </div>
            <span class="text-sm sm:text-base text-gray-700 font-medium">Mobile apps designed for African markets</span>
          </div>
        </div>

        <!-- Call-to-Action Buttons -->
        <div class="flex flex-col gap-3 sm:gap-4">
          <!-- Primary CTA -->
          <button id="get-free-consultation" class="group relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-4 sm:px-6 md:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl text-sm sm:text-base font-semibold hover:shadow-2xl hover:shadow-teal-500/25 transition-all duration-300 hover:scale-105 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-teal-700 via-cyan-700 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <span class="relative flex items-center justify-center gap-2">
              Get Free Consultation
              <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </span>
          </button>
          
          <!-- Secondary CTAs -->
          <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
            <a href="tel:+254110407501" id="call-now-btn" class="group bg-gradient-to-r from-green-600 to-emerald-600 text-white px-4 sm:px-6 py-2.5 sm:py-3 rounded-lg sm:rounded-xl text-sm sm:text-base font-semibold hover:shadow-xl hover:shadow-green-500/25 transition-all duration-300 hover:scale-105 flex-1">
              <span class="flex items-center justify-center gap-2">
                <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                <span class="hidden xs:inline">Call </span>0110407501
              </span>
            </a>
            
            <button id="view-our-work" class="group border-2 border-gray-300 text-gray-700 px-4 sm:px-6 py-2.5 sm:py-3 rounded-lg sm:rounded-xl text-sm sm:text-base font-semibold hover:border-teal-600 hover:text-teal-600 hover:bg-teal-50 transition-all duration-300 flex-1">
              <span class="flex items-center justify-center gap-2">
                <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>
                View Work
              </span>
            </button>
          </div>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-6 sm:mt-8 pt-4 sm:pt-6 border-t border-gray-200">
          <p class="text-xs sm:text-sm text-gray-500 mb-3 sm:mb-4">Trusted by leading companies across Kenya:</p>
          <div class="flex flex-wrap items-center gap-2 sm:gap-3 lg:gap-4 opacity-60">
            <div class="text-xs font-semibold text-gray-400 bg-gray-100 px-2 sm:px-3 py-1 sm:py-2 rounded-lg">FINTECH</div>
            <div class="text-xs font-semibold text-gray-400 bg-gray-100 px-2 sm:px-3 py-1 sm:py-2 rounded-lg">LOGISTICS</div>
            <div class="text-xs font-semibold text-gray-400 bg-gray-100 px-2 sm:px-3 py-1 sm:py-2 rounded-lg">AGRICULTURE</div>
            <div class="text-xs font-semibold text-gray-400 bg-gray-100 px-2 sm:px-3 py-1 sm:py-2 rounded-lg">RETAIL</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('welcome-modal');
  const closeBtn = document.getElementById('close-welcome-modal');
  const getConsultationBtn = document.getElementById('get-free-consultation');
  const viewWorkBtn = document.getElementById('view-our-work');
  const callNowBtn = document.getElementById('call-now-btn');
  
  // Advanced modal trigger system
  const hasSeenModal = localStorage.getItem('ascend-stratus-welcome-modal-seen');
  const lastVisit = localStorage.getItem('ascend-stratus-last-visit');
  const sessionStart = sessionStorage.getItem('ascend-stratus-session-start');
  const isHomepage = window.location.pathname === '/' || window.location.pathname === '';
  
  // Set session start time if not exists
  if (!sessionStart) {
    sessionStorage.setItem('ascend-stratus-session-start', Date.now().toString());
  }
  
  // Check cooldown period
  const cooldownEnd = localStorage.getItem('ascend-stratus-modal-cooldown');
  const isInCooldown = cooldownEnd && Date.now() < parseInt(cooldownEnd);
  
  // Check if user should see modal
  const shouldShowModal = isHomepage && !isInCooldown && (
    // First-time visitor (never seen modal)
    !hasSeenModal ||
    // Returning visitor after 7 days
    (hasSeenModal && lastVisit && (Date.now() - parseInt(lastVisit)) > 7 * 24 * 60 * 60 * 1000) ||
    // Long session (30+ minutes) - re-engagement
    (sessionStart && (Date.now() - parseInt(sessionStart)) > 30 * 60 * 1000 && !sessionStorage.getItem('ascend-stratus-session-modal-shown'))
  );
  
  if (shouldShowModal) {
    // Determine delay based on visitor type
    let delay = 2000; // Default for first-time visitors
    
    if (hasSeenModal && lastVisit) {
      // Returning visitor - show after 5 seconds
      delay = 5000;
    } else if (sessionStart && (Date.now() - parseInt(sessionStart)) > 30 * 60 * 1000) {
      // Long session - show after 3 seconds
      delay = 3000;
      sessionStorage.setItem('ascend-stratus-session-modal-shown', 'true');
    }
    
    setTimeout(() => {
      showModal();
    }, delay);
  }
  
  // Update last visit timestamp
  localStorage.setItem('ascend-stratus-last-visit', Date.now().toString());
  
  function showModal() {
    modal.style.pointerEvents = 'auto';
    modal.classList.remove('opacity-0', 'invisible');
    modal.querySelector('.relative').classList.remove('scale-95');
    modal.querySelector('.relative').classList.add('scale-100');
    document.body.style.overflow = 'hidden';
  }
  
  function hideModal(userEngaged = false) {
    modal.classList.add('opacity-0', 'invisible');
    modal.querySelector('.relative').classList.add('scale-95');
    modal.querySelector('.relative').classList.remove('scale-100');
    document.body.style.overflow = 'auto';
    
    // Mark modal as seen
    localStorage.setItem('ascend-stratus-welcome-modal-seen', 'true');
    
    // If user engaged (clicked CTA), set longer cooldown
    if (userEngaged) {
      localStorage.setItem('ascend-stratus-modal-cooldown', (Date.now() + 14 * 24 * 60 * 60 * 1000).toString()); // 14 days
    }
    
    setTimeout(() => {
      modal.style.pointerEvents = 'none';
    }, 500);
  }
  
  // Close modal events
  closeBtn.addEventListener('click', hideModal);
  
  modal.addEventListener('click', function(e) {
    if (e.target === modal) {
      hideModal();
    }
  });
  
  // Escape key to close
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && !modal.classList.contains('invisible')) {
      hideModal();
    }
  });
  
  // CTA Button Actions - These mark modal as seen with engagement
  getConsultationBtn.addEventListener('click', function() {
    hideModal(true); // User engaged - longer cooldown
    // Scroll to contact section or open contact widget
    setTimeout(() => {
      const contactWidget = document.querySelector('[data-contact-widget]');
      if (contactWidget) {
        const toggleBtn = contactWidget.querySelector('#contact-widget-toggle');
        if (toggleBtn) {
          toggleBtn.click();
        }
      } else {
        window.location.href = '/contact';
      }
    }, 300);
  });
  
  viewWorkBtn.addEventListener('click', function() {
    hideModal(true); // User engaged - longer cooldown
    // Navigate to portfolio
    setTimeout(() => {
      window.location.href = '/portfolio';
    }, 300);
  });
  
  // Call Now Button - Track engagement but don't redirect (tel: link handles the call)
  callNowBtn.addEventListener('click', function() {
    hideModal(true); // User engaged - longer cooldown
    // The tel: link will automatically trigger the phone call
  });
});
</script>

<style>
/* Modal Animation Styles */
#welcome-modal .relative {
  animation: modalSlideIn 0.5s ease-out forwards;
}

@keyframes modalSlideIn {
  from {
    transform: scale(0.95) translateY(20px);
    opacity: 0;
  }
  to {
    transform: scale(1) translateY(0);
    opacity: 1;
  }
}

/* Floating animation for decorative elements */
@keyframes float {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-10px);
  }
}

#welcome-modal .absolute.top-8,
#welcome-modal .absolute.bottom-8 {
  animation: float 3s ease-in-out infinite;
}

#welcome-modal .absolute.bottom-8 {
  animation-delay: 1.5s;
}

/* Pulse animation for the badge dot */
@keyframes pulse {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.5;
  }
}

/* Gradient animation for the headline */
.bg-clip-text {
  background-size: 200% 200%;
  animation: gradientShift 3s ease infinite;
}

@keyframes gradientShift {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

/* Button hover effects */
#get-free-consultation:hover {
  box-shadow: 0 20px 40px rgba(20, 184, 166, 0.3);
}

#view-our-work:hover {
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}
</style>
