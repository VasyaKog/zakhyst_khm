<!-- Service Card Component -->
@props(['number', 'title', 'leftContent', 'rightContent' => null])

<div class="relative w-full mb-[100px]">
    <!-- SVG Background - positioned to match content -->
    <svg class="absolute top-0 left-0 w-full pointer-events-none" viewBox="0 0 1170 695" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="height: 100%; min-height: 695px;">
        <path d="M20 0.5H552.611C560.012 0.5 566.774 4.68888 570.07 11.3145L614.053 99.7236L614.19 100H1149.5C1160.27 100 1169 108.731 1169 119.5V675C1169 685.77 1160.27 694.5 1149.5 694.5H20C9.23046 694.5 0.5 685.77 0.5 675V20C0.500015 9.23046 9.23046 0.5 20 0.5Z" fill="#E6E6E6" stroke="black" stroke-width="1"/>
    </svg>
    
    <!-- Content Container -->
    <div class="relative px-[70px] py-[50px] pb-[180px]" style="min-height: 695px;">
        <!-- Title -->
        <h2 class="text-[48px] font-extrabold font-['Montserrat'] text-black leading-[1.03] mb-[70px] max-w-[460px]">
            {{ $title }}
        </h2>
        
        <!-- Two Column Content -->
        <div class="flex gap-[70px]">
            <!-- Left Column -->
            <div class="flex-1 text-[20px] font-normal font-['Montserrat'] text-black leading-[1.82]">
                {!! $leftContent !!}
            </div>
            
            <!-- Right Column (if provided) -->
            @if($rightContent)
            <div class="flex-1 text-[20px] font-normal font-['Montserrat'] text-black leading-[1.82]">
                {!! $rightContent !!}
            </div>
            @endif
        </div>
        
        <!-- Outlined Number using SVG text (most robust for dynamic content) -->
        <div class="absolute bottom-[40px] right-[70px]">
            <svg width="180" height="120" viewBox="0 0 180 120" xmlns="http://www.w3.org/2000/svg">
                <!-- Black stroke layer -->
                <text x="180" y="100" font-family="Montserrat, sans-serif" font-size="128" font-weight="800" text-anchor="end" fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="round">{{ $number }}</text>
                <!-- White fill layer for knockout effect -->
                <text x="180" y="100" font-family="Montserrat, sans-serif" font-size="128" font-weight="800" text-anchor="end" fill="#E6E6E6" stroke="none">{{ $number }}</text>
            </svg>
        </div>
    </div>
</div>

