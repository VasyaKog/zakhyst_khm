<header>
    <div class="mx-auto" style="padding-left: 50px; padding-right: 50px;">
        <div class="relative flex items-center justify-between h-24">
            
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logos/logo-text.svg') }}" 
                     alt="ВЕТЕРАНСЬКИЙ ПРОСТІР" 
                     class="h-12 w-auto">
            </div>
            
            <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
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
            
            <div class="flex items-center gap-8"> <button class="flex items-center space-x-1 text-black hover:text-veteran-blue transition-colors">
                    <span class="font-bold text-base">UA</span>
                    <img src="{{ asset('images/icons/arrow-down.svg') }}" 
                         alt="Dropdown" 
                         class="h-3 w-3">
                </button>
                
                <button type="button" 
                        class="text-black hover:text-veteran-blue focus:outline-none focus:text-gray-900"
                        onclick="toggleMobileMenu()">
                    <img src="{{ asset('images/icons/burger.svg') }}" 
                         alt="Menu" 
                         class="h-[19px] w-[30px]">
                </button>
                
                <button class="transition-colors"
                        onclick="toggleDarkMode()">
                    <img src="{{ asset('images/icons/switch.svg') }}" 
                         alt="Dark Mode Toggle" 
                         class="h-6 w-auto">
                </button>
                
                <button class="bg-veteran-blue hover:bg-blue-700 w-[260px] h-[70px] text-white font-black px-6 py-2 rounded-full transition-colors">
                    ПІДТРИМАТИ
                </button>
            </div>
        </div>
    </div>
</header>