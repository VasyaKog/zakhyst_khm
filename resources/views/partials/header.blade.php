<header>
    <div class="mx-auto" style="padding-left: 50px; padding-right: 50px;">
        <div class="flex items-center h-24">
            <!-- Logo Section - Left -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logos/logo-text.svg') }}" 
                     alt="ВЕТЕРАНСЬКИЙ ПРОСТІР" 
                     class="h-12 w-auto">
            </div>
            
            <!-- Navigation - Center -->
            <div class="flex-1 flex justify-center">
                <div class="flex items-center space-x-8">
                    <a href="{{ route('about') }}" 
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
            
            <!-- Right Side Controls -->
            <div class="flex items-center" style="gap: 30px;">
                <!-- Language Selector -->
                <button class="flex items-center space-x-1 text-black hover:text-veteran-blue transition-colors">
                    <span class="font-bold text-base">UA</span>
                    <img src="{{ asset('images/icons/arrow-down.svg') }}" 
                         alt="Dropdown" 
                         class="h-3 w-3">
                </button>
                
                <!-- Menu Button -->
                <button type="button" 
                        class="text-black hover:text-veteran-blue focus:outline-none focus:text-gray-900"
                        onclick="toggleMobileMenu()">
                    <img src="{{ asset('images/icons/burger.svg') }}" 
                         alt="Menu" 
                         class="h-[19px] w-[30px]">
                </button>
                
                <!-- Dark Mode Toggle -->
                <button class="transition-colors"
                        onclick="toggleDarkMode()">
                    <img src="{{ asset('images/icons/switch.svg') }}" 
                         alt="Dark Mode Toggle" 
                         class="h-6 w-auto">
                </button>
                
                <!-- Support Button -->
                <button class="bg-veteran-blue hover:bg-blue-700 w-[260px] h-[70px] text-white font-bold px-6 py-2 rounded-full transition-colors">
                    ПІДТРИМАТИ
                </button>
            </div>
        </div>
    </div>
</header>

<script>
function toggleDarkMode() {
    // Add dark mode logic here
    console.log('Dark mode toggled');
}

function toggleMobileMenu() {
    // Add mobile menu logic here
    console.log('Mobile menu toggled');
}
</script>
