<!-- Hero Section Above Footer -->
<div class="px-[50px]">
    <div class="relative h-[820px] mb-8 rounded-[100px] overflow-hidden">
        <!-- Background Image -->
        <img src="{{ asset('images/backgrounds/footer-background.png') }}" 
             alt="Footer Hero Background" 
             class="w-full h-full object-cover">
        
        <!-- Content Div - 570x400px, 925px from left, vertically centered -->
        <div class="absolute left-[925px] top-1/2 transform -translate-y-1/2 w-[570px] h-[400px] flex flex-col justify-center">
            <!-- Main Headline -->
            <h2 class="text-white text-[64px] font-extrabold mb-8 leading-tight">
                Твоя підтримка<br/>
                змінює життя<br/>
                ветеранів!
            </h2>
            
            <!-- Sub-headline -->
            <p class="text-white text-xl font-medium mb-16">
                ВЕЛИКА ВДЯЧНІСТЬ ЗА КОЖЕН ВАШ ДОНАТ
            </p>
            
            <!-- Call to Action Button -->
            <button class="w-fit px-[60px] py-6 border-2 border-white text-white text-xl font-extrabold rounded-full hover:bg-white hover:text-veteran-blue transition-all duration-300">
                ПІДТРИМАТИ ЗСУ
            </button>
        </div>
    </div>
</div>

<!-- Include Basic Footer -->
@include('partials.footer-basic')


