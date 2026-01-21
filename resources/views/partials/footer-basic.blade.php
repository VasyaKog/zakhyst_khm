<footer class="mt-[40px] mb-[50px] px-5 min-[1250px]:px-[50px]">
    <!-- Desktop Layout (>=1250px) -->
    <div class="hidden min-[1250px]:flex justify-between items-start">
        <!-- Logo -->
        <img src="{{ asset('images/logos/logo-text.svg') }}" alt="Logo"
            class="filter brightness-0 dark:invert flex-shrink-0 transition-all duration-300">

        <!-- Socials -->
        <div class="flex py-6 gap-4">
            <a href="https://www.facebook.com/zahystveteran" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook"
                    class="w-7 h-7 dark:brightness-0 dark:invert transition-all duration-300"
                    style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
            </a>
            <a href="https://www.instagram.com/veterankhm/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram"
                    class="w-7 h-7 dark:brightness-0 dark:invert transition-all duration-300"
                    style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
            </a>
        </div>

        <!-- Working Hours & Address -->
        <div class="flex gap-[80px] py-4">
            <div class="text-black dark:text-white text-base font-bold text-left transition-colors">
                {{ __('Mon-Fri') }} 09:00 - 17:30<br />
                {{ __('Sat-Sun') }} {{ __('By Appointment') }}
            </div>
            <div class="text-black dark:text-white text-base font-bold text-left transition-colors">
                {{ __('City Khmelnytskyi') }}<br />
                {{ __('Address Street') }}
            </div>
        </div>

        <!-- Contacts -->
        <div class="flex flex-col items-end">
            <div class="text-black dark:text-white text-base font-bold mb-5 text-right transition-colors">
                veteranskiprostirkhm.gmail.com
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/icons/watsapnp.svg') }}" alt="WhatsApp"
                    class="w-6 h-6 mr-2 dark:brightness-0 dark:invert transition-all duration-300"
                    style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
                <img src="{{ asset('images/icons/signal.svg') }}" alt="Signal"
                    class="w-6 h-6 mr-2 dark:brightness-0 dark:invert transition-all duration-300"
                    style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
                <img src="{{ asset('images/icons/viber.svg') }}" alt="Viber"
                    class="w-6 h-6 mr-5 dark:brightness-0 dark:invert transition-all duration-300"
                    style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
                <span class="text-black dark:text-white text-base font-bold whitespace-nowrap transition-colors">+38 067
                    563 0090</span>
            </div>
        </div>
    </div>

    <!-- Mobile Layout (<1250px) -->
    <div class="block min-[1250px]:hidden">
        <!-- Top Row: Logo + Socials -->
        <div class="flex justify-between items-start mb-6 flex-wrap gap-4">
            <img src="{{ asset('images/logos/logo-text.svg') }}" alt="Logo"
                class="filter brightness-0 dark:invert w-[180px] max-w-[50%] transition-all duration-300">

            <div class="flex gap-4 flex-shrink-0">
                <a href="https://www.facebook.com/zahystveteran" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook"
                        class="w-6 h-6 dark:brightness-0 dark:invert transition-all duration-300"
                        style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
                </a>
                <a href="https://www.instagram.com/veterankhm/" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram"
                        class="w-6 h-6 dark:brightness-0 dark:invert transition-all duration-300"
                        style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
                </a>
            </div>
        </div>

        <!-- Middle Row: Schedule + Address -->
        <div class="flex justify-between items-start mb-4 flex-wrap gap-4">
            <!-- Schedule -->
            <div class="text-black dark:text-white text-sm font-bold font-montserrat leading-snug transition-colors">
                {{ __('Mon-Fri') }} 09:00 - 17:30<br>
                {{ __('Sat-Sun') }} {{ __('By Appointment') }}
            </div>

            <!-- Address -->
            <div
                class="text-black dark:text-white text-sm font-bold font-montserrat leading-snug text-left transition-colors">
                {{ __('City Khmelnytskyi') }}<br>
                {{ __('Address Street') }}
            </div>
        </div>

        <!-- Bottom Row: Email + Phone -->
        <div class="flex justify-between items-start flex-wrap gap-4">
            <!-- Email -->
            <div
                class="text-black dark:text-white text-sm font-bold font-montserrat leading-snug break-all transition-colors">
                veteranskiprostirkhm@gmail.com
            </div>

            <!-- Phone -->
            <div
                class="text-black dark:text-white text-sm font-bold font-montserrat leading-snug text-right whitespace-nowrap transition-colors">
                +38 067 563 0090
            </div>
        </div>
    </div>
</footer>