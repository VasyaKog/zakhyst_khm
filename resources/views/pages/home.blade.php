@extends('layouts.web')
@section('title', 'Головна')
@section('content')
    <!-- Desktop Hero & Footer Wrapper (>=768px) -->
    <div class="hidden md:block">
        <div id="hero-carousel" class="relative overflow-hidden h-[820px] mb-8 rounded-[100px]">
            @forelse($heroBanners as $index => $banner)
                <x-hero-slide :banner="$banner" :isFirst="$index === 0" />
            @empty
                <!-- Fallback if no banners -->
                <div class="absolute inset-0 w-full h-[820px] bg-gray-200 flex items-center justify-center">
                    <p class="text-gray-500 text-xl">Немає банерів для відображення</p>
                </div>
            @endforelse
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
            @forelse($heroBanners as $index => $banner)
                <x-mobile-hero-slide :banner="$banner" :isFirst="$index === 0" />
            @empty
                <!-- Fallback if no banners -->
                <div class="absolute inset-0 w-full h-full bg-gray-200 flex items-center justify-center">
                    <p class="text-gray-500 text-lg">Немає банерів</p>
                </div>
            @endforelse
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
    <div class="block md:hidden mt-16 mb-16 relative">
        <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
            class="absolute right-0 top-4 w-[70px] h-[70px] cursor-pointer hover:opacity-80 transition-opacity z-20"
            onclick="openContactModal()">
        <h2 class="text-black text-[40px] font-extrabold font-montserrat uppercase leading-tight px-4 mb-8">
            Види послуг
        </h2>

        <!-- Swipe Carousel Container -->
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
            <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
                class="absolute right-0 top-0 w-[70px] h-[70px] cursor-pointer hover:opacity-80 transition-opacity z-20"
                onclick="openContactModal()">
            <!-- Title Section -->
            <div class="absolute left-0 top-0">
                <h2 class="text-black text-[72px] font-extrabold font-montserrat uppercase leading-[85.36px] m-0">
                    Види<br />послуг
                </h2>
            </div>

            <!-- All Services Button -->
            <div class="absolute right-0 top-[90px]">
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
                            class="absolute left-[39px] top-[253px] w-72 text-white text-xl font-normal font-montserrat leading-7 m-0 overflow-hidden line-clamp-6 [&>ul]:list-disc [&>ul]:pl-2 [&>ul>li]:mb-7">
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
        <a href="{{ route('news') }}"
            class="text-base font-bold text-black uppercase border-b border-black hover:text-veteran-blue hover:border-veteran-blue transition-colors">
            БІЛЬШЕ НОВИН ТУТ
        </a>
    </div>

    <!-- Desktop News Section (>=768px) -->
    <div class="hidden md:block w-full mb-[300px]">
        <!-- More News Link -->
        <div class="flex justify-end mb-8">
            <a href="{{ route('news') }}"
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
            // ========== Desktop Hero Carousel ==========
            const carousel = document.getElementById('hero-carousel');
            const slides = document.querySelectorAll('.carousel-slide');

            if (carousel && slides.length > 0) {
                let currentSlide = 0;
                const totalSlides = slides.length;
                let isAnimating = false;

                // Initialize styles
                slides.forEach((slide, i) => {
                    if (i === 0) {
                        slide.style.transform = 'translateX(0%)';
                        slide.style.zIndex = '2';
                        slide.classList.add('active');
                    } else {
                        slide.style.transform = 'translateX(100%)';
                        slide.style.zIndex = '1';
                        slide.classList.remove('active');
                    }
                });

                function transitionSlide(targetIndex, direction) {
                    if (isAnimating || targetIndex === currentSlide) return;
                    isAnimating = true;

                    const currentSlideEl = slides[currentSlide];
                    const targetSlideEl = slides[targetIndex];

                    // Determine start and end positions
                    const startPos = direction === 'next' ? '100%' : '-100%';
                    const exitPos = direction === 'next' ? '-100%' : '100%';

                    // 1. Setup Target Slide (Instant, no transition)
                    targetSlideEl.style.transition = 'none';
                    targetSlideEl.style.transform = `translateX(${startPos})`;
                    targetSlideEl.style.zIndex = '2';
                    currentSlideEl.style.zIndex = '1';

                    // Force Reflow
                    targetSlideEl.offsetHeight;

                    // 2. Enable Transistions
                    targetSlideEl.style.transition = 'transform 1.5s ease-in-out';
                    currentSlideEl.style.transition = 'transform 1.5s ease-in-out';

                    // 3. Animate
                    requestAnimationFrame(() => {
                        currentSlideEl.style.transform = `translateX(${exitPos})`;
                        targetSlideEl.style.transform = 'translateX(0%)';
                        targetSlideEl.classList.add('active');
                    });

                    // 4. Cleanup after animation
                    setTimeout(() => {
                        currentSlideEl.classList.remove('active');
                        // Reset current slide to be off-screen and ready
                        // We don't strictly need to move it, but keeping it clean helps
                        // currentSlideEl.style.transform = 'translateX(100%)'; 

                        isAnimating = false;
                    }, 1500);

                    currentSlide = targetIndex;
                }

                function nextSlide() {
                    const nextIndex = (currentSlide + 1) % totalSlides;
                    transitionSlide(nextIndex, 'next');
                }

                function prevSlide() {
                    const prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
                    transitionSlide(prevIndex, 'prev');
                }

                // Attach Listeners
                const allLeftArrows = document.querySelectorAll('.carousel-slide .absolute button:first-child');
                const allRightArrows = document.querySelectorAll('.carousel-slide .absolute button:last-child');

                allLeftArrows.forEach(arrow => {
                    arrow.addEventListener('click', (e) => {
                        e.stopPropagation(); // Prevent bubbling if needed
                        prevSlide();
                    });
                });

                allRightArrows.forEach(arrow => {
                    arrow.addEventListener('click', (e) => {
                        e.stopPropagation();
                        nextSlide();
                    });
                });
            }

            // ========== Mobile Hero Carousel ==========
            const mobileCarousel = document.getElementById('mobile-hero-carousel');
            if (mobileCarousel) {
                const mobileSlides = mobileCarousel.querySelectorAll('.mobile-carousel-slide');
                const mobilePrevButtons = mobileCarousel.querySelectorAll('.mobile-hero-prev');
                const mobileNextButtons = mobileCarousel.querySelectorAll('.mobile-hero-next');

                let mobileCurrentSlide = 0;
                const mobileTotalSlides = mobileSlides.length;
                let mobileIsAnimating = false;

                // Init slides logic
                mobileSlides.forEach((slide, i) => {
                    slide.style.transition = 'transform 0.7s ease-in-out';
                    if (i === 0) {
                        slide.style.transform = 'translateX(0%)';
                        slide.style.zIndex = '2';
                    } else {
                        slide.style.transform = 'translateX(100%)';
                        slide.style.zIndex = '1';
                    }
                });

                function mobileTransition(targetIndex, direction) {
                    if (mobileIsAnimating || targetIndex === mobileCurrentSlide) return;
                    mobileIsAnimating = true;

                    const currentSlideEl = mobileSlides[mobileCurrentSlide];
                    const targetSlideEl = mobileSlides[targetIndex];

                    const startPos = direction === 'next' ? '100%' : '-100%';
                    const exitPos = direction === 'next' ? '-100%' : '100%';

                    // Setup Target
                    targetSlideEl.style.transition = 'none'; // Disable transition for setup
                    targetSlideEl.style.transform = `translateX(${startPos})`;
                    targetSlideEl.style.zIndex = '2';
                    currentSlideEl.style.zIndex = '1';

                    // Force Reflow
                    targetSlideEl.offsetHeight;

                    // Enable Transitions
                    targetSlideEl.style.transition = 'transform 0.7s ease-in-out';
                    currentSlideEl.style.transition = 'transform 0.7s ease-in-out';

                    // Animate
                    requestAnimationFrame(() => {
                        currentSlideEl.style.transform = `translateX(${exitPos})`;
                        targetSlideEl.style.transform = 'translateX(0%)';
                    });

                    setTimeout(() => {
                        mobileIsAnimating = false;
                    }, 700);

                    mobileCurrentSlide = targetIndex;
                }

                function mobileNextSlide() {
                    const nextIndex = (mobileCurrentSlide + 1) % mobileTotalSlides;
                    mobileTransition(nextIndex, 'next');
                }

                function mobilePrevSlide() {
                    const prevIndex = (mobileCurrentSlide - 1 + mobileTotalSlides) % mobileTotalSlides;
                    mobileTransition(prevIndex, 'prev');
                }

                mobilePrevButtons.forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        mobilePrevSlide();
                    });
                });

                mobileNextButtons.forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        mobileNextSlide();
                    });
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