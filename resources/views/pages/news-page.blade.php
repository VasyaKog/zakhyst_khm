@extends('layouts.web')
@section('title', __('News Article'))
@section('content')

    @php
        $images = [];
        if ($newsArticle->image_url)
            $images[] = asset('storage/' . $newsArticle->image_url);
        if ($newsArticle->gallery_images) {
            foreach ($newsArticle->gallery_images as $img) {
                $images[] = asset('storage/' . $img);
            }
        }
    @endphp

    <x-news-instance :title="$newsArticle->title" :date="$newsArticle->published_at->isoFormat('D MMMM, YYYY')"
        :author="$newsArticle->author ?? 'Admin'" :content="strip_tags($newsArticle->content)" :imageUrls="$images"
        :videoUrl="$newsArticle->video_url ? asset($newsArticle->video_url) : null" />

    <!-- You may be interested -->
    <div class="px-4 lg:px-[50px] max-w-[1920px] mx-auto mt-12 lg:mt-24 mb-6 lg:mb-12">
        <p class="text-[1.125rem] xs:text-[1.5rem] lg:text-[3rem] font-bold font-['Montserrat'] text-black dark:text-white leading-[1.33] transition-colors">
            {{ __('You Might Be Interested') }}
        </p>
    </div>

    <!-- Desktop Grid -->
    <div class="hidden lg:flex flex-row gap-12 mb-24 px-[50px] max-w-[1920px] mx-auto justify-center">
        @foreach($relatedNews as $related)
            <x-news-card variant="large" :show-button="true" class="!max-w-none w-full" :title="$related->title"
                :summary="$related->summary" :date="$related->published_at->isoFormat('D MMMM, YYYY')"
                :image-url="asset('storage/' . $related->image_url)" :url="route('news.show', $related)" />
        @endforeach
    </div>

    <!-- Mobile Slider -->
    <div class="lg:hidden w-full mb-16">
        <!-- Slider Container -->
        <div id="related-news-slider" class="w-full overflow-x-auto pb-4 [&::-webkit-scrollbar]:hidden" 
             style="scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; scrollbar-width: none;">
            <div class="flex">
                @foreach($relatedNews as $related)
                    <div class="w-full flex-shrink-0 px-4" style="scroll-snap-align: center;">
                        <x-news-card variant="small" :show-button="true" class="!max-w-none !w-full h-full" :title="$related->title"
                            :summary="$related->summary" :date="$related->published_at->isoFormat('D MMMM, YYYY')"
                            :image-url="asset('storage/' . $related->image_url)" :url="route('news.show', $related)" />
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Pagination Dots -->
        <div class="flex justify-center gap-2 mt-4" id="related-news-dots">
            @foreach($relatedNews as $index => $related)
                <button class="w-3 h-3 rounded-full transition-colors {{ $index === 0 ? 'bg-veteran-blue' : 'bg-gray-300' }}"
                    onclick="scrollToRelatedNews({{ $index }})"></button>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('related-news-slider');
            const dots = document.querySelectorAll('#related-news-dots button');

            if (slider && dots.length > 0) {
                // Scroll to specific slide
                window.scrollToRelatedNews = (index) => {
                    const slideWidth = slider.offsetWidth;
                    const scrollLeft = index * slideWidth;
                    slider.scrollTo({
                        left: scrollLeft,
                        behavior: 'smooth'
                    });
                };

                // Update active dot on scroll
                let scrollTimeout;
                slider.addEventListener('scroll', () => {
                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(() => {
                        const scrollLeft = slider.scrollLeft;
                        const slideWidth = slider.offsetWidth;
                        const activeIndex = Math.round(scrollLeft / slideWidth);

                        dots.forEach((dot, index) => {
                            if (index === activeIndex) {
                                dot.classList.remove('bg-gray-300');
                                dot.classList.add('bg-veteran-blue');
                            } else {
                                dot.classList.remove('bg-veteran-blue');
                                dot.classList.add('bg-gray-300');
                            }
                        });
                    }, 50); // Debounce
                });
            }
        });
    </script>

@endsection

@section('footer')
    @include('partials.footer-extended')
@endsection