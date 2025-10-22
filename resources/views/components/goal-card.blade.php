<!-- Goal Card Component -->
@props(['title', 'icon'])

<div class="relative w-[207px] h-[208px] bg-veteran-blue rounded-[20px] p-[25px]">
    <!-- Title (top area) -->
    <p class="text-[14px] font-extrabold font-['Montserrat'] text-white uppercase leading-[1.25] w-[157px]">
        {{ $title }}
    </p>
    
    <!-- Icon (bottom-right corner) -->
    <div class="absolute bottom-[20px] right-[20px] w-[50px] h-[50px] flex items-center justify-center">
        <img src="{{ asset('images/icons/' . $icon) }}" alt="{{ $title }}" class="w-full h-full object-contain">
    </div>
</div>

