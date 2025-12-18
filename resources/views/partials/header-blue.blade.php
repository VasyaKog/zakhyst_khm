<header id="header" class="bg-veteran-blue">
    <div class="mx-auto my-10" style="padding-left: 50px; padding-right: 50px;">
        <div class="relative flex items-center justify-between h-24">

            <div class="flex items-center space-x-3 flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logos/logo-text.svg') }}" alt="ВЕТЕРАНСЬКИЙ ПРОСТІР"
                        class="brightness-0 invert">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div id="desktop-nav-blue" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                <div class="flex items-center space-x-8 whitespace-nowrap">
                    <a href="{{ route('about') }}"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ПРО НАС
                    </a>
                    <a href="{{ route('services') }}"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ПОСЛУГИ
                    </a>
                    <a href="{{ route('contact') }}"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        КОНТАКТИ
                    </a>
                </div>
            </div>

            <!-- Mobile Navigation (Hidden by default) -->
            <div id="mobile-nav-blue" class="relative ml-[90px] hidden">
                <div class="flex items-center space-x-8 whitespace-nowrap">
                    <a href="#"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        МИ ПАМ'ЯТАЄМО
                    </a>
                    <a href="#"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        НОВИНИ
                    </a>
                    <a href="#"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ГРОМАДА - ВЕТЕРАНУ
                    </a>
                    <a href="#"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        НЕБАЙДУЖИМ
                    </a>
                    <a href="#"
                        class="text-white hover:text-blue-200 font-bold text-base uppercase leading-tight tracking-wide transition-colors whitespace-nowrap">
                        ВІДГУКИ
                    </a>
                </div>
            </div>

            <div class="flex items-center gap-8 flex-shrink-0">
                <button id="language-toggle-blue" class="flex items-center space-x-1 text-white">
                    <span class="font-bold text-base">UA</span>
                    <img class="pb-1 brightness-0 invert" src="{{ asset('images/icons/arrow-down.svg') }}"
                        alt="Dropdown">
                </button>

                <!-- Burger/Cross Button -->
                <div class="relative w-[30px] h-[19px]">
                    <button type="button" id="menu-toggle-blue"
                        class="text-white hover:text-blue-200 focus:outline-none transition-colors"
                        onclick="toggleMobileMenuBlue()">
                        <!-- Burger Icon -->
                        <img id="burger-icon-blue" src="{{ asset('images/icons/burger.svg') }}" alt="Menu"
                            class="brightness-0 invert">
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

                <button class="mr-[65px] transition-colors" onclick="toggleDarkMode()">
                    <img src="{{ asset('images/icons/switch.svg') }}" alt="Dark Mode Toggle"
                        class="brightness-0 invert">
                </button>

                <button onclick="openDonationModal()"
                    class="bg-white hover:bg-blue-100 w-[260px] h-[70px] text-veteran-blue text-xl font-black px-12 py-6 rounded-full transition-colors flex items-center justify-center">
                    ПІДТРИМАТИ
                </button>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleMobileMenuBlue() {
        const desktopNav = document.getElementById('desktop-nav-blue');
        const mobileNav = document.getElementById('mobile-nav-blue');
        const burgerIcon = document.getElementById('burger-icon-blue');
        const crossIcon = document.getElementById('cross-icon-blue');
        const languageToggle = document.getElementById('language-toggle-blue');

        if (desktopNav.classList.contains('hidden')) {
            desktopNav.classList.remove('hidden');
            mobileNav.classList.add('hidden');
            burgerIcon.classList.remove('hidden');
            crossIcon.classList.add('hidden');
            languageToggle.classList.remove('hidden');
        } else {
            desktopNav.classList.add('hidden');
            mobileNav.classList.remove('hidden');
            burgerIcon.classList.add('hidden');
            crossIcon.classList.remove('hidden');
            languageToggle.classList.add('hidden');
        }
    }
</script>