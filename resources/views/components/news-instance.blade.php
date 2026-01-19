@props([
    'title',
    'content',
    'author',
    'date',
    'imageUrls',
    'videoUrl' => null,
    ])

<!-- Content -->
<div class="h-full w-full px-4 3xl:px-[325px] mt-10 3xl:mt-32">
    
    <!-- Mobile Header Meta Row  -->
    <div class="flex 3xl:hidden justify-between items-center mb-6">
        <span class="text-[0.75rem] font-bold font-['Montserrat'] text-black dark:text-gray-300 uppercase leading-[1.43] tracking-wider transition-colors">
            {{ $date }}
        </span>
        <div class="flex gap-4">
            <img src="{{ asset('images/icons/instagram.svg') }}" alt="Insta" class="w-[30px] h-[30px] cursor-pointer dark:invert transition-all"> 
            <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="w-[30px] h-[30px] cursor-pointer dark:invert transition-all">
        </div>
    </div>

    <!-- Desktop Date -->
    <div class="hidden 3xl:block">
        <span class="text-[0.875rem] font-bold font-['Montserrat'] text-black dark:text-gray-300 leading-[1.43] transition-colors">
                {{ $date }}
        </span>
    </div>

    <!-- Title -->
    <div class="flex flex-row justify-between items-center mb-8 3xl:mb-24 mt-4 3xl:mt-8">
        <h1 class="text-[1.125rem] xs:text-[1.5rem] 3xl:text-[3rem] font-bold font-['Montserrat'] text-black dark:text-white leading-[1.2] 3xl:leading-[1.33] transition-colors">
                {{ $title }}
        </h1>

        <!-- Desktop Socials -->
        <div class="hidden 3xl:block shrink-0 ml-8">
            <img src="{{ asset('images/icons/instagram.svg') }}" alt="Insta" class="max-w-[30px] max-h-[30px] mb-4 cursor-pointer dark:invert transition-all"> 
            <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="max-w-[30px] max-h-[30px] cursor-pointer dark:invert transition-all">
        </div>
    </div>
    
    <!-- Main Media (Image or Video) -->
    @if($videoUrl)
        <div class="mb-8 3xl:mb-24 mt-4 3xl:mt-8">
            <video controls class="w-full rounded-[20px] bg-black" style="max-height: 600px;">
                <source src="{{ $videoUrl }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    @elseif(!empty($imageUrls) && count($imageUrls) > 0)
        <div class="mb-8 3xl:mb-24 mt-4 3xl:mt-8">
            <img src="{{ $imageUrls[0] }}" alt="Main News Image" class="w-full h-auto rounded-[20px] object-cover">
        </div>
    @endif

    <!-- Author -->
    <div class="mb-8 3xl:mb-12">
        <span class="text-[0.625rem] 3xl:text-[1.125rem] font-bold font-['Montserrat'] text-black dark:text-gray-300 leading-[1.43] uppercase transition-colors">
                АВТОР: {{ $author }}
        </span>
    </div>

    <!-- Content Paragraphs with Interleaved Photos -->
    @php
        $photos = array_slice($imageUrls, 1, 4);
        $paragraphs = explode("\n", $content);
    @endphp

    <div class="space-y-6 3xl:space-y-8 my-10 3xl:my-48">
        @foreach($paragraphs as $index => $paragraph)
            @if(trim($paragraph))
                <p class="text-[1rem] 3xl:text-[1.25rem] font-normal font-['Montserrat'] text-black dark:text-gray-200 leading-[1.43] transition-colors">
                    {{ $paragraph }}
                </p>
            @endif

            <!-- 1st photo after 3rd paragraph (index 2) -->
            @if($index === 2 && isset($photos[0]))
                <div class="flex flex-col 3xl:flex-row gap-6 items-start my-8">
                    <img src="{{ $photos[0] }}" alt="News Photo" class="w-full 3xl:max-w-[420px] max-h-[285px] object-cover rounded-[20px] flex-shrink-0">
                    <p class="text-[1rem] 3xl:text-[1.25rem] font-normal font-['Montserrat'] text-black dark:text-gray-200 leading-[1.43] transition-colors">
                        <!-- Logic for potential caption or continued text if needed, currently reusing paragraph styling -->
                    </p>
                </div>
            @endif

            <!-- Photos 2-4 after 6th paragraph (index 5) -->
            @if($index === 5 && count($photos) > 1)
                <!-- Desktop Grid -->
                <div class="hidden 3xl:grid grid-cols-3 gap-6 my-16">
                    @foreach(array_slice($photos, 1, 3) as $photo)
                        <div class="overflow-hidden rounded-[20px]">
                            <img src="{{ $photo }}" alt="News Photo" class="w-full h-56 object-cover">
                        </div>
                    @endforeach
                </div>

                <!-- Mobile Slider -->
                <div class="3xl:hidden w-full overflow-x-auto pb-4 [&::-webkit-scrollbar]:hidden" 
                     style="scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none;">
                    <div class="flex gap-4 w-max px-1">
                        @foreach(array_slice($photos, 1, 3) as $photo)
                            <div class="w-[280px] h-[200px] flex-shrink-0 rounded-[20px] overflow-hidden scroll-snap-align-center">
                                <img src="{{ $photo }}" alt="News Photo" class="w-full h-full object-cover">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>

</div>

