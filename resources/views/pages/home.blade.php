@extends('layouts.web')
@section('title', __('Home'))
@section('seo_title', 'Головна')
@section('seo_description', 'Ветеранський простір у Хмельницькому - підтримка ветеранів, військових та їхніх родин. Соціальна адаптація, психологічна допомога, юридичні консультації.')
@section('content')
    <!-- Desktop Hero & Footer Wrapper (>=768px) -->
    <div class="hidden lg:block">
        <div id="hero-carousel" class="relative overflow-hidden min-h-[820px] h-auto mb-8 rounded-[100px]">
            @php $visibleIndex = 0; @endphp
            @forelse($heroBanners->filter(fn($b) => $b->isVisibleInCurrentLocale()) as $banner)
                <x-hero-slide :banner="$banner" :isFirst="$visibleIndex === 0" />
                @php $visibleIndex++; @endphp
            @empty
                <!-- Fallback if no banners -->
                <div class="absolute inset-0 w-full min-h-[820px] bg-gray-200 flex items-center justify-center">
                    <p class="text-gray-500 text-xl">{{ __('No Banners Display') }}</p>
                </div>
            @endforelse
        </div>

        <!-- Hero Footer Section (Desktop) -->
        <footer class="flex items-center justify-between py-4 pb-[124px]">
            <!-- Contact Info -->
            <div class="flex items-center shrink-0">
                <img src="{{ asset('images/icons/watsapnp.svg') }}" alt="WhatsApp"
                    class="w-6 h-6 dark:invert transition-all">
                <img src="{{ asset('images/icons/signal.svg') }}" alt="Signal"
                    class="w-6 h-6 ml-2 dark:invert transition-all">
                <img src="{{ asset('images/icons/viber.svg') }}" alt="Viber"
                    class="w-6 h-6 ml-2 dark:invert transition-all">
                <span class="text-black dark:text-white text-base font-bold font-montserrat transition-colors"
                    style="margin-left: 20px; margin-right: 56px;">+38
                    067 563 0090</span>
                <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook"
                    class="w-6 h-6 dark:invert transition-all">
                <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram"
                    class="w-6 h-6 ml-2 dark:invert transition-all">
            </div>

            <!-- Search Bar -->
            <div class="flex-1 max-w-[995px] relative ml-8">
                <div
                    class="w-full h-12 rounded-[300px] border border-black flex items-center px-5 bg-white dark:bg-zinc-800 transition-colors">
                    <input type="text" id="desktop-search-input"
                        class="w-full bg-transparent border-none text-black dark:text-white text-base font-normal font-montserrat placeholder-black dark:placeholder-gray-400 focus:ring-0 p-0"
                        placeholder="{{ __('Search Placeholder') }}" autocomplete="off">
                    <div
                        class="ml-auto w-8 h-8 bg-black dark:bg-white rounded-full flex items-center justify-center cursor-pointer">
                        <img class="w-6 h-6 dark:invert" src="{{ asset('images/icons/icon-search.svg') }}" alt="Search">
                    </div>
                </div>
                <!-- Dropdown Results -->
                <div id="desktop-search-results"
                    class="hidden absolute top-full left-0 w-full mt-2 bg-white dark:bg-zinc-900 rounded-xl shadow-xl z-50 overflow-hidden border border-gray-100 dark:border-zinc-700 max-h-[400px] overflow-y-auto">
                    <!-- Results injected by JS -->
                </div>
            </div>
        </footer>
    </div>

    <!-- Mobile Hero Section (<768px) -->
    <div id="mobile-hero-carousel" class="block lg:hidden mb-8">
        <div class="relative min-h-[600px] h-auto rounded-[62px] overflow-hidden mb-6">
            @php $mobileVisibleIndex = 0; @endphp
            @forelse($heroBanners->filter(fn($b) => $b->isVisibleInCurrentLocale()) as $banner)
                <x-mobile-hero-slide :banner="$banner" :isFirst="$mobileVisibleIndex === 0" />
                @php $mobileVisibleIndex++; @endphp
            @empty
                <!-- Fallback if no banners -->
                <div class="absolute inset-0 w-full h-full bg-gray-200 flex items-center justify-center">
                    <p class="text-gray-500 text-lg">{{ __('No Banners') }}</p>
                </div>
            @endforelse
        </div>

        <!-- Mobile Search Bar -->
        <div class="w-full relative z-30">
            <div
                class="w-full h-11 rounded-full border border-black flex items-center px-4 bg-white dark:bg-zinc-800 transition-colors">
                <input type="text" id="mobile-search-input"
                    class="flex-1 bg-transparent border-none text-black dark:text-white text-sm font-normal font-montserrat placeholder-black dark:placeholder-gray-400 focus:ring-0 p-0 truncate"
                    placeholder="{{ __('Search Placeholder') }}" autocomplete="off">
                <div
                    class="w-7 h-7 bg-black dark:bg-white rounded-full flex-shrink-0 flex items-center justify-center ml-2">
                    <img class="w-4 h-4 dark:invert" src="{{ asset('images/icons/icon-search.svg') }}" alt="Search">
                </div>
            </div>
            <!-- Dropdown Results -->
            <div id="mobile-search-results"
                class="hidden absolute top-full left-0 w-full mt-2 bg-white dark:bg-zinc-900 rounded-xl shadow-xl z-50 overflow-hidden border border-gray-100 dark:border-zinc-700 max-h-[300px] overflow-y-auto">
                <!-- Results injected by JS -->
            </div>
        </div>
    </div>


    <!-- Mobile Services Section (<768px) -->
    <div class="block lg:hidden mt-16 mb-16 relative px-4">
        <!-- Header with title and support icon -->
        <div class="flex flex-col-reverse xs:flex-row xs:items-start xs:justify-between gap-4 mb-8">
            <h2
                class="text-black dark:text-white text-[1.75rem] xs:text-[2.5rem] font-extrabold font-montserrat uppercase leading-tight transition-colors break-words">
                {{ __('Types of Services') }}
            </h2>
            <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
                class="w-[50px] xs:w-[70px] h-[50px] xs:h-[70px] cursor-pointer hover:opacity-80 transition-opacity shrink-0 self-end xs:self-start"
                onclick="openContactModal()">
        </div>

        <!-- Swipe Carousel Container -->
        <div id="mobile-services-carousel" class="overflow-x-auto pb-6 -mx-4 [&::-webkit-scrollbar]:hidden"
            style="scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none;">
            <div class="flex gap-4 pl-4 pr-4" style="width: max-content;">
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
                        class="mobile-service-card flex-shrink-0 w-[calc(100vw-32px)] max-w-[396px] h-[496px] relative cursor-pointer transition-transform duration-300 active:scale-95 rounded-xl overflow-hidden bg-cover bg-no-repeat bg-center"
                        style="scroll-snap-align: center; background-image: url('{{ asset('images/backgrounds/service-bg.svg') }}');"
                        data-index="{{ $loop->index }}">
                        <!-- Icon -->
                        <div class="absolute left-8 top-8 w-14 h-14 rounded-full flex items-center justify-center">
                            <img src="{{ $service->icon_path ? asset('storage/' . $service->icon_path) : asset('storage/images/icons/' . ($mobileIcons[$service->number] ?? 'support.svg')) }}"
                                alt="Icon" class="w-14 h-14">
                        </div>

                        <!-- Arrow -->
                        <div class="absolute right-2 top-2 w-7 h-7">
                            <img src="{{ asset('images/icons/arrow.svg') }}" alt="Arrow"
                                class="w-7 h-7 dark:invert transition-all">
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
        <div class="flex flex-wrap justify-between items-center gap-4 mt-4">
            <!-- Pagination Dots (Functional) -->
            <div class="flex gap-2" id="mobile-services-dots">
                @foreach($services as $index => $service)
                    <button
                        class="w-3 xs:w-4 h-3 xs:h-4 rounded-full transition-colors {{ $index === 0 ? 'bg-veteran-blue' : 'bg-gray-300' }}"
                        onclick="scrollToService({{ $index }})"></button>
                @endforeach
            </div>

            <!-- All Services Button -->
            <a href="{{ route('services') }}"
                class="px-4 xs:px-8 py-2 xs:py-3 border-2 border-veteran-blue text-black dark:text-white text-xs xs:text-sm font-black font-montserrat uppercase tracking-wide rounded-full active:bg-veteran-blue active:text-white transition-colors">
                {{ __('All Services') }}
            </a>
        </div>
    </div>

    <!-- Desktop Services Section (>=768px) -->
    <div class="hidden lg:flex justify-center mt-[152px] mb-[300px] px-4">
        <div id="desktop-services-container"
            class="relative w-full max-w-[1215px] min-h-[765px] h-auto transition-all duration-300">
            <img src="{{ asset('images/icons/button-support.svg') }}" alt="Support"
                class="absolute right-0 top-0 w-[70px] h-[70px] cursor-pointer hover:opacity-80 transition-opacity z-20"
                onclick="openContactModal()">
            <!-- Title Section -->
            <div class="absolute left-0 top-0">
                <h2
                    class="text-black dark:text-white text-[72px] font-extrabold font-montserrat uppercase leading-[85.36px] m-0 transition-colors">
                    {!! nl2br(__('Types of Services')) !!}
                </h2>
            </div>

            <!-- All Services Button -->
            <div class="absolute right-0 top-[90px]">
                <a href="{{ route('services') }}"
                    class="w-64 h-16 border-2 border-veteran-blue bg-white dark:bg-zinc-900 text-black dark:text-white text-xl font-black font-montserrat uppercase tracking-wide cursor-pointer transition-all duration-300 ease-in-out rounded-[412px] flex items-center justify-center hover:bg-veteran-blue hover:text-white">
                    {{ __('All Services') }}
                </a>
            </div>

            <!-- Service Cards -->
            <div class="flex flex-wrap justify-center gap-8 items-start pt-[269px]">
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
                        class="desktop-service-card relative w-[370px] min-h-[496px] cursor-pointer transition-transform duration-300 hover:scale-105 flex flex-col"
                        style="background-image: url('{{ asset('images/backgrounds/service-bg.svg') }}'); background-size: contain; background-repeat: no-repeat; background-position: top center;">

                        <!-- Icon (Fixed Position relative to top-left) -->
                        <div
                            class="absolute left-[39px] top-[41px] w-[59px] h-[59px] rounded-full flex items-center justify-center">
                            <img src="{{ $service->icon_path ? asset('storage/' . $service->icon_path) : asset('storage/images/icons/' . ($icons[$service->number] ?? 'support.svg')) }}"
                                alt="Icon" class="w-[59px] h-[59px]">
                        </div>

                        <!-- Arrow (Fixed Position) -->
                        <div class="absolute right-2 top-2 w-7 h-7">
                            <img src="{{ asset('images/icons/arrow.svg') }}" alt="Arrow"
                                class="w-7 h-7 dark:invert transition-all">
                        </div>

                        <!-- Content Flow Wrapper -->
                        <div class="flex flex-col h-full pt-[143px] px-[39px] pb-[40px]">
                            <!-- Title -->
                            <h3 class="w-72 text-white text-[30px] font-extrabold font-montserrat leading-10 m-0 mb-[40px]">
                                {{ $service->title }}
                            </h3>

                            <!-- Description -->
                            <div
                                class="w-full text-white text-xl font-normal font-montserrat leading-7 m-0 overflow-hidden line-clamp-5 [&>ul]:list-disc [&>ul]:pl-2 [&>ul>li]:mb-7">
                                {!! $service->left_content !!}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const container = document.getElementById('desktop-services-container');
            const cards = document.querySelectorAll('.desktop-service-card');

            if (!container || cards.length === 0) return;

            const baseCardHeight = 496;

            function adjustServiceCards() {
                // simple reset
                cards.forEach(card => card.style.height = '');

                let maxContentHeight = baseCardHeight;

                // Check natural heights
                cards.forEach(card => {
                    // Force auto height to measure content
                    card.style.height = 'auto';
                    const scrollHeight = card.scrollHeight;
                    if (scrollHeight > maxContentHeight) {
                        maxContentHeight = scrollHeight;
                    }
                });

                // Apply max height to all for uniformity
                cards.forEach(card => {
                    card.style.height = `${maxContentHeight}px`;
                });

                // Note: Container height is handled by CSS (h-auto)
            }

            adjustServiceCards();
            window.addEventListener('resize', adjustServiceCards);


            setInterval(adjustServiceCards, 1000);
        });
    </script>

    <!-- Mobile News Section (<768px) -->
    <div class="block lg:hidden px-4 mt-12 mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2
                class="text-black dark:text-white text-[2.5rem] font-extrabold font-montserrat uppercase leading-tight transition-colors">
                {{ __('News') }}
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
                    <div
                        class="w-full mt-4 text-black dark:text-white text-xl font-bold leading-tight line-clamp-2 transition-colors">
                        {{ $article->title }}
                    </div>

                    <!-- Description -->
                    <div
                        class="w-full mt-3 text-black dark:text-gray-300 text-sm font-normal leading-snug line-clamp-5 transition-colors">
                        {{ $article->summary }}
                    </div>

                    <!-- Date & Button row -->
                    <div class="w-full mt-4 flex justify-between items-center">
                        <!-- Date -->
                        <div class="text-black dark:text-gray-400 text-xs font-bold uppercase tracking-wide transition-colors">
                            {{ $article->published_at->isoFormat('D MMM, YYYY') }}
                        </div>

                        <!-- Button -->
                        <div
                            class="w-32 h-10 rounded-full border-2 border-veteran-blue flex items-center justify-center group-active:bg-veteran-blue transition-colors">
                            <span
                                class="text-black dark:text-white group-active:text-white text-[0.625rem] font-bold uppercase tracking-wide transition-colors">
                                {{ __('Read More') }}
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="lg:hidden flex justify-end">
        <a href="{{ route('news') }}"
            class="text-base font-bold text-black dark:text-white uppercase border-b border-black dark:border-white hover:text-veteran-blue dark:hover:text-veteran-blue hover:border-veteran-blue dark:hover:border-veteran-blue transition-colors">
            {{ __('More News Here') }}
        </a>
    </div>

    <!-- Desktop News Section (>=768px) -->
    <div class="hidden lg:block w-full mb-[300px]">
        <!-- More News Link -->
        <div class="flex justify-end mb-8">
            <a href="{{ route('news') }}"
                class="text-base font-bold text-black dark:text-white uppercase border-b border-black dark:border-white hover:text-veteran-blue dark:hover:text-veteran-blue hover:border-veteran-blue dark:hover:border-veteran-blue transition-colors">
                {{ __('More News Here') }}
            </a>
        </div>

        <!-- News Grid -->
        <div class="flex gap-[55px]">
            @foreach($news as $article)
                <a href="{{ route('news.show', $article) }}" class="flex-1 min-w-0 flex flex-col group block">
                    <!-- Image -->
                    <img class="w-full h-[285px] rounded-[20px] object-cover opacity-90 dark:opacity-80 transition-opacity"
                        src="{{ asset('storage/' . $article->image_url) }}" alt="{{ $article->title }}">

                    <!-- Title -->
                    <div
                        class="w-full mt-10 text-black dark:text-white text-3xl font-bold leading-10 h-20 line-clamp-2 transition-colors">
                        {{ $article->title }}
                    </div>

                    <!-- Description -->
                    <div
                        class="w-full mt-20 text-black dark:text-gray-300 text-base font-normal leading-snug line-clamp-3 transition-colors">
                        {{ $article->summary }}
                    </div>

                    <!-- Date & Button row -->
                    <div class="w-full mt-auto pt-20 flex justify-between items-center">
                        <!-- Date -->
                        <div
                            class="text-black dark:text-gray-400 text-sm font-bold uppercase leading-tight tracking-wide transition-colors">
                            {{ $article->published_at->isoFormat('D MMMM, YYYY') }}
                        </div>

                        <!-- Button -->
                        <div
                            class="w-44 h-12 rounded-[200px] border-2 border-veteran-blue flex items-center justify-center group-hover:bg-veteran-blue transition-colors cursor-pointer">
                            <span
                                class="text-black dark:text-white group-hover:text-white text-xs font-bold uppercase leading-none tracking-wide transition-colors">{{ __('Read More') }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- Mobile Team Section (<768px) -->
    <div class="block lg:hidden mt-16 mb-16 px-4">
        <h2
            class="text-black dark:text-white text-[1.75rem] xs:text-[2.5rem] font-extrabold font-montserrat uppercase leading-tight mb-8 transition-colors break-words">
            {!! nl2br(__('Our Team')) !!}
        </h2>

        <!-- Swipe Carousel -->
        <div id="mobile-team-carousel" class="overflow-x-auto pb-4 -mx-4 [&::-webkit-scrollbar]:hidden"
            style="scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none;">
            <div class="flex gap-4 pl-4 pr-4" style="width: max-content;">
                @foreach($team as $member)
                    <div class="flex-shrink-0 w-[calc(100vw-32px)] max-w-[394px]" style="scroll-snap-align: center;">
                        <div
                            class="w-full h-[440px] bg-zinc-300 dark:bg-zinc-800 rounded-[20px] overflow-hidden transition-colors">
                            <img class="w-full h-full object-cover dark:opacity-90 transition-opacity"
                                style="object-position: center 5%;" src="{{ asset('storage/' . $member->photo) }}"
                                alt="{{ $member->full_name }}">
                        </div>
                        <div
                            class="mt-6 text-black dark:text-white text-2xl font-extrabold font-montserrat leading-8 transition-colors">
                            {{ $member->full_name }}
                        </div>
                        <div
                            class="mt-3 text-black dark:text-white text-base font-normal font-montserrat leading-6 transition-colors">
                            {{ $member->role }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Controls Row -->
        <div class="flex flex-wrap justify-between items-center gap-4 mt-4">
            <!-- Pagination Dots -->
            <div class="flex gap-2" id="mobile-team-dots">
                @foreach($team as $index => $member)
                    <button
                        class="w-3 xs:w-4 h-3 xs:h-4 rounded-full transition-colors {{ $index === 0 ? 'bg-veteran-blue' : 'bg-gray-300 dark:bg-zinc-600' }}"
                        onclick="scrollToTeamMember({{ $index }})"></button>
                @endforeach
            </div>

            <!-- Team Button -->
            <a href="{{ route('team') }}"
                class="px-6 xs:px-12 py-2 xs:py-3 border-2 border-veteran-blue text-black dark:text-white text-base xs:text-lg font-black font-montserrat uppercase tracking-wide rounded-full active:bg-veteran-blue active:text-white transition-colors">
                {{ __('Team') }}
            </a>
        </div>
    </div>

    <!-- Desktop Team Section (>=1024px) -->
    <div class="hidden lg:block mt-[100px] xl:mt-[152px] mb-[200px] xl:mb-[300px] px-8 xl:px-0">
        <div class="relative w-full max-w-[1170px] mx-auto">
            <!-- Title and Button Row -->
            <div class="flex justify-between items-start mb-12">
                <h2
                    class="text-black dark:text-white text-[3rem] xl:text-[4.5rem] font-extrabold font-montserrat uppercase leading-tight xl:leading-[85.36px] m-0 transition-colors">
                    {!! nl2br(__('Our Team')) !!}
                </h2>

                <!-- Team Button -->
                <a href="{{ route('team') }}"
                    class="w-48 xl:w-64 h-14 xl:h-16 border-2 border-veteran-blue bg-white dark:bg-zinc-900 text-black dark:text-white text-lg xl:text-xl font-black font-montserrat uppercase tracking-wide cursor-pointer transition-all duration-300 ease-in-out rounded-[412px] flex items-center justify-center hover:bg-veteran-blue hover:text-white shrink-0">
                    {{ __('Team') }}
                </a>
            </div>

            <!-- Team Members -->
            <div class="flex flex-wrap gap-6 xl:gap-[30px] justify-center xl:justify-start">
                @foreach($team as $member)
                    <div class="relative w-[calc(33.333%-20px)] min-w-[280px] max-w-[370px]">
                        <div
                            class="w-full h-[350px] xl:h-[440px] bg-zinc-300 dark:bg-zinc-800 rounded-[20px] overflow-hidden transition-colors">
                            <img class="w-full h-full object-cover dark:opacity-90 transition-opacity"
                                style="object-position: center 5%;" src="{{ asset('storage/' . $member->photo) }}"
                                alt="{{ $member->full_name }}">
                        </div>
                        <div
                            class="mt-6 xl:mt-10 text-black dark:text-white text-2xl xl:text-3xl font-extrabold font-montserrat leading-8 xl:leading-10 transition-colors">
                            {{ $member->full_name }}
                        </div>
                        <div
                            class="mt-4 xl:mt-6 text-black dark:text-white text-lg xl:text-xl font-normal font-montserrat leading-6 xl:leading-7 transition-colors">
                            {{ $member->role }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Mobile Map Section (<768px) -->
    <div class="block lg:hidden mt-12 mb-16">
        <h2
            class="text-black dark:text-white text-[2.5rem] font-extrabold font-montserrat uppercase leading-tight mb-8 transition-colors">
            {!! nl2br(__('Khmelnytskyi Grateful')) !!}
        </h2>

        <div class="rounded-[30px] overflow-hidden border-2 border-black dark:border-zinc-500 transition-colors">
            <div class="relative h-[700px]">
                <img src="{{ asset('images/backgrounds/map.png') }}" alt="Хмельницький Вдячний Map"
                    class="w-full h-full object-cover dark:opacity-80 transition-opacity">
            </div>
        </div>
    </div>

    <!-- Desktop Map Section (>=768px) -->
    <div class="hidden lg:block pt-[100px]">
        <!-- Title in responsive container aligned with other sections -->
        <div class="px-4 lg:px-8 xl:px-4 2xl:px-0 lg:max-w-[900px] xl:max-w-[1100px] 2xl:max-w-[1170px] lg:mx-auto mb-16">
            <h2
                class="text-black dark:text-white text-[4.5rem] font-extrabold font-montserrat uppercase leading-[85.36px] m-0 transition-colors">
                {!! nl2br(__('Khmelnytskyi Grateful')) !!}
            </h2>
        </div>

        <!-- Map at original large size, centered -->
        <div class="flex justify-center">
            <div
                class="w-[1815px] rounded-[100px] overflow-hidden border-2 border-black dark:border-zinc-500 transition-colors">
                <div class="relative h-[750px]">
                    <img src="{{ asset('images/backgrounds/map.png') }}" alt="Хмельницький Вдячний Map"
                        class="w-full h-full object-cover dark:opacity-80 transition-opacity">
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Partners Section (<768px) -->
    <div class="block lg:hidden mt-12 mb-16">
        <h2
            class="text-black dark:text-white text-[2.5rem] font-extrabold font-montserrat uppercase leading-tight mb-8 transition-colors">
            {{ __('Our Partners') }}
        </h2>

        <!-- 2-Column Grid with centered odd last item -->
        <div class="grid grid-cols-2 gap-4">
            @foreach($partners as $index => $partner)
                @php
                    $isLastOdd = $partners->count() % 2 === 1 && $index === $partners->count() - 1;
                @endphp
                <div class="{{ $isLastOdd ? 'col-span-2 flex justify-center' : '' }}">
                    <div
                        class="w-full {{ $isLastOdd ? 'max-w-[160px]' : '' }} h-24 flex items-center justify-center rounded-lg p-2 bg-transparent">
                        <img src="{{ asset('storage/' . $partner->logo_path) }}" alt="{{ $partner->name }}"
                            class="max-w-full max-h-full object-contain">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Desktop Partners Section - Grid (lg to xl only: 1024px-1280px) -->
    <div class="hidden lg:block xl:hidden pt-[80px] mb-[120px] px-8">
        <div class="w-full max-w-[1170px] mx-auto">
            <!-- Title Section -->
            <h2
                class="text-black dark:text-white text-[3rem] font-extrabold font-montserrat uppercase leading-tight mb-12 transition-colors">
                {{ __('Our Partners') }}
            </h2>

            <!-- Partners Grid - Shows all logos -->
            <div class="flex flex-wrap gap-6 justify-center">
                @foreach($partners as $partner)
                    <div class="w-[160px] h-24 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('storage/' . $partner->logo_path) }}" alt="{{ $partner->name }}"
                            class="max-w-full max-h-full object-contain">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Desktop Partners Section - Carousel (xl+: 1280px and above) -->
    <div class="hidden xl:flex justify-center pt-[300px] mb-[180px]">
        <div class="relative w-[1170px]">
            <!-- Title Section -->
            <div class="absolute left-0 top-0">
                <h2
                    class="text-black dark:text-white text-[4.5rem] font-extrabold font-montserrat uppercase leading-[85.36px] m-0 transition-colors">
                    {{ __('Our Partners') }}
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
                        const cardWidth = 396; // 396px card width
                        const gap = 16;
                        // Calculate index
                        // We add half width to center threshold
                        const index = Math.round(scrollLeft / (cardWidth + gap));

                        servicesDots.forEach((dot, i) => {
                            if (i === index) {
                                dot.classList.remove('bg-gray-300');
                                dot.classList.add('bg-veteran-blue');
                            } else {
                                dot.classList.add('bg-gray-300');
                                dot.classList.remove('bg-veteran-blue');
                            }
                        });
                    }, 50);
                });
            }

            // ========== Mobile Team Carousel ==========
            const teamCarousel = document.getElementById('mobile-team-carousel');
            const teamDots = document.querySelectorAll('#mobile-team-dots button');

            if (teamCarousel && teamDots.length > 0) {
                // Scroll to specific member
                window.scrollToTeamMember = (index) => {
                    const cardWidth = 394;
                    const gap = 16;
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
                        const index = Math.round(scrollLeft / (cardWidth + gap));

                        teamDots.forEach((dot, i) => {
                            if (i === index) {
                                dot.classList.remove('bg-gray-300', 'dark:bg-zinc-600');
                                dot.classList.add('bg-veteran-blue');
                            } else {
                                dot.classList.add('bg-gray-300', 'dark:bg-zinc-600');
                                dot.classList.remove('bg-veteran-blue');
                            }
                        });
                    }, 50);
                });
            }


        });
    </script>

    <!-- Text Zoom Detection & Handling -->
    <style>
        /* Force flow layout if text zoom is detected */
        body.text-zoomed .home-cards-wrapper {
            position: relative !important;
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: center !important;
            top: auto !important;
            left: auto !important;
            transform: none !important;
            height: auto !important;
            max-width: 100% !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        body.text-zoomed .home-cards-container-parent {
            display: flex !important;
            flex-direction: column !important;
            height: auto !important;
            display: block !important;
            min-height: 0 !important;
        }
    </style>
    <script>
        (function () {
            function checkTextZoom() {
                // Create a reference element
                const div = document.createElement('div');
                div.style.fontSize = '16px';
                div.style.width = '1em';
                div.style.position = 'absolute';
                div.style.visibility = 'hidden';
                document.body.appendChild(div);

                const width = div.offsetWidth;
                document.body.removeChild(div);

                // If 1em is significantly larger than 16px (e.g. >17px), assume zoom
                // Standard browser zoom changes pixels too, so 1em = 16px usually.
                // Text-only zoom usually changes base size.
                // Let's check computed font size of root.
                const rootSize = parseFloat(getComputedStyle(document.documentElement).fontSize);

                // Also check pixel ratio for good measure (though user said text zoom)
                // If rootSize is > 18px (default is usually 16px), trigger zoomed mode
                const isTextZoomed = rootSize > 17;

                if (isTextZoomed) {
                    document.body.classList.add('text-zoomed');
                } else {
                    document.body.classList.remove('text-zoomed');
                }
            }

            window.addEventListener('load', checkTextZoom);
            window.addEventListener('resize', checkTextZoom);
            // Run immediately
            checkTextZoom();
        })();
    </script>
@endsection