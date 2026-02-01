@props([
    'title',
    'content',
    'author',
    'date',
    'imageUrls',
    'videoUrl' => null,
    'videoPath' => null,
    'galleryPosition' => null,
    'inlinePhotoPosition' => null,
])

@php
    // Separate main image from gallery images
    $mainImage = !empty($imageUrls) ? $imageUrls[0] : null;
    $galleryImages = array_slice($imageUrls, 1);
    $galleryCount = count($galleryImages);
    
    // If inline photo is used, separate it from gallery
    $inlinePhoto = null;
    if ($inlinePhotoPosition && $galleryCount > 0) {
        $inlinePhoto = $galleryImages[0];
        $galleryImages = array_slice($galleryImages, 1);
        $galleryCount = count($galleryImages);
    }
    
    // Split HTML content by paragraph tags to insert photos
    // RichEditor outputs <p>...</p> for paragraphs
    $paragraphs = preg_split('/(<p[^>]*>.*?<\/p>)/s', $content, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
    $paragraphs = array_filter($paragraphs, fn($p) => !empty(trim(strip_tags($p))));
    $paragraphs = array_values($paragraphs);
    $totalParagraphs = count($paragraphs);
    
    // Determine positions (1-indexed from admin, convert to 0-indexed)
    $inlinePos = $inlinePhotoPosition ? ($inlinePhotoPosition - 1) : null;
    $galleryPos = $galleryPosition ? ($galleryPosition - 1) : ($totalParagraphs - 1);
@endphp

<!-- Content -->
<div class="h-full w-full px-4 3xl:px-[325px] mt-10 3xl:mt-32">
    
    <!-- Mobile Header Meta Row  -->
    <div class="flex 3xl:hidden justify-between items-center mb-6">
        <span class="text-[0.75rem] font-bold font-montserrat text-black dark:text-gray-300 uppercase leading-[1.43] tracking-wider transition-colors">
            {{ $date }}
        </span>
        <div class="flex gap-4">
            <a href="https://www.instagram.com/veterankhm/" target="_blank">
                <img src="{{ asset('images/icons/instagram.svg') }}" alt="Insta" class="w-[30px] h-[30px] cursor-pointer dark:invert transition-all"> 
            </a>
            <a href="https://www.facebook.com/zahystveteran" target="_blank">
                <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="w-[30px] h-[30px] cursor-pointer dark:invert transition-all">
            </a>
        </div>
    </div>

    <!-- Desktop Date -->
    <div class="hidden 3xl:block">
        <span class="text-[0.875rem] font-bold font-montserrat text-black dark:text-gray-300 leading-[1.43] transition-colors">
                {{ $date }}
        </span>
    </div>

    <!-- Title -->
    <div class="flex flex-row justify-between items-center mb-8 3xl:mb-24 mt-4 3xl:mt-8">
        <h1 class="text-[1.125rem] xs:text-[1.5rem] 3xl:text-[3rem] font-bold font-montserrat text-black dark:text-white leading-[1.2] 3xl:leading-[1.33] transition-colors">
                {{ $title }}
        </h1>

        <!-- Desktop Socials -->
        <div class="hidden 3xl:block shrink-0 ml-8">
            <a href="https://www.instagram.com/veterankhm/" target="_blank" class="block mb-4">
                <img src="{{ asset('images/icons/instagram.svg') }}" alt="Insta" class="max-w-[30px] max-h-[30px] cursor-pointer dark:invert transition-all"> 
            </a>
            <a href="https://www.facebook.com/zahystveteran" target="_blank" class="block">
                <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="max-w-[30px] max-h-[30px] cursor-pointer dark:invert transition-all">
            </a>
        </div>
    </div>
    
    <!-- Main Media (Image or Video) -->
    <!-- Main Media (Image or Video) -->
    @php
        // Helper to extract YouTube ID
        $youtubeId = null;
        if ($videoUrl && (str_contains($videoUrl, 'youtube.com') || str_contains($videoUrl, 'youtu.be'))) {
            preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $videoUrl, $matches);
            $youtubeId = $matches[1] ?? null;
        }
    @endphp

    @if($videoPath)
        {{-- Local Uploaded Video --}}
        <div class="mb-8 3xl:mb-24 mt-4 3xl:mt-8">
            <video controls class="w-full rounded-[20px] bg-black video-max-h">
                <source src="{{ $videoPath }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    @elseif($videoUrl)
        {{-- External URL (YouTube or Direct File) --}}
        <div class="mb-8 3xl:mb-24 mt-4 3xl:mt-8">
            @if($youtubeId)
                <iframe class="w-full rounded-[20px] aspect-video" 
                    src="https://www.youtube.com/embed/{{ $youtubeId }}" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            @else
                <video controls class="w-full rounded-[20px] bg-black video-max-h">
                    <source src="{{ $videoUrl }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @endif
        </div>
    @elseif($mainImage)
        <div class="mb-8 3xl:mb-24 mt-4 3xl:mt-8">
            <img src="{{ $mainImage }}" alt="Main News Image" class="w-full h-auto rounded-[20px] object-cover">
        </div>
    @endif

    <!-- Author -->
    <div class="mb-8 3xl:mb-12">
        <span class="text-[0.625rem] 3xl:text-[1.125rem] font-bold font-montserrat text-black dark:text-gray-300 leading-[1.43] uppercase transition-colors">
                {{ __('Author') }}: {{ $author }}
        </span>
    </div>

    <!-- Content with Photos -->
    <div class="news-content my-10 3xl:my-48 
        [&_p]:text-[1rem] [&_p]:3xl:text-[1.25rem] [&_p]:font-normal [&_p]:font-montserrat [&_p]:text-black [&_p]:dark:text-gray-200 [&_p]:leading-[1.6] [&_p]:mb-6 [&_p]:transition-colors
        [&_strong]:font-bold [&_b]:font-bold
        [&_em]:italic [&_i]:italic
        [&_u]:underline
        [&_ul]:list-disc [&_ul]:pl-6 [&_ul]:mb-6 [&_ul]:text-black [&_ul]:dark:text-gray-200
        [&_ol]:list-decimal [&_ol]:pl-6 [&_ol]:mb-6 [&_ol]:text-black [&_ol]:dark:text-gray-200
        [&_li]:mb-2 [&_li]:text-[1rem] [&_li]:3xl:text-[1.25rem]
        [&_a]:text-veteran-blue [&_a]:underline [&_a]:hover:text-blue-800
        ">
        
        @if($totalParagraphs === 0)
            {{-- No paragraph structure, just render content as-is --}}
            {!! $content !!}
        @else
            @foreach($paragraphs as $index => $paragraph)
                {!! $paragraph !!}

                {{-- Inline Photo (float left on desktop) --}}
                @if($inlinePhoto && $index === $inlinePos)
                    <div class="3xl:float-left 3xl:mr-8 3xl:mb-4 3xl:max-w-[50%] my-8 3xl:my-0">
                        <img src="{{ $inlinePhoto }}" alt="News Photo" class="w-full max-h-[400px] object-cover rounded-[20px]">
                    </div>
                @endif

                {{-- Gallery after specified position --}}
                @if($galleryCount > 0 && $index === $galleryPos)
                    @include('components.news-gallery', ['galleryImages' => $galleryImages, 'galleryCount' => $galleryCount])
                @endif
            @endforeach
        @endif
        
        {{-- Gallery at end if not shown within content or no paragraphs --}}
        @if($galleryCount > 0 && ($galleryPos >= $totalParagraphs || $totalParagraphs === 0))
            @include('components.news-gallery', ['galleryImages' => $galleryImages, 'galleryCount' => $galleryCount])
        @endif
    </div>

</div>
