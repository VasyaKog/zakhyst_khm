<header id="header">
    <div class="mx-auto my-10" style="padding-left: 50px; padding-right: 50px;">
        <div class="relative flex items-center justify-between h-24">

            <div class="flex items-center space-x-3 flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logos/logo-text.svg') }}" alt="ВЕТЕРАНСЬКИЙ ПРОСТІР">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div id="desktop-nav"
                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 max-[1399px]:hidden">
                <div class="flex items-center space-x-8 whitespace-nowrap">
                    <a href="{{ route('about') }}"
                        class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ПРО НАС
                    </a>
                    <a href="{{ route('services') }}"
                        class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ПОСЛУГИ
                    </a>
                    <a href="{{ route('contact') }}"
                        class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        КОНТАКТИ
                    </a>
                </div>
            </div>

            <div id="mobile-nav" class="hidden min-[1400px]:flex-1 min-w-0 mx-5">
                <!-- Use min-[1700px] breakpoint: 
                     - At 1728px (MacBook): Shows text-base/gap-8 (Large) 
                     - Below 1700px: Shrinks to text-sm/gap-5 (Compact) to prevent overlap -->
                <div class="flex items-center justify-center gap-3 xl:gap-5 min-[1700px]:gap-8 whitespace-nowrap px-4">
                    <a href="#"
                        class="text-black hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        МИ ПАМ'ЯТАЄМО
                    </a>
                    <a href="#"
                        class="text-black hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        НОВИНИ
                    </a>
                    <a href="#"
                        class="text-black hover:text-veteran-blue font-bold text-sm min-[1700px]:text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ГРОМАДА - ВЕТЕРАНУ
                    </a>
                    <a href="#"
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
                <div class="relative w-[30px] h-[19px]">
                    <button type="button" id="menu-toggle"
                        class="text-black hover:text-veteran-blue focus:outline-none focus:text-gray-900 transition-colors"
                        onclick="toggleMobileMenu()">
                        <!-- Burger Icon -->
                        <img id="burger-icon" src="{{ asset('images/icons/burger.svg') }}" alt="Menu">
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
                    onclick="toggleDarkMode()">
                    <img class="h-[30px]" src="{{ asset('images/icons/switch.svg') }}" alt="Dark Mode Toggle">
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
            if (desktopNav.classList.contains('hidden')) {
                // Show desktop nav, hide extended nav
                desktopNav.classList.remove('hidden');
                mobileNav.classList.add('hidden');
                mobileNav.classList.remove('flex'); // Remove flex when hidden

                // Show burger icon, hide cross icon
                burgerIcon.classList.remove('hidden');
                crossIcon.classList.add('hidden');

                // Show language toggle (reset inline style to let CSS classes work)
                languageToggle.style.display = '';
            } else {
                // Hide desktop nav, show extended nav
                desktopNav.classList.add('hidden');
                mobileNav.classList.remove('hidden');
                mobileNav.classList.add('flex'); // Add flex to show properly

                // Hide burger icon, show cross icon
                burgerIcon.classList.add('hidden');
                crossIcon.classList.remove('hidden');

                // Hide language toggle (force hide with inline style)
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