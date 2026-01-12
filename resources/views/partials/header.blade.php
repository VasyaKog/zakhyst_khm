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
                <!-- Default gap is 32px. Large screens add 33px margin. -->
                <button class="transition-colors hidden min-[1400px]:block min-[1800px]:mr-[33px]"
                    onclick="accessibility.toggleTheme()">
                    <img class="h-[30px] theme-toggle-icon dark:invert transition-all"
                        src="{{ asset('images/icons/switch.svg') }}" alt="Dark Mode Toggle">
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