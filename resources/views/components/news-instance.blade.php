@props([
    'title',
    'content',
    'author',
    'date',
    'imageUrls',
    'videoUrl' => null,
    ])

<!-- Content -->
<div class="h-full w-full px-[325px] mt-32">
    
    <!-- Date -->
    <span class="text-[14px] font-bold font-['Montserrat'] text-black leading-[1.43]">
            {{ $date }}
    </span>

    <!-- Title -->
    <div class="flex flex-row justify-between items-center mb-24 mt-8">
        <p class="text-[48px] font-bold font-['Montserrat'] text-black leading-[1.33]">
                {{ $title }}
        </p>

        <!-- Socials -->
        <div>
            <img src="{{ asset('images/icons/instagram.svg') }}" alt="Insta" class="max-w-[30px] max-h-[30px] mb-4 cursor-pointer"> 
            <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="max-w-[30px] max-h-[30px] cursor-pointer">
        </div>
    </div>
    
    <!-- Author -->
    <span class="text-[18px] font-bold font-['Montserrat'] text-black leading-[1.43] uppercase">
            Автор: {{ $author }}
    </span>

    <!-- Main Media (Image or Video) -->
    @if($videoUrl)
        <div class="mb-24 mt-8">
            <video controls class="w-full rounded-[20px] bg-black" style="max-height: 600px;">
                <source src="{{ $videoUrl }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    @elseif(!empty($imageUrls) && count($imageUrls) > 0)
        <div class="mb-24 mt-8">
            <img src="{{ $imageUrls[0] }}" alt="Main News Image" class="w-full h-auto rounded-[20px]">
        </div>
    @endif

    <!-- Content Paragraphs with Interleaved Photos -->
    @php
        $photos = array_slice($imageUrls, 1, 4);
        $paragraphs = explode("\n", $content);
    @endphp

    <div class="space-y-8 my-48">
        @foreach($paragraphs as $index => $paragraph)
            <p class="text-[20px] font-normal font-['Montserrat'] text-black leading-[1.43]">
                {{ $paragraph }}
            </p>

            <!-- 1st photo after 3rd paragraph (index 2) -->
            @if($index === 2 && isset($photos[0]))
                <div class="flex gap-6 items-start">
                    <img src="{{ $photos[0] }}" alt="News Photo" class="max-w-[420px] max-h-[285px] object-cover rounded-[20px] flex-shrink-0">
                    <p class="text-[20px] font-normal font-['Montserrat'] text-black leading-[1.43]">
                        {{ $paragraph }}
                    </p>
                </div>
            @endif

            <!-- Photos 2-4 after 6th paragraph (index 5) -->
            @if($index === 5 && count($photos) > 1)
                <div class="grid grid-cols-3 gap-6 my-16">
                    @foreach(array_slice($photos, 1, 3) as $photo)
                        <div class="overflow-hidden rounded-[20px]">
                            <img src="{{ $photo }}" alt="News Photo" class="w-full h-56 object-cover">
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>

</div>

