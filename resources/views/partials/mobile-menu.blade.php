<div id="mobile-menu"
    class="fixed inset-0 bg-white dark:bg-zinc-900 z-[60] hidden flex flex-col h-screen transition-colors">
    <!-- Header: UA, Theme Switch, Close Button -->
    <div class="flex items-center justify-between px-4 pt-6 pb-6 relative">
        <!-- Left: Language Dropdown -->
        <div class="relative z-10">
            <button class="flex items-center space-x-1 text-black dark:text-white transition-colors"
                onclick="toggleMobileLanguageDropdown()">
                <span class="font-bold text-lg">{{ strtoupper(app()->getLocale()) }}</span>
                <img class="pb-1 dark:invert" src="{{ asset('images/icons/arrow-down.svg') }}" alt="Dropdown">
            </button>
            <div id="mobile-language-menu"
                class="hidden absolute top-full left-0 mt-2 bg-white dark:bg-zinc-800 shadow-lg rounded-lg overflow-hidden z-50 min-w-[80px]">
                <a href="{{ route('lang.switch', 'ua') }}"
                    class="block px-4 py-2 text-sm font-bold text-black dark:text-white hover:bg-gray-100 dark:hover:bg-zinc-700 {{ app()->getLocale() === 'ua' ? 'bg-gray-100 dark:bg-zinc-700' : '' }}">
                    UA
                </a>
                <a href="{{ route('lang.switch', 'en') }}"
                    class="block px-4 py-2 text-sm font-bold text-black dark:text-white hover:bg-gray-100 dark:hover:bg-zinc-700 {{ app()->getLocale() === 'en' ? 'bg-gray-100 dark:bg-zinc-700' : '' }}">
                    EN
                </a>
            </div>
        </div>

        <!-- Center: Accessibility & Theme Toggle -->
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center gap-2">
            <!-- Accessibility Toggle (Pill Button) -->
            <button
                class="h-[36px] w-[72px] flex items-center justify-center border-2 border-gray-400 dark:border-zinc-500 rounded-full transition-colors bg-white dark:bg-zinc-800"
                onclick="toggleMobileAccessibility()" title="{{ __('Accessability') }}">
                <x-icons.accessibility class="w-5 h-5 text-black dark:text-white transition-colors" />
            </button>

            <!-- Dark Mode Toggle (Pill with Sun/Moon) - WCAG AAA Contrast -->
            <button class="h-[36px] w-[72px] flex items-center justify-center gap-0.5 border-2 border-gray-400 dark:border-zinc-500 rounded-full transition-colors bg-white dark:bg-zinc-800"
                onclick="accessibility.toggleTheme()">
                <!-- Sun Icon -->
                <div class="w-7 h-7 flex items-center justify-center rounded-full bg-gray-200 dark:bg-transparent transition-colors">
                    <svg class="w-4 h-4 text-gray-800 dark:text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                    </svg>
                </div>
                <!-- Moon Icon -->
                <div class="w-7 h-7 flex items-center justify-center rounded-full bg-transparent dark:bg-gray-200 transition-colors">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-800" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </div>

        <!-- Right: Close Button -->
        <button type="button" onclick="toggleMobileMenu()"
            class="text-black dark:text-white focus:outline-none transition-colors z-10">
            <div class="relative w-10 h-10">
                <div class="absolute w-full h-[2px] bg-veteran-blue top-1/2 left-0 -translate-y-1/2 rotate-45"></div>
                <div class="absolute w-full h-[2px] bg-veteran-blue top-1/2 left-0 -translate-y-1/2 -rotate-45"></div>
            </div>
        </button>
    </div>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto px-4 flex flex-col">
        <!-- Navigation Links -->
        <nav class="flex flex-col w-full mt-8">
            <!-- Group 1 -->
            <div class="flex flex-col gap-[30px] mb-[70px]">
                <a href="{{ route('services') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('Services') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('about') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('About') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('contact') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('Contacts') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
            </div>

            <!-- Group 2 -->
            <div class="flex flex-col gap-[30px]">
                <a href="{{ route('indifferent') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('To Indifferent') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('path') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('Community to Veteran') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('news') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('News') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="#" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('We Remember') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="#" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('Reviews') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
            </div>
        </nav>

        {{-- Mobile Accessibility Panel (Initially Hidden) --}}
        <div id="mobile-accessibility-panel"
            class="hidden w-full bg-gray-50 dark:bg-zinc-800 rounded-2xl p-5 mt-8 mb-8 space-y-4 transition-colors border border-transparent dark:border-zinc-700">
            <h3 class="font-bold text-lg text-black dark:text-white text-center mb-4">{{ __('Accessability') }}</h3>

            {{-- Font Size --}}
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <label class="font-semibold text-sm text-black dark:text-white">{{ __('Font Size') }}</label>
                    <span id="mobile-a11y-font-value" class="text-sm font-bold text-veteran-blue">100%</span>
                </div>
                <input type="range" id="mobile-a11y-font-slider" min="100" max="120" value="100" step="5"
                    class="w-full h-2 bg-gray-200 dark:bg-zinc-600 rounded-lg appearance-none cursor-pointer accent-veteran-blue"
                    oninput="accessibility.setFontScale(this.value); document.getElementById('mobile-a11y-font-value').textContent = this.value + '%'">
            </div>

            {{-- Saturation --}}
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <label class="font-semibold text-sm text-black dark:text-white">{{ __('Saturation') }}</label>
                    <span id="mobile-a11y-saturation-value" class="text-sm font-bold text-veteran-blue">100%</span>
                </div>
                <input type="range" id="mobile-a11y-saturation-slider" min="0" max="100" value="100" step="10"
                    class="w-full h-2 bg-gray-200 dark:bg-zinc-600 rounded-lg appearance-none cursor-pointer accent-veteran-blue"
                    oninput="accessibility.setSaturation(this.value); document.getElementById('mobile-a11y-saturation-value').textContent = this.value + '%'">
            </div>

            {{-- Toggle Grid --}}
            <div class="grid grid-cols-2 gap-3 pt-2">
                {{-- Reduce Motion --}}
                <label
                    class="flex items-center gap-2 cursor-pointer p-2 bg-white dark:bg-zinc-700 rounded-lg border border-gray-200 dark:border-zinc-600 transition-colors hover:bg-gray-50 dark:hover:bg-zinc-600">
                    <input type="checkbox" id="mobile-a11y-motion" class="w-5 h-5 accent-veteran-blue rounded"
                        onchange="accessibility.toggleReduceMotion()">
                    <span class="text-sm font-medium text-black dark:text-white">{{ __('Disable Animations') }}</span>
                </label>

                {{-- High Contrast --}}
                <label
                    class="flex items-center gap-2 cursor-pointer p-2 bg-white dark:bg-zinc-700 rounded-lg border border-gray-200 dark:border-zinc-600 transition-colors hover:bg-gray-50 dark:hover:bg-zinc-600">
                    <input type="checkbox" id="mobile-a11y-contrast" class="w-5 h-5 accent-veteran-blue rounded"
                        onchange="accessibility.toggleHighContrast()">
                    <span class="text-sm font-medium text-black dark:text-white">{{ __('High Contrast') }}</span>
                </label>

                {{-- Large Cursor --}}
                <label
                    class="flex items-center gap-2 cursor-pointer p-2 bg-white dark:bg-zinc-700 rounded-lg border border-gray-200 dark:border-zinc-600 transition-colors">
                    <input type="checkbox" id="mobile-a11y-cursor" class="w-5 h-5 accent-veteran-blue"
                        onchange="accessibility.toggleLargeCursor()">
                    <span class="text-sm font-medium text-black dark:text-white">{{ __('Large Cursor') }}</span>
                </label>

                {{-- Highlight Links --}}
                <label
                    class="flex items-center gap-2 cursor-pointer p-2 bg-white dark:bg-zinc-700 rounded-lg border border-gray-200 dark:border-zinc-600 transition-colors">
                    <input type="checkbox" id="mobile-a11y-links" class="w-5 h-5 accent-veteran-blue"
                        onchange="accessibility.toggleHighlightLinks()">
                    <span class="text-sm font-medium text-black dark:text-white">{{ __('Highlight Links') }}</span>
                </label>
            </div>

            {{-- Reset Button --}}
            <button onclick="accessibility.resetAccessibility(); syncMobileAccessibilityUI()"
                class="w-full py-2 text-sm font-bold text-gray-600 dark:text-gray-300 border border-gray-300 dark:border-zinc-600 rounded-full hover:border-veteran-blue hover:text-veteran-blue transition-colors">
                {{ __('Reset') }}
            </button>
        </div>

        <div class="mt-auto pb-8 w-full">
            <!-- Support Button -->
            <button onclick="openDonationModal()"
                class="w-full h-[70px] bg-veteran-blue text-white rounded-full font-black text-xl uppercase tracking-[1px] mb-6 hover:bg-blue-700 transition-colors flex items-center justify-center">
                {{ __('Support ZSU') }}
            </button>

            <!-- Footer Icons & Phone -->
            <div class="flex items-center justify-between">
                <!-- Left Icons (Messengers) -->
                <div class="flex items-center gap-2">
                    <a href="#" class="hover:opacity-80 transition-opacity"><img
                            src="{{ asset('images/icons/watsapnp.svg') }}" alt="WhatsApp"
                            class="w-6 h-6 dark:invert"></a>
                    <a href="#" class="hover:opacity-80 transition-opacity"><img
                            src="{{ asset('images/icons/signal.svg') }}" alt="Signal" class="w-6 h-6 dark:invert"></a>
                    <a href="#" class="hover:opacity-80 transition-opacity"><img
                            src="{{ asset('images/icons/viber.svg') }}" alt="Viber" class="w-6 h-6 dark:invert"></a>
                </div>

                <!-- Phone -->
                <div class="font-bold text-sm whitespace-nowrap text-black dark:text-white transition-colors">
                    <a href="tel:+380675630090">+38 067 563 0090</a>
                </div>

                <!-- Right Icons (Social) -->
                <div class="flex items-center gap-2">
                    <a href="#" class="hover:opacity-80 transition-opacity"><img
                            src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook"
                            class="w-7 h-7 dark:invert"></a>
                    <a href="#" class="hover:opacity-80 transition-opacity"><img
                            src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram"
                            class="w-7 h-7 dark:invert"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleMobileLanguageDropdown() {
        const menu = document.getElementById('mobile-language-menu');
        menu.classList.toggle('hidden');
    }
</script>