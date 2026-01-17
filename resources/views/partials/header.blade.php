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

                <!-- Dark Mode Switch: Hidden on mobile, Visible > 1400px -->
                <!-- Pill-style toggle with Sun/Moon icons matching mobile menu -->
                <button
                    class="h-[36px] w-[72px] hidden min-[1400px]:flex items-center justify-center gap-0.5 border-2 border-gray-400 dark:border-zinc-500 rounded-full transition-colors bg-white dark:bg-zinc-800 min-[1800px]:mr-[33px]"
                    onclick="accessibility.toggleTheme()">
                    <!-- Sun Icon -->
                    <div
                        class="w-7 h-7 flex items-center justify-center rounded-full bg-gray-200 dark:bg-transparent transition-colors">
                        <svg class="w-4 h-4 text-gray-800 dark:text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                        </svg>
                    </div>
                    <!-- Moon Icon -->
                    <div
                        class="w-7 h-7 flex items-center justify-center rounded-full bg-transparent dark:bg-gray-200 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-800" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>

                <button onclick="window.openDonationModal()"
                    class="hidden min-[1400px]:block w-[200px] h-[50px] bg-veteran-blue hover:bg-blue-700 text-white font-black text-sm uppercase rounded-full transition-colors tracking-wide">
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

    function toggleDarkMode() {
        // Dark mode toggle functionality
        console.log('Dark mode toggle clicked');
    }

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