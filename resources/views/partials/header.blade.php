<header id="header">
    <div class="mx-auto my-10 px-4 min-[1250px]:px-[50px]">
        <div class="relative flex items-center justify-between min-h-24">

            <div class="flex items-center space-x-3 flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logos/logo-text.svg') }}"
                        class="h-[40px] min-[1250px]:h-full dark:brightness-0 dark:invert transition-all"
                        alt="ВЕТЕРАНСЬКИЙ ПРОСТІР">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div id="desktop-nav"
                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 max-[1399px]:hidden">
                <div class="flex items-center space-x-8 whitespace-nowrap">
                    <a href="{{ route('about') }}"
                        class="text-black dark:text-white hover:text-veteran-blue dark:hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('About') }}
                    </a>
                    <a href="{{ route('services') }}"
                        class="text-black dark:text-white hover:text-veteran-blue dark:hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('Services') }}
                    </a>
                    <a href="{{ route('contact') }}"
                        class="text-black dark:text-white hover:text-veteran-blue dark:hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('Contacts') }}
                    </a>
                </div>
            </div>

            <div id="mobile-nav" class="hidden min-[1400px]:flex-1 justify-center min-w-0 mx-5">
                <div class="flex items-center justify-center gap-3 xl:gap-5 min-[1700px]:gap-8 flex-wrap">
                    <a href="#"
                        class="text-black dark:text-white hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('We Remember') }}
                    </a>
                    <a href="{{ route('news') }}"
                        class="text-black dark:text-white hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('News') }}
                    </a>
                    <a href="{{ route('path') }}"
                        class="text-black dark:text-white hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('Community to Veteran') }}
                    </a>
                    <a href="{{ route('indifferent') }}"
                        class="text-black dark:text-white hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('To Indifferent') }}
                    </a>
                    <a href="#"
                        class="text-black dark:text-white hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('Reviews') }}
                    </a>
                </div>
            </div>

            <div class="flex items-center gap-8 flex-shrink-0">
                <!-- Language Dropdown: Hidden on mobile, Visible > 1400px -->
                <div id="language-dropdown" class="relative hidden min-[1400px]:block">
                    <button id="language-toggle"
                        class="flex items-center space-x-1 text-black dark:text-white transition-colors"
                        onclick="toggleLanguageDropdown()">
                        <span class="font-bold text-base">{{ strtoupper(app()->getLocale()) }}</span>
                        <img class="pb-1 dark:invert transition-all" src="{{ asset('images/icons/arrow-down.svg') }}"
                            alt="Dropdown">
                    </button>
                    <div id="language-menu"
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

                <!-- Burger/Cross Button: Visible on Mobile (<1400), Hidden on Desktop (>1400) UNLESS extended nav is open -->
                <!-- Note: Logic handled by JS, but base class setup here -->
                <div class="relative w-[30px] h-[19px] max-[768px]:w-[45px] max-[768px]:h-[30px]">
                    <button type="button" id="menu-toggle"
                        class="text-black hover:text-veteran-blue focus:outline-none focus:text-gray-900 transition-colors"
                        onclick="toggleMobileMenu()">
                        <!-- Burger Icon -->
                        <img id="burger-icon" src="{{ asset('images/icons/burger.svg') }}"
                            class="max-[768px]:w-[45px] max-[768px]:h-[30px] dark:invert transition-all" alt="Menu">
                        <!-- Cross Icon (Hidden by default) -->
                        <div id="cross-icon" class="w-6 h-6 hidden">
                            <div
                                class="w-full h-[3px] bg-black dark:bg-white transform rotate-45 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-colors">
                            </div>
                            <div
                                class="w-full h-[3px] bg-black dark:bg-white transform -rotate-45 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-colors">
                            </div>
                        </div>
                    </button>
                </div>

                <!-- Dark Mode Switch - Animated Pill Toggle -->
                <button id="dark-mode-toggle-main"
                    class="relative w-[70px] h-[40px] hidden min-[1400px]:flex items-center justify-between px-[8px] rounded-full border-2 border-black dark:border-white min-[1800px]:mr-[33px]"
                    onclick="toggleDarkModeMain()">
                    <!-- Sun Icon (Left) - Figma exact -->
                    <svg class="w-[20px] h-[20px] z-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="11" class="stroke-black dark:stroke-white" stroke-width="2"/>
                    </svg>
                    <!-- Moon Icon (Right) - Figma exact -->
                    <svg class="w-[18px] h-[20px] z-10" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.22205 24.0145C11.4036 24.0111 14.4538 22.7457 16.7035 20.496C18.9532 18.2463 20.2186 15.1961 20.2221 12.0145C20.3751 3.05854 10.1911 -2.97046 2.43105 1.52354L0.87805 2.38554L2.42105 3.26554C9.12105 6.95354 8.63105 17.1355 1.62105 20.1715L4.95911e-05 20.9025L1.46705 21.9085C3.45369 23.278 5.80914 24.0124 8.22205 24.0145ZM8.22205 2.01454C10.8733 2.01745 13.4152 3.07196 15.2899 4.94669C17.1646 6.82142 18.2191 9.36327 18.2221 12.0145C18.3771 19.1315 10.4591 24.2145 4.06705 21.0965C5.56351 20.0922 6.80405 18.7515 7.68934 17.1817C8.57464 15.6119 9.08009 13.8567 9.16523 12.0565C9.25038 10.2562 8.91285 8.46111 8.17968 6.81476C7.4465 5.16841 6.33804 3.71659 4.94305 2.57554C5.99582 2.20199 7.10497 2.01222 8.22205 2.01454Z" class="fill-black dark:fill-white"/>
                    </svg>
                    <!-- Sliding Circle (covers active icon) -->
                    <div id="toggle-circle-main"
                        class="absolute left-[4px] w-[28px] h-[28px] z-[100] bg-black dark:bg-white rounded-full transition-[left] duration-300 ease-in-out">
                    </div>
                </button>

                <button onclick="window.openDonationModal()"
                    class="hidden min-[1400px]:block w-[260px] h-[70px] bg-veteran-blue hover:bg-blue-700 text-white font-black text-xl uppercase rounded-full transition-colors tracking-wide">
                    {{ __('Support') }}
                </button>
            </div>
        </div>
    </div>
</header>

@include('partials.mobile-menu')

<script>
    function toggleMobileMenu() {
        const desktopNav = document.getElementById('desktop-nav');
        const mobileNav = document.getElementById('mobile-nav'); // Extended inline nav
        const mobileMenu = document.getElementById('mobile-menu'); // Full screen overlay
        const burgerIcon = document.getElementById('burger-icon');
        const crossIcon = document.getElementById('cross-icon');
        const languageDropdown = document.getElementById('language-dropdown'); // Wrapper div

        const isDesktop = window.innerWidth >= 1400;

        if (isDesktop) {
            // Desktop Logic: Toggle Extended Nav
            // Default state: desktopNav visible, mobileNav hidden.

            const isExtendedOpen = desktopNav.style.display === 'none';

            if (isExtendedOpen) {
                // CLOSE Extended Nav -> SHOW Desktop Nav
                desktopNav.style.display = ''; // Reset to default (block/absolute)
                mobileNav.style.display = 'none';  // Force hide

                // Button State
                burgerIcon.classList.remove('hidden');
                crossIcon.classList.add('hidden');

                // Language Dropdown - show in default nav
                if (languageDropdown) languageDropdown.style.display = '';
            } else {
                // OPEN Extended Nav -> HIDE Desktop Nav
                desktopNav.style.display = 'none'; // Force hide
                mobileNav.style.display = 'flex';  // Force flex

                // Button State
                burgerIcon.classList.add('hidden');
                crossIcon.classList.remove('hidden');

                // Language Dropdown - hide in extended nav (use style to override Tailwind)
                if (languageDropdown) languageDropdown.style.display = 'none';
            }
        } else {
            // Mobile Logic: Toggle Full Screen Menu
            if (mobileMenu.classList.contains('hidden')) {
                // Open Menu
                mobileMenu.classList.remove('hidden');
                // Lock body scroll
                document.body.style.overflow = 'hidden';
            } else {
                // Close Menu
                mobileMenu.classList.add('hidden');
                // Unlock body scroll
                document.body.style.overflow = 'auto';
            }
        }
    }

    function toggleDarkModeMain() {
        // Toggle dark mode class on html element
        document.documentElement.classList.toggle('dark');

        // Animate the toggle circle
        const toggleCircle = document.getElementById('toggle-circle-main');
        if (toggleCircle) {
            if (document.documentElement.classList.contains('dark')) {
                toggleCircle.style.left = 'calc(100% - 32px)';
            } else {
                toggleCircle.style.left = '4px';
            }
        }

        // Save preference
        localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));

        // Also update accessibility if available
        if (typeof accessibility !== 'undefined' && accessibility.toggleTheme) {
            // Sync with accessibility module without re-triggering toggle
        }
    }

    // Initialize toggle position on page load for main header
    document.addEventListener('DOMContentLoaded', function () {
        const toggleCircle = document.getElementById('toggle-circle-main');
        if (toggleCircle && document.documentElement.classList.contains('dark')) {
            toggleCircle.style.left = 'calc(100% - 32px)';
        }
    });

    function toggleLanguageDropdown() {
        const menu = document.getElementById('language-menu');
        menu.classList.toggle('hidden');
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function (event) {
        const dropdown = document.getElementById('language-dropdown');
        const menu = document.getElementById('language-menu');
        if (dropdown && menu && !dropdown.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });
</script>