<!-- Donation Modal -->
<div id="donation-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl w-[776px] h-[832px] relative overflow-hidden">
        <!-- Close Button -->
        <button id="close-modal" class="absolute top-6 right-6 z-10 w-8 h-8 flex items-center justify-center text-black hover:text-veteran-blue transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Tab Navigation -->
        <div class="flex">
            <button id="monobank-tab" class="flex-1 py-6 px-8 text-left bg-white relative">
                <div class="text-2xl font-bold text-black">monobank</div>
                <div class="absolute bottom-0 left-0 w-full h-1 bg-veteran-blue"></div>
            </button>
            <button id="privat-tab" class="flex-1 py-6 px-8 text-left bg-white relative">
                <div class="text-2xl font-bold text-black">Приват Банк</div>
                <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gray-400"></div>
            </button>
        </div>

        <!-- Tab Content -->
        <div class="p-8">
            <!-- Monobank Tab Content -->
            <div id="monobank-content" class="tab-content text-center">
                <!-- Title -->
                <h2 class="text-4xl font-bold text-black uppercase leading-tight mb-6">
                    ПІДТРИМАЙ СПІЛЬНІ<br/>
                    БЛАГОДІЙНІ ІНІЦІАТИВИ
                </h2>
                
                <!-- Description -->
                <p class="text-xl font-bold text-black mb-8">
                    Ветеранського простору та ГО "Захист об'єднання волонтерів"
                </p>
                
                <!-- QR Code -->
                <div class="flex justify-center mb-8">
                    <img src="{{ asset('images/backgrounds/qr.png') }}" 
                         alt="QR Code for Donation" 
                         class="w-64 h-64 object-contain">
                </div>
                
                <!-- Donate Button -->
                <div class="flex justify-center mb-6">
                    <button class="bg-white border-2 border-veteran-blue text-veteran-blue text-lg font-black px-10 py-3 rounded-full hover:bg-veteran-blue hover:text-white transition-all duration-300">
                        ДОНАТИТИ ЗА ПОСИЛАННЯМ
                    </button>
                </div>
                
                <!-- Thank You Message -->
                <p class="text-center text-2xl font-bold text-black">
                    Дякуємо за твою підтримку! ;
                </p>
            </div>

            <!-- Privat Bank Tab Content -->
            <div id="privat-content" class="tab-content hidden text-center">
                <!-- Title -->
                <h2 class="text-4xl font-bold text-black uppercase leading-tight mb-6">
                    ПІДТРИМАЙ СПІЛЬНІ<br/>
                    БЛАГОДІЙНІ ІНІЦІАТИВИ
                </h2>
                
                <!-- Description -->
                <p class="text-xl font-bold text-black mb-8">
                    Ветеранського простору та ГО "Захист об'єднання волонтерів"
                </p>
                
                <!-- Privat Bank Logo -->
                <div class="flex justify-center mb-8">
                    <img src="{{ asset('images/backgrounds/privat-bank.png') }}" 
                         alt="Privat Bank" 
                         class="h-64 object-contain">
                </div>
                
                <!-- Donate Button -->
                <div class="flex justify-center mb-6">
                    <button class="bg-white border-2 border-veteran-blue text-veteran-blue text-lg font-black px-10 py-3 rounded-full hover:bg-veteran-blue hover:text-white transition-all duration-300">
                        ДОНАТИТИ ЗА ПОСИЛАННЯМ
                    </button>
                </div>
                
                <!-- Thank You Message -->
                <p class="text-center text-2xl font-bold text-black">
                    Дякуємо за твою підтримку! ;
                </p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('donation-modal');
    const closeBtn = document.getElementById('close-modal');
    const monobankTab = document.getElementById('monobank-tab');
    const privatTab = document.getElementById('privat-tab');
    const monobankContent = document.getElementById('monobank-content');
    const privatContent = document.getElementById('privat-content');

    // Close modal
    closeBtn.addEventListener('click', function() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    });

    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });

    // Tab switching
    monobankTab.addEventListener('click', function() {
        // Update tab underline styles
        const monobankUnderline = monobankTab.querySelector('div:last-child');
        const privatUnderline = privatTab.querySelector('div:last-child');
        
        monobankUnderline.classList.remove('h-0.5', 'bg-gray-400');
        monobankUnderline.classList.add('h-1', 'bg-veteran-blue');
        privatUnderline.classList.remove('h-1', 'bg-veteran-blue');
        privatUnderline.classList.add('h-0.5', 'bg-gray-400');
        
        // Update content
        monobankContent.classList.remove('hidden');
        privatContent.classList.add('hidden');
    });

    privatTab.addEventListener('click', function() {
        // Update tab underline styles
        const monobankUnderline = monobankTab.querySelector('div:last-child');
        const privatUnderline = privatTab.querySelector('div:last-child');
        
        privatUnderline.classList.remove('h-0.5', 'bg-gray-400');
        privatUnderline.classList.add('h-1', 'bg-veteran-blue');
        monobankUnderline.classList.remove('h-1', 'bg-veteran-blue');
        monobankUnderline.classList.add('h-0.5', 'bg-gray-400');
        
        // Update content
        privatContent.classList.remove('hidden');
        monobankContent.classList.add('hidden');
    });

    // Function to open modal (can be called from support button)
    window.openDonationModal = function() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    };
});
</script>
