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
                        {{ __('Who We Are') }}
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
                        {{ __('Community To Veteran') }}
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
                <!-- Language toggle -->
                <button id="language-toggle-blue" class="hidden min-[1400px]:flex items-center space-x-1 text-white">
                    <span class="font-bold text-base">UA</span>
                    <img class="pb-1 brightness-0 invert" src="{{ asset('images/icons/arrow-down.svg') }}"
                        alt="Dropdown">
                </button>

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

                <!-- Dark Mode Switch -->
                <button class="transition-colors hidden min-[1400px]:block min-[1800px]:mr-[33px]"
                    onclick="toggleDarkMode()">
                    <img src="{{ asset('images/icons/switch.svg') }}" alt="Dark Mode Toggle"
                        class="brightness-0 invert h-[30px]">
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
</script>