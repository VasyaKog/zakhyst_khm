<!-- Service Card Component -->
@props([
    'number',
    'title',
    'leftContent',
    'rightContent' => null,
    'color' => '#E6E6E6',
    'textColor' => '#000000',
    'cornerIcon' => false,
    'cornerButton' => null,
    'cornerButtonColor' => '#000000F',
    'cornerButtonTextColor' => '#FFFFFF',
    'cornerButtonUrl' => '#',
    'cornerButtonTarget' => '_self',
    'cornerText' => null,
    'maxWidth' => '100%',
    'maxHeight' => 'auto',
    'variant' => 'default',
    'numberFill' => '#E6E6E6',
    'numberStroke' => '#000000'
])

<div class="js-service-card relative w-full mb-[40px] lg:mb-[100px] rounded-[20px] lg:rounded-none h-auto lg:min-h-[var(--card-height)]" 
     style="max-width: {{ $maxWidth }}; --card-height: {{ $maxHeight !== 'auto' ? $maxHeight : 'auto' }};">
    
    <!-- Desktop SVG Background (Absolute, Height 100%) -->
    @if($variant === 'default')
        <div class="hidden lg:flex absolute inset-0 w-full h-full pointer-events-none flex-col">
            <!-- Header -->
            <div class="h-[130px] w-full relative z-10">
                <svg class="w-full h-full absolute top-0 left-0" viewBox="0 0 1170 130" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <!-- 1. Fill Layer -->
                    <path class="transition-colors dark:fill-zinc-800" d="M20 0.5H552.611C560.012 0.5 566.774 4.68888 570.07 11.3145L614.053 99.7236L614.19 100H1149.5C1160.27 100 1169 108.731 1169 119.5V130 H0.5 V20 C0.5 9.23046 9.23046 0.5 20 0.5Z"
                          fill="{{ $color }}" stroke="none"/>
                    
                    <!-- 2. Stroke Layer (Open U-Shape) -->
                    <path class="transition-colors dark:stroke-zinc-600" d="M0.5 130 V20 C0.5 9.23046 9.23046 0.5 20 0.5 H552.611 C560.012 0.5 566.774 4.68888 570.07 11.3145 L614.053 99.7236 L614.19 100 H1149.5 C1160.27 100 1169 108.731 1169 119.5 V130"
                          fill="none" stroke="black" stroke-width="1" vector-effect="non-scaling-stroke"/>
                </svg>
            </div>
            <div class="flex-1 w-full -mt-[1px] border-x border-b border-black dark:border-zinc-600 rounded-b-[20px] relative z-20 transition-colors dark:!bg-zinc-800"
                 style="background-color: {{ $color }};"></div>
        </div>
    @elseif($variant === 'compact')
        <!-- Compact Variant -->
        <svg class="hidden lg:block absolute top-0 left-0 w-full pointer-events-none" viewBox="-2 -2 699 699" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="height: 100%; min-height: 695px;">
            <path class="transition-colors dark:fill-zinc-800 dark:stroke-zinc-600" d="M20 0.5H432.611C440.012 0.5 446.774 4.68888 450.07 11.3145L494.053 99.7236L494.19 100H675C685.769 100 694.5 108.731 694.5 119.5V675C694.5 685.77 685.77 694.5 675 694.5H20C9.23046 694.5 0.5 685.77 0.5 675V20C0.500015 9.23046 9.23046 0.5 20 0.5Z" fill="{{ $color }}" stroke="black" stroke-width="1"/>
        </svg>
    @endif

    <!-- Mobile Background: Split System (Fixed Top SVG + Flexible Bottom) -->
    <div class="lg:hidden absolute inset-0 w-full h-full pointer-events-none flex flex-col z-0">
        @if($variant === 'compact')
             <!-- Compact Variant Mobile SVG -->
            <div class="h-[80px] w-full relative z-0">
                <svg class="w-full h-full absolute top-0 left-0" viewBox="0 0 396 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <!-- Fill Layer -->
                    <path class="transition-colors dark:fill-zinc-800" d="M241.165 0.5 H20 C8.95431 0.5 0.5 8.95424 0.5 20 V80 H395.5 V76.6938 C395.5 65.6481 386.546 56.6938 376 56.6938 H281.758 L259.072 11.0918 C255.691 4.29629 248.755 0.5 241.165 0.5 Z" 
                          fill="{{ $color }}" stroke="none"/>
                    
                    <!-- Stroke Layer -->
                    <path class="transition-colors dark:stroke-zinc-600" d="M395.5 81 V76.6938 C395.5 65.6481 386.546 56.6938 376 56.6938 H281.758 L259.072 11.0918 C255.691 4.29629 248.755 0.5 241.165 0.5 H20 C8.95431 0.5 0.5 8.95424 0.5 20 V81" 
                          fill="none" stroke="black" stroke-width="1" vector-effect="non-scaling-stroke"/>
                </svg>
            </div>
             <!-- Bottom Part: Flexible CSS Box starting at 80px -->
            <div class="flex-1 w-full -mt-[1px] border-x border-b border-black dark:border-zinc-600 rounded-b-[20px] relative z-0 transition-colors dark:!bg-zinc-800" 
                 style="background-color: {{ $color }};"></div>
        @else
            <!-- Default Variant Mobile SVG (Original) -->
            <div class="h-[60px] w-full relative z-0">
                <svg class="w-full h-full absolute top-0 left-0" viewBox="0 0 396 60" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path class="transition-colors dark:fill-zinc-800" d="M20 0.5H178.932C186.328 0.5 193.088 4.68448 196.386 11.3047L207.626 33.8672L207.764 34.1436H376C386.769 34.1436 395.5 42.8742 395.5 53.6436V60H0.5V20C0.5 9.23045 9.23045 0.5 20 0.5Z" 
                          fill="{{ $color }}" stroke="none"/>
                    <!-- Open stroke -->
                    <path class="transition-colors dark:stroke-zinc-600" d="M0.5 60 V20 C0.5 9.23045 9.23045 0.5 20 0.5 H178.932 C186.328 0.5 193.088 4.68448 196.386 11.3047 L207.626 33.8672 L207.764 34.1436 H376 C386.769 34.1436 395.5 42.8742 395.5 53.6436 V60" 
                          fill="none" stroke="black" stroke-width="1" vector-effect="non-scaling-stroke"/>
                </svg>
            </div>
            <!-- Bottom Part for Default -->
            <div class="flex-1 w-full -mt-[1px] border-x border-b border-black dark:border-zinc-600 rounded-b-[20px] relative z-0 transition-colors dark:!bg-zinc-800" 
                 style="background-color: {{ $color }};"></div>
        @endif
    </div>
    
    <!-- Content Container -->
    <div class="relative px-[20px] lg:px-[40px] xl:px-[70px] pt-[30px] lg:pt-8 pb-[30px] lg:pb-[80px] xl:pb-[160px] h-auto lg:h-full z-20 overflow-hidden">
        
        <!-- Mobile Number (SVG, Top Left) - Only for Default Variant -->
        @if($variant === 'default')
        <div class="lg:hidden absolute top-[20px] left-[20px] w-[120px] h-[100px] z-30">
            <svg width="120" height="100" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg">
                <text class="dark:stroke-zinc-400" x="5" y="75" font-family="Montserrat, sans-serif" font-size="80" font-weight="800" fill="none" stroke="{{ $numberStroke }}" stroke-width="2" stroke-linejoin="round">{{ $number }}</text>
                <text class="dark:fill-zinc-800" x="5" y="75" font-family="Montserrat, sans-serif" font-size="80" font-weight="800" fill="{{ $numberFill }}" stroke="none">{{ $number }}</text>
            </svg>
        </div>
        @endif

        <!-- Title -->
        <h2 class="text-[2rem] lg:text-[3rem] font-extrabold font-['Montserrat'] leading-[0.92] lg:leading-[1.03] {{ $variant === 'default' ? 'mt-[90px]' : 'mt-0' }} mb-[30px] lg:mt-0 lg:mb-[50px] max-w-full lg:max-w-[460px] relative z-20 transition-colors dark:!text-white" style="color: {{ $textColor }}">
            {{ $title }}
        </h2>
        
        <!-- Two Column Content -->
        <div class="flex flex-col lg:flex-row gap-[30px] lg:gap-[70px] mb-[30px] lg:mb-0 relative z-20">
            <!-- Left Column -->
            <div class="flex-1 text-[1.25rem] lg:text-[1.25rem] font-normal font-['Montserrat'] leading-[1.66] lg:leading-[2.5] [&_ul]:list-disc [&_ul]:pl-5 [&_li::marker]:text-[0.625rem] [&_li]:pl-2 transition-colors dark:!text-gray-200" style="color: {{ $textColor }}">
                {!! $leftContent !!}
            </div>
            
            <!-- Right Column -->
            @if($rightContent)
            <div class="flex-1 text-[1.25rem] lg:text-[1.25rem] font-normal font-['Montserrat'] leading-[1.66] lg:leading-[2.5] [&_ul]:list-disc [&_ul]:pl-5 [&_li::marker]:text-[0.625rem] [&_li]:pl-2 transition-colors dark:!text-gray-200" style="color: {{ $textColor }}">
                {!! $rightContent !!}
            </div>
            @endif
        </div>

        <!-- Footer & Number Wrapper -->
        <div class="w-full flex {{ $cornerButton ? 'flex-col items-center' : 'flex-row items-end justify-between flex-wrap' }} gap-4 mt-[30px] lg:mt-0 lg:block lg:w-auto">
        
            <!-- Footer Element (Buttons/Text) -->
            <div class="relative z-30 w-auto lg:block lg:w-auto lg:absolute lg:left-[80px] lg:bottom-[60px]">
            @if($cornerIcon)
                <!-- Arrow Icon -->
                <div>
                    <x-arrow-icon class="dark:hidden" color="#2563EB" />
                    <!-- Dark mode arrow version if needed, or invert -->
                    <x-arrow-icon class="hidden dark:block" color="#60A5FA" /> 
                </div>
            @elseif($cornerButton)
                <!-- Button -->
                <a href="{{ $cornerButtonUrl }}" 
                   target="{{ $cornerButtonTarget }}" 
                   onmouseenter="this.style.color='{{ $color }}'" 
                   onmouseleave="this.style.color='{{ $cornerButtonTextColor }}'"
                   class="flex mx-auto lg:mx-0 items-center justify-center w-full max-w-[280px] lg:w-auto lg:max-w-none lg:min-w-[256px] h-[50px] lg:h-16 px-4 lg:px-10 border-2 border-white rounded-full text-[0.7rem] xs:text-[0.8rem] lg:text-[1rem] font-bold uppercase text-center leading-tight transition-colors hover:bg-white dark:border-zinc-700 dark:hover:bg-zinc-700 dark:!text-white"  
                   style="background-color: {{ $cornerButtonColor }}; color: {{ $cornerButtonTextColor }};">
                    {{ $cornerButton }}
                </a>
            @elseif($cornerText)
                <!-- Custom Text -->
                <div class="text-[1rem] lg:text-[1.25rem] transition-colors dark:!text-gray-300" style="color: {{ $textColor }}">
                    {!! $cornerText !!}
                </div>
            @endif
            </div>
            
            <!-- Outlined Number -->
            <div class="{{ $variant === 'compact' ? 'block' : 'hidden lg:block' }} ml-auto lg:ml-0 lg:absolute lg:bottom-[40px] lg:right-[70px] z-10 pointer-events-none">
                <svg width="180" height="120" viewBox="0 0 180 120" xmlns="http://www.w3.org/2000/svg" class="w-[180px] h-[120px] lg:w-[180px] lg:h-[120px]">
                    <!-- Stroke layer -->
                    <text class="dark:stroke-zinc-400" x="180" y="100" font-family="Montserrat, sans-serif" font-size="128" font-weight="800" text-anchor="end" fill="none" stroke="{{ $numberStroke }}" stroke-width="3" stroke-linejoin="round">{{ $number }}</text>
                    <!-- Fill layer -->
                    <text class="dark:fill-zinc-800" x="180" y="100" font-family="Montserrat, sans-serif" font-size="128" font-weight="800" text-anchor="end" fill="{{ $numberFill }}" stroke="none">{{ $number }}</text>
                </svg>
            </div>
        </div>
    </div>
</div>
