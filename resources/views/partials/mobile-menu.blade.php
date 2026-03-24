<div id="mobile-menu"
    class="fixed top-0 left-0 w-full h-[100dvh] bg-white dark:bg-zinc-900 z-[60] hidden flex flex-col transition-colors">
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
                class="h-[40px] w-[70px] flex items-center justify-center border-2 border-black dark:border-white rounded-full transition-colors"
                onclick="toggleMobileAccessibility()" title="{{ __('Accessability') }}">
                <x-icons.accessibility class="w-6 h-6 text-black dark:text-white transition-colors" />
            </button>

            <!-- Dark Mode Toggle - Animated Pill Toggle -->
            <button id="dark-mode-toggle-mobile"
                class="relative w-[70px] h-[40px] flex items-center justify-between px-[8px] rounded-full border-2 border-black dark:border-white transition-colors bg-transparent"
                onclick="toggleDarkModeMobile()">
                <!-- Sun Icon (Left) - Figma exact -->
                <svg class="w-[20px] h-[20px] z-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="11" class="stroke-black dark:stroke-white transition-colors"
                        stroke-width="2" />
                </svg>
                <!-- Moon Icon (Right) - Figma exact -->
                <svg class="w-[18px] h-[20px] z-10" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.22205 24.0145C11.4036 24.0111 14.4538 22.7457 16.7035 20.496C18.9532 18.2463 20.2186 15.1961 20.2221 12.0145C20.3751 3.05854 10.1911 -2.97046 2.43105 1.52354L0.87805 2.38554L2.42105 3.26554C9.12105 6.95354 8.63105 17.1355 1.62105 20.1715L4.95911e-05 20.9025L1.46705 21.9085C3.45369 23.278 5.80914 24.0124 8.22205 24.0145ZM8.22205 2.01454C10.8733 2.01745 13.4152 3.07196 15.2899 4.94669C17.1646 6.82142 18.2191 9.36327 18.2221 12.0145C18.3771 19.1315 10.4591 24.2145 4.06705 21.0965C5.56351 20.0922 6.80405 18.7515 7.68934 17.1817C8.57464 15.6119 9.08009 13.8567 9.16523 12.0565C9.25038 10.2562 8.91285 8.46111 8.17968 6.81476C7.4465 5.16841 6.33804 3.71659 4.94305 2.57554C5.99582 2.20199 7.10497 2.01222 8.22205 2.01454Z"
                        class="fill-black dark:fill-white transition-colors" />
                </svg>
                <!-- Sliding Circle (covers active icon) -->
                <div id="toggle-circle-mobile"
                    class="absolute left-[4px] w-[28px] h-[28px] bg-black dark:bg-white rounded-full transition-[left] duration-300 ease-in-out">
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
                <a href="{{ route('about') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('About') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('services') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('Services') }}</span>
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
                <a href="https://www.khm.gov.ua/uk/pro-hromadu/heroi-hromady" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('We Remember') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('news') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('News') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('path') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('Community to Veteran') }}</span>
                    <span
                        class="text-black dark:text-white font-light text-2xl group-hover:text-veteran-blue transition-colors">&gt;</span>
                </a>
                <a href="{{ route('indifferent') }}" class="flex items-center justify-between group w-full">
                    <span
                        class="text-black dark:text-white font-bold text-[20px] uppercase tracking-[1.4px] leading-[115.753%] group-hover:text-veteran-blue transition-colors">{{ __('To Indifferent') }}</span>
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
                    <label class="font-semibold text-sm text-black dark:text-white">{{ __('Text Size') }}</label>
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

        <div class="mt-auto pt-8 pb-[max(2rem,env(safe-area-inset-bottom))] w-full shrink-0">
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
                    <a href="https://www.facebook.com/zahystveteran" target="_blank" rel="noopener noreferrer"
                        class="hover:opacity-80 transition-opacity"><img src="{{ asset('images/icons/facebook.svg') }}"
                            alt="Facebook" class="w-7 h-7 dark:invert"></a>
                    <a href="https://www.instagram.com/veterankhm/" target="_blank" rel="noopener noreferrer"
                        class="hover:opacity-80 transition-opacity"><img src="{{ asset('images/icons/instagram.svg') }}"
                            alt="Instagram" class="w-7 h-7 dark:invert"></a>
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

    function toggleDarkModeMobile() {
        if (typeof accessibility !== 'undefined') {
            accessibility.toggleTheme();
        } else {
            document.documentElement.classList.toggle('dark');
        }

        // Animate ALL toggle circles
        const toggleCircles = ['toggle-circle-mobile', 'toggle-circle-main', 'toggle-circle-blue'];
        const isDark = document.documentElement.classList.contains('dark');

        toggleCircles.forEach(id => {
            const circle = document.getElementById(id);
            if (circle) {
                circle.style.left = isDark ? 'calc(100% - 32px)' : '4px';
            }
        });
    }

    // Initialize toggle position on page load for mobile
    document.addEventListener('DOMContentLoaded', function () {
        const toggleCircle = document.getElementById('toggle-circle-mobile');
        if (toggleCircle && document.documentElement.classList.contains('dark')) {
            toggleCircle.style.left = 'calc(100% - 32px)';
        }
    });
</script>