<!-- Floating Contact Button -->
<button id="contact-float-btn" class="fixed bottom-6 right-6 z-50 bg-cyan-800 hover:bg-cyan-700 text-white rounded-full p-4 shadow-2xl transition-all duration-300 hover:scale-110">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
    </svg>
</button>

<!-- Contact Modal -->
<div id="contact-modal" class="hidden fixed inset-0 z-50 overflow-y-auto">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity"></div>

    <!-- Modal Content -->
    <div class="flex min-h-screen items-center justify-center p-4">
        <div class="relative bg-white rounded-2xl shadow-2xl max-w-md w-full transform transition-all">
            <!-- Header -->
            <div class="bg-gradient-to-r from-cyan-800 to-cyan-700 text-white px-6 py-4 rounded-t-2xl">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold">Contact Us</h3>
                    <button id="close-modal" class="text-white hover:text-gray-200 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Tabs -->
            <div class="flex border-b border-gray-200">
                <button class="tab-button flex-1 px-6 py-3 text-sm font-medium text-cyan-800 border-b-2 border-cyan-800 bg-cyan-50" data-tab="message">
                    📧 Send Message
                </button>
                <button class="tab-button flex-1 px-6 py-3 text-sm font-medium text-gray-600 hover:text-cyan-800 transition" data-tab="call">
                    📞 Request Call
                </button>
            </div>

            <!-- Tab Content -->
            <div class="p-6">
                <!-- Message Form -->
                <form id="message-form" action="{{ route('contact.message') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                        <input type="text" name="name" required value="{{ old('name') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                        <input type="email" name="email" required value="{{ old('email') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent" placeholder="+254700000000">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Message *</label>
                        <textarea name="message" required rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="w-full bg-cyan-800 hover:bg-cyan-700 text-white font-semibold py-3 rounded-lg transition-colors">
                        Send Message
                    </button>
                </form>

                <!-- Call Form -->
                <form id="call-form" action="{{ route('contact.call') }}" method="POST" class="space-y-4 hidden">
                    @csrf
                    <input type="hidden" name="timezone" id="modal-call-timezone" value="">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                        <input type="text" name="name" required value="{{ old('name') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                        <input type="tel" name="phone" required value="{{ old('phone') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent @error('phone') border-red-500 @enderror" placeholder="+254700000000">
                        @error('phone')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Preferred Time</label>
                        <input type="text" name="time" value="{{ old('time') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent" placeholder="e.g., Tomorrow 2pm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Note (Optional)</label>
                        <textarea name="note" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent">{{ old('note') }}</textarea>
                    </div>
                    <button type="submit" class="w-full bg-cyan-800 hover:bg-cyan-700 text-white font-semibold py-3 rounded-lg transition-colors">
                        Request a Call
                    </button>
                </form>

                <!-- Status Message -->
                <div id="form-status" class="hidden mt-4 p-4 rounded-lg text-sm"></div>
            </div>
        </div>
    </div>
</div>

<!-- Toast Notification -->
<div id="toast" class="hidden fixed bottom-6 left-1/2 transform -translate-x-1/2 z-50 px-6 py-4 rounded-lg shadow-2xl text-white max-w-md"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const floatBtn = document.getElementById('contact-float-btn');
    const modal = document.getElementById('contact-modal');
    const closeModal = document.getElementById('close-modal');
    const tabButtons = document.querySelectorAll('.tab-button');
    const messageForm = document.getElementById('message-form');
    const callForm = document.getElementById('call-form');
    const formStatus = document.getElementById('form-status');
    const toast = document.getElementById('toast');

    console.log('Contact modal initialized!');

    // Open/Close Modal
    floatBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
        console.log('Modal opened');
    });

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });

    // Tab Switching
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const tab = button.dataset.tab;

            // Update tab styles
            tabButtons.forEach(btn => {
                btn.classList.remove('text-cyan-800', 'border-b-2', 'border-cyan-800', 'bg-cyan-50');
                btn.classList.add('text-gray-600');
            });
            button.classList.add('text-cyan-800', 'border-b-2', 'border-cyan-800', 'bg-cyan-50');
            button.classList.remove('text-gray-600');

            // Show/hide forms
            if (tab === 'message') {
                messageForm.classList.remove('hidden');
                callForm.classList.add('hidden');
            } else {
                messageForm.classList.add('hidden');
                callForm.classList.remove('hidden');
            }
        });
    });

    // Show Toast
    function showToast(message, type = 'success') {
        toast.className = `fixed bottom-6 left-1/2 transform -translate-x-1/2 z-50 px-6 py-4 rounded-lg shadow-2xl text-white max-w-md ${type === 'success' ? 'bg-gradient-to-r from-green-500 to-green-600' : 'bg-gradient-to-r from-red-500 to-red-600'}`;
        toast.textContent = message;
        toast.classList.remove('hidden');
        setTimeout(() => toast.classList.add('hidden'), 5000);
    }

    // Pure Laravel form submission - no JavaScript handling
    console.log('Message form ready for Laravel submission');

    // Pure Laravel form submission - no JavaScript handling
    console.log('Call form ready for Laravel submission');

    // Set timezone for call request form
    const timezoneInput = document.getElementById('modal-call-timezone');
    if (timezoneInput) {
        try {
            const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
            timezoneInput.value = timezone;
            console.log('Timezone set:', timezone);
        } catch (e) {
            timezoneInput.value = 'UTC';
        }
    }

    // Handle successful submission - clear form and show toast
    @if(session('success'))
        showToast('{{ session('success') }}', 'success');
        // Clear the active form
        if (!messageForm.classList.contains('hidden')) {
            messageForm.reset();
        }
        if (!callForm.classList.contains('hidden')) {
            callForm.reset();
        }
        // Close modal after 2 seconds
        setTimeout(() => modal.classList.add('hidden'), 2000);
    @endif

    // Handle validation errors
    @if($errors->any())
        showToast('{{ $errors->first() }}', 'error');
    @endif
});
</script>
