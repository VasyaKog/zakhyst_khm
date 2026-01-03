<footer class="mt-[40px] mb-[50px] px-5 min-[1250px]:px-[50px]">
    <!-- Desktop Layout (>=1250px) -->
    <div class="hidden min-[1250px]:flex justify-between items-start">
        <!-- Logo -->
        <img src="{{ asset('images/logos/logo-text.svg') }}" alt="Logo" class="filter brightness-0 flex-shrink-0">

        <!-- Socials -->
        <div class="flex py-6 gap-4">
            <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="w-7 h-7"
                style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
            <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram" class="w-7 h-7"
                style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
        </div>

        <!-- Working Hours & Address -->
        <div class="flex gap-[80px] py-4">
            <div class="text-black text-base font-bold text-left">
                Пн-Пт 09:00 - 17:30<br />
                Сб-Нд за домовленістю
            </div>
            <div class="text-black text-base font-bold text-left">
                м. Хмельницький<br />
                вул. Кам'янецька, 76
            </div>
        </div>

        <!-- Contacts -->
        <div class="flex flex-col items-end">
            <div class="text-black text-base font-bold mb-5 text-right">
                veteranskiprostirkhm.gmail.com
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/icons/watsapnp.svg') }}" alt="WhatsApp" class="w-6 h-6 mr-2"
                    style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
                <img src="{{ asset('images/icons/signal.svg') }}" alt="Signal" class="w-6 h-6 mr-2"
                    style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
                <img src="{{ asset('images/icons/viber.svg') }}" alt="Viber" class="w-6 h-6 mr-5"
                    style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
                <span class="text-black text-base font-bold whitespace-nowrap">+38 067 563 0090</span>
            </div>
        </div>
    </div>

    <!-- Mobile Layout (<1250px) -->
    <div class="block min-[1250px]:hidden">
        <!-- Top Row: Logo + Socials -->
        <div class="flex justify-between items-start mb-6">
            <img src="{{ asset('images/logos/logo-text.svg') }}" alt="Logo" class="filter brightness-0 w-[206px]">

            <div class="flex gap-4">
                <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="w-6 h-6"
                    style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
                <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram" class="w-6 h-6"
                    style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
            </div>
        </div>

        <!-- Middle Row: Schedule + Address -->
        <div class="flex justify-between items-start mb-4">
            <!-- Schedule -->
            <div class="text-black text-sm font-bold font-montserrat leading-[18px]">
                Пн-Пт 09:00 - 17:30<br>
                Сб-Нд за домовленістю
            </div>

            <!-- Address -->
            <div class="text-black text-sm font-bold font-montserrat leading-[18px] text-left">
                м. Хмельницький<br>
                вул. Кам'янецька, 76
            </div>
        </div>

        <!-- Bottom Row: Email + Phone -->
        <div class="flex justify-between items-start">
            <!-- Email -->
            <div class="text-black text-sm font-bold font-montserrat leading-[18px]">
                veteranskiprostirkhm@gmail.com
            </div>

            <!-- Phone -->
            <div class="text-black text-sm font-bold font-montserrat leading-[18px] text-right">
                +38 067 563 0090
            </div>
        </div>
    </div>
</footer>