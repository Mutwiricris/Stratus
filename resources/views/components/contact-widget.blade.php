<div id="contact-widget" class="fixed z-50 bottom-6 right-6" data-contact-widget>
    <!-- Floating Button -->
    <button id="contact-widget-toggle" aria-label="Contact us"
            class="h-14 w-14 rounded-full shadow-lg bg-cyan-800 hover:bg-cyan-500 text-white flex items-center justify-center transition">
        <!-- Chat icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a4 4 0 0 1-4 4H7l-4 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/>
        </svg>
    </button>

    <!-- Panel -->
    <div id="contact-widget-panel" class="hidden w-[320px] sm:w-[360px] bg-white rounded-2xl shadow-2xl overflow-hidden mt-3">
        <!-- Header -->
        <div class="bg-cyan-800 text-white px-4 py-3 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="h-8 w-8 rounded-full bg-white/15 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a4 4 0 0 1-4 4H7l-4 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-sm leading-tight opacity-90">Ascend Stratus</p>
                    <p class="text-xs leading-tight opacity-80">How can we help?</p>
                </div>
            </div>
            <button id="contact-widget-close" aria-label="Close" class="p-1 rounded hover:bg-white/10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>

        <!-- Tabs -->
        <div class="px-4 pt-3">
            <div class="flex bg-neutral-100 rounded-lg p-1 text-xs">
                <button data-tab="chat" class="tab-btn flex-1 px-2 py-2 rounded-md font-medium bg-white shadow text-center">Chat</button>
                <button data-tab="message" class="tab-btn flex-1 px-2 py-2 rounded-md font-medium text-neutral-700 text-center">Message</button>
                <button data-tab="call" class="tab-btn flex-1 px-2 py-2 rounded-md font-medium text-neutral-700 text-center">Call</button>
            </div>
        </div>

        <!-- Content -->
        <div class="p-4 space-y-4">
            <!-- Chat tab with conversation -->
            <div id="contact-tab-chat" class="flex flex-col h-80">
                <!-- Chat header info -->
                <div class="text-xs text-neutral-500 text-center py-2 border-b border-neutral-100">
                    This chat is recorded and is subject to our Privacy Policy
                </div>
                
                <!-- Chat messages area -->
                <div id="chat-messages" class="flex-1 overflow-y-auto p-3 space-y-3 bg-neutral-50">
                    <!-- Initial bot message -->
                    <div class="flex items-start gap-2">
                        <div class="w-7 h-7 rounded-full bg-cyan-800 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">AS</div>
                        <div class="flex-1">
                            <div class="text-xs text-neutral-600 mb-1">Stratus () • <span class="chat-time">3:16 PM</span></div>
                            <div class="bg-white rounded-lg p-3 shadow-sm text-sm text-neutral-800">
                                Hi there, I'm Stratus, your Ascend Stratus . I'm here to help you transform your business.
                                <br><br>
                                Ask me a question, choose an option below, or connect directly with our sales team.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick action buttons -->
                    <div class="flex flex-col gap-2 px-9">
                        <button class="chat-option bg-white border border-neutral-200 rounded-lg px-3 py-2 text-sm text-left hover:bg-neutral-50 transition-colors" data-option="services">
                            💼 What services do you offer?
                        </button>
                        <button class="chat-option bg-white border border-neutral-200 rounded-lg px-3 py-2 text-sm text-left hover:bg-neutral-50 transition-colors" data-option="pricing">
                            💰 What are your pricing models?
                        </button>
                        <button class="chat-option bg-white border border-neutral-200 rounded-lg px-3 py-2 text-sm text-left hover:bg-neutral-50 transition-colors" data-option="timeline">
                            ⏱️ How long does a project take?
                        </button>
                        <button class="chat-option bg-white border border-neutral-200 rounded-lg px-3 py-2 text-sm text-left hover:bg-neutral-50 transition-colors" data-option="tech">
                            🔧 What technologies do you use?
                        </button>
                    </div>
                    
                    <!-- Connect with sales button -->
                    <div class="px-9">
                        <button id="connect-sales" class="w-full bg-neutral-800 hover:bg-neutral-900 text-white rounded-full px-4 py-2 text-sm font-medium transition-colors">
                            Connect with sales
                        </button>
                    </div>
                </div>
                
                <!-- Chat input -->
                <div class="border-t border-neutral-200 p-3 bg-white">
                    <div class="flex items-center gap-2">
                        <button class="p-2 text-neutral-400 hover:text-neutral-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>
                            </svg>
                        </button>
                        <input 
                            id="chat-input" 
                            type="text" 
                            placeholder="Type a message" 
                            class="flex-1 border border-neutral-300 rounded-full px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800 focus:border-transparent"
                        >
                        <button id="send-chat" class="p-2 text-cyan-800 hover:text-cyan-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="text-xs text-neutral-400 text-center mt-2">Built with Ascend Stratus</div>
                </div>
            </div>

            <!-- Message form -->
            <form id="contact-form-message" class="space-y-3 hidden" autocomplete="on">
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Name</label>
                    <input name="name" required type="text" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Email</label>
                    <input name="email" required type="email" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Message</label>
                    <textarea name="message" required rows="4" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800"></textarea>
                </div>
                <button type="submit" class="w-full bg-cyan-800 hover:bg-cyan-500 text-white rounded-lg px-4 py-2 text-sm font-semibold">Send Message</button>
            </form>

            <!-- Call form -->
            <form id="contact-form-call" class="space-y-3 hidden" autocomplete="on">
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Name</label>
                    <input name="name" required type="text" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Phone Number</label>
                    <input name="phone" required type="tel" placeholder="e.g. +254700000000" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Preferred time (optional)</label>
                    <input name="time" type="text" placeholder="e.g. Weekdays 9am-5pm EAT" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <button type="submit" class="w-full bg-cyan-800 hover:bg-cyan-500 text-white rounded-lg px-4 py-2 text-sm font-semibold">Request a Call</button>
            </form>
            <!-- //call button -->


            <!-- Status -->
            <div id="contact-widget-status" class="hidden text-sm"></div>
        </div>

        <div class="px-4 pb-4 text-[11px] text-neutral-500">
            We typically respond within a few hours. Your info is kept private.
        </div>
    </div>

    <!-- Toast -->
    <div id="contact-toast" class="hidden fixed bottom-24 right-6 bg-neutral-900 text-white text-sm px-4 py-2 rounded-md shadow-lg">Sent successfully</div>
</div>

<script>
(function(){
  const $ = (s, root=document) => root.querySelector(s);
  const $$ = (s, root=document) => Array.from(root.querySelectorAll(s));
  const panel = $('#contact-widget-panel');
  const toggleBtn = $('#contact-widget-toggle');
  const closeBtn = $('#contact-widget-close');
  const statusBox = $('#contact-widget-status');
  const toast = $('#contact-toast');
  const csrf = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
  
  // Debug: Check if CSRF token is available
  if (!csrf) {
    console.error('CSRF token not found! Make sure <meta name="csrf-token" content="{{ csrf_token() }}"> is in the page head.');
  } else {
    console.log('CSRF token loaded successfully');
  }

  function openPanel(){ panel.classList.remove('hidden'); }
  function closePanel(){ panel.classList.add('hidden'); }
  toggleBtn.addEventListener('click', openPanel);
  closeBtn.addEventListener('click', closePanel);

  // Tabs
  $$('.tab-btn').forEach(btn => btn.addEventListener('click', () => {
    $$('.tab-btn').forEach(b=>{ b.classList.remove('bg-white','shadow'); b.classList.add('text-neutral-700'); });
    btn.classList.add('bg-white','shadow'); btn.classList.remove('text-neutral-700');
    const tab = btn.getAttribute('data-tab');
    $('#contact-tab-chat').classList.toggle('hidden', tab !== 'chat');
    $('#contact-form-message').classList.toggle('hidden', tab !== 'message');
    $('#contact-form-call').classList.toggle('hidden', tab !== 'call');
    statusBox.classList.add('hidden');
  }));

  // Chat functionality
  const chatMessages = $('#chat-messages');
  const chatInput = $('#chat-input');
  const sendBtn = $('#send-chat');
  
  // Update chat time
  function updateChatTime() {
    const now = new Date();
    const time = now.toLocaleTimeString('en-US', { 
      hour: 'numeric', 
      minute: '2-digit', 
      hour12: true 
    });
    $('.chat-time').textContent = time;
  }
  updateChatTime();

  // Chat option responses
  const responses = {
    services: "We provide enterprise software development, fintech solutions, mobile app development, and digital transformation services across Africa. Our solutions include M-Pesa integration, custom CRM systems, and cloud-native applications.",
    pricing: "We offer flexible pricing: Fixed-price projects, hourly rates ($50-150/hr), and dedicated team models. Contact us for a custom quote based on your specific needs.",
    timeline: "Project timelines vary: Mobile apps (2-4 months), Web applications (1-3 months), Enterprise software (3-8 months). We'll provide a detailed timeline after understanding your requirements.",
    tech: "Laravel/PHP, React/Vue.js, React Native/Flutter, Node.js, Python, AWS/Azure cloud services, and modern DevOps practices. We choose the best tech stack for each project."
  };

  // Add bot message
  function addBotMessage(text) {
    const time = new Date().toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit', hour12: true });
    const messageDiv = document.createElement('div');
    messageDiv.className = 'flex items-start gap-2';
    messageDiv.innerHTML = `
      <div class="w-7 h-7 rounded-full bg-cyan-800 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">AS</div>
      <div class="flex-1">
        <div class="text-xs text-neutral-600 mb-1">Stratus () • ${time}</div>
        <div class="bg-white rounded-lg p-3 shadow-sm text-sm text-neutral-800">${text}</div>
      </div>
    `;
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  // Add user message
  function addUserMessage(text) {
    const time = new Date().toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit', hour12: true });
    const messageDiv = document.createElement('div');
    messageDiv.className = 'flex items-start gap-2 justify-end';
    messageDiv.innerHTML = `
      <div class="flex-1 flex justify-end">
        <div class="max-w-xs">
          <div class="text-xs text-neutral-600 mb-1 text-right">${time}</div>
          <div class="bg-cyan-800 text-white rounded-lg p-3 shadow-sm text-sm">${text}</div>
        </div>
      </div>
    `;
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  // Handle chat options
  $$('.chat-option').forEach(btn => {
    btn.addEventListener('click', () => {
      const option = btn.getAttribute('data-option');
      const question = btn.textContent.trim();
      
      // Add user message
      addUserMessage(question);
      
      // Remove option buttons
      btn.parentElement.style.display = 'none';
      
      // Add bot response after delay
      setTimeout(() => {
        addBotMessage(responses[option]);
        
        // Add follow-up options
        setTimeout(() => {
          const followUp = document.createElement('div');
          followUp.className = 'px-9';
          followUp.innerHTML = `
            <div class="flex gap-2">
              <button class="follow-up-btn bg-white border border-neutral-200 rounded-full px-3 py-1 text-xs hover:bg-neutral-50" data-action="more">Ask another question</button>
              <button class="follow-up-btn bg-white border border-neutral-200 rounded-full px-3 py-1 text-xs hover:bg-neutral-50" data-action="contact">Contact sales</button>
            </div>
          `;
          chatMessages.appendChild(followUp);
          chatMessages.scrollTop = chatMessages.scrollHeight;
          
          // Handle follow-up actions
          followUp.querySelectorAll('.follow-up-btn').forEach(btn => {
            btn.addEventListener('click', () => {
              if (btn.getAttribute('data-action') === 'contact') {
                switchToMessageTab();
              }
              followUp.remove();
            });
          });
        }, 1000);
      }, 1500);
    });
  });

  // Connect with sales
  $('#connect-sales').addEventListener('click', switchToMessageTab);

  function switchToMessageTab() {
    $$('.tab-btn').forEach(b=>{ b.classList.remove('bg-white','shadow'); b.classList.add('text-neutral-700'); });
    $$('.tab-btn')[1].classList.add('bg-white','shadow'); 
    $$('.tab-btn')[1].classList.remove('text-neutral-700');
    $('#contact-tab-chat').classList.add('hidden');
    $('#contact-form-message').classList.remove('hidden');
    $('#contact-form-call').classList.add('hidden');
  }

  // Send chat message
  function sendChatMessage() {
    const message = chatInput.value.trim();
    if (!message) return;
    
    addUserMessage(message);
    chatInput.value = '';
    
    // Simple bot response
    setTimeout(() => {
      addBotMessage("Thanks for your message! For detailed assistance, I'll connect you with our sales team. Please use the Message tab to provide your contact details.");
      setTimeout(() => {
        const contactDiv = document.createElement('div');
        contactDiv.className = 'px-9';
        contactDiv.innerHTML = `
          <button class="contact-sales-btn w-full bg-cyan-800 hover:bg-cyan-500 text-white rounded-full px-4 py-2 text-sm font-medium transition-colors">
            Contact Sales Team
          </button>
        `;
        chatMessages.appendChild(contactDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        
        contactDiv.querySelector('.contact-sales-btn').addEventListener('click', switchToMessageTab);
      }, 1000);
    }, 1500);
  }

  sendBtn.addEventListener('click', sendChatMessage);
  chatInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
      sendChatMessage();
    }
  });

  function showStatus(type, text){
    statusBox.className = '';
    statusBox.classList.add('text-sm','px-3','py-2','rounded-md');
    if(type==='error') { statusBox.classList.add('bg-red-50','text-red-700','border','border-red-200'); }
    else { statusBox.classList.add('bg-emerald-50','text-emerald-700','border','border-emerald-200'); }
    statusBox.textContent = text;
    statusBox.classList.remove('hidden');
  }
  function showToast(text){
    toast.textContent = text;
    toast.classList.remove('hidden');
    setTimeout(()=> toast.classList.add('hidden'), 2500);
  }

  function showEnhancedToast(toastData) {
    const { type, title, message, duration = 4000 } = toastData;
    
    // Update toast styling based on type
    toast.className = 'fixed bottom-24 right-6 px-4 py-3 rounded-lg shadow-lg text-white text-sm max-w-sm';
    
    if (type === 'success') {
      toast.classList.add('bg-emerald-600');
    } else if (type === 'error') {
      toast.classList.add('bg-red-600');
    } else if (type === 'warning') {
      toast.classList.add('bg-amber-600');
    } else {
      toast.classList.add('bg-blue-600');
    }
    
    // Set content with title if provided
    if (title) {
      toast.innerHTML = `<div class="font-semibold">${title}</div><div class="text-sm opacity-90">${message}</div>`;
    } else {
      toast.textContent = message;
    }
    
    toast.classList.remove('hidden');
    setTimeout(() => toast.classList.add('hidden'), duration);
  }

  // Enhanced form submissions with comprehensive error handling
  $('#contact-form-message').addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const submitBtn = e.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    // Show loading state
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    statusBox.classList.add('hidden');
    
    try {
      if (!csrf) {
        throw new Error('CSRF token not available. Please refresh the page.');
      }
      
      const response = await fetch('/contact/message', {
        method: 'POST',
        body: formData,
        headers: { 'X-CSRF-TOKEN': csrf }
      });
      
      const result = await response.json();
      
      if (response.ok && result.success) {
        showStatus('success', result.message || 'Message sent successfully!');
        e.target.reset();
        
        // Show enhanced toast if available
        if (result.toast) {
          showEnhancedToast(result.toast);
        } else {
          showToast('✅ ' + (result.message || 'Thank you! We\'ll get back to you soon.'));
        }
        
        // Log success for debugging
        console.log('Message sent successfully:', result.submission_id);
        
        // Auto-close widget after success
        setTimeout(() => {
          closePanel();
        }, 3000);
        
      } else if (response.status === 422) {
        // Validation errors
        const errorMessages = Object.values(result.errors || {}).flat();
        showStatus('error', errorMessages.join(', ') || 'Please check your input.');
        
        if (result.toast) {
          showEnhancedToast(result.toast);
        } else {
          showToast('❌ Please fix the form errors and try again.');
        }
        
      } else {
        // Server errors but message might still be received
        showStatus('error', result.message || 'Failed to send message. Please try again.');
        
        if (result.toast) {
          showEnhancedToast(result.toast);
        } else {
          showToast('⚠️ ' + (result.message || 'There was an issue, but we may have received your message.'));
        }
      }
      
    } catch (error) {
      console.error('Network error:', error);
      showStatus('error', 'Network error. Please check your connection and try again.');
      showToast('❌ Network error. Please try again.');
    } finally {
      // Reset button state
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
    }
  });

  $('#contact-form-call').addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const submitBtn = e.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    // Show loading state
    submitBtn.textContent = 'Submitting...';
    submitBtn.disabled = true;
    statusBox.classList.add('hidden');
    
    try {
      if (!csrf) {
        throw new Error('CSRF token not available. Please refresh the page.');
      }
      
      const response = await fetch('/contact/call', {
        method: 'POST',
        body: formData,
        headers: { 'X-CSRF-TOKEN': csrf }
      });
      
      const result = await response.json();
      
      if (response.ok && result.success) {
        showStatus('success', result.message || 'Call request submitted!');
        e.target.reset();
        
        // Show enhanced toast if available
        if (result.toast) {
          showEnhancedToast(result.toast);
        } else {
          showToast('✅ ' + (result.message || 'Thank you! We\'ll call you soon.'));
        }
        
        // Log success for debugging
        console.log('Call request sent successfully:', result.submission_id);
        
        // Auto-close widget after success
        setTimeout(() => {
          closePanel();
        }, 3000);
        
      } else if (response.status === 422) {
        // Validation errors
        const errorMessages = Object.values(result.errors || {}).flat();
        showStatus('error', errorMessages.join(', ') || 'Please check your input.');
        
        if (result.toast) {
          showEnhancedToast(result.toast);
        } else {
          showToast('❌ Please fix the form errors and try again.');
        }
        
      } else {
        // Server errors but request might still be received
        showStatus('error', result.message || 'Failed to submit request. Please try again.');
        
        if (result.toast) {
          showEnhancedToast(result.toast);
        } else {
          showToast('⚠️ ' + (result.message || 'There was an issue, but we may have received your request.'));
        }
      }
      
    } catch (error) {
      console.error('Network error:', error);
      showStatus('error', 'Network error. Please check your connection and try again.');
      showToast('❌ Network error. Please try again.');
    } finally {
      // Reset button state
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
    }
  });
})();
</script>
