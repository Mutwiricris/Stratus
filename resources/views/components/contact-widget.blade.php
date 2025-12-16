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
                        <div class="w-7 h-7 rounded-full bg-gradient-to-br from-teal-500 to-cyan-600 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">AS</div>
                        <div class="flex-1">
                            <div class="text-xs text-neutral-600 mb-1">Stratus Assistant • <span class="chat-time">3:16 PM</span></div>
                            <div class="bg-white rounded-lg p-3 shadow-sm text-sm text-neutral-800">
                                👋 <strong>Hello!</strong> Welcome to Ascend Stratus - your partner for digital transformation in Africa.
                                <br><br>
                                I can help you learn about our services, pricing, and how we can bring your software ideas to life.
                                <br><br>
                                <em>Choose an option below or type your question:</em>
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
                        <button class="chat-option bg-white border border-neutral-200 rounded-lg px-3 py-2 text-sm text-left hover:bg-neutral-50 transition-colors" data-option="portfolio">
                            🏆 Show me your recent work
                        </button>
                        <button class="chat-option bg-white border border-neutral-200 rounded-lg px-3 py-2 text-sm text-left hover:bg-neutral-50 transition-colors" data-option="support">
                            🛟 What support do you provide?
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
            <form id="contact-form-message" action="{{ route('contact.message') }}" method="POST" class="space-y-3 hidden" autocomplete="on">
                @csrf
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Name <span class="text-red-500">*</span></label>
                    <input name="name" required type="text" value="{{ old('name') }}" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800 @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Email <span class="text-red-500">*</span></label>
                    <input name="email" required type="email" value="{{ old('email') }}" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Phone (optional)</label>
                    <input name="phone" type="tel" value="{{ old('phone') }}" placeholder="e.g. +254700000000" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Company (optional)</label>
                    <input name="company" type="text" value="{{ old('company') }}" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Subject (optional)</label>
                    <input name="subject" type="text" value="{{ old('subject') }}" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Message <span class="text-red-500">*</span></label>
                    <textarea name="message" required rows="3" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800 @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="w-full bg-cyan-800 hover:bg-cyan-500 text-white rounded-lg px-4 py-2 text-sm font-semibold">Send Message</button>
            </form>

            <!-- Call form -->
            <form id="contact-form-call" action="{{ route('contact.call') }}" method="POST" class="space-y-3 hidden" autocomplete="on">
                @csrf
                <input type="hidden" name="timezone" id="call-timezone" value="">
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Name <span class="text-red-500">*</span></label>
                    <input name="name" required type="text" value="{{ old('name') }}" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800 @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Phone Number <span class="text-red-500">*</span></label>
                    <input name="phone" required type="tel" value="{{ old('phone') }}" placeholder="e.g. +254700000000" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800 @error('phone') border-red-500 @enderror">
                    @error('phone')
                        <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Email (optional)</label>
                    <input name="email" type="email" value="{{ old('email') }}" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Company (optional)</label>
                    <input name="company" type="text" value="{{ old('company') }}" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Preferred time (optional)</label>
                    <input name="time" type="text" value="{{ old('time') }}" placeholder="e.g. Tomorrow 2pm EAT" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">
                </div>
                <div>
                    <label class="block text-xs font-medium text-neutral-700 mb-1">Message (optional)</label>
                    <textarea name="note" rows="2" placeholder="Any specific questions?" class="w-full border border-neutral-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-cyan-800">{{ old('note') }}</textarea>
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
    <div id="contact-toast" class="hidden fixed bottom-24 right-6 bg-neutral-900 text-white text-sm px-4 py-3 rounded-lg shadow-2xl max-w-sm transition-all duration-300 transform animate-slide-up z-50">
        <div class="flex items-start gap-2">
            <div class="flex-1">Sent successfully</div>
        </div>
    </div>
</div>

<script>
(function(){
  console.log('Contact widget script loading...');
  const $ = (s, root=document) => root.querySelector(s);
  const $$ = (s, root=document) => Array.from(root.querySelectorAll(s));
  const panel = $('#contact-widget-panel');
  const toggleBtn = $('#contact-widget-toggle');
  const closeBtn = $('#contact-widget-close');
  const statusBox = $('#contact-widget-status');
  const toast = $('#contact-toast');
  const messageForm = $('#contact-form-message');
  const callForm = $('#contact-form-call');

  console.log('Forms found:', {
    messageForm: !!messageForm,
    callForm: !!callForm
  });

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

  // Chat option responses - comprehensive answers for Ascend Stratus
  const responses = {
    services: `<strong>🎯 Our Core Services:</strong><br><br>
      <strong>🏢 Enterprise Software Development</strong><br>
      Custom ERP, CRM, and HRM systems tailored for African businesses. Full M-Pesa, Airtel Money, and mobile banking integration. Cloud-based or on-premise deployment.<br><br>

      <strong>📱 Mobile App Development</strong><br>
      Native iOS & Android apps, cross-platform Flutter/React Native solutions. Offline-first architecture, USSD/SMS fallbacks, optimized for 2G/3G networks.<br><br>

      <strong>🛒 E-Commerce & Online Stores</strong><br>
      Custom-built stores with multi-currency support, local payment gateways, inventory management, and delivery tracking. Shopify, WooCommerce, or custom solutions.<br><br>

      <strong>🌐 Web Applications & SaaS Platforms</strong><br>
      Progressive web apps, customer portals, admin dashboards, and real-time applications. Scalable, secure, and cloud-ready.<br><br>

      <strong>🔄 Digital Transformation & Consulting</strong><br>
      Legacy system modernization, process automation, API integrations, and digital strategy consulting.<br><br>

      <strong>👥 Dev Team as a Service</strong><br>
      Dedicated developers, product teams, or full technical departments on demand. Scale up or down as needed.<br><br>

      <em>✨ All solutions include: Free consultation, ongoing support, training, and documentation.</em>`,

    pricing: `<strong>💰 Flexible Pricing Models:</strong><br><br>
      <strong>💼 Fixed Price Projects</strong><br>
      • Small Projects: $2,000 - $5,000<br>
      • Medium Projects: $5,000 - $15,000<br>
      • Large Projects: $15,000 - $50,000+<br>
      Best for: Well-defined scope, clear deliverables<br>
      Payment: 30% upfront, 40% milestone, 30% delivery<br><br>

      <strong>⏱️ Time & Materials</strong><br>
      • Junior Developer: $40-60/hour<br>
      • Mid-Level Developer: $60-80/hour<br>
      • Senior Developer: $80-100/hour<br>
      • Tech Lead/Architect: $100-150/hour<br>
      Best for: Evolving requirements, ongoing projects<br>
      Billing: Weekly or bi-weekly invoices<br><br>

      <strong>👥 Dedicated Team (Monthly Retainer)</strong><br>
      • 1 Developer: $3,000/month<br>
      • 2-3 Developers: $8,000/month<br>
      • Full Team (5+): $15,000+/month<br>
      Includes: Project management, daily standups, sprint planning<br>
      Commitment: 3-month minimum<br><br>

      <strong>🚀 MVP/Prototype Package</strong><br>
      • Basic MVP: $8,000 (6-8 weeks)<br>
      • Advanced MVP: $15,000 (8-12 weeks)<br>
      Includes: Design, development, testing, deployment<br><br>

      <em>💳 We accept: Bank transfer, M-Pesa, PayPal, Stripe. Flexible payment plans available!</em>`,

    timeline: `<strong>⏰ Project Timelines & Delivery:</strong><br><br>
      <strong>📱 Mobile Applications</strong><br>
      • Simple App (3-5 screens): 6-8 weeks<br>
      • Standard App (8-12 screens): 10-14 weeks<br>
      • Complex App (15+ screens): 16-24 weeks<br>
      <em>Includes: iOS & Android, backend, testing</em><br><br>

      <strong>🌐 Web Applications</strong><br>
      • Landing Page + Forms: 1-2 weeks<br>
      • Business Website: 3-4 weeks<br>
      • Web Portal/Dashboard: 8-12 weeks<br>
      • SaaS Platform: 16-24 weeks<br>
      <em>Includes: Design, frontend, backend, hosting</em><br><br>

      <strong>🛒 E-Commerce Stores</strong><br>
      • Basic Store (50 products): 2-3 weeks<br>
      • Medium Store (500 products): 4-6 weeks<br>
      • Enterprise Store: 8-12 weeks<br>
      <em>Includes: Setup, payment integration, training</em><br><br>

      <strong>🏢 Enterprise Software</strong><br>
      • Small Business ERP: 12-16 weeks<br>
      • Medium Business Solution: 20-28 weeks<br>
      • Large Enterprise System: 6-12 months<br>
      <em>Phased delivery with MVP in first 8 weeks</em><br><br>

      <strong>🚀 MVP/Prototype</strong><br>
      • Quick Prototype: 2-3 weeks<br>
      • Functional MVP: 6-8 weeks<br>
      • Market-Ready MVP: 10-12 weeks<br><br>

      <em>⚡ We use Agile methodology: Weekly demos, bi-weekly sprints, continuous delivery</em>`,

    tech: `<strong>🔧 Our Technology Stack:</strong><br><br>
      <strong>🔵 Backend Development</strong><br>
      • PHP: Laravel (primary framework)<br>
      • JavaScript: Node.js, Express, NestJS<br>
      • Python: Django, Flask, FastAPI<br>
      • Java: Spring Boot (enterprise)<br><br>

      <strong>🎨 Frontend Development</strong><br>
      • React.js + Next.js (modern SPAs)<br>
      • Vue.js + Nuxt.js (flexible UIs)<br>
      • Tailwind CSS + Flowbite (styling)<br>
      • Alpine.js (lightweight interactivity)<br><br>

      <strong>📱 Mobile Development</strong><br>
      • Flutter (cross-platform, our favorite)<br>
      • React Native (JavaScript-based)<br>
      • Swift (native iOS)<br>
      • Kotlin (native Android)<br><br>

      <strong>💾 Databases & Storage</strong><br>
      • MySQL/MariaDB (relational)<br>
      • PostgreSQL (advanced features)<br>
      • MongoDB (document store)<br>
      • Redis (caching, queues)<br>
      • AWS S3 (file storage)<br><br>

      <strong>☁️ Cloud & DevOps</strong><br>
      • AWS (preferred for scalability)<br>
      • DigitalOcean (cost-effective)<br>
      • Google Cloud (ML/AI projects)<br>
      • Docker + Kubernetes<br>
      • CI/CD: GitHub Actions, GitLab CI<br><br>

      <strong>💳 Payment Integrations</strong><br>
      • <strong>M-Pesa (Safaricom)</strong> - STK Push, C2B, B2C<br>
      • Airtel Money, T-Kash<br>
      • Stripe, PayPal (international)<br>
      • Flutterwave, Paystack (Africa)<br><br>

      <strong>🔐 Security & Compliance</strong><br>
      • SSL/TLS encryption<br>
      • OAuth 2.0, JWT authentication<br>
      • GDPR, PCI-DSS compliant<br>
      • Regular security audits<br><br>

      <em>🎯 We choose the best tech for YOUR needs - not just what's trendy!</em>`,

    portfolio: `<strong>🏆 Our Recent Work:</strong><br><br>
      <strong>🏦 FinTech Platform - Kenya</strong><br>
      Built a microfinance mobile app with M-Pesa integration serving 50,000+ users. Loan processing, repayment tracking, and SMS notifications.<br>
      <em>Tech: Flutter, Laravel, MySQL, M-Pesa API</em><br><br>

      <strong>🛒 E-Commerce Platform - Uganda</strong><br>
      Multi-vendor marketplace with 200+ vendors, 10,000+ products. Mobile money integration, delivery tracking.<br>
      <em>Tech: Laravel, Vue.js, PostgreSQL</em><br><br>

      <strong>🏥 Hospital Management System - Tanzania</strong><br>
      Complete HMS with patient records, appointments, billing, pharmacy, and lab management for 3 hospitals.<br>
      <em>Tech: Laravel, React, MySQL</em><br><br>

      <strong>🚜 AgriTech Mobile App - Rwanda</strong><br>
      Farmer marketplace connecting 5,000+ farmers with buyers. Weather alerts, market prices, offline mode.<br>
      <em>Tech: Flutter, Node.js, MongoDB</em><br><br>

      <strong>📚 EdTech Learning Platform - Multi-Country</strong><br>
      Online learning platform with video courses, quizzes, certificates. 20,000+ active students.<br>
      <em>Tech: Laravel, Next.js, AWS</em><br><br>

      <em>📸 View full portfolio on our website or request case studies!</em>`,

    support: `<strong>🛟 Support & Maintenance:</strong><br><br>
      <strong>What's Included:</strong><br>
      ✅ Bug fixes (critical bugs fixed within 24hrs)<br>
      ✅ Security updates & patches<br>
      ✅ Performance monitoring<br>
      ✅ Monthly backups<br>
      ✅ Technical support (email/phone)<br>
      ✅ Minor updates & improvements<br><br>

      <strong>Support Plans:</strong><br>
      • <strong>Basic:</strong> $200/month - Email support, monthly updates<br>
      • <strong>Standard:</strong> $500/month - Priority support, weekly monitoring<br>
      • <strong>Premium:</strong> $1,000/month - 24/7 support, dedicated manager<br><br>

      <strong>First 3 Months:</strong><br>
      FREE support included with every project! We ensure smooth launch and handle any issues.<br><br>

      <strong>SLA Guarantees:</strong><br>
      • Critical bugs: Fixed within 24 hours<br>
      • High priority: Fixed within 72 hours<br>
      • Normal issues: Fixed within 1 week<br><br>

      <em>💚 We build long-term partnerships - your success is our success!</em>`
  };

  // Add bot message
  function addBotMessage(text) {
    const time = new Date().toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit', hour12: true });
    const messageDiv = document.createElement('div');
    messageDiv.className = 'flex items-start gap-2';
    messageDiv.innerHTML = `
      <div class="w-7 h-7 rounded-full bg-gradient-to-br from-teal-500 to-cyan-600 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">AS</div>
      <div class="flex-1">
        <div class="text-xs text-neutral-600 mb-1">Stratus Assistant • ${time}</div>
        <div class="bg-white rounded-lg p-3 shadow-sm text-sm text-neutral-800 leading-relaxed">${text}</div>
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

  // Send chat message - ENHANCED WITH LIVE CHAT
  async function sendChatMessage() {
    const message = chatInput.value.trim();
    if (!message) return;

    // If already in live chat, send to conversation
    if (window.liveChat && window.liveChat.isLiveChatActive) {
      addUserMessage(message);
      chatInput.value = '';

      const result = await window.liveChat.sendMessage(message);
      if (!result.success) {
        addBotMessage("⚠️ Message failed to send. Please try again.");
      }
      return;
    }

    // Add user message to UI
    addUserMessage(message);
    chatInput.value = '';

    // Check if this is a predefined question
    const predefinedOptions = Object.keys(responses);
    const messageLower = message.toLowerCase();
    const isPredefined = predefinedOptions.some(opt =>
      messageLower.includes(opt.toLowerCase())
    );

    if (isPredefined) {
      // Handle with bot response (existing functionality)
      setTimeout(() => {
        addBotMessage("Thanks for your message! For detailed assistance, I'll connect you with our sales team.");
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
    } else {
      // START LIVE CHAT with an agent
      addBotMessage("🔄 Connecting you with an agent...");

      try {
        const result = await window.liveChat.startConversation(message);

        if (result.success) {
          addBotMessage(`✅ <strong>Connected!</strong> An agent will respond shortly.<br><em>Conversation #${result.conversation.conversation_number}</em>`);

          // Listen for new agent messages
          window.addEventListener('liveChat:newMessages', handleAgentMessages);
          window.addEventListener('liveChat:conversationEnded', handleConversationEnded);

        } else {
          addBotMessage("❌ Sorry, couldn't connect to live chat. Please use the Message tab to contact us.");
          switchToMessageTab();
        }
      } catch (error) {
        console.error('Live chat error:', error);
        addBotMessage("⚠️ Connection error. Please try again or use the Message tab.");
      }
    }
  }

  // Handle incoming agent messages
  function handleAgentMessages(event) {
    const { messages } = event.detail;

    messages.forEach(msg => {
      if (msg.sender_type === 'agent') {
        addAgentMessage(msg.body, msg.sender_name);
      }
    });

    // Mark as seen
    window.liveChat.markAsSeen();
  }

  // Add agent message to UI
  function addAgentMessage(text, agentName) {
    const time = new Date().toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit', hour12: true });
    const messageDiv = document.createElement('div');
    messageDiv.className = 'flex items-start gap-2';
    messageDiv.innerHTML = `
      <div class="w-7 h-7 rounded-full bg-gradient-to-br from-emerald-500 to-green-600 flex items-center justify-center text-white text-xs font-bold flex-shrink-0">${agentName.charAt(0)}</div>
      <div class="flex-1">
        <div class="text-xs text-neutral-600 mb-1">${agentName} (Agent) • ${time}</div>
        <div class="bg-white rounded-lg p-3 shadow-sm text-sm text-neutral-800 leading-relaxed">${text}</div>
      </div>
    `;
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  // Handle conversation end
  function handleConversationEnded(event) {
    const { status } = event.detail;
    addBotMessage(`💚 <strong>Chat ${status}!</strong> Thank you for contacting Ascend Stratus. Feel free to start a new chat anytime.`);

    // Clean up
    window.removeEventListener('liveChat:newMessages', handleAgentMessages);
    window.removeEventListener('liveChat:conversationEnded', handleConversationEnded);
  }

  // Handle conversation resumption on page load
  function handleConversationResumed(event) {
    const { conversation, messages } = event.detail;

    // Clear chat messages first
    chatMessages.innerHTML = '';

    // Add system message
    addBotMessage(`🔄 <strong>Chat Resumed!</strong> Continuing conversation #${conversation.conversation_number || conversation.id}`);

    // Restore all previous messages
    if (messages && messages.length > 0) {
      messages.forEach(msg => {
        if (msg.sender_type === 'customer') {
          addUserMessage(msg.body);
        } else if (msg.sender_type === 'agent') {
          addAgentMessage(msg.body, msg.sender_name);
        }
      });
    }

    // Listen for new messages
    window.addEventListener('liveChat:newMessages', handleAgentMessages);
    window.addEventListener('liveChat:conversationEnded', handleConversationEnded);

    // Scroll to bottom
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  // Listen for conversation resumed event
  window.addEventListener('liveChat:conversationResumed', handleConversationResumed);

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
    toast.className = 'fixed bottom-24 right-6 px-4 py-3 rounded-lg shadow-2xl text-white text-sm max-w-sm transition-all duration-300 transform z-50';

    if (type === 'success') {
      toast.classList.add('bg-gradient-to-r', 'from-emerald-500', 'to-green-600');
    } else if (type === 'error') {
      toast.classList.add('bg-gradient-to-r', 'from-red-500', 'to-red-600');
    } else if (type === 'warning') {
      toast.classList.add('bg-gradient-to-r', 'from-amber-500', 'to-orange-600');
    } else {
      toast.classList.add('bg-gradient-to-r', 'from-blue-500', 'to-cyan-600');
    }

    // Set content with title if provided
    if (title) {
      toast.innerHTML = `
        <div class="flex items-start gap-3">
          <div class="flex-1">
            <div class="font-semibold text-base mb-1">${title}</div>
            <div class="text-sm opacity-90 leading-relaxed">${message}</div>
          </div>
          <button onclick="this.parentElement.parentElement.classList.add('hidden')" class="text-white/80 hover:text-white">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
      `;
    } else {
      toast.textContent = message;
    }

    // Show with animation
    toast.classList.remove('hidden');
    setTimeout(() => toast.style.transform = 'translateY(0)', 10);

    // Hide with animation
    setTimeout(() => {
      toast.style.transform = 'translateY(20px)';
      toast.style.opacity = '0';
      setTimeout(() => {
        toast.classList.add('hidden');
        toast.style.transform = '';
        toast.style.opacity = '';
      }, 300);
    }, duration);
  }

  // NO JavaScript form handling - pure Laravel form submission
  console.log('Contact widget initialized - forms will submit via Laravel');

  // Debug form submissions
  if (messageForm) {
    messageForm.addEventListener('submit', function(e) {
      console.log('🚀 MESSAGE FORM SUBMITTING VIA LARAVEL!');
      console.log('Form action:', this.action);
      console.log('Form method:', this.method);
      console.log('Form data:', new FormData(this));
      // Let it submit naturally - don't prevent default
    });
  }

  if (callForm) {
    callForm.addEventListener('submit', function(e) {
      console.log('🚀 CALL FORM SUBMITTING VIA LARAVEL!');
      console.log('Form action:', this.action);
      console.log('Form method:', this.method);
      console.log('Form data:', new FormData(this));
      // Let it submit naturally - don't prevent default
    });
  }

  // Set timezone for call request form
  const timezoneInput = document.getElementById('call-timezone');
  if (timezoneInput) {
    try {
      const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
      timezoneInput.value = timezone;
      console.log('Timezone set:', timezone);
    } catch (e) {
      timezoneInput.value = 'UTC';
    }
  }
})();
</script>

<!-- Handle Laravel session messages -->
@if(session('success'))
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toast = document.getElementById('contact-toast');
    const messageForm = document.getElementById('contact-form-message');
    const callForm = document.getElementById('contact-form-call');

    if (toast) {
        toast.className = 'fixed bottom-24 right-6 px-4 py-3 rounded-lg shadow-2xl text-white text-sm max-w-sm transition-all duration-300 transform z-50 bg-gradient-to-r from-green-500 to-green-600';
        toast.innerHTML = `
            <div class="flex items-start gap-3">
                <div class="flex-1">
                    <div class="font-semibold text-base mb-1">✅ Success!</div>
                    <div class="text-sm opacity-90 leading-relaxed">{{ session('success') }}</div>
                </div>
            </div>
        `;
        toast.classList.remove('hidden');
        setTimeout(() => toast.classList.add('hidden'), 5000);

        // Clear both forms after successful submission
        if (messageForm) messageForm.reset();
        if (callForm) callForm.reset();

        console.log('✅ Forms cleared after successful submission');
    }
});
</script>
@endif

@if($errors->any())
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toast = document.getElementById('contact-toast');
    if (toast) {
        toast.className = 'fixed bottom-24 right-6 px-4 py-3 rounded-lg shadow-2xl text-white text-sm max-w-sm transition-all duration-300 transform z-50 bg-gradient-to-r from-red-500 to-red-600';
        toast.innerHTML = `
            <div class="flex items-start gap-3">
                <div class="flex-1">
                    <div class="font-semibold text-base mb-1">❌ Error</div>
                    <div class="text-sm opacity-90 leading-relaxed">{{ $errors->first() }}</div>
                </div>
            </div>
        `;
        toast.classList.remove('hidden');
        setTimeout(() => toast.classList.add('hidden'), 5000);
    }
});
</script>
@endif

<!-- Live Chat Library -->
<script src="{{ asset('js/live-chat.js') }}?v={{ time() }}"></script>
