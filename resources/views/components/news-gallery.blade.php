{{-- News Gallery Component --}}
{{-- Renders 1/2/3+ photos with responsive layouts --}}
@props(['galleryImages', 'galleryCount'])

<div class="clear-both my-12 3xl:my-16">
    @if($galleryCount === 1)
        {{-- 1 Photo: Full width --}}
        <div class="w-full">
            <img src="{{ $galleryImages[0] }}" alt="Gallery Photo"
                class="w-full h-auto max-h-[500px] object-cover rounded-[20px]">
        </div>
    @elseif($galleryCount === 2)
        {{-- 2 Photos: Side by side on desktop, slider on mobile --}}
        <div class="hidden 3xl:grid grid-cols-2 gap-6">
            @foreach($galleryImages as $photo)
                <div class="overflow-hidden rounded-[20px]">
                    <img src="{{ $photo }}" alt="Gallery Photo" class="w-full h-56 object-cover">
                </div>
            @endforeach
        </div>
        {{-- Mobile: Slider --}}
        <div class="3xl:hidden w-full overflow-x-auto pb-4 scroll-snap-x">
            <div class="flex gap-4 w-max px-1">
                @foreach($galleryImages as $photo)
                    <div class="w-[280px] h-[200px] flex-shrink-0 rounded-[20px] overflow-hidden snap-center">
                        <img src="{{ $photo }}" alt="Gallery Photo" class="w-full h-full object-cover">
                    </div>
                @endforeach
            </div>
        </div>
    @else
        {{-- 3+ Photos: Grid on desktop, slider on mobile --}}
        <div class="hidden 3xl:grid grid-cols-3 gap-6">
            @foreach($galleryImages as $photo)
                <div class="overflow-hidden rounded-[20px]">
                    <img src="{{ $photo }}" alt="Gallery Photo" class="w-full h-56 object-cover">
                </div>
            @endforeach
        </div>
        {{-- Mobile: Slider --}}
        <div class="3xl:hidden w-full overflow-x-auto pb-4 scroll-snap-x">
            <div class="flex gap-4 w-max px-1">
                @foreach($galleryImages as $photo)
                    <div class="w-[280px] h-[200px] flex-shrink-0 rounded-[20px] overflow-hidden snap-center">
                        <img src="{{ $photo }}" alt="Gallery Photo" class="w-full h-full object-cover">
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>