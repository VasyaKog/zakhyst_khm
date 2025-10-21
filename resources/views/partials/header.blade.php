<header id="header">
    <div class="mx-auto my-10" style="padding-left: 50px; padding-right: 50px;">
        <div class="relative flex items-center justify-between h-24">
            
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logos/logo-text.svg') }}" 
                     alt="ВЕТЕРАНСЬКИЙ ПРОСТІР">
            </div>
            
            <!-- Desktop Navigation -->
            <div id="desktop-nav" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                <div class="flex items-center space-x-8">
                    <a href="{{ route('home') }}" 
                       class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors">
                        ПРО НАС
                    </a>
                    <a href="{{ route('services') }}" 
                       class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors">
                        ПОСЛУГИ
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors">
                        КОНТАКТИ
                    </a>
                </div>
            </div>
            
            <!-- Mobile Navigation (Hidden by default) -->
            <div id="mobile-nav" class="relative ml-[90px] hidden">
                <div class="flex items-center space-x-8">
                    <a href="#" class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors">
                        МИ ПАМ'ЯТАЄМО
                    </a>
                    <a href="#" class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors">
                        НОВИНИ
                    </a>
                    <a href="#" class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors">
                        ГРОМАДА - ВЕТЕРАНУ
                    </a>
                    <a href="#" class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors">
                        НЕБАЙДУЖИМ
                    </a>
                    <a href="#" class="text-black hover:text-veteran-blue font-bold text-base uppercase leading-tight tracking-wide transition-colors">
                        ВІДГУКИ
                    </a>
                </div>
            </div>
            
            <div class="flex items-center gap-8">
                <button id="language-toggle" class="flex items-center space-x-1 text-black">
                    <span class="font-bold text-base">UA</span>
                    <img class="pb-1" src="{{ asset('images/icons/arrow-down.svg') }}" 
                         alt="Dropdown">
                </button>
                
                <!-- Burger/Cross Button -->
                 <div class="relative w-[30px] h-[19px]">
                    <button type="button" 
                            id="menu-toggle"
                            class="text-black hover:text-veteran-blue focus:outline-none focus:text-gray-900 transition-colors"
                            onclick="toggleMobileMenu()">
                        <!-- Burger Icon -->
                        <img id="burger-icon" src="{{ asset('images/icons/burger.svg') }}" 
                            alt="Menu">
                        <!-- Cross Icon (Hidden by default) -->
                        <div id="cross-icon" class="w-6 h-6 hidden">
                            <div class="w-full h-[3px] bg-black transform rotate-45 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
                            <div class="w-full h-[3px] bg-black transform -rotate-45 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"></div>
                        </div>
                    </button>
                </div>
                
                <button class="mr-[65px] transition-colors"
                        onclick="toggleDarkMode()">
                    <img src="{{ asset('images/icons/switch.svg') }}" 
                         alt="Dark Mode Toggle">
                </button>
                
                <button onclick="openDonationModal()" class="bg-veteran-blue hover:bg-blue-700 w-[260px] h-[70px] text-white text-xl font-black px-12 py-6 rounded-full transition-colors flex items-center justify-center">
                    ПІДТРИМАТИ
                </button>
            </div>
        </div>
    </div>
</header>

<script>
function toggleMobileMenu() {
    const desktopNav = document.getElementById('desktop-nav');
    const mobileNav = document.getElementById('mobile-nav');
    const burgerIcon = document.getElementById('burger-icon');
    const crossIcon = document.getElementById('cross-icon');
    const languageToggle = document.getElementById('language-toggle');
    
    // Toggle navigation visibility
    if (desktopNav.classList.contains('hidden')) {
        // Show desktop nav, hide mobile nav
        desktopNav.classList.remove('hidden');
        mobileNav.classList.add('hidden');
        
        // Show burger icon, hide cross icon
        burgerIcon.classList.remove('hidden');
        crossIcon.classList.add('hidden');
        languageToggle.classList.remove('hidden');
    } else {
        // Hide desktop nav, show mobile nav
        desktopNav.classList.add('hidden');
        mobileNav.classList.remove('hidden');
        
        // Hide burger icon, show cross icon
        burgerIcon.classList.add('hidden');
        crossIcon.classList.remove('hidden');
        languageToggle.classList.add('hidden');

    }
}

function toggleDarkMode() {
    // Dark mode toggle functionality
    console.log('Dark mode toggle clicked');
}
</script>