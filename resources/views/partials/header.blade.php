<header>
    <div class="mx-auto my-10" style="padding-left: 50px; padding-right: 50px;">
        <div class="relative flex items-center justify-between h-24">
            
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logos/logo-text.svg') }}" 
                     alt="ВЕТЕРАНСЬКИЙ ПРОСТІР">
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
            
            <div class="flex items-center gap-8"> <button class="flex items-center space-x-1 text-black">
                    <span class="font-bold text-base">UA</span>
                    <img class="pb-1"src="{{ asset('images/icons/arrow-down.svg') }}" 
                         alt="Dropdown">
                </button>
                
                <button type="button" 
                        class="text-black hover:text-veteran-blue focus:outline-none focus:text-gray-900"
                        onclick="toggleMobileMenu()">
                    <img src="{{ asset('images/icons/burger.svg') }}" 
                         alt="Menu">
                </button>
                
                <button class="mr-[65px] transition-colors"
                        onclick="toggleDarkMode()">
                    <img src="{{ asset('images/icons/switch.svg') }}" 
                         alt="Dark Mode Toggle">
                </button>
                
                <button class="bg-veteran-blue hover:bg-blue-700 w-[260px] h-[70px] text-white text-xl font-black px-12 py-6 rounded-full transition-colors">
                    ПІДТРИМАТИ
                </button>
            </div>
        </div>
    </div>
</header>