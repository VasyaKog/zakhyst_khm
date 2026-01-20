<!-- Hero Slide Component -->
@props(['banner', 'isFirst' => false])

@php
    $isCodedSlide = $banner->isCodedSlide();
    $codedSlideId = $banner->coded_slide_id;
@endphp

<div class="carousel-slide absolute inset-0 w-full min-h-[820px] overflow-hidden {{ $isFirst ? 'active' : '' }} transition-all duration-1500 ease-in-out"
    style="transform: translateX({{ $isFirst ? '0%' : '100%' }});">

    @if($codedSlideId === 'slide1')
        {{-- Coded Slide 1: Grid (Who We Are) --}}
        <img src="{{ asset('images/backgrounds/bg1.png') }}" alt="Family Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-20"></div>

        <!-- Content: positioned slightly left using percentage -->
        <div class="absolute left-[45%] top-1/2 -translate-x-1/2 -translate-y-1/2">
            <h1 class="text-white text-6xl font-bold font-unbounded leading-[74px] tracking-wide mb-8">
                {{ __('Who We Are') }}
            </h1>

            <!-- Grid -->
            <div class="grid grid-cols-2 gap-8 min-w-[632px]">
                <div
                    class="w-[300px] h-[90px] bg-white dark:bg-zinc-800 rounded-[10px] flex items-center px-4 space-x-4 transition-colors">
                    <div class="w-11 h-11 flex items-center justify-center">
                        <img src="{{ asset('images/icons/family.svg') }}" alt="Family" class="w-11 h-11">
                    </div>
                    <span
                        class="text-black dark:text-white text-xs font-bold font-montserrat uppercase leading-tight tracking-wide transition-colors">
                        {{ __('Veterans Family') }}
                    </span>
                </div>
                <div
                    class="w-[300px] h-[90px] bg-white dark:bg-zinc-800 rounded-[10px] flex items-center px-4 space-x-4 transition-colors">
                    <div class="w-11 h-11 flex items-center justify-center">
                        <img src="{{ asset('images/icons/heart.svg') }}" alt="Heart" class="w-11 h-11">
                    </div>
                    <span
                        class="text-black dark:text-white text-xs font-bold font-montserrat uppercase leading-tight tracking-wide transition-colors">
                        {{ __('Fallen Family') }}
                    </span>
                </div>
                <div
                    class="w-[300px] h-[90px] bg-white dark:bg-zinc-800 rounded-[10px] flex items-center px-4 space-x-4 transition-colors">
                    <div class="w-11 h-11 flex items-center justify-center">
                        <img src="{{ asset('images/icons/army.svg') }}" alt="Army" class="w-11 h-11">
                    </div>
                    <span
                        class="text-black dark:text-white text-xs font-bold font-montserrat uppercase leading-tight tracking-wide transition-colors">
                        {{ __('Military Family') }}
                    </span>
                </div>
                <div
                    class="w-[300px] h-[90px] bg-white dark:bg-zinc-800 rounded-[10px] flex items-center px-4 space-x-4 transition-colors">
                    <div class="w-11 h-11 flex items-center justify-center">
                        <img src="{{ asset('images/icons/people.svg') }}" alt="People" class="w-11 h-11 shrink-0">
                    </div>
                    <span
                        class="text-black dark:text-white text-xs font-bold font-montserrat uppercase leading-tight tracking-wide transition-colors">
                        {!! nl2br(__('POW Family')) !!}
                    </span>
                </div>
            </div>
        </div>

    @elseif($codedSlideId === 'slide2')
        {{-- Coded Slide 2: Business (Blue Shape) --}}
        <img src="{{ asset('images/backgrounds/bg2.png') }}" alt="Family Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-30"></div>

        <!-- Positioned slightly left using percentage -->
        <div class="absolute left-[35%] top-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] min-h-[384px] h-auto bg-blue-600 py-12 px-[90px]"
            style="border-top-left-radius: 150px; border-top-right-radius: 50px; border-bottom-left-radius: 150px; border-bottom-right-radius: 150px;">
            <h2 class="text-white text-6xl font-bold font-unbounded leading-[74.08px] tracking-wide mb-8">
                {{ __('Business To Veterans') }}
            </h2>
            <p class="text-white text-2xl font-medium font-unbounded uppercase leading-9 tracking-tight">
                {{ __('Learn More Offers') }}
                <span class="underline">{{ __('Here') }}</span>
            </p>
        </div>

    @elseif($codedSlideId === 'slide3')
        {{-- Coded Slide 3: Memorial --}}
        <img src="{{ asset('images/backgrounds/bg3.png') }}" alt="Family Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-30"></div>

        <!-- Positioned slightly left using percentage -->
        <div class="absolute left-[35%] top-1/2 -translate-x-1/2 -translate-y-1/2 w-[669px]">
            <h2 class="text-white text-6xl font-bold font-unbounded leading-[74.08px] tracking-wide mb-12">
                {{ __('Died For Ukraine') }}
            </h2>
            <p class="text-white text-2xl font-medium font-unbounded uppercase leading-9 tracking-tight mb-12">
                {{ __('Virtual Memorial') }}
            </p>
            <div class="w-[320px] h-16 border-2 border-white flex items-center justify-center rounded-[412px]">
                <span class="text-white text-xl font-black font-montserrat uppercase tracking-wide">
                    {{ __('Visit Memorial') }}
                </span>
            </div>
        </div>

    @else
        {{-- Custom Banner: Just photo + optional link --}}
        @if($banner->link_url)
            <a href="{{ $banner->link_url }}" class="block w-full h-full">
        @endif

            <img src="{{ asset('storage/' . $banner->getDesktopImage()) }}" alt="Banner" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-neutral-400 opacity-10 mix-blend-multiply"></div>

            @if($banner->link_url)
                </a>
            @endif
    @endif

    <!-- Navigation Arrows -->
    <div class="absolute flex space-x-4 z-10 right-[15%] xl:right-[20%] 2xl:right-[375px] bottom-[120px]">
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