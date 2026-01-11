<div id="mobile-menu" class="fixed inset-0 bg-white z-[60] hidden flex flex-col h-screen">
    <!-- Header: UA, Theme Switch, Close Button -->
    <div class="flex items-center justify-between px-5 pt-6 pb-6">
        <div class="flex items-center gap-4">
            <!-- Language -->
            <button class="flex items-center space-x-1 text-black">
                <span class="font-bold text-lg">UA</span>
                <img class="pb-1" src="{{ asset('images/icons/arrow-down.svg') }}" alt="Dropdown">
            </button>

            <!-- Accessibility Toggle -->
            <button class="transition-colors" onclick="toggleMobileAccessibility()" title="Доступність">
                <svg class="w-7 h-7 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="4.5" r="2.5" />
                    <path d="M12 7.5v2.5M12 10l-4 8M12 10l4 8M7 14h10" />
                </svg>
            </button>

            <!-- Dark Mode Switch -->
            <button class="transition-colors" onclick="accessibility.toggleTheme()">
                <img class="h-[30px] theme-toggle-icon" src="{{ asset('images/icons/switch.svg') }}"
                    alt="Dark Mode Toggle">
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
                <a href="{{ route('indifferent') }}" class="flex items-center justify-center gap-1 group">
                    <span
                        class="text-black font-semibold text-lg uppercase tracking-wide group-hover:text-veteran-blue transition-colors">НЕБАЙДУЖИМ</span>
                    <span
                        class="text-black font-semibold text-lg group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('path') }}" class="flex items-center justify-center gap-1 group">
                    <span
                        class="text-black font-semibold text-lg uppercase tracking-wide group-hover:text-veteran-blue transition-colors">ГРОМАДА
                        - ВЕТЕРАНУ</span>
                    <span
                        class="text-black font-semibold text-lg group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('news') }}" class="flex items-center justify-center gap-1 group">
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

        {{-- Mobile Accessibility Panel (Initially Hidden) --}}
        <div id="mobile-accessibility-panel" class="hidden w-full bg-gray-50 rounded-2xl p-5 mb-6 space-y-4">
            <h3 class="font-bold text-lg text-black text-center mb-4">Доступність</h3>

            {{-- Font Size --}}
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <label class="font-semibold text-sm text-black">Розмір тексту</label>
                    <span id="mobile-a11y-font-value" class="text-sm font-bold text-veteran-blue">100%</span>
                </div>
                <input type="range" id="mobile-a11y-font-slider" min="100" max="120" value="100" step="5"
                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-veteran-blue"
                    oninput="accessibility.setFontScale(this.value); document.getElementById('mobile-a11y-font-value').textContent = this.value + '%'">
            </div>

            {{-- Saturation --}}
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <label class="font-semibold text-sm text-black">Насиченість</label>
                    <span id="mobile-a11y-saturation-value" class="text-sm font-bold text-veteran-blue">100%</span>
                </div>
                <input type="range" id="mobile-a11y-saturation-slider" min="0" max="100" value="100" step="10"
                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-veteran-blue"
                    oninput="accessibility.setSaturation(this.value); document.getElementById('mobile-a11y-saturation-value').textContent = this.value + '%'">
            </div>

            {{-- Toggle Grid --}}
            <div class="grid grid-cols-2 gap-3 pt-2">
                {{-- Reduce Motion --}}
                <label class="flex items-center gap-2 cursor-pointer p-2 bg-white rounded-lg border border-gray-200">
                    <input type="checkbox" id="mobile-a11y-motion" class="w-5 h-5 accent-veteran-blue"
                        onchange="accessibility.toggleReduceMotion()">
                    <span class="text-sm font-medium text-black">Без анімацій</span>
                </label>

                {{-- High Contrast --}}
                <label class="flex items-center gap-2 cursor-pointer p-2 bg-white rounded-lg border border-gray-200">
                    <input type="checkbox" id="mobile-a11y-contrast" class="w-5 h-5 accent-veteran-blue"
                        onchange="accessibility.toggleHighContrast()">
                    <span class="text-sm font-medium text-black">Контраст</span>
                </label>

                {{-- Large Cursor --}}
                <label class="flex items-center gap-2 cursor-pointer p-2 bg-white rounded-lg border border-gray-200">
                    <input type="checkbox" id="mobile-a11y-cursor" class="w-5 h-5 accent-veteran-blue"
                        onchange="accessibility.toggleLargeCursor()">
                    <span class="text-sm font-medium text-black">Курсор</span>
                </label>

                {{-- Highlight Links --}}
                <label class="flex items-center gap-2 cursor-pointer p-2 bg-white rounded-lg border border-gray-200">
                    <input type="checkbox" id="mobile-a11y-links" class="w-5 h-5 accent-veteran-blue"
                        onchange="accessibility.toggleHighlightLinks()">
                    <span class="text-sm font-medium text-black">Посилання</span>
                </label>
            </div>

            {{-- Reset Button --}}
            <button onclick="accessibility.resetAccessibility(); syncMobileAccessibilityUI()"
                class="w-full py-2 text-sm font-bold text-gray-600 border border-gray-300 rounded-full hover:border-veteran-blue hover:text-veteran-blue transition-colors">
                Скинути
            </button>
        </div>

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