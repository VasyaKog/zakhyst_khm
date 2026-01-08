<!-- Hero Slide Component -->
@props(['banner', 'isFirst' => false])

@php
    $isCodedSlide = $banner->isCodedSlide();
    $codedSlideId = $banner->coded_slide_id;
@endphp

<div class="carousel-slide absolute inset-0 w-full h-[820px] overflow-hidden {{ $isFirst ? 'active' : '' }} transition-all duration-1500 ease-in-out"
    style="transform: translateX({{ $isFirst ? '0%' : '100%' }});">

    @if($codedSlideId === 'slide1')
        {{-- Coded Slide 1: Grid (Who We Are) --}}
        <img src="{{ asset('images/backgrounds/bg1.png') }}" alt="Family Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>

        <div class="absolute left-[326px] top-[243px]">
            <h1 class="text-white text-6xl font-bold font-unbounded leading-[74px] tracking-wide">
                Для кого ми:
            </h1>
        </div>

        <div class="absolute left-[326px] top-[367px] grid grid-cols-2 gap-8">
            <div class="w-[300px] h-[90px] bg-white rounded-[10px] flex items-center px-4 space-x-4">
                <div class="w-11 h-11 flex items-center justify-center">
                    <img src="{{ asset('images/icons/family.svg') }}" alt="Family" class="w-11 h-11">
                </div>
                <span class="text-black text-xs font-bold font-montserrat uppercase leading-tight tracking-wide">
                    ВЕТЕРАНИ ТА ЧЛЕНИ ЇХ РОДИН
                </span>
            </div>
            <div class="w-[300px] h-[90px] bg-white rounded-[10px] flex items-center px-4 space-x-4">
                <div class="w-11 h-11 flex items-center justify-center">
                    <img src="{{ asset('images/icons/heart.svg') }}" alt="Heart" class="w-11 h-11">
                </div>
                <span class="text-black text-xs font-bold font-montserrat uppercase leading-tight tracking-wide">
                    ЧЛЕНИ СІМЕЙ ЗАГИБЛИХ
                </span>
            </div>
            <div class="w-[300px] h-[90px] bg-white rounded-[10px] flex items-center px-4 space-x-4">
                <div class="w-11 h-11 flex items-center justify-center">
                    <img src="{{ asset('images/icons/army.svg') }}" alt="Army" class="w-11 h-11">
                </div>
                <span class="text-black text-xs font-bold font-montserrat uppercase leading-tight tracking-wide">
                    ВІЙСЬКОВІ ТА ЧЛЕНИ ЇХ РОДИН
                </span>
            </div>
            <div class="w-[300px] h-[90px] bg-white rounded-[10px] flex items-center px-4 space-x-4">
                <div class="w-11 h-11 flex items-center justify-center">
                    <img src="{{ asset('images/icons/people.svg') }}" alt="People" class="w-11 h-11">
                </div>
                <span class="text-black text-xs font-bold font-montserrat uppercase leading-tight tracking-wide">
                    ЧЛЕНИ СІМЕЙ ВІЙСЬКОВОПОЛОНЕННИХ<br />ТА ЗНИКЛИХ БЕЗВІСТИ
                </span>
            </div>
        </div>

    @elseif($codedSlideId === 'slide2')
        {{-- Coded Slide 2: Business (Blue Shape) --}}
        <img src="{{ asset('images/backgrounds/bg2.png') }}" alt="Family Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>

        <div class="absolute left-[325px] top-[200px] w-[700px] h-96 bg-blue-600"
            style="border-top-left-radius: 150px; border-top-right-radius: 50px; border-bottom-left-radius: 150px; border-bottom-right-radius: 150px;">
            <div
                class="absolute left-[90px] top-[74px] w-[519px] h-36 text-white text-6xl font-bold font-unbounded leading-[74.08px] tracking-wide">
                Бізнес - ветеранам!
            </div>
            <div
                class="absolute left-[90px] top-[260px] w-[519px] h-16 text-white text-2xl font-medium font-unbounded uppercase leading-9 tracking-tight">
                Дізнайся більше про цінні пропозиції
                <span class="underline">тут</span>
            </div>
        </div>

    @elseif($codedSlideId === 'slide3')
        {{-- Coded Slide 3: Memorial --}}
        <img src="{{ asset('images/backgrounds/bg3.png') }}" alt="Family Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>

        <div class="absolute left-[325px] top-[200px] w-[669px] h-96 rounded-[412px]">
            <div
                class="absolute left-0 top-0 w-[669px] h-36 text-white text-6xl font-bold font-unbounded leading-[74.08px] tracking-wide">
                Вони загинули за Україну!
            </div>
            <div
                class="absolute left-0 top-[186px] w-[669px] h-16 text-white text-2xl font-medium font-unbounded uppercase leading-9 tracking-tight">
                Віртуальний меморіал полеглим захисникам та захисницям
            </div>
            <div
                class="absolute left-0 top-[317px] w-[320px] h-16 border-2 border-white flex items-center justify-center rounded-[412px]">
                <span class="text-white text-xl font-black font-montserrat uppercase tracking-wide">
                    відвідати меморіал
                </span>
            </div>
        </div>

    @else
        {{-- Custom Banner: Just photo + optional link --}}
        @if($banner->link_url)
            <a href="{{ $banner->link_url }}" class="block w-full h-full">
        @endif

            <img src="{{ asset('storage/' . $banner->image_path) }}" alt="Banner" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-neutral-400 opacity-10 mix-blend-multiply"></div>

            @if($banner->link_url)
                </a>
            @endif
    @endif

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