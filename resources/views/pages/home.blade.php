@extends('layouts.web')
@section('title', 'Головна')
@section('content')
    <!-- Desktop Hero & Footer Wrapper (>=768px) -->
    <div class="hidden md:block">
        <div id="hero-carousel" class="relative overflow-hidden h-[820px] mb-8 rounded-[100px]">
            <!-- Hero Section 1 -->
            <div class="carousel-slide absolute inset-0 w-full h-[820px] overflow-hidden active transition-all duration-1500 ease-in-out"
                style="transform: translateX(0%);">
                <!-- Background Image -->
                <img src="{{ asset('images/backgrounds/bg1.png') }}" alt="Family Background"
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
                    <div class="w-[300px] h-[90px] bg-white rounded-[10px] flex items-center px-4 space-x-4">
                        <div class="w-11 h-11 flex items-center justify-center">
                            <img src="{{ asset('images/icons/family.svg') }}" alt="Family" class="w-11 h-11">
                        </div>
                        <span class="text-black text-xs font-bold font-montserrat uppercase leading-tight tracking-wide">
                            ВЕТЕРАНИ ТА ЧЛЕНИ ЇХ РОДИН
                        </span>
                    </div>

                    <!-- Card 2: Fallen Families -->
                    <div class="w-[300px] h-[90px] bg-white rounded-[10px] flex items-center px-4 space-x-4">
                        <div class="w-11 h-11 flex items-center justify-center">
                            <img src="{{ asset('images/icons/heart.svg') }}" alt="Heart" class="w-11 h-11">
                        </div>
                        <span class="text-black text-xs font-bold font-montserrat uppercase leading-tight tracking-wide">
                            ЧЛЕНИ СІМЕЙ ЗАГИБЛИХ
                        </span>
                    </div>

                    <!-- Card 3: Military -->
                    <div class="w-[300px] h-[90px] bg-white rounded-[10px] flex items-center px-4 space-x-4">
                        <div class="w-11 h-11 flex items-center justify-center">
                            <img src="{{ asset('images/icons/army.svg') }}" alt="Army" class="w-11 h-11">
                        </div>
                        <span class="text-black text-xs font-bold font-montserrat uppercase leading-tight tracking-wide">
                            ВІЙСЬКОВІ ТА ЧЛЕНИ ЇХ РОДИН
                        </span>
                    </div>

                    <!-- Card 4: POW Families -->
                    <div class="w-[300px] h-[90px] bg-white rounded-[10px] flex items-center px-4 space-x-4">
                        <div class="w-11 h-11 flex items-center justify-center">
                            <img src="{{ asset('images/icons/people.svg') }}" alt="People" class="w-11 h-11">
                        </div>
                        <span class="text-black text-xs font-bold font-montserrat uppercase leading-tight tracking-wide">
                            ЧЛЕНИ СІМЕЙ ВІЙСЬКОВОПОЛОНЕННИХ<br />ТА ЗНИКЛИХ БЕЗВІСТИ
                        </span>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <div class="absolute flex space-x-4 z-10" style="right: 375px; bottom: 120px;">
                    <button
                        class="w-14 h-14 bg-white bg-opacity-50 rounded-full flex items-center justify-center hover:bg-opacity-100 transition-all">
                        <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-6 h-6 mr-1.5">
                    </button>
                    <button
                        class="w-20 h-14 bg-white bg-opacity-50 rounded-[200px] flex items-center justify-center hover:bg-opacity-100 transition-all">
                        <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-12 h-12">
                    </button>
                </div>
            </div>

            <!-- Hero Section 2 -->
            <div class="carousel-slide absolute inset-0 w-full h-[820px] overflow-hidden transition-all duration-1500 ease-in-out"
                style="transform: translateX(100%);">
                <!-- Background Image -->
                <img src="{{ asset('images/backgrounds/bg2.png') }}" alt="Family Background"
                    class="w-full h-full object-cover">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>

                <!-- Blue Text Overlay -->
                <div class="absolute left-[325px] top-[200px] w-[700px] h-96 bg-blue-600"
                    style="border-top-left-radius: 150px; border-top-right-radius: 50px; border-bottom-left-radius: 150px; border-bottom-right-radius: 150px;">
                    <!-- Main Heading -->
                    <div
                        class="absolute left-[90px] top-[74px] w-[519px] h-36 text-white text-6xl font-bold font-unbounded leading-[74.08px] tracking-wide">
                        Бізнес - ветеранам!
                    </div>

                    <!-- Subtitle -->
                    <div
                        class="absolute left-[90px] top-[260px] w-[519px] h-16 text-white text-2xl font-medium font-unbounded uppercase leading-9 tracking-tight">
                        Дізнайся більше про цінні пропозиції
                        <span class="underline">тут</span>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <div class="absolute flex space-x-4 z-10" style="right: 375px; bottom: 120px;">
                    <button
                        class="w-14 h-14 bg-white bg-opacity-50 rounded-full flex items-center justify-center hover:bg-opacity-100 transition-all">
                        <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-6 h-6 mr-1.5">
                    </button>
                    <button
                        class="w-20 h-14 bg-white bg-opacity-50 rounded-[200px] flex items-center justify-center hover:bg-opacity-100 transition-all">
                        <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-12 h-12">
                    </button>
                </div>
            </div>

            <!-- Hero Section 3 -->
            <div class="carousel-slide absolute inset-0 w-full h-[820px] overflow-hidden transition-all duration-1500 ease-in-out"
                style="transform: translateX(100%);">
                <!-- Background Image -->
                <img src="{{ asset('images/backgrounds/bg3.png') }}" alt="Family Background"
                    class="w-full h-full object-cover">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>

                <!-- Memorial Content -->
                <div class="absolute left-[325px] top-[200px] w-[669px] h-96 rounded-[412px]">
                    <!-- Main Heading -->
                    <div
                        class="absolute left-0 top-0 w-[669px] h-36 text-white text-6xl font-bold font-unbounded leading-[74.08px] tracking-wide">
                        Вони загинули за Україну!
                    </div>

                    <!-- Subtitle -->
                    <div
                        class="absolute left-0 top-[186px] w-[669px] h-16 text-white text-2xl font-medium font-unbounded uppercase leading-9 tracking-tight">
                        Віртуальний меморіал полеглим захисникам та захисницям
                    </div>

                    <!-- Button -->
                    <div
                        class="absolute left-0 top-[317px] w-[320px] h-16 border-2 border-white flex items-center justify-center rounded-[412px]">
                        <span class="text-white text-xl font-black font-montserrat uppercase tracking-wide">
                            відвідати меморіал
                        </span>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <div class="absolute flex space-x-4 z-10" style="right: 375px; bottom: 120px;">
                    <button
                        class="w-14 h-14 bg-white bg-opacity-50 rounded-full flex items-center justify-center hover:bg-opacity-100 transition-all">
                        <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-6 h-6 mr-1.5">
                    </button>
                    <button
                        class="w-20 h-14 bg-white bg-opacity-50 rounded-[200px] flex items-center justify-center hover:bg-opacity-100 transition-all">
                        <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-12 h-12">
                    </button>
                </div>
            </div>
        </div>

        <!-- Hero Footer Section (Desktop) -->
        <footer class="flex items-center justify-between py-4 pb-[124px]">
            <!-- Contact Info -->
            <div class="flex items-center">
                <img src="{{ asset('images/icons/watsapnp.svg') }}" alt="WhatsApp" class="w-6 h-6">
                <img src="{{ asset('images/icons/signal.svg') }}" alt="Signal" class="w-6 h-6 ml-2">
                <img src="{{ asset('images/icons/viber.svg') }}" alt="Viber" class="w-6 h-6 ml-2">
                <span class="text-black text-base font-bold font-montserrat"
                    style="margin-left: 20px; margin-right: 56px;">+38
                    067 563 0090</span>
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
    </div>

    <!-- Mobile Hero Section (<768px) -->
    <div id="mobile-hero-carousel" class="block md:hidden mb-8">
        <div class="relative h-[600px] rounded-[62px] overflow-hidden mb-6">
            <!-- Slide 1 -->
            <div class="mobile-carousel-slide absolute inset-0 w-full h-full overflow-hidden active transition-all duration-700 ease-in-out"
                style="transform: translateX(0%);">
                <!-- Background Image -->
                <img src="{{ asset('images/backgrounds/bg1.png') }}" alt="Family Background"
                    class="absolute inset-0 w-full h-full object-cover object-center">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-neutral-900/30"></div>

                <!-- Content -->
                <div class="absolute inset-0 flex flex-col pt-36">
                    <h1 class="text-white text-[36px] font-bold font-unbounded mb-5 leading-[116%] tracking-normal px-12">
                        Для кого ми:
                    </h1>

                    <div class="flex flex-col gap-2 mx-8">
                        <!-- Veterans -->
                        <div class="bg-white w-full h-12 rounded-full py-2.5 px-6 flex items-center gap-3">
                            <span class="text-black text-[12px] font-bold font-montserrat uppercase leading-tight">
                                ВЕТЕРАНИ ТА ЧЛЕНИ ЇХ РОДИН
                            </span>
                        </div>

                        <!-- Fallen -->
                        <div class="bg-white w-full h-12 rounded-full py-2.5 px-6 flex items-center gap-3">
                            <span class="text-black text-[12px] font-bold font-montserrat uppercase leading-tight">
                                ЧЛЕНИ СІМЕЙ ЗАГИБЛИХ
                            </span>
                        </div>

                        <!-- Military -->
                        <div class="bg-white w-full h-12 rounded-full py-2.5 px-6 flex items-center gap-3">
                            <span class="text-black text-[12px] font-bold font-montserrat uppercase leading-tight">
                                ВІЙСЬКОВІ ТА ЧЛЕНИ ЇХ РОДИН
                            </span>
                        </div>

                        <!-- POW -->
                        <div class="bg-white w-full h-12 rounded-full py-2.5 px-6 flex items-center gap-3">
                            <span class="text-black text-[12px] font-bold font-montserrat uppercase leading-tight">
                                ЧЛЕНИ СІМЕЙ ВІЙСЬКОВОПОЛОНЕННИХ ТА ЗНИКЛИХ БЕЗВІСТИ
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows (same as desktop) -->
                <div class="absolute bottom-9 right-9 flex space-x-6 z-10">
                    <button
                        class="mobile-hero-prev w-11 h-11 bg-white/50 rounded-full flex items-center justify-center active:bg-white/80 transition-all">
                        <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-5 h-5">
                    </button>
                    <button
                        class="mobile-hero-next w-16 h-11 bg-white/50 rounded-[100px] flex items-center justify-center active:bg-white/80 transition-all">
                        <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-10 h-10">
                    </button>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="mobile-carousel-slide absolute inset-0 w-full h-full overflow-hidden transition-all duration-700 ease-in-out"
                style="transform: translateX(100%);">
                <!-- Background Image -->
                <img src="{{ asset('images/backgrounds/bg2.png') }}" alt="Business Background"
                    class="absolute inset-0 w-full h-full object-cover object-center">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-neutral-900/30"></div>

                <!-- Content -->
                <div class="absolute inset-0 flex flex-col justify-center px-4">
                    <div class="p-6">
                        <h2 class="text-white text-[42px] font-bold font-unbounded leading-tight mb-4">
                            Бізнес - ветеранам!
                        </h2>
                        <p class="text-white text-lg font-medium font-unbounded uppercase">
                            Дізнайся більше про цінні пропозиції <span class="underline">тут</span>
                        </p>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <div class="absolute bottom-9 right-9 flex space-x-6 z-10">
                    <button
                        class="mobile-hero-prev w-11 h-11 bg-white/50 rounded-full flex items-center justify-center active:bg-white/80 transition-all">
                        <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-5 h-5">
                    </button>
                    <button
                        class="mobile-hero-next w-16 h-11 bg-white/50 rounded-[100px] flex items-center justify-center active:bg-white/80 transition-all">
                        <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-10 h-10">
                    </button>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="mobile-carousel-slide absolute inset-0 w-full h-full overflow-hidden transition-all duration-700 ease-in-out"
                style="transform: translateX(100%);">
                <!-- Background Image -->
                <img src="{{ asset('images/backgrounds/bg3.png') }}" alt="Memorial Background"
                    class="absolute inset-0 w-full h-full object-cover object-center">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-neutral-900/30"></div>

                <!-- Content -->
                <div class="absolute inset-0 flex flex-col justify-center px-4">
                    <h2 class="text-white text-[32px] font-bold font-unbounded leading-tight mb-4">
                        Вони загинули за Україну!
                    </h2>
                    <p class="text-white text-lg font-medium font-unbounded uppercase mb-6">
                        Віртуальний меморіал полеглим захисникам та захисницям
                    </p>
                    <button
                        class="w-full max-w-[280px] h-14 border-2 border-white rounded-full flex items-center justify-center">
                        <span class="text-white text-base font-black font-montserrat uppercase tracking-wide">
                            відвідати меморіал
                        </span>
                    </button>
                </div>

                <!-- Navigation Arrows -->
                <div class="absolute bottom-9 right-9 flex space-x-6 z-10">
                    <button
                        class="mobile-hero-prev w-11 h-11 bg-white/50 rounded-full flex items-center justify-center active:bg-white/80 transition-all">
                        <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-5 h-5">
                    </button>
                    <button
                        class="mobile-hero-next w-16 h-11 bg-white/50 rounded-[100px] flex items-center justify-center active:bg-white/80 transition-all">
                        <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-10 h-10">
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Search Bar -->
        <div class="w-full h-11 rounded-full border border-black flex items-center px-4">
            <span class="text-black text-sm font-normal font-montserrat truncate flex-1">Не можеш знайти? Пошукай
                тут...</span>
            <div class="w-7 h-7 bg-black rounded-full flex-shrink-0 flex items-center justify-center ml-2">
                <img class="w-4 h-4" src="{{ asset('images/icons/icon-search.svg') }}" alt="Search">
            </div>
        </div>
    </div>


    <!-- Mobile Services Section (<768px) -->
    <div class="block md:hidden mt-16 mb-16">
        <h2 class="text-black text-[40px] font-extrabold font-montserrat uppercase leading-tight px-4 mb-8">
            Види послуг
        </h2>

        <!-- Swipe Carousel Container -->
        <!-- Added [&::-webkit-scrollbar]:hidden to force hide scrollbar -->
        <div id="mobile-services-carousel" class="overflow-x-auto pb-6 [&::-webkit-scrollbar]:hidden"
            style="scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none;">
            <div class="flex gap-4 px-4" style="width: max-content;">
                @php
                    $mobileIcons = [
                        '01' => 'support.svg',
                        '02' => 'legal.svg',
                        '03' => 'head.svg',
                        '04' => 'business.svg',
                        '05' => 'health.svg',
                        '06' => 'education.svg',
                    ];
                @endphp

                @foreach($services as $service)
                    <a href="{{ route('services') }}"
                        class="mobile-service-card flex-shrink-0 w-[396px] h-[496px] relative cursor-pointer transition-transform duration-300 active:scale-95 rounded-xl overflow-hidden"
                        style="scroll-snap-align: center; background-image: url('{{ asset('images/backgrounds/service-bg.svg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;"
                        data-index="{{ $loop->index }}">
                        <!-- Icon -->
                        <div class="absolute left-8 top-8 w-14 h-14 rounded-full flex items-center justify-center">
                            <img src="{{ $service->icon_path ? asset('storage/' . $service->icon_path) : asset('storage/images/icons/' . ($mobileIcons[$service->number] ?? 'support.svg')) }}"
                                alt="Icon" class="w-14 h-14">
                        </div>

                        <!-- Arrow -->
                        <div class="absolute right-2 top-2 w-7 h-7">
                            <img src="{{ asset('images/icons/arrow.svg') }}" alt="Arrow" class="w-7 h-7">
                        </div>

                        <!-- Title -->
                        <div class="absolute left-8 top-32 right-8">
                            <h3 class="text-white text-[32px] font-extrabold font-montserrat leading-[125%]">
                                {{ $service->title }}
                            </h3>
                        </div>

                        <!-- Description -->
                        <div
                            class="absolute left-8 top-56 right-8 bottom-8 text-white text-lg font-normal font-montserrat leading-7 pl-4 overflow-hidden">
                            <div class="line-clamp-[6] [&>ul]:list-disc [&>ul>li]:mb-4">
                                {!! $service->left_content !!}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Controls Row: Dots (Left) + Button (Right) -->
        <div class="flex justify-between items-center px-4 mt-4">
            <!-- Pagination Dots (Functional) -->
            <div class="flex gap-2" id="mobile-services-dots">
                @foreach($services as $index => $service)
                    <button
                        class="w-4 h-4 rounded-full transition-colors {{ $index === 0 ? 'bg-veteran-blue' : 'bg-gray-300' }}"
                        onclick="scrollToService({{ $index }})"></button>
                @endforeach
            </div>

            <!-- All Services Button -->
            <a href="{{ route('services') }}"
                class="px-8 py-3 border-2 border-veteran-blue text-black text-sm font-black font-montserrat uppercase tracking-wide rounded-full active:bg-veteran-blue active:text-white transition-colors">
                всі послуги
            </a>
        </div>
    </div>

    <!-- Desktop Services Section (>=768px) -->
    <div class="hidden md:flex justify-center mt-[152px] mb-[300px]">
        <div class="relative w-[1215px] h-[765px]">
            <!-- Title Section -->
            <div class="absolute left-0 top-0">
                <h2 class="text-black text-[72px] font-extrabold font-montserrat uppercase leading-[85.36px] m-0">
                    Види<br />послуг
                </h2>
            </div>

            <!-- All Services Button -->
            <div class="absolute right-0 top-5">
                <a href="{{ route('services') }}"
                    class="w-64 h-16 border-2 border-veteran-blue bg-white text-black text-xl font-black font-montserrat uppercase tracking-wide cursor-pointer transition-all duration-300 ease-in-out rounded-[412px] flex items-center justify-center hover:bg-veteran-blue hover:text-white">
                    всі послуги
                </a>
            </div>

            <!-- Service Cards -->
            <div class="absolute left-0 top-[269px] flex gap-8">
                @php
                    $icons = [
                        '01' => 'support.svg',
                        '02' => 'legal.svg',
                        '03' => 'head.svg',
                        '04' => 'business.svg',
                        '05' => 'health.svg',
                        '06' => 'education.svg',
                    ];
                @endphp

                @foreach($services as $service)
                    <a href="{{ route('services') }}"
                        class="relative w-96 h-[496px] cursor-pointer transition-transform duration-300 hover:scale-105"
                        style="background-image: url('{{ asset('images/backgrounds/service-bg.svg') }}'); background-size: fit; background-repeat: no-repeat; background-position: center;">
                        <!-- Icon -->
                        <div
                            class="absolute left-[39px] top-[41px] w-[59px] h-[59px] rounded-full flex items-center justify-center">
                            <img src="{{ $service->icon_path ? asset('storage/' . $service->icon_path) : asset('storage/images/icons/' . ($icons[$service->number] ?? 'support.svg')) }}"
                                alt="Icon" class="w-[59px] h-[59px]">
                        </div>

                        <!-- Arrow -->
                        <div class="absolute right-[5px] w-[30px] h-[30px]">
                            <img src="{{ asset('images/icons/arrow.svg') }}" alt="Arrow" class="w-[30px] h-[30px]">
                        </div>

                        <!-- Title -->
                        <div class="absolute left-[39px] top-[143px] w-72">
                            <h3 class="text-white text-[30px] font-extrabold font-montserrat leading-10 m-0">
                                {{ $service->title }}
                            </h3>
                        </div>

                        <!-- Description -->
                        <div
                            class="absolute left-[39px] top-[253px] w-72 text-white text-xl font-normal font-montserrat leading-7 m-0 pl-5 [&>ul]:list-disc [&>ul>li]:mb-7">
                            {!! $service->left_content !!}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Mobile News Section (<768px) -->
    <div class="block md:hidden px-4 mt-12 mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-black text-[40px] font-extrabold font-montserrat uppercase leading-tight">
                Новини
            </h2>
        </div>

        <!-- Vertical Stack of News -->
        <div class="flex flex-col gap-8">
            @foreach($news as $article)
                <a href="{{ route('news.show', $article) }}" class="flex flex-col group">
                    <!-- Image -->
                    <img class="w-full h-[200px] rounded-[20px] object-cover"
                        src="{{ asset('storage/' . $article->image_url) }}" alt="{{ $article->title }}">

                    <!-- Title -->
                    <div class="w-full mt-4 text-black text-xl font-bold leading-tight line-clamp-2">
                        {{ $article->title }}
                    </div>

                    <!-- Description -->
                    <div class="w-full mt-3 text-black text-sm font-normal leading-snug line-clamp-5">
                        {{ $article->summary }}
                    </div>

                    <!-- Date & Button row -->
                    <div class="w-full mt-4 flex justify-between items-center">
                        <!-- Date -->
                        <div class="text-black text-xs font-bold uppercase tracking-wide">
                            {{ $article->published_at->isoFormat('D MMM, YYYY') }}
                        </div>

                        <!-- Button -->
                        <div
                            class="w-32 h-10 rounded-full border-2 border-veteran-blue flex items-center justify-center group-active:bg-veteran-blue transition-colors">
                            <span
                                class="text-black group-active:text-white text-[10px] font-bold uppercase tracking-wide transition-colors">
                                ЧИТАТИ ДАЛІ
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="md:hidden flex justify-end">
        <a href="#"
            class="text-base font-bold text-black uppercase border-b border-black hover:text-veteran-blue hover:border-veteran-blue transition-colors">
            БІЛЬШЕ НОВИН ТУТ
        </a>
    </div>

    <!-- Desktop News Section (>=768px) -->
    <div class="hidden md:block w-full mb-[300px]">
        <!-- More News Link -->
        <div class="flex justify-end mb-8">
            <a href="#"
                class="text-base font-bold text-black uppercase border-b border-black hover:text-veteran-blue hover:border-veteran-blue transition-colors">
                БІЛЬШЕ НОВИН ТУТ
            </a>
        </div>

        <!-- News Grid -->
        <div class="flex gap-[55px]">
            @foreach($news as $article)
                <a href="{{ route('news.show', $article) }}" class="flex-1 min-w-0 flex flex-col group block">
                    <!-- Image -->
                    <img class="w-full h-[285px] rounded-[20px] object-cover"
                        src="{{ asset('storage/' . $article->image_url) }}" alt="{{ $article->title }}">

                    <!-- Title -->
                    <div class="w-full mt-10 text-black text-3xl font-bold leading-10 h-20 line-clamp-2">
                        {{ $article->title }}
                    </div>

                    <!-- Description -->
                    <div class="w-full mt-20 text-black text-base font-normal leading-snug line-clamp-3">
                        {{ $article->summary }}
                    </div>

                    <!-- Date & Button row -->
                    <div class="w-full mt-auto pt-20 flex justify-between items-center">
                        <!-- Date -->
                        <div class="text-black text-sm font-bold uppercase leading-tight tracking-wide">
                            {{ $article->published_at->isoFormat('D MMMM, YYYY') }}
                        </div>

                        <!-- Button -->
                        <div
                            class="w-44 h-12 rounded-[200px] border-2 border-veteran-blue flex items-center justify-center group-hover:bg-veteran-blue transition-colors cursor-pointer">
                            <span
                                class="text-black group-hover:text-white text-xs font-bold uppercase leading-none tracking-wide transition-colors">ЧИТАТИ
                                ДАЛІ</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- Mobile Team Section (<768px) -->
    <div class="block md:hidden mt-16 mb-16">
        <h2 class="text-black text-[40px] font-extrabold font-montserrat uppercase leading-tight mb-8">
            Наша<br>команда
        </h2>

        <!-- Swipe Carousel -->
        <!-- Added [&::-webkit-scrollbar]:hidden to force hide scrollbar -->
        <div id="mobile-team-carousel" class="overflow-x-auto pb-4 [&::-webkit-scrollbar]:hidden"
            style="scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none;">
            <div class="flex gap-4 px-1" style="width: max-content;">
                @foreach($team as $member)
                    <div class="flex-shrink-0 w-[394px]" style="scroll-snap-align: center;">
                        <div class="w-full h-[440px] bg-zinc-300 rounded-[20px] overflow-hidden">
                            <img class="w-full h-full object-cover" style="object-position: center 5%;"
                                src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->full_name }}">
                        </div>
                        <div class="mt-6 text-black text-2xl font-extrabold font-montserrat leading-8">
                            {{ $member->full_name }}
                        </div>
                        <div class="mt-3 text-black text-base font-normal font-montserrat leading-6">
                            {{ $member->role }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Controls Row: Dots (Left) + Button (Right) -->
        <div class="flex justify-between items-center mt-4">
            <!-- Pagination Dots -->
            <div class="flex gap-2" id="mobile-team-dots">
                @foreach($team as $index => $member)
                    <button
                        class="w-4 h-4 rounded-full transition-colors {{ $index === 0 ? 'bg-veteran-blue' : 'bg-gray-300' }}"
                        onclick="scrollToTeamMember({{ $index }})"></button>
                @endforeach
            </div>

            <!-- Team Button -->
            <a href="{{ route('team') }}"
                class="px-12 py-3 border-2 border-veteran-blue text-black text-lg font-black font-montserrat uppercase tracking-wide rounded-full active:bg-veteran-blue active:text-white transition-colors">
                команда
            </a>
        </div>
    </div>

    <!-- Desktop Team Section (>=768px) -->
    <div class="hidden md:flex justify-center mt-[152px] mb-[300px]">
        <div class="relative w-[1170px] h-[600px]">
            <!-- Title Section -->
            <div class="absolute left-0 top-0">
                <h2 class="text-black text-[72px] font-extrabold font-montserrat uppercase leading-[85.36px] m-0">
                    Наша<br />команда
                </h2>
            </div>

            <!-- Team Button -->
            <div class="absolute right-0 top-5">
                <a href="{{ route('team') }}"
                    class="w-64 h-16 border-2 border-veteran-blue bg-white text-black text-xl font-black font-montserrat uppercase tracking-wide cursor-pointer transition-all duration-300 ease-in-out rounded-[412px] flex items-center justify-center hover:bg-veteran-blue hover:text-white">
                    команда
                </a>
            </div>

            <!-- Team Members -->
            <div class="absolute left-0 top-64 flex gap-[30px]">
                @foreach($team as $member)
                    <div class="relative">
                        <div class="w-[370px] h-[440px] bg-zinc-300 rounded-[20px] overflow-hidden">
                            <img class="w-full h-full object-cover" style="object-position: center 5%;"
                                src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->full_name }}">
                        </div>
                        <div class="mt-10 text-black text-3xl font-extrabold font-montserrat leading-10">
                            {{ $member->full_name }}
                        </div>
                        <div class="mt-6 text-black text-xl font-normal font-montserrat leading-7">
                            {{ $member->role }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Mobile Map Section (<768px) -->
    <div class="block md:hidden mt-12 mb-16">
        <h2 class="text-black text-[40px] font-extrabold font-montserrat uppercase leading-tight mb-8">
            Хмельницький<br>вдячний
        </h2>

        <div class="rounded-[30px] overflow-hidden border-2 border-black">
            <div class="relative h-[700px]">
                <img src="{{ asset('images/backgrounds/map.png') }}" alt="Хмельницький Вдячний Map"
                    class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <!-- Desktop Map Section (>=768px) -->
    <div class="hidden md:flex pt-[300px] justify-center">
        <div class="relative w-[1815px]">
            <!-- Title Section -->
            <div class="absolute left-[325px] top-0">
                <h2 class="text-black text-[72px] font-extrabold font-montserrat uppercase leading-[85.36px] m-0">
                    Хмельницький<br />вдячний
                </h2>
            </div>

            <!-- Map -->
            <div class="mt-40 pt-20">
                <div class="rounded-[100px] overflow-hidden border-2 border-black">
                    <div class="relative h-[750px]">
                        <img src="{{ asset('images/backgrounds/map.png') }}" alt="Хмельницький Вдячний Map"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Mobile Partners Section (<768px) -->
    <div class="block md:hidden mt-12 mb-16">
        <h2 class="text-black text-[40px] font-extrabold font-montserrat uppercase leading-tight mb-8">
            Наші партнери
        </h2>

        <!-- 2-Column Grid with centered odd last item -->
        <div class="grid grid-cols-2 gap-4">
            @foreach($partners as $index => $partner)
                @php
                    $isLastOdd = $partners->count() % 2 === 1 && $index === $partners->count() - 1;
                @endphp
                <div class="{{ $isLastOdd ? 'col-span-2 flex justify-center' : '' }}">
                    <div
                        class="w-full {{ $isLastOdd ? 'max-w-[160px]' : '' }} h-24 flex items-center justify-center rounded-lg p-2">
                        <img src="{{ asset('storage/' . $partner->logo_path) }}" alt="{{ $partner->name }}"
                            class="max-w-full max-h-full object-contain">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Desktop Partners Section (>=768px) -->
    <div class="hidden md:flex justify-center pt-[130px] mb-[180px]">
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
                <button id="partners-prev"
                    class="w-16 h-16 flex items-center justify-center transition-all hover:opacity-80">
                    <x-partners-arrow direction="left" />
                </button>

                <!-- Partners Container -->
                <div class="w-[1100px] mx-[35px] overflow-hidden">
                    <div id="partners-track" class="flex gap-[30px] transition-transform duration-500 ease-in-out">
                        @foreach($partners as $partner)
                            <div class="w-[225px] h-32 flex items-center justify-center flex-shrink-0">
                                <img src="{{ asset('storage/' . $partner->logo_path) }}" alt="{{ $partner->name }}"
                                    class="max-w-full max-h-full object-contain">
                            </div>
                        @endforeach
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
        document.addEventListener('DOMContentLoaded', function () {
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

            // ========== Mobile Hero Carousel ==========
            const mobileCarousel = document.getElementById('mobile-hero-carousel');
            if (mobileCarousel) {
                const mobileSlides = mobileCarousel.querySelectorAll('.mobile-carousel-slide');
                const mobilePrevButtons = mobileCarousel.querySelectorAll('.mobile-hero-prev');
                const mobileNextButtons = mobileCarousel.querySelectorAll('.mobile-hero-next');

                let mobileCurrentSlide = 0;
                const mobileTotalSlides = mobileSlides.length;
                let mobileIsAnimating = false;

                function showMobileSlide(targetIndex) {
                    if (targetIndex === mobileCurrentSlide || mobileIsAnimating) return;
                    mobileIsAnimating = true;

                    // Hide current slide
                    mobileSlides[mobileCurrentSlide].style.transform = 'translateX(-100%)';

                    // Show target slide
                    mobileSlides[targetIndex].style.transform = 'translateX(0%)';

                    setTimeout(() => {
                        mobileIsAnimating = false;
                    }, 700);

                    mobileCurrentSlide = targetIndex;
                }

                function mobileNextSlide() {
                    const nextIndex = (mobileCurrentSlide + 1) % mobileTotalSlides;
                    showMobileSlide(nextIndex);
                }

                function mobilePrevSlide() {
                    const prevIndex = (mobileCurrentSlide - 1 + mobileTotalSlides) % mobileTotalSlides;
                    showMobileSlide(prevIndex);
                }

                mobilePrevButtons.forEach(btn => {
                    btn.addEventListener('click', () => {
                        if (!mobileIsAnimating) mobilePrevSlide();
                    });
                });

                mobileNextButtons.forEach(btn => {
                    btn.addEventListener('click', () => {
                        if (!mobileIsAnimating) mobileNextSlide();
                    });
                });

                // Init first slide
                mobileSlides.forEach((slide, i) => {
                    slide.style.transform = i === 0 ? 'translateX(0%)' : 'translateX(100%)';
                });
            }

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
            const totalItems = {{ $partners->count() }}; // Total number of partner items
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

            // ========== Mobile Services Carousel ==========
            const servicesCarousel = document.getElementById('mobile-services-carousel');
            const servicesDots = document.querySelectorAll('#mobile-services-dots button');

            if (servicesCarousel && servicesDots.length > 0) {
                // Scroll to specific service
                window.scrollToService = (index) => {
                    const cardWidth = 396; // 396px card width
                    const gap = 16; // 16px gap (rem-4)
                    // Calculate scroll position to center the card
                    // Container padding-left is 16px (px-4)
                    // We want to scroll so the target card is centered
                    // However, with snap-center, we just need to scroll near it.
                    // Simple scroll: index * (cardWidth + gap)

                    const scrollLeft = index * (cardWidth + gap);
                    servicesCarousel.scrollTo({
                        left: scrollLeft,
                        behavior: 'smooth'
                    });
                };

                // Update active dot on scroll
                let servicesScrollTimeout;
                servicesCarousel.addEventListener('scroll', () => {
                    clearTimeout(servicesScrollTimeout);
                    servicesScrollTimeout = setTimeout(() => {
                        const scrollLeft = servicesCarousel.scrollLeft;
                        const cardWidth = 396;
                        const gap = 16;
                        const totalCardWidth = cardWidth + gap;

                        // Calculate active index based on scroll position + half wrapper width to find center
                        // But simpler approach for snap-scroll: round(scrollLeft / itemWidth)
                        const activeIndex = Math.round(scrollLeft / totalCardWidth);

                        servicesDots.forEach((dot, index) => {
                            if (index === activeIndex) {
                                dot.classList.remove('bg-gray-300');
                                dot.classList.add('bg-veteran-blue');
                            } else {
                                dot.classList.remove('bg-veteran-blue');
                                dot.classList.add('bg-gray-300');
                            }
                        });
                    }, 50); // Debounce slightly
                });
            }

            // ========== Mobile Team Carousel ==========
            const teamCarousel = document.getElementById('mobile-team-carousel');
            const teamDots = document.querySelectorAll('#mobile-team-dots button');

            if (teamCarousel && teamDots.length > 0) {
                // Scroll to specific member
                window.scrollToTeamMember = (index) => {
                    const cardWidth = 394; // 394px card width
                    const gap = 16; // 16px gap (rem-4)
                    const scrollLeft = index * (cardWidth + gap);
                    teamCarousel.scrollTo({
                        left: scrollLeft,
                        behavior: 'smooth'
                    });
                };

                // Update active dot on scroll
                let teamScrollTimeout;
                teamCarousel.addEventListener('scroll', () => {
                    clearTimeout(teamScrollTimeout);
                    teamScrollTimeout = setTimeout(() => {
                        const scrollLeft = teamCarousel.scrollLeft;
                        const cardWidth = 394;
                        const gap = 16;
                        const totalCardWidth = cardWidth + gap;

                        const activeIndex = Math.round(scrollLeft / totalCardWidth);

                        teamDots.forEach((dot, index) => {
                            if (index === activeIndex) {
                                dot.classList.remove('bg-gray-300');
                                dot.classList.add('bg-veteran-blue');
                            } else {
                                dot.classList.remove('bg-veteran-blue');
                                dot.classList.add('bg-gray-300');
                            }
                        });
                    }, 50); // Debounce
                });
            }
        });
    </script>
@endsection

@section('footer')
    @include('partials.footer-extended')
@endsection