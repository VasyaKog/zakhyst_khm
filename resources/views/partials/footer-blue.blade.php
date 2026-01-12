<footer class="mt-[40px] mb-[50px] px-5 min-[1250px]:px-[50px]">
    <!-- Desktop Layout (>=1250px) -->
    <div class="hidden min-[1250px]:flex justify-between items-start">
        <!-- Logo -->
        <img src="{{ asset('images/logos/logo-text.svg') }}" alt="Logo" class="brightness-0 invert flex-shrink-0">

        <!-- Socials -->
        <div class="flex py-6 gap-4">
            <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="w-7 h-7 brightness-0 invert">
            <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram" class="w-7 h-7 brightness-0 invert">
        </div>

        <!-- Working Hours & Address -->
        <div class="flex gap-[80px] py-4">
            <div class="text-white text-base font-bold text-left">
                {!! nl2br(__('Working Hours')) !!}
            </div>
            <div class="text-white text-base font-bold text-left">
                {{ __('Address City') }}<br />
                {{ __('Address Street') }}
            </div>
        </div>

        <!-- Contacts -->
        <div class="flex flex-col items-end">
            <div class="text-white text-base font-bold mb-5 text-right">
                veteranskiprostirkhm.gmail.com
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/icons/watsapnp.svg') }}" alt="WhatsApp"
                    class="w-6 h-6 mr-2 brightness-0 invert">
                <img src="{{ asset('images/icons/signal.svg') }}" alt="Signal" class="w-6 h-6 mr-2 brightness-0 invert">
                <img src="{{ asset('images/icons/viber.svg') }}" alt="Viber" class="w-6 h-6 mr-5 brightness-0 invert">
                <span class="text-white text-base font-bold whitespace-nowrap">+38 067 563 0090</span>
            </div>
        </div>
    </div>

    <!-- Mobile Layout (<1250px) -->
    <div class="block min-[1250px]:hidden">
        <!-- Top Row: Logo + Socials -->
        <div class="flex justify-between items-start mb-6">
            <img src="{{ asset('images/logos/logo-text.svg') }}" alt="Logo" class="brightness-0 invert w-[206px]">

            <div class="flex gap-4">
                <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="w-6 h-6 brightness-0 invert">
                <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram"
                    class="w-6 h-6 brightness-0 invert">
            </div>
        </div>

        <!-- Middle Row: Schedule + Address -->
        <div class="flex justify-between items-start mb-4">
            <!-- Schedule -->
            <div class="text-white text-sm font-bold font-montserrat leading-[18px]">
                {!! nl2br(__('Working Hours')) !!}
            </div>

            <!-- Address -->
            <div class="text-white text-sm font-bold font-montserrat leading-[18px] text-left">
                {{ __('Address City') }}<br>
                {{ __('Address Street') }}
            </div>
        </div>

        <!-- Bottom Row: Email + Phone -->
        <div class="flex justify-between items-start">
            <!-- Email -->
            <div class="text-white text-sm font-bold font-montserrat leading-[18px]">
                veteranskiprostirkhm@gmail.com
            </div>

            <!-- Phone -->
            <div class="text-white text-sm font-bold font-montserrat leading-[18px] text-right">
                +38 067 563 0090
            </div>
        </div>
    </div>
</footer>