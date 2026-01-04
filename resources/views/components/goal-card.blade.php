<!-- Goal Card Component -->
@props(['title', 'icon'])

<div class="relative w-full h-auto aspect-square max-w-[207px] bg-veteran-blue rounded-[20px] p-[20px] lg:p-[25px]">
    <!-- Title (top area) -->
    <p
        class="text-[12px] lg:text-[14px] font-extrabold font-['Montserrat'] text-white uppercase leading-[1.25] w-[80%]">
        {{ $title }}
    </p>

    <!-- Icon (bottom-right corner) -->
    <div
        class="absolute bottom-[15px] right-[15px] lg:bottom-[20px] lg:right-[20px] w-[40px] h-[40px] lg:w-[50px] lg:h-[50px] flex items-center justify-center">
        <img src="{{ asset('images/icons/' . $icon) }}" alt="{{ $title }}" class="w-full h-full object-contain">
    </div>
</div>