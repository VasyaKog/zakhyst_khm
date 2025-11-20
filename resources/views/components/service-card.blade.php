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

<div class="relative w-full mb-[100px]" style="max-width: {{ $maxWidth }}; max-height: {{ $maxHeight }}; overflow: hidden;">
    <!-- SVG Background - positioned to match content -->
    @if($variant === 'default')
        <svg class="absolute top-0 left-0 w-full pointer-events-none" viewBox="0 0 1170 695" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="height: 100%; min-height: 695px;">
            <path d="M20 0.5H552.611C560.012 0.5 566.774 4.68888 570.07 11.3145L614.053 99.7236L614.19 100H1149.5C1160.27 100 1169 108.731 1169 119.5V675C1169 685.77 1160.27 694.5 1149.5 694.5H20C9.23046 694.5 0.5 685.77 0.5 675V20C0.500015 9.23046 9.23046 0.5 20 0.5Z" fill="{{ $color }}" stroke="black" stroke-width="1"/>
        </svg>
    @elseif($variant === 'compact')
        <svg class="absolute top-0 left-0 w-full pointer-events-none" viewBox="0 0 695 695" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="height: 100%; min-height: 695px;">
            <path d="M20 0.5H432.611C440.012 0.5 446.774 4.68888 450.07 11.3145L494.053 99.7236L494.19 100H675C685.769 100 694.5 108.731 694.5 119.5V675C694.5 685.77 685.77 694.5 675 694.5H20C9.23046 694.5 0.5 685.77 0.5 675V20C0.500015 9.23046 9.23046 0.5 20 0.5Z" fill="{{ $color }}" stroke="black" stroke-width="1"/>
        </svg>
    @endif
    
    <!-- Content Container -->
    <div class="relative px-[70px] pt-8 pb-16" style="min-height: 695px;">
        <!-- Title -->
        <h2 class="text-[48px] font-extrabold font-['Montserrat'] leading-[1.03] mb-[50px] max-w-[460px]" style="color: {{ $textColor }}">
            {{ $title }}
        </h2>
        
        <!-- Left Corner Element -->
        @if($cornerIcon)
            <!-- Arrow Icon -->
            <div class="absolute left-[80px] bottom-[60px]">
                <x-arrow-icon color="#2563EB" />
            </div>
        @elseif($cornerButton)
            <!-- Button -->
            <a href="{{ $cornerButtonUrl }}" target="{{ $cornerButtonTarget }}" class="inline-flex items-center justify-center w-64 h-16 border-2 border-white rounded-full absolute left-[80px] bottom-[60px]" style="background-color: {{ $cornerButtonColor }}; color: {{ $cornerButtonTextColor }};">
                {{ $cornerButton }}
            </a>
        @elseif($cornerText)
            <!-- Custom Text -->
            <div class="absolute left-[70px] bottom-[50px] text-[20px]" style="color: {{ $textColor }}">
                {!! $cornerText !!}
            </div>
        @endif
        
        <!-- Two Column Content -->
        <div class="flex gap-[70px]">
            <!-- Left Column -->
            <div class="flex-1 text-[20px] font-normal font-['Montserrat'] leading-[1.66]" style="color: {{ $textColor }}">
                {!! $leftContent !!}
            </div>
            
            <!-- Right Column (if provided) -->
            @if($rightContent)
            <div class="flex-1 text-[20px] font-normal font-['Montserrat'] leading-[1.66]" style="color: {{ $textColor }}">
                {!! $rightContent !!}
            </div>
            @endif
        </div>
        
        <!-- Outlined Number using SVG text (most robust for dynamic content) -->
        <div class="absolute bottom-[40px] right-[70px]">
            <svg width="180" height="120" viewBox="0 0 180 120" xmlns="http://www.w3.org/2000/svg">
                <!-- Stroke layer -->
                <text x="180" y="100" font-family="Montserrat, sans-serif" font-size="128" font-weight="800" text-anchor="end" fill="none" stroke="{{ $numberStroke }}" stroke-width="3" stroke-linejoin="round">{{ $number }}</text>
                <!-- Fill layer -->
                <text x="180" y="100" font-family="Montserrat, sans-serif" font-size="128" font-weight="800" text-anchor="end" fill="{{ $numberFill }}" stroke="none">{{ $number }}</text>
            </svg>
        </div>
    </div>
</div>

