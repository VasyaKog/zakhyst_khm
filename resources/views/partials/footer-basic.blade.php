<footer
    class="flex flex-wrap min-[1250px]:flex-nowrap items-center justify-center min-[1250px]:justify-between mt-[40px] mb-[50px] px-5 min-[1250px]:px-[2.6%] gap-10 min-[1250px]:gap-0">
    <!-- Organization Logo and Name -->
    <img src="{{ asset('images/logos/logo-text.svg') }}" alt="Logo"
        class="filter brightness-0 flex-shrink-0 mb-6 min-[1250px]:mb-0">

    <!-- Social Media Icons (Mobile: Order Last) -->
    <div
        class="flex items-center flex-shrink-0 mb-6 min-[1250px]:mb-0 min-[1250px]:order-none order-last w-full min-[1250px]:w-auto justify-center">
        <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="w-6 h-6 mr-5"
            style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
        <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram" class="w-6 h-6"
            style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
    </div>

    <!-- Working Hours and Address -->
    <div
        class="grid grid-cols-1 sm:grid-cols-2 min-[1250px]:flex min-[1250px]:flex-row mt-2 flex-shrink-0 items-center min-[1250px]:items-start text-center min-[1250px]:text-left gap-6 min-[1250px]:gap-0 w-full min-[1250px]:w-auto justify-items-center">
        <div class="text-black text-base font-bold mr-0 min-[1250px]:mr-[80px]">
            Пн-Пт 09:00 - 17:30<br />
            Сб-Нд за домовленістю
        </div>
        <div class="text-black text-base font-bold">
            м. Хмельницький<br />
            вул. Кам'янецька, 76
        </div>
    </div>

    <!-- Contact Information -->
    <div
        class="flex flex-wrap min-[1250px]:flex-nowrap min-[1250px]:flex-col justify-center min-[1250px]:items-end gap-x-8 gap-y-4 min-[1250px]:gap-0 w-full min-[1250px]:w-auto items-center">
        <div
            class="text-black text-base font-bold min-[1250px]:mb-5 text-center min-[1250px]:text-right w-full sm:w-auto">
            veteranskiprostirkhm.gmail.com
        </div>
        <div class="flex items-center justify-center w-full sm:w-auto">
            <img src="{{ asset('images/icons/watsapnp.svg') }}" alt="WhatsApp" class="w-6 h-6 mr-2"
                style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
            <img src="{{ asset('images/icons/signal.svg') }}" alt="Signal" class="w-6 h-6 mr-2"
                style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
            <img src="{{ asset('images/icons/viber.svg') }}" alt="Viber" class="w-6 h-6 mr-5"
                style="filter: brightness(0) saturate(100%) invert(40%) sepia(98%) saturate(1678%) hue-rotate(207deg) brightness(95%) contrast(91%);">
            <span class="text-black text-base font-bold whitespace-nowrap">+38 067 563 0090</span>
        </div>
    </div>
</footer>