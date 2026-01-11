<!-- Mobile Hero Slide Component -->
@props(['banner', 'isFirst' => false])

@php
    $isCodedSlide = $banner->isCodedSlide();
    $codedSlideId = $banner->coded_slide_id;
@endphp

<div class="mobile-carousel-slide absolute inset-0 w-full h-full overflow-hidden {{ $isFirst ? 'active' : '' }} transition-all duration-700 ease-in-out"
    style="transform: translateX({{ $isFirst ? '0%' : '100%' }});">

    @if($codedSlideId === 'slide1')
        {{-- Coded Slide 1: Grid (Who We Are) --}}
        <img src="{{ asset('images/backgrounds/bg1.png') }}" alt="Family Background"
            class="absolute inset-0 w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-neutral-900/30"></div>

        <div class="absolute inset-0 flex flex-col pt-36">
            <h1 class="text-white text-[2.25rem] font-bold font-unbounded mb-5 leading-[116%] tracking-normal px-12">
                Для кого ми:
            </h1>

            <div class="flex flex-col gap-2 mx-8">
                <div
                    class="bg-white dark:bg-zinc-800 w-full min-h-12 rounded-full py-2.5 px-6 flex items-center gap-3 transition-colors">
                    <span
                        class="text-black dark:text-white text-[0.75rem] font-bold font-montserrat uppercase leading-tight transition-colors">
                        ВЕТЕРАНИ ТА ЧЛЕНИ ЇХ РОДИН
                    </span>
                </div>
                <div
                    class="bg-white dark:bg-zinc-800 w-full min-h-12 rounded-full py-2.5 px-6 flex items-center gap-3 transition-colors">
                    <span
                        class="text-black dark:text-white text-[0.75rem] font-bold font-montserrat uppercase leading-tight transition-colors">
                        ЧЛЕНИ СІМЕЙ ЗАГИБЛИХ
                    </span>
                </div>
                <div
                    class="bg-white dark:bg-zinc-800 w-full min-h-12 rounded-full py-2.5 px-6 flex items-center gap-3 transition-colors">
                    <span
                        class="text-black dark:text-white text-[0.75rem] font-bold font-montserrat uppercase leading-tight transition-colors">
                        ВІЙСЬКОВІ ТА ЧЛЕНИ ЇХ РОДИН
                    </span>
                </div>
                <div
                    class="bg-white dark:bg-zinc-800 w-full min-h-12 rounded-full py-2.5 px-6 flex items-center gap-3 transition-colors">
                    <span
                        class="text-black dark:text-white text-[0.75rem] font-bold font-montserrat uppercase leading-tight transition-colors">
                        ЧЛЕНИ СІМЕЙ ВІЙСЬКОВОПОЛОНЕННИХ ТА ЗНИКЛИХ БЕЗВІСТИ
                    </span>
                </div>
            </div>
        </div>

    @elseif($codedSlideId === 'slide2')
        {{-- Coded Slide 2: Business --}}
        <img src="{{ asset('images/backgrounds/bg2.png') }}" alt="Business Background"
            class="absolute inset-0 w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-neutral-900/30"></div>

        <div class="absolute inset-0 flex flex-col justify-center px-4">
            <div class="p-6">
                <h2 class="text-white text-[2.625rem] font-bold font-unbounded leading-tight mb-4">
                    Бізнес - ветеранам!
                </h2>
                <p class="text-white text-lg font-medium font-unbounded uppercase">
                    Дізнайся більше про цінні пропозиції <span class="underline">тут</span>
                </p>
            </div>
        </div>

    @elseif($codedSlideId === 'slide3')
        {{-- Coded Slide 3: Memorial --}}
        <img src="{{ asset('images/backgrounds/bg3.png') }}" alt="Memorial Background"
            class="absolute inset-0 w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-neutral-900/30"></div>

        <div class="absolute inset-0 flex flex-col justify-center px-4">
            <h2 class="text-white text-[2rem] font-bold font-unbounded leading-tight mb-4">
                Вони загинули за Україну!
            </h2>
            <p class="text-white text-lg font-medium font-unbounded uppercase mb-6">
                Віртуальний меморіал полеглим захисникам та захисницям
            </p>
            <button class="w-full max-w-[280px] h-14 border-2 border-white rounded-full flex items-center justify-center">
                <span class="text-white text-base font-black font-montserrat uppercase tracking-wide">
                    відвідати меморіал
                </span>
            </button>
        </div>

    @else
        {{-- Custom Banner: Just photo + optional link --}}
        @if($banner->link_url)
            <a href="{{ $banner->link_url }}" class="block w-full h-full">
        @endif

            <img src="{{ asset('storage/' . $banner->image_path) }}" alt="Banner"
                class="absolute inset-0 w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-neutral-900/20"></div>

            @if($banner->link_url)
                </a>
            @endif
    @endif

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