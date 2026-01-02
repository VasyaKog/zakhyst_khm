<div id="mobile-menu" class="fixed inset-0 bg-white z-[60] hidden flex flex-col h-screen">
    <!-- Header: UA, Theme Switch, Close Button -->
    <div class="flex items-center justify-between px-5 pt-6 pb-6">
        <div class="flex items-center gap-6">
            <!-- Language -->
            <button class="flex items-center space-x-1 text-black">
                <span class="font-bold text-lg">UA</span>
                <img class="pb-1" src="{{ asset('images/icons/arrow-down.svg') }}" alt="Dropdown">
            </button>

            <!-- Dark Mode Switch -->
            <button class="transition-colors" onclick="toggleDarkMode()">
                <img class="h-[30px]" src="{{ asset('images/icons/switch.svg') }}" alt="Dark Mode Toggle">
            </button>
        </div>

        <!-- Close Button -->
        <button type="button" onclick="toggleMobileMenu()" class="text-black focus:outline-none">
            <div class="relative w-8 h-8">
                <div class="absolute w-full h-[2px] bg-blue-600 top-1/2 left-0 -translate-y-1/2 rotate-45"></div>
                <div class="absolute w-full h-[2px] bg-blue-600 top-1/2 left-0 -translate-y-1/2 -rotate-45"></div>
            </div>
        </button>
    </div>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto px-5 flex flex-col items-center">
        <!-- Navigation Links: Centered Column -->
        <nav class="flex flex-col items-center w-full mb-8">
            <!-- Group 1 -->
            <div class="flex flex-col gap-4 mb-6 items-center">
                <a href="{{ route('services') }}" class="flex items-center justify-center gap-1 group">
                    <span
                        class="text-black font-semibold text-lg uppercase tracking-wide group-hover:text-veteran-blue transition-colors">ПОСЛУГИ</span>
                    <span
                        class="text-black font-semibold text-lg group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('about') }}" class="flex items-center justify-center gap-1 group">
                    <span
                        class="text-black font-semibold text-lg uppercase tracking-wide group-hover:text-veteran-blue transition-colors">ПРО
                        НАС</span>
                    <span
                        class="text-black font-semibold text-lg group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('contact') }}" class="flex items-center justify-center gap-1 group">
                    <span
                        class="text-black font-semibold text-lg uppercase tracking-wide group-hover:text-veteran-blue transition-colors">КОНТАКТИ</span>
                    <span
                        class="text-black font-semibold text-lg group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
            </div>

            <!-- Group 2 -->
            <div class="flex flex-col gap-4 items-center">
                <a href="#" class="flex items-center justify-center gap-1 group">
                    <span
                        class="text-black font-semibold text-lg uppercase tracking-wide group-hover:text-veteran-blue transition-colors">НЕБАЙДУЖИМ</span>
                    <span
                        class="text-black font-semibold text-lg group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="#" class="flex items-center justify-center gap-1 group">
                    <span
                        class="text-black font-semibold text-lg uppercase tracking-wide group-hover:text-veteran-blue transition-colors">ГРОМАДА
                        - ВЕТЕРАНУ</span>
                    <span
                        class="text-black font-semibold text-lg group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="#" class="flex items-center justify-center gap-1 group">
                    <span
                        class="text-black font-semibold text-lg uppercase tracking-wide group-hover:text-veteran-blue transition-colors">НОВИНИ</span>
                    <span
                        class="text-black font-semibold text-lg group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="#" class="flex items-center justify-center gap-1 group">
                    <span
                        class="text-black font-semibold text-lg uppercase tracking-wide group-hover:text-veteran-blue transition-colors">МИ
                        ПАМ'ЯТАЄМО</span>
                    <span
                        class="text-black font-semibold text-lg group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="#" class="flex items-center justify-center gap-1 group">
                    <span
                        class="text-black font-semibold text-lg uppercase tracking-wide group-hover:text-veteran-blue transition-colors">ВІДГУКИ</span>
                    <span
                        class="text-black font-semibold text-lg group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
            </div>
        </nav>

        <div class="mt-auto pb-10 w-full">
            <!-- Support Button -->
            <button onclick="openDonationModal()"
                class="w-full h-[60px] bg-veteran-blue text-white rounded-full font-bold text-lg uppercase mb-8 hover:bg-blue-700 transition-colors flex items-center justify-center">
                ПІДТРИМАТИ ЗСУ
            </button>

            <!-- Footer Icons & Phone -->
            <div class="flex items-center justify-between px-2">
                <!-- Left Icons -->
                <div class="flex items-center gap-3">
                    <a href="#" class="hover:opacity-80 transition-opacity"><img
                            src="{{ asset('images/icons/watsapnp.svg') }}" alt="WhatsApp" class="w-7 h-7"></a>
                    <a href="#" class="hover:opacity-80 transition-opacity"><img
                            src="{{ asset('images/icons/signal.svg') }}" alt="Signal" class="w-7 h-7"></a>
                    <a href="#" class="hover:opacity-80 transition-opacity"><img
                            src="{{ asset('images/icons/viber.svg') }}" alt="Viber" class="w-7 h-7"></a>
                </div>

                <!-- Phone -->
                <div class="font-bold text-base whitespace-nowrap">
                    <a href="tel:+380675630090">+38 067 563 0090</a>
                </div>

                <!-- Right Icons -->
                <div class="flex items-center gap-3">
                    <a href="#" class="hover:opacity-80 transition-opacity"><img
                            src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="w-7 h-7"></a>
                    <a href="#" class="hover:opacity-80 transition-opacity"><img
                            src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram" class="w-7 h-7"></a>
                </div>
            </div>
        </div>
    </div>
</div>