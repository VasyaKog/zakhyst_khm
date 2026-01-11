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
    'large' => 'text-[2.5rem]',
    'medium' => 'text-[2rem]',
    'small' => 'text-[1.5rem]',
][$variant] ?? 'text-[2.5rem]';

$summarySizeClasses = [
    'large' => 'text-[1.25rem]',
    'medium' => 'text-[1.125rem]',
    'small' => 'text-[1rem]',
][$variant] ?? 'text-[1.25rem]';

$imageMarginClasses = [
    'large' => 'mb-8',
    'medium' => 'mb-6',
    'small' => 'mb-4', 
][$variant] ?? 'mb-8';

$imageHeightClasses = [
    'large' => 'h-[260px]',
    'medium' => 'h-[220px]',
    'small' => 'h-[200px]',
][$variant] ?? 'h-[260px]';

$titleMarginClasses = [
    'large' => 'mb-8',
    'medium' => 'mb-7',
    'small' => 'mb-9', 
][$variant] ?? 'mb-8';

$summaryMarginClasses = [
    'large' => 'mb-12',
    'medium' => 'mb-10',
    'small' => 'mb-8', 
][$variant] ?? 'mb-12';

$bottomContainerMarginClass = [
    'large' => 'mb-16',
    'medium' => 'mb-12',
    'small' => 'mb-8',
][$variant] ?? 'mb-16';
@endphp

<div class="{{ $widthClasses }} w-full {{ $class }}">
    <a href="{{ $url }}" class="group h-full flex flex-col">
        <img src="{{ $imageUrl }}" alt="News Preview" class="rounded-[20px] w-full object-cover {{ $imageHeightClasses }} {{ $imageMarginClasses }}">
        
        <h2 class="{{ $titleSizeClasses }} font-bold font-['Montserrat'] text-black dark:text-white leading-[1.43] {{ $titleMarginClasses }} transition-colors">
            {{ $title }}
        </h2>
        
        <p class="{{ $summarySizeClasses }} font-normal font-['Montserrat'] text-black dark:text-gray-300 leading-[1.43] {{ $summaryMarginClasses }} flex-grow transition-colors">
            {{ $summary }}
        </p>

        <div class="w-full flex justify-between items-center mt-auto @if($showButton) {{ $bottomContainerMarginClass }} @endif">
            <span class="text-[0.875rem] font-bold font-['Montserrat'] text-black dark:text-gray-400 leading-[1.43] transition-colors">
                {{ $date }}
            </span>
            
            @if($showButton)
            <div class="w-44 h-12 rounded-full border-2 border-veteran-blue flex items-center justify-center group-hover:bg-veteran-blue transition-colors">
                <span class="text-black dark:text-white group-hover:text-white text-xs font-bold uppercase leading-none tracking-wide transition-colors">
                    ЧИТАТИ ДАЛІ
                </span>
            </div>
            @endif
        </div>
    </a>
</div>