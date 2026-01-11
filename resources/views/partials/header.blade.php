<header id="header">
    <div class="mx-auto my-10 px-4 min-[1250px]:px-[50px]">
        <div class="relative flex items-center justify-between min-h-24">

            <div class="flex items-center space-x-3 flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logos/logo-text.svg') }}" class="h-[40px] min-[1250px]:h-full"
                        alt="ВЕТЕРАНСЬКИЙ ПРОСТІР">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div id="desktop-nav"
                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 max-[1399px]:hidden">
                <div class="flex items-center space-x-8 whitespace-nowrap">
                    <a href="{{ route('about') }}"
                        class="text-black dark:text-white hover:text-veteran-blue dark:hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ПРО НАС
                    </a>
                    <a href="{{ route('services') }}"
                        class="text-black dark:text-white hover:text-veteran-blue dark:hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ПОСЛУГИ
                    </a>
                    <a href="{{ route('contact') }}"
                        class="text-black dark:text-white hover:text-veteran-blue dark:hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        КОНТАКТИ
                    </a>
                </div>
            </div>

            <div id="mobile-nav" class="hidden min-[1400px]:flex-1 justify-center min-w-0 mx-5">
                <div class="flex items-center justify-center gap-3 xl:gap-5 min-[1700px]:gap-8 flex-wrap">
                    <a href="#"
                        class="text-black hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        МИ ПАМ'ЯТАЄМО
                    </a>
                    <a href="{{ route('news') }}"
                        class="text-black hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        НОВИНИ
                    </a>
                    <a href="{{ route('path') }}"
                        class="text-black hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ГРОМАДА - ВЕТЕРАНУ
                    </a>
                    <a href="{{ route('indifferent') }}"
                        class="text-black hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        НЕБАЙДУЖИМ
                    </a>
                    <a href="#"
                        class="text-black hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ВІДГУКИ
                    </a>
                </div>
            </div>

            <div class="flex items-center gap-8 flex-shrink-0">
                <!-- Language toggle: Hidden on mobile (moved to burger menu), Visible > 1400px -->
                <button id="language-toggle" class="hidden min-[1400px]:flex items-center space-x-1 text-black">
                    <span class="font-bold text-base">UA</span>
                    <img class="pb-1" src="{{ asset('images/icons/arrow-down.svg') }}" alt="Dropdown">
                </button>

                <!-- Burger/Cross Button: Visible on Mobile (<1400), Hidden on Desktop (>1400) UNLESS extended nav is open -->
                <!-- Note: Logic handled by JS, but base class setup here -->
                <div class="relative w-[30px] h-[19px] max-[768px]:w-[45px] max-[768px]:h-[30px]">
                    <button type="button" id="menu-toggle"
                        class="text-black hover:text-veteran-blue focus:outline-none focus:text-gray-900 transition-colors"
                        onclick="toggleMobileMenu()">
                        <!-- Burger Icon -->
                        <img id="burger-icon" src="{{ asset('images/icons/burger.svg') }}"
                            class="max-[768px]:w-[45px] max-[768px]:h-[30px]" alt="Menu">
                        <!-- Cross Icon (Hidden by default) -->
                        <div id="cross-icon" class="w-6 h-6 hidden">
                            <div
                                class="w-full h-[3px] bg-black transform rotate-45 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            </div>
                            <div
                                class="w-full h-[3px] bg-black transform -rotate-45 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            </div>
                        </div>
                    </button>
                </div>

                <!-- Dark Mode Switch: Hidden on mobile, Visible > 1400px -->
                <!-- Default gap is 32px. Large screens add 33px margin. -->
                <button class="transition-colors hidden min-[1400px]:block min-[1800px]:mr-[33px]"
                    onclick="accessibility.toggleTheme()">
                    <img class="h-[30px] theme-toggle-icon" src="{{ asset('images/icons/switch.svg') }}"
                        alt="Dark Mode Toggle">
                </button>

                <button onclick="openDonationModal()"
                    class="hidden min-[1400px]:flex bg-veteran-blue hover:bg-blue-700 w-[260px] h-[70px] text-white text-xl font-black px-12 py-6 rounded-full transition-colors items-center justify-center">
                    ПІДТРИМАТИ
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
        const languageToggle = document.getElementById('language-toggle');

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

                // Language Toggle
                languageToggle.style.display = '';
            } else {
                // OPEN Extended Nav -> HIDE Desktop Nav
                desktopNav.style.display = 'none'; // Force hide
                mobileNav.style.display = 'flex';  // Force flex

                // Button State
                burgerIcon.classList.add('hidden');
                crossIcon.classList.remove('hidden');

                // Language Toggle
                languageToggle.style.display = 'none';
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
</script>