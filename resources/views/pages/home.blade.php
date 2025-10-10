@extends('layouts.web')
@section('title','Головна')
@section('content')
<!-- Hero Carousel -->
<div id="hero-carousel" class="relative overflow-hidden h-[820px] mb-8 rounded-[100px]">
    <!-- Hero Section 1 -->
<div class="carousel-slide absolute inset-0 w-full h-[820px] overflow-hidden active transition-all duration-1500 ease-in-out" style="transform: translateX(0%);">
    <!-- Background Image -->
    <img src="{{ asset('images/backgrounds/bg1.png') }}" 
         alt="Family Background" 
         class="w-full h-full object-cover">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>
    
    <!-- Main Heading -->
    <div class="absolute left-[326px] top-[243px]">
        <h1 class="text-white text-6xl font-bold font-unbounded leading-[74px] tracking-wide">
            Для кого ми:
        </h1>
    </div>
    
    <!-- Cards Grid -->
    <div class="absolute left-[326px] top-[367px] grid grid-cols-2 gap-8">
        <!-- Card 1: Veterans -->
        <div class="w-80 h-24 bg-white rounded-[10px] flex items-center px-4 space-x-4" style="width: 300px; height: 90px;">
            <div class="w-11 h-11 flex items-center justify-center">
                <img src="{{ asset('images/icons/family.svg') }}" alt="Family" class="w-11 h-11">
            </div>
            <span class="text-black text-xs font-bold font-montserrat uppercase leading-none tracking-tight">
                ВЕТЕРАНИ ТА ЧЛЕНИ ЇХ РОДИН
            </span>
        </div>
        
        <!-- Card 2: Fallen Families -->
        <div class="w-80 h-24 bg-white rounded-[10px] flex items-center px-4 space-x-4" style="width: 300px; height: 90px;">
            <div class="w-11 h-11 flex items-center justify-center">
                <img src="{{ asset('images/icons/heart.svg') }}" alt="Heart" class="w-11 h-11">
            </div>
            <span class="text-black text-xs font-bold font-montserrat uppercase leading-none tracking-tight">
                ЧЛЕНИ СІМЕЙ ЗАГИБЛИХ
            </span>
        </div>
        
        <!-- Card 3: Military -->
        <div class="w-80 h-24 bg-white rounded-[10px] flex items-center px-4 space-x-4" style="width: 300px; height: 90px;">
            <div class="w-11 h-11 flex items-center justify-center">
                <img src="{{ asset('images/icons/army.svg') }}" alt="Army" class="w-11 h-11">
            </div>
            <span class="text-black text-xs font-bold font-montserrat uppercase leading-none tracking-tight">
                ВІЙСЬКОВІ ТА ЧЛЕНИ ЇХ РОДИН
            </span>
        </div>
        
        <!-- Card 4: POW Families -->
        <div class="w-80 h-24 bg-white rounded-[10px] flex items-center px-4 space-x-4" style="width: 300px; height: 90px;">
            <div class="w-11 h-11 flex items-center justify-center">
                <img src="{{ asset('images/icons/people.svg') }}" alt="People" class="w-11 h-11">
            </div>
            <span class="text-black text-xs font-bold font-montserrat uppercase leading-none tracking-tight">
                ЧЛЕНИ СІМЕЙ ВІЙСЬКОВОПОЛОНЕННИХ<br/>ТА ЗНИКЛИХ БЕЗВІСТИ
            </span>
        </div>
    </div>
    
    <!-- Navigation Arrows -->
    <div class="absolute flex space-x-4 z-10" style="right: 375px; bottom: 120px;">
        <button class="w-14 h-14 bg-white bg-opacity-50 rounded-full flex items-center justify-center hover:bg-opacity-100 transition-all">
            <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-6 h-6 mr-1.5">
        </button>
        <button class="w-20 h-14 bg-white bg-opacity-50 rounded-[200px] flex items-center justify-center hover:bg-opacity-100 transition-all">
            <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-12 h-12">
        </button>
    </div>
</div>

<!-- Hero Section 2 -->
<div class="carousel-slide absolute inset-0 w-full h-[820px] overflow-hidden transition-all duration-1500 ease-in-out" style="transform: translateX(100%);">
    <!-- Background Image -->
    <img src="{{ asset('images/backgrounds/bg2.png') }}" 
         alt="Family Background" 
         class="w-full h-full object-cover">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>
    
    <!-- Blue Text Overlay -->
    <div class="absolute left-[325px] top-[200px] w-[700px] h-96 bg-blue-600" style="border-top-left-radius: 150px; border-top-right-radius: 50px; border-bottom-left-radius: 150px; border-bottom-right-radius: 150px;">
        <!-- Main Heading -->
        <div class="absolute left-[90px] top-[74px] w-[519px] h-36 text-white text-6xl font-bold font-unbounded leading-[74.08px] tracking-wide">
            Бізнес - ветеранам!
        </div>
        
        <!-- Subtitle -->
        <div class="absolute left-[90px] top-[260px] w-[519px] h-16 text-white text-2xl font-medium font-unbounded uppercase leading-9 tracking-tight">
            Дізнайся більше про цінні пропозиції 
            <span class="underline">тут</span>
        </div>
    </div>
    
    <!-- Navigation Arrows -->
    <div class="absolute flex space-x-4 z-10" style="right: 375px; bottom: 120px;">
        <button class="w-14 h-14 bg-white bg-opacity-50 rounded-full flex items-center justify-center hover:bg-opacity-100 transition-all">
            <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-6 h-6 mr-1.5">
        </button>
        <button class="w-20 h-14 bg-white bg-opacity-50 rounded-[200px] flex items-center justify-center hover:bg-opacity-100 transition-all">
            <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-12 h-12">
        </button>
    </div>
</div>

<!-- Hero Section 3 -->
<div class="carousel-slide absolute inset-0 w-full h-[820px] overflow-hidden transition-all duration-1500 ease-in-out" style="transform: translateX(100%);">
    <!-- Background Image -->
    <img src="{{ asset('images/backgrounds/bg3.png') }}" 
         alt="Family Background" 
         class="w-full h-full object-cover">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>
    
    <!-- Memorial Content -->
    <div class="absolute left-[325px] top-[200px] w-[669px] h-96 rounded-[412px]">
        <!-- Main Heading -->
        <div class="absolute left-0 top-0 w-[669px] h-36 text-white text-6xl font-bold font-unbounded leading-[74.08px] tracking-wide">
            Вони загинули за Україну!
        </div>
        
        <!-- Subtitle -->
        <div class="absolute left-0 top-[186px] w-[669px] h-16 text-white text-2xl font-medium font-unbounded uppercase leading-9 tracking-tight">
            Віртуальний меморіал полеглим захисникам та захисницям
        </div>
        
        <!-- Button -->
        <div class="absolute left-0 top-[317px] w-[320px] h-16 border-2 border-white flex items-center justify-center rounded-[412px]">
            <span class="text-white text-xl font-black font-montserrat uppercase tracking-wide">
                відвідати меморіал
            </span>
        </div>
    </div>
    
    <!-- Navigation Arrows -->
    <div class="absolute flex space-x-4 z-10" style="right: 375px; bottom: 120px;">
        <button class="w-14 h-14 bg-white bg-opacity-50 rounded-full flex items-center justify-center hover:bg-opacity-100 transition-all">
            <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-6 h-6 mr-1.5">
        </button>
        <button class="w-20 h-14 bg-white bg-opacity-50 rounded-[200px] flex items-center justify-center hover:bg-opacity-100 transition-all">
            <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-12 h-12">
        </button>
    </div>
</div>
</div>

<!-- Hero Footer Section -->
<footer class="flex items-center justify-between py-4">
    <!-- Contact Info -->
    <div class="flex items-center">
        <img src="{{ asset('images/icons/watsapnp.svg') }}" alt="WhatsApp" class="w-6 h-6">
        <img src="{{ asset('images/icons/signal.svg') }}" alt="Signal" class="w-6 h-6 ml-2">
        <img src="{{ asset('images/icons/viber.svg') }}" alt="Viber" class="w-6 h-6 ml-2">
        <span class="text-black text-base font-bold font-montserrat" style="margin-left: 20px; margin-right: 56px;">+38 067 563 0090</span>
        <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="w-6 h-6">
        <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram" class="w-6 h-6 ml-2">
    </div>
    
    <!-- Search Bar -->
    <div class="w-[995px] h-12 rounded-[300px] border border-black flex items-center px-5">
        <span class="text-black text-base font-normal font-montserrat">Не можеш знайти? Пошукай тут...</span>
        <div class="ml-auto w-8 h-8 bg-black rounded-full flex items-center justify-center">
            <img class="w-6 h-6" src="{{ asset('images/icons/icon-search.svg') }}" alt="Search">
        </div>
    </div>
</footer>

<!-- Services Section -->
<div class="flex justify-center mt-[152px] mb-[300px]">
    <div class="relative w-[1215px] h-[765px]">
        <!-- Title Section -->
        <div class="absolute left-0 top-0">
            <h2 class="text-black text-[72px] font-extrabold font-montserrat uppercase leading-[85.36px] m-0">
                Види<br/>послуг
            </h2>
        </div>
        
        <!-- All Services Button -->
        <div class="absolute right-0 top-5">
            <button class="w-64 h-16 border-2 border-veteran-blue bg-white text-black text-xl font-black font-montserrat uppercase tracking-wide cursor-pointer transition-all duration-300 ease-in-out rounded-[412px]">
                всі послуги
            </button>
        </div>
        
        <!-- Service Cards -->
        <div class="absolute left-0 top-[269px] flex gap-8">
            <!-- Card 1: Veteran Support -->
            <div class="relative w-96 h-[496px]" style="background-image: url('{{ asset('images/backgrounds/service-bg.svg') }}'); background-size: fit; background-repeat: no-repeat; background-position: center;">
                <!-- Icon -->
                <div class="absolute left-[39px] top-[41px] w-14 h-14 rounded-full flex items-center justify-center">
                    <img src="{{ asset('images/icons/support.svg') }}" alt="Support" class="w-[59px] h-[59px]">
                </div>
                
                <!-- Arrow -->
                <div class="absolute right-[5px] w-[30px] h-[30px]">
                    <img src="{{ asset('images/icons/arrow.svg') }}" alt="Arrow" class="w-[30px] h-[30px]">
                </div>
                
                <!-- Title -->
                <div class="absolute left-[39px] top-[143px] w-72">
                    <h3 class="text-white text-[30px] font-extrabold font-montserrat leading-10 m-0">
                        Супровід ветеранів
                    </h3>
                </div>
                
                <!-- Description -->
                <div class="absolute left-[39px] top-[253px] w-72">
                    <ul class="text-white text-xl font-normal font-montserrat leading-7 m-0 pl-5 list-disc">
                        <li class="mb-7">Розробка індивідуального плану підтримки.</li>
                        <li>Допомога в оформленні пільг, соціальних виплат, житла. ...</li>
                    </ul>
                </div>
            </div>
            
            <!-- Card 2: Legal Consultations -->
            <div class="relative w-96 h-[496px]" style="background-image: url('{{ asset('images/backgrounds/service-bg.svg') }}'); background-size: fit; background-repeat: no-repeat; background-position: center;">
                <!-- Icon -->
                <div class="absolute left-[39px] top-[41px] w-[59px] h-[59px] rounded-full flex items-center justify-center">
                    <img src="{{ asset('images/icons/legal.svg') }}" alt="Legal" class="w-[59px] h-[59px]">
                </div>
                
                <!-- Arrow -->
                <div class="absolute right-[5px] w-[30px] h-[30px]">
                    <img src="{{ asset('images/icons/arrow.svg') }}" alt="Arrow" class="w-[30px] h-[30px]">
                </div>
                                
                <!-- Title -->
                <div class="absolute left-[39px] top-[143px] w-72">
                    <h3 class="text-white text-[30px] font-extrabold font-montserrat leading-10 m-0">
                        Юридичні консультації
                    </h3>
                </div>
                
                <!-- Description -->
                <div class="absolute left-[39px] top-[253px] w-72">
                    <ul class="text-white text-xl font-normal font-montserrat leading-7 m-0 pl-5 list-disc">
                        <li class="mb-7">Правова інформація, консультації та роз'яснення з правових питань;</li>
                        <li>Допомога у складенні рапортів, заяв, скарг ...</li>
                    </ul>
                </div>
            </div>
            
            <!-- Card 3: Psychological Assistance -->
            <div class="relative w-96 h-[496px]" style="background-image: url('{{ asset('images/backgrounds/service-bg.svg') }}'); background-size: fit; background-repeat: no-repeat; background-position: center;">
                <!-- Icon -->
                <div class="absolute left-[39px] top-[41px] w-14 h-14 rounded-full flex items-center justify-center">
                    <img src="{{ asset('images/icons/head.svg') }}" alt="Psychology" class="w-[59px] h-[59px]">
                </div>
                
                <!-- Arrow -->
                <div class="absolute right-[5px] w-[30px] h-[30px]">
                    <img src="{{ asset('images/icons/arrow.svg') }}" alt="Arrow" class="w-[30px] h-[30px]">
                </div>

                <!-- Title -->
                <div class="absolute left-[39px] top-[143px] w-72">
                    <h3 class="text-white text-[30px] font-extrabold font-montserrat leading-10 m-0">
                        Психологічна допомога
                    </h3>
                </div>
                
                <!-- Description -->
                <div class="absolute left-[39px] top-[253px] w-[260px]">
                    <ul class="text-white text-xl font-normal font-montserrat leading-7 m-0 pl-5 list-disc">
                        <li class="mb-7">Індивідуальні психологічні консультації для дорослих.</li>
                        <li>Психоедукаційні групи для дорослих. ...</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News Section -->
<div class="w-full">
    <!-- More News Link -->
    <div class="flex justify-end mb-8">
        <a href="#" class="text-base font-bold text-black uppercase border-b border-black hover:text-veteran-blue hover:border-veteran-blue transition-colors">
            БІЛЬШЕ НОВИН ТУТ
        </a>
    </div>

    <!-- News Grid -->
    <div class="flex gap-[55px]">
        <!-- News Card 1 -->
        <div class="flex-1 min-w-0 flex flex-col">
            <!-- Image -->
            <img class="w-full h-[285px] rounded-[20px] object-cover" src="{{ asset('images/backgrounds/news-1.jpg') }}" alt="News 1">
            
            <!-- Title: 40px below image, fixed height -->
            <div class="w-full mt-10 text-black text-3xl font-bold leading-10 h-20">
                Український ветеранський фонд: звіт роботи за 2024 рік
            </div>
            
            <!-- Description: 80px from title -->
            <div class="w-full mt-20 text-black text-base font-normal leading-snug">
                Громадська організація «Ветеранс ХАБ ОДЕСА» створює умови для розвитку ветеранського бізнесу. Якщо у тебе є ідея, але ти не знаєш, як її реалізувати, наша команда експертів готова допомогти...
            </div>
            
            <!-- Date & Button row: pushed to bottom -->
            <div class="w-full mt-auto pt-20 flex justify-between items-center">
                <!-- Date: left -->
                <div class="text-black text-sm font-bold uppercase leading-tight tracking-wide">
                    10 ГРУДНЯ, 2024
                </div>
                
                <!-- Button: right -->
                <div class="w-44 h-12 rounded-[200px] border-2 border-veteran-blue flex items-center justify-center hover:bg-veteran-blue hover:text-white transition-colors cursor-pointer">
                    <span class="text-black text-xs font-bold uppercase leading-none tracking-wide">ЧИТАТИ ДАЛІ</span>
                </div>
            </div>
        </div>

        <!-- News Card 2 -->
        <div class="flex-1 min-w-0 flex flex-col">
            <!-- Image -->
            <img class="w-full h-[285px] rounded-[20px] object-cover" src="{{ asset('images/backgrounds/news-2.jpg') }}" alt="News 2">
            
            <!-- Title: 40px below image, fixed height -->
            <div class="w-full mt-10 text-black text-3xl font-bold leading-10 h-20">
                Оголошення переможців грантової програми "Варто 11.0": у Києві пройшла пресконференція
            </div>
            
            <!-- Description: 80px from title -->
            <div class="w-full mt-20 text-black text-base font-normal leading-snug">
                Громадська організація «Ветеранс ХАБ ОДЕСА» створює умови для розвитку ветеранського бізнесу. Якщо у тебе є ідея, але ти не знаєш, як її реалізувати, наша команда експертів готова допомогти...
            </div>
            
            <!-- Date & Button row: pushed to bottom -->
            <div class="w-full mt-auto pt-20 flex justify-between items-center">
                <!-- Date: left -->
                <div class="text-black text-sm font-bold uppercase leading-tight tracking-wide">
                    10 ГРУДНЯ, 2024
                </div>
                
                <!-- Button: right -->
                <div class="w-44 h-12 rounded-[200px] border-2 border-veteran-blue flex items-center justify-center hover:bg-veteran-blue hover:text-white transition-colors cursor-pointer">
                    <span class="text-black text-xs font-bold uppercase leading-none tracking-wide">ЧИТАТИ ДАЛІ</span>
                </div>
            </div>
        </div>

        <!-- News Card 3 -->
        <div class="flex-1 min-w-0 flex flex-col">
            <!-- Image -->
            <img class="w-full h-[285px] rounded-[20px] object-cover" src="{{ asset('images/backgrounds/news-3.jpg') }}" alt="News 3">
            
            <!-- Title: 40px below image, fixed height -->
            <div class="w-full mt-10 text-black text-3xl font-bold leading-10 h-20">
                Підтримка ветеранського бізнесу та допомога в його розвиткові
            </div>
            
            <!-- Description: 80px from title -->
            <div class="w-full mt-20 text-black text-base font-normal leading-snug">
                Громадська організація «Ветеранс ХАБ ОДЕСА» створює умови для розвитку ветеранського бізнесу. Якщо у тебе є ідея, але ти не знаєш, як її реалізувати, наша команда експертів готова допомогти...
            </div>
            
            <!-- Date & Button row: pushed to bottom -->
            <div class="w-full mt-auto pt-20 flex justify-between items-center">
                <!-- Date: left -->
                <div class="text-black text-sm font-bold uppercase leading-tight tracking-wide">
                    10 ГРУДНЯ, 2024
                </div>
                
                <!-- Button: right -->
                <div class="w-44 h-12 rounded-[200px] border-2 border-veteran-blue flex items-center justify-center hover:bg-veteran-blue hover:text-white transition-colors cursor-pointer">
                    <span class="text-black text-xs font-bold uppercase leading-none tracking-wide">ЧИТАТИ ДАЛІ</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="flex justify-center mt-[152px] mb-[300px]">
    <div class="relative w-[1170px] h-[600px]">
        <!-- Title Section -->
        <div class="absolute left-0 top-0">
            <h2 class="text-black text-[72px] font-extrabold font-montserrat uppercase leading-[85.36px] m-0">
                Наша<br/>команда
            </h2>
        </div>
        
        <!-- Team Button -->
        <div class="absolute right-0 top-5">
            <button class="w-64 h-16 border-2 border-veteran-blue bg-white text-black text-xl font-black font-montserrat uppercase tracking-wide cursor-pointer transition-all duration-300 ease-in-out rounded-[412px]">
                команда
            </button>
        </div>
        
        <!-- Team Members -->
        <div class="absolute left-0 top-64 flex gap-[30px]">
            <!-- Team Member 1: Директор -->
            <div class="relative">
                <div class="w-[370px] h-[440px] bg-zinc-300 rounded-[20px] overflow-hidden">
                    <img class="w-full h-full object-cover object-top" style="object-position: center 5%;" src="{{ asset('images/backgrounds/team-1.jpg') }}" alt="Катерина Луцик">
                </div>
                <div class="mt-10 text-black text-3xl font-extrabold font-montserrat leading-10">
                    Катерина Луцик
                </div>
                <div class="mt-6 text-black text-xl font-normal font-montserrat leading-7">
                    Директор
                </div>
            </div>
            
            <!-- Team Member 2: Заступник директора -->
            <div class="relative">
                <div class="w-[370px] h-[440px] bg-zinc-300 rounded-[20px] overflow-hidden">
                    <img class="w-full h-full object-cover" src="{{ asset('images/backgrounds/team-2.png') }}" alt="Анастасія Ярова">
                </div>
                <div class="mt-10 text-black text-3xl font-extrabold font-montserrat leading-10">
                    Анастасія Ярова
                </div>
                <div class="mt-6 text-black text-xl font-normal font-montserrat leading-7">
                    Заступник директора
                </div>
            </div>
            
            <!-- Team Member 3: Адміністратор -->
            <div class="relative">
                <div class="w-[370px] h-[440px] bg-zinc-300 rounded-[20px] overflow-hidden">
                    <img class="w-full h-full object-cover" src="{{ asset('images/backgrounds/team-3.jpg') }}" alt="Ольга Свіжа">
                </div>
                <div class="mt-10 text-black text-3xl font-extrabold font-montserrat leading-10">
                    Ольга Свіжа
                </div>
                <div class="mt-6 text-black text-xl font-normal font-montserrat leading-7">
                    Адміністратор
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="pt-[300px] flex justify-center">
    <div class="relative w-[1815px]">
        <!-- Title Section -->
        <div class="absolute left-[325px] top-0">
            <h2 class="text-black text-[72px] font-extrabold font-montserrat uppercase leading-[85.36px] m-0">
                Хмельницький<br/>вдячний
            </h2>
        </div>
        
        <!-- Map -->
        <div class="mt-40 pt-20">
            <div class="rounded-[100px] overflow-hidden border-2 border-black">
                <div class="relative h-[750px]">
                    <img src="{{ asset('images/backgrounds/map.png') }}" 
                         alt="Хмельницький Вдячний Map" 
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
<div class="flex justify-center pt-[130px] mb-[300px]">
    <div class="relative w-[1170px]">
        <!-- Title Section -->
        <div class="absolute left-0 top-0">
            <h2 class="text-black text-[72px] font-extrabold font-montserrat uppercase leading-[85.36px] m-0">
                Наші партнери
            </h2>
        </div>

        <!-- Partners Carousel -->
        <div class="pt-[200px] flex items-center justify-between">
            <!-- Left Arrow -->
            <button id="partners-prev" class="w-16 h-16 flex items-center justify-center transition-all hover:opacity-80">
                <x-partners-arrow direction="left" />
            </button>
            
            <!-- Partners Container -->
            <div class="w-[1100px] mx-[35px] overflow-hidden">
                <div id="partners-track" class="flex gap-[30px] transition-transform duration-500 ease-in-out">
                    <!-- Partner 1 -->
                    <div class="w-[225px] h-32 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/logos/khm.png') }}" alt="Khmelnytskyi" class="max-w-full max-h-full object-contain">
                    </div>
                    
                    <!-- Partner 2 -->
                    <div class="w-[225px] h-32 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/logos/veterans-fond.png') }}" alt="Veterans Fond" class="max-w-full max-h-full object-contain">
                    </div>
                    
                    <!-- Partner 3 -->
                    <div class="w-[225px] h-32 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/logos/veterans-space.png') }}" alt="Veterans Space" class="max-w-full max-h-full object-contain">
                    </div>
                    
                    <!-- Partner 4 -->
                    <div class="w-[225px] h-32 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/logos/irex.png') }}" alt="IREX" class="max-w-full max-h-full object-contain">
                    </div>
                    
                    <!-- Partner 5 -->
                    <div class="w-[225px] h-32 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/logos/ukrnafta.png') }}" alt="URKNAFTA" class="max-w-full max-h-full object-contain">
                    </div>
                    
                    <!-- Partner 6 -->
                    <div class="w-[225px] h-32 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/logos/uwf.png') }}" alt="UWF" class="max-w-full max-h-full object-contain">
                    </div>
                    
                    <!-- Partner 7 -->
                    <div class="w-[225px] h-32 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/logos/pumb.png') }}" alt="PUMB" class="max-w-full max-h-full object-contain">
                    </div>
                    
                    <!-- Partner 8 -->
                    <div class="w-[225px] h-32 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/logos/vidro.png') }}" alt="Vidrodzhennya" class="max-w-full max-h-full object-contain">
                    </div>

                    <!-- Partner 9 -->
                    <div class="w-[225px] h-32 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/logos/razom.png') }}" alt="Razom" class="max-w-full max-h-full object-contain">
                    </div>
                </div>
            </div>
            
            <!-- Right Arrow (mirrored) -->
            <button id="partners-next" class="w-16 h-16 flex items-center justify-center transition-all">
                <x-partners-arrow direction="right" />
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('hero-carousel');
    const slides = document.querySelectorAll('.carousel-slide');
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    let isAnimating = false; 
    
    const slideOrder = [0, 1, 2]; 
    let currentPosition = 0; 
    
    function showSlideByPosition(position) {
        const targetIndex = slideOrder[position];
        console.log('Showing slide at position:', position, 'which is slide:', targetIndex, 'from current:', currentSlide); // Debug
        
        if (targetIndex === currentSlide || isAnimating) return; 
        
        isAnimating = true; 
        
        const allArrows = document.querySelectorAll('.carousel-slide .absolute button');
        allArrows.forEach(arrow => {
            arrow.disabled = true;
            arrow.style.opacity = '0.5';
        });
        
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            slide.style.transform = 'translateX(100%)';
        });
        
        const currentSlideElement = slides[currentSlide];
        const targetSlide = slides[targetIndex];
        
        currentSlideElement.classList.add('active');
        currentSlideElement.style.transform = 'translateX(0%)';
        
        targetSlide.style.transform = 'translateX(100%)';
        targetSlide.classList.add('active');
        
        setTimeout(() => {
            targetSlide.style.transform = 'translateX(0%)';
        }, 10);
        
        setTimeout(() => {
            currentSlideElement.classList.remove('active');
            currentSlideElement.style.transform = 'translateX(100%)';
            isAnimating = false; 
            
            const allArrows = document.querySelectorAll('.carousel-slide .absolute button');
            allArrows.forEach(arrow => {
                arrow.disabled = false;
                arrow.style.opacity = '1';
                arrow.style.cursor = 'pointer';
            });
        }, 800); 
        
        currentSlide = targetIndex;
        currentPosition = position;
        console.log('Slide', targetIndex, 'shown from right - CLEAN STATE animation'); // Debug
    }
    
   
    function nextSlide() {
        console.log('Next slide clicked, current position:', currentPosition); // Debug
        const nextPosition = (currentPosition + 1) % slideOrder.length;
        showSlideByPosition(nextPosition);
    }
    
    
    function prevSlide() {
        console.log('Previous slide clicked, current position:', currentPosition); // Debug
        const prevPosition = (currentPosition - 1 + slideOrder.length) % slideOrder.length;
        showSlideByPosition(prevPosition);
    }
    
    
    const allLeftArrows = document.querySelectorAll('.carousel-slide .absolute button:first-child');
    const allRightArrows = document.querySelectorAll('.carousel-slide .absolute button:last-child');
    
    console.log('Found left arrows:', allLeftArrows.length); // Debug
    console.log('Found right arrows:', allRightArrows.length); // Debug
    
    allLeftArrows.forEach((arrow, i) => {
        arrow.addEventListener('click', (e) => {
            if (isAnimating) {
                console.log('Left arrow', i, 'clicked but animation in progress - IGNORED'); // Debug
                return; 
            }
            console.log('Left arrow', i, 'clicked'); // Debug
            prevSlide();
        });
    });
    
    allRightArrows.forEach((arrow, i) => {
        arrow.addEventListener('click', (e) => {
            if (isAnimating) {
                console.log('Right arrow', i, 'clicked but animation in progress - IGNORED'); // Debug
                return; 
            }
            console.log('Right arrow', i, 'clicked'); // Debug
            nextSlide();
        });
    });
    
    console.log('Initializing carousel with', totalSlides, 'slides'); // Debug
    showSlideByPosition(0);
    
    // Partners Carousel
    const partnersTrack = document.getElementById('partners-track');
    const partnersPrev = document.getElementById('partners-prev');
    const partnersNext = document.getElementById('partners-next');
    
    // Check if elements exist
    if (!partnersTrack || !partnersPrev || !partnersNext) {
        console.error('Partners carousel elements not found');
        return;
    }
    
    let partnersPosition = 0;
    const partnerItemWidth = 225; // Width of one partner logo
    const partnerGap = 30; // Gap between items
    const partnerStep = partnerItemWidth + partnerGap; // Total step distance (255px)
    const totalItems = 9; // Total number of partner items
    const visibleItems = 4; // Number of items visible at once
    const maxPosition = totalItems - visibleItems; // 9 - 4 = 5 positions (0,1,2,3,4)
    
    function updatePartnersCarousel() {
        const offset = -(partnersPosition * partnerStep);
        partnersTrack.style.transform = `translateX(${offset}px)`;
    }
    
    partnersNext.addEventListener('click', () => {
        if (partnersPosition < maxPosition) {
            partnersPosition++;
            updatePartnersCarousel();
        }
    });
    
    partnersPrev.addEventListener('click', () => {
        if (partnersPosition > 0) {
            partnersPosition--;
            updatePartnersCarousel();
        }
    });
});
</script>
@endsection

@section('footer')
    @include('partials.footer-extended')
@endsection

