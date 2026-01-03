<!-- Hero Section Above Footer -->
<div class="px-4 md:px-[2.6%]">
    <!-- Desktop Layout (>=768px) -->
    <div class="hidden md:block relative h-[820px] mb-8 rounded-[100px] overflow-hidden">
        <!-- Background Image -->
        <img src="{{ asset('images/backgrounds/footer-background.png') }}" alt="Footer Hero Background"
            class="w-full h-full object-cover">

        <!-- Content Div -->
        <div
            class="absolute left-[48%] top-1/2 transform -translate-y-1/2 w-[30%] min-w-[400px] max-w-[570px] flex flex-col justify-center">
            <!-- Main Headline -->
            <h2 class="text-white text-[64px] font-extrabold mb-8 leading-tight">
                Твоя підтримка<br />
                змінює життя<br />
                ветеранів!
            </h2>

            <!-- Sub-headline -->
            <p class="text-white text-xl font-medium mb-16">
                ВЕЛИКА ВДЯЧНІСТЬ ЗА КОЖЕН ВАШ ДОНАТ
            </p>

            <!-- Call to Action Button -->
            <button
                class="w-fit px-[60px] py-6 border-2 border-white text-white text-xl font-extrabold rounded-full hover:bg-white hover:text-veteran-blue transition-all duration-300">
                ПІДТРИМАТИ ЗСУ
            </button>
        </div>
    </div>

    <!-- Mobile Layout (<768px) -->
    <div class="block md:hidden relative h-[682px] mb-8 rounded-[62px] overflow-hidden">
        <!-- Background Image -->
        <img src="{{ asset('images/backgrounds/footer-background.png') }}" alt="Footer Hero Background"
            class="absolute inset-0 w-full h-full object-cover object-center">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-[#262426] opacity-[0.58] mix-blend-multiply"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex flex-col justify-end items-center text-center px-4 pb-12">
            <!-- Main Headline -->
            <h2 class="text-white text-left text-[35px] font-extrabold font-montserrat leading-[1.1] mb-8 w-[298px]">
                Твоя підтримка змінює життя ветеранів!
            </h2>

            <!-- Sub-headline -->
            <p
                class="text-white text-left text-[20px] font-medium font-montserrat uppercase leading-[1.43] mb-8 w-[298px]">
                Велика вдячність за кожен ваш донат
            </p>

            <!-- Call to Action Button -->
            <button
                class="w-[330px] h-[70px] border-2 border-white rounded-[412px] flex items-center justify-center active:bg-white active:text-veteran-blue transition-colors">
                <span class="text-white text-[20px] font-black font-montserrat uppercase tracking-[1px]">
                    підтримати Зсу
                </span>
            </button>
        </div>
    </div>
</div>

<!-- Include Basic Footer -->
@include('partials.footer-basic')