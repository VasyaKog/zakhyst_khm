<header id="header-blue" class="bg-veteran-blue">
    <div class="mx-auto my-10 px-4 min-[1250px]:px-[50px]">
        <div class="relative flex items-center justify-between h-24">

            <div class="flex items-center space-x-3 flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logos/logo-text.svg') }}"
                        class="h-[40px] min-[1250px]:h-full brightness-0 invert" alt="ВЕТЕРАНСЬКИЙ ПРОСТІР">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div id="desktop-nav-blue"
                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 max-[1399px]:hidden">
                <div class="flex items-center space-x-8 whitespace-nowrap">
                    <a href="{{ route('about') }}"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('About') }}
                    </a>
                    <a href="{{ route('services') }}"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('Services') }}
                    </a>
                    <a href="{{ route('contact') }}"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('Contacts') }}
                    </a>
                </div>
            </div>

            <div id="mobile-nav-blue" class="hidden min-[1400px]:flex-1 justify-center min-w-0 mx-5">
                <div class="flex items-center justify-center gap-3 xl:gap-5 min-[1700px]:gap-8 whitespace-nowrap px-4">
                    <a href="#"
                        class="text-white hover:text-blue-200 font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('We Remember') }}
                    </a>
                    <a href="{{ route('news') }}"
                        class="text-white hover:text-blue-200 font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('News') }}
                    </a>
                    <a href="{{ route('path') }}"
                        class="text-white hover:text-blue-200 font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('Community to Veteran') }}
                    </a>
                    <a href="{{ route('indifferent') }}"
                        class="text-white hover:text-blue-200 font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('To Indifferent') }}
                    </a>
                    <a href="#"
                        class="text-white hover:text-blue-200 font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        {{ __('Reviews') }}
                    </a>
                </div>
            </div>

            <div class="flex items-center gap-8 flex-shrink-0">
                <!-- Language Dropdown: Hidden on mobile, Visible > 1400px -->
                <div id="language-dropdown-blue" class="relative hidden min-[1400px]:block">
                    <button id="language-toggle-blue" class="flex items-center space-x-1 text-white"
                        onclick="toggleLanguageDropdownBlue()">
                        <span class="font-bold text-base">{{ strtoupper(app()->getLocale()) }}</span>
                        <img class="pb-1 brightness-0 invert" src="{{ asset('images/icons/arrow-down.svg') }}"
                            alt="Dropdown">
                    </button>
                    <div id="language-menu-blue"
                        class="hidden absolute top-full left-0 mt-2 bg-white shadow-lg rounded-lg overflow-hidden z-50 min-w-[80px]">
                        <a href="{{ route('lang.switch', 'ua') }}"
                            class="block px-4 py-2 text-sm font-bold text-black hover:bg-gray-100 {{ app()->getLocale() === 'ua' ? 'bg-gray-100' : '' }}">
                            UA
                        </a>
                        <a href="{{ route('lang.switch', 'en') }}"
                            class="block px-4 py-2 text-sm font-bold text-black hover:bg-gray-100 {{ app()->getLocale() === 'en' ? 'bg-gray-100' : '' }}">
                            EN
                        </a>
                    </div>
                </div>

                <!-- Burger/Cross Button -->
                <div class="relative w-[30px] h-[19px] max-[768px]:w-[45px] max-[768px]:h-[30px]">
                    <button type="button" id="menu-toggle-blue"
                        class="text-white hover:text-blue-200 focus:outline-none transition-colors"
                        onclick="toggleMobileMenuBlue()">
                        <!-- Burger Icon -->
                        <img id="burger-icon-blue" src="{{ asset('images/icons/burger.svg') }}" alt="Menu"
                            class="brightness-0 invert max-[768px]:w-[45px] max-[768px]:h-[30px]">
                        <!-- Cross Icon (Hidden by default) -->
                        <div id="cross-icon-blue" class="w-6 h-6 hidden">
                            <div
                                class="w-full h-[3px] bg-white transform rotate-45 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            </div>
                            <div
                                class="w-full h-[3px] bg-white transform -rotate-45 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            </div>
                        </div>
                    </button>
                </div>

                <!-- Dark Mode Switch - Animated Pill Toggle -->
                <button id="dark-mode-toggle-blue"
                    class="relative w-[70px] h-[40px] hidden min-[1400px]:flex items-center justify-between px-[8px] rounded-full border-2 border-white transition-all duration-300 min-[1800px]:mr-[33px]"
                    onclick="toggleDarkMode()">
                    <!-- Sun Icon (Left) - Figma exact -->
                    <svg class="w-[20px] h-[20px] z-10" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="11" stroke="white" stroke-width="2" />
                    </svg>
                    <!-- Moon Icon (Right) - Figma exact -->
                    <svg class="w-[18px] h-[20px] z-10" viewBox="0 0 21 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.22205 24.0145C11.4036 24.0111 14.4538 22.7457 16.7035 20.496C18.9532 18.2463 20.2186 15.1961 20.2221 12.0145C20.3751 3.05854 10.1911 -2.97046 2.43105 1.52354L0.87805 2.38554L2.42105 3.26554C9.12105 6.95354 8.63105 17.1355 1.62105 20.1715L4.95911e-05 20.9025L1.46705 21.9085C3.45369 23.278 5.80914 24.0124 8.22205 24.0145ZM8.22205 2.01454C10.8733 2.01745 13.4152 3.07196 15.2899 4.94669C17.1646 6.82142 18.2191 9.36327 18.2221 12.0145C18.3771 19.1315 10.4591 24.2145 4.06705 21.0965C5.56351 20.0922 6.80405 18.7515 7.68934 17.1817C8.57464 15.6119 9.08009 13.8567 9.16523 12.0565C9.25038 10.2562 8.91285 8.46111 8.17968 6.81476C7.4465 5.16841 6.33804 3.71659 4.94305 2.57554C5.99582 2.20199 7.10497 2.01222 8.22205 2.01454Z"
                            fill="white" />
                    </svg>
                    <!-- Sliding Circle (covers active icon) -->
                    <div id="toggle-circle-blue"
                        class="absolute left-[4px] w-[28px] h-[28px] bg-white rounded-full transition-[left] duration-300 ease-in-out">
                    </div>
                </button>

                <button onclick="openDonationModal()"
                    class="hidden min-[1400px]:flex bg-white hover:bg-blue-100 w-[260px] h-[70px] text-veteran-blue text-xl font-black px-12 py-6 rounded-full transition-colors items-center justify-center">
                    {{ __('Support') }}
                </button>
            </div>
        </div>
    </div>
</header>
@include('partials.mobile-menu')

<script>
    function toggleMobileMenuBlue() {
        const desktopNav = document.getElementById('desktop-nav-blue');
        const mobileNav = document.getElementById('mobile-nav-blue');
        const burgerIcon = document.getElementById('burger-icon-blue');
        const crossIcon = document.getElementById('cross-icon-blue');
        const languageToggle = document.getElementById('language-toggle-blue');

        // Reuse main mobile menu overlay
        const mobileMenu = document.getElementById('mobile-menu');

        const isDesktop = window.innerWidth >= 1400;

        if (isDesktop) {
            // Desktop Logic
            const isExtendedOpen = desktopNav.style.display === 'none' || desktopNav.classList.contains('hidden');

            if (isExtendedOpen) {
                // CLOSE Extended -> SHOW Desktop
                desktopNav.style.display = '';
                desktopNav.classList.remove('hidden');

                mobileNav.style.display = 'none';
                mobileNav.classList.add('hidden');

                burgerIcon.classList.remove('hidden');
                crossIcon.classList.add('hidden');
                languageToggle.style.display = '';
                languageToggle.classList.remove('hidden');
            } else {
                // OPEN Extended -> HIDE Desktop
                desktopNav.style.display = 'none';
                desktopNav.classList.add('hidden');

                mobileNav.style.display = 'flex';
                mobileNav.classList.remove('hidden');

                burgerIcon.classList.add('hidden');
                crossIcon.classList.remove('hidden');
                languageToggle.style.display = 'none';
                languageToggle.classList.add('hidden');
            }
        } else {
            // Mobile Logic: Toggle Full Screen Menu
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            } else {
                mobileMenu.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }
    }

    function toggleDarkMode() {
        // Toggle dark mode class on html element
        document.documentElement.classList.toggle('dark');

        // Animate the toggle circle
        const toggleCircle = document.getElementById('toggle-circle-blue');
        if (toggleCircle) {
            if (document.documentElement.classList.contains('dark')) {
                toggleCircle.style.left = 'calc(100% - 32px)';
            } else {
                toggleCircle.style.left = '4px';
            }
        }

        // Save preference
        localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
    }

    // Initialize toggle position on page load
    document.addEventListener('DOMContentLoaded', function () {
        const toggleCircle = document.getElementById('toggle-circle-blue');
        if (toggleCircle && document.documentElement.classList.contains('dark')) {
            toggleCircle.style.left = 'calc(100% - 32px)';
        }
    });

    function toggleLanguageDropdownBlue() {
        const menu = document.getElementById('language-menu-blue');
        menu.classList.toggle('hidden');
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function (event) {
        const dropdown = document.getElementById('language-dropdown-blue');
        const menu = document.getElementById('language-menu-blue');
        if (dropdown && menu && !dropdown.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });
</script>