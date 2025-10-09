@props(['direction' => 'left', 'class' => ''])

<svg width="43" height="44" viewBox="0 0 43 44" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full {{ $direction === 'right' ? 'transform scale-x-[-1]' : '' }} {{ $class }}">
    <g opacity="0.5" clip-path="url(#clip0_598_10481_{{ $direction }})">
        <path d="M0.00164068 22.1937L20.629 42.8211L22.2795 41.1705L4.46985 23.3609L41.2603 23.3614L41.2605 21.0262L4.47008 21.0256L22.2832 3.21247L20.633 1.56227L0.00164068 22.1937Z" fill="black" class="partners-arrow-path"/>
    </g>
    <defs>
        <clipPath id="clip0_598_10481_{{ $direction }}">
            <rect width="30" height="30" fill="white" transform="matrix(-0.707107 0.707107 0.707107 0.707107 21.2148 0.980469)"/>
        </clipPath>
    </defs>
</svg>
