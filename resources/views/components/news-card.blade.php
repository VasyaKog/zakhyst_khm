@props([
    'variant' => 'large', // 'large', 'medium', or 'small'
    'showButton' => true,
    'title',
    'summary',
    'date',
    'imageUrl',
    'url' => '#',
    'class' => '', // Allow additional classes
])

@php
$widthClasses = [
    'large' => 'max-w-[825px]',
    'medium' => 'max-w-[615px]',
    'small' => 'max-w-[444px]',
][$variant] ?? 'max-w-[825px]';

$titleSizeClasses = [
    'large' => 'text-[40px]',
    'medium' => 'text-[32px]',
    'small' => 'text-[24px]',
][$variant] ?? 'text-[40px]';

$summarySizeClasses = [
    'large' => 'text-[20px]',
    'medium' => 'text-[18px]',
    'small' => 'text-[16px]',
][$variant] ?? 'text-[20px]';

// New margin classes based on variant
$imageMarginClasses = [
    'large' => 'mb-16',
    'medium' => 'mb-12',
    'small' => 'mb-8', // 32px, close to 30px
][$variant] ?? 'mb-16';

$titleMarginClasses = [
    'large' => 'mb-8',
    'medium' => 'mb-7',
    'small' => 'mb-9', // 36px, close to 35px
][$variant] ?? 'mb-8';

$summaryMarginClasses = [
    'large' => 'mb-12',
    'medium' => 'mb-10',
    'small' => 'mb-8', // 32px, close to 30px
][$variant] ?? 'mb-12';

$bottomContainerMarginClass = [
    'large' => 'mb-16',
    'medium' => 'mb-12',
    'small' => 'mb-8',
][$variant] ?? 'mb-16';
@endphp

<div class="{{ $widthClasses }} w-full {{ $class }}">
    <img src="{{ $imageUrl }}" alt="News Preview" class="rounded-[20px] w-full h-auto {{ $imageMarginClasses }}">
    
    <h2 class="{{ $titleSizeClasses }} font-bold font-['Montserrat'] text-black leading-[1.43] {{ $titleMarginClasses }}">
        {{ $title }}
    </h2>
    
    <p class="{{ $summarySizeClasses }} font-normal font-['Montserrat'] text-black leading-[1.43] {{ $summaryMarginClasses }}">
        {{ $summary }}
    </p>

    <div class="w-full flex justify-between items-center @if($showButton) {{ $bottomContainerMarginClass }} @endif">
        <span class="text-[14px] font-bold font-['Montserrat'] text-black leading-[1.43]">
            {{ $date }}
        </span>
        
        @if($showButton)
        <a href="{{ $url }}" class="w-44 h-12 rounded-full border-2 border-veteran-blue flex items-center justify-center hover:bg-veteran-blue transition-colors group">
            <span class="text-black group-hover:text-white text-xs font-bold uppercase leading-none tracking-wide transition-colors">
                ЧИТАТИ ДАЛІ
            </span>
        </a>
        @endif
    </div>
</div>