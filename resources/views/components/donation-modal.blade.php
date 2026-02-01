<!-- Toast Notification -->
<div id="copy-toast"
    class="fixed bottom-8 left-1/2 -translate-x-1/2 bg-veteran-blue text-white px-6 py-3 rounded-lg shadow-lg z-[80] opacity-0 transition-opacity duration-300 pointer-events-none">
    <p class="text-base font-bold font-montserrat m-0">{{ __('IBAN copied') }}</p>
</div>

<!-- Donation Modal -->
<div id="donation-modal" class="fixed inset-0 bg-black bg-opacity-50 z-[70] hidden items-center justify-center p-4">
    <div
        class="bg-white dark:bg-zinc-900 w-[95%] sm:w-full sm:max-w-[776px] h-auto max-h-[90vh] overflow-y-auto rounded-none relative scrollbar-hide transition-colors">
        <!-- Close Button -->
        <button id="close-modal"
            class="absolute top-6 right-6 z-10 w-8 h-8 flex items-center justify-center text-black dark:text-white hover:text-veteran-blue transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Tab Navigation -->
        <div class="pt-12 md:pt-[70px] px-6 md:px-[70px]">
            <div class="flex gap-4 md:gap-8">
                <button id="monobank-tab" class="flex-1 pb-4 pl-4 md:pl-[25px] text-left bg-transparent relative"
                    style="border: none; border-bottom: 4px solid #3971E2; outline: none;">
                    <div
                        class="text-lg md:text-2xl font-bold font-montserrat text-black dark:text-white transition-colors">
                        monobank</div>
                </button>
                <button id="privat-tab" class="flex-1 pb-4 pl-4 md:pl-[25px] text-left bg-transparent relative"
                    style="border: none; border-bottom: 1px solid #9CA3AF; outline: none;">
                    <div
                        class="text-lg md:text-2xl font-bold font-montserrat text-black dark:text-white transition-colors">
                        {{ __('Privat Bank') }}
                    </div>
                </button>
            </div>
        </div>

        <!-- Tab Content -->
        <div>
            <!-- Monobank Tab Content -->
            <div id="monobank-content" class="tab-content">
                <div class="pt-8 md:pt-[60px] px-6 md:px-[70px] pb-8 md:pb-[50px] min-h-[500px]">
                    <!-- Title -->
                    <h2
                        class="text-2xl md:text-[2.25rem] font-bold font-montserrat text-black dark:text-white uppercase text-center leading-[1.2] mb-6 md:mb-[30px] transition-colors">
                        {!! nl2br(__('Support Joint Initiatives')) !!}
                    </h2>

                    <!-- Description -->
                    <p
                        class="text-base md:text-[1.25rem] font-bold font-montserrat text-black dark:text-white text-center leading-[1.33] mb-6 md:mb-[20px] transition-colors">
                        {{ __('Veteran Space Organization') }}
                    </p>

                    <!-- QR Code -->
                    <div class="flex justify-center mb-6 md:mb-[20px]">
                        <img src="{{ asset('images/backgrounds/qr.png') }}" alt="QR Code for Donation"
                            class="w-[180px] md:w-[215px] h-auto object-contain">
                    </div>

                    <!-- Donate Button -->
                    <div class="flex justify-center mb-8 md:mb-[35px]">
                        <button
                            class="h-[50px] px-6 md:px-10 border-2 border-veteran-blue bg-transparent text-black dark:text-white text-sm md:text-[1.125rem] font-black font-montserrat uppercase rounded-full hover:bg-veteran-blue hover:text-white transition-all duration-300 flex items-center justify-center">
                            {{ __('Donate via Link') }}
                        </button>
                    </div>

                    <!-- Thank You Message -->
                    <p
                        class="text-center text-base md:text-[1.25rem] font-bold font-montserrat text-black dark:text-white leading-relaxed transition-colors">
                        {{ __('Thank You Support') }}
                    </p>
                </div>
            </div>

            <!-- Privat Bank Tab Content -->
            <div id="privat-content" class="tab-content hidden">
                <div class="pt-8 md:pt-[60px] px-6 md:px-[70px] pb-8 md:pb-[50px] min-h-[500px]">
                    <!-- Title -->
                    <h2
                        class="text-2xl md:text-[2.25rem] font-bold font-montserrat text-black dark:text-white uppercase text-center leading-[1.2] mb-6 md:mb-[30px] transition-colors">
                        {!! nl2br(__('Support Joint Initiatives')) !!}
                    </h2>

                    <!-- Description -->
                    <p
                        class="text-base md:text-[1.25rem] font-bold font-montserrat text-black dark:text-white text-center leading-[1.33] mb-8 md:mb-[50px] transition-colors">
                        {{ __('Veteran Space Organization') }}
                    </p>

                    <!-- Privat Bank Image -->
                    <div class="flex justify-center mb-6 md:mb-[40px]">
                        <img src="{{ asset('images/backgrounds/privat-bank.png') }}" alt="Privat Bank"
                            class="w-[180px] md:w-[215px] h-auto object-contain">
                    </div>

                    <!-- IBAN Section -->
                    <div class="flex flex-col md:flex-row items-center justify-center gap-2 md:gap-4 mb-8 md:mb-[35px]">
                        <span
                            class="text-sm md:text-[1.125rem] font-bold font-montserrat text-black dark:text-white tracking-wide text-center break-all transition-colors">IBAN
                            UA69305299000002600902600282</span>
                        <button onclick="copyIBAN('UA69305299000002600902600282')"
                            class="w-6 h-6 flex items-center justify-center hover:opacity-70 transition-opacity text-black dark:text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                </path>
                            </svg>
                        </button>
                    </div>

                    <!-- Thank You Message -->
                    <p
                        class="text-center text-base md:text-[1.25rem] font-bold font-montserrat text-black dark:text-white leading-relaxed transition-colors">
                        {{ __('Thank You Support') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('donation-modal');
        const closeBtn = document.getElementById('close-modal');
        const monobankTab = document.getElementById('monobank-tab');
        const privatTab = document.getElementById('privat-tab');
        const monobankContent = document.getElementById('monobank-content');
        const privatContent = document.getElementById('privat-content');

        // Close modal
        closeBtn.addEventListener('click', function () {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });

        // Close modal when clicking outside
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });

        monobankTab.addEventListener('click', function () {
            // Update monobank tab to active state (thick blue underline)
            monobankTab.style.borderBottom = '4px solid #3971E2';

            // Update privat tab to inactive state (thin gray underline)
            privatTab.style.borderBottom = '1px solid #9CA3AF';

            // Update content
            monobankContent.classList.remove('hidden');
            privatContent.classList.add('hidden');
        });

        privatTab.addEventListener('click', function () {
            // Update privat tab to active state (thick blue underline)
            privatTab.style.borderBottom = '4px solid #3971E2';

            // Update monobank tab to inactive state (thin gray underline)
            monobankTab.style.borderBottom = '1px solid #9CA3AF';

            // Update content
            privatContent.classList.remove('hidden');
            monobankContent.classList.add('hidden');
        });

        // Copy IBAN functionality
        window.copyIBAN = function (iban) {
            navigator.clipboard.writeText(iban).then(function () {
                // Show toast notification
                const toast = document.getElementById('copy-toast');
                toast.classList.remove('opacity-0');
                toast.classList.add('opacity-100');

                // Hide after 2 seconds
                setTimeout(function () {
                    toast.classList.remove('opacity-100');
                    toast.classList.add('opacity-0');
                }, 2000);
            }).catch(function (err) {
                console.error('Failed to copy IBAN:', err);
            });
        };

        // Function to open modal (can be called from support button)
        window.openDonationModal = function () {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        };
    });
</script>