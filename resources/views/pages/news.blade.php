@extends('layouts.web')
@section('title', 'Новини')
@section('content')

    <!-- Header Section -->
    <div class="flex flex-col lg:flex-row justify-between mb-8 lg:mb-16 mt-10 lg:mt-32">
        <div class="w-full lg:max-w-[869px]">
            <div class="flex justify-between items-start lg:block">
                <h1
                    class="text-[2.5rem] lg:text-[9.875rem] font-extrabold font-['Montserrat'] text-black dark:text-white uppercase leading-[0.92] whitespace-nowrap transition-colors">
                    НОВИНИ:
                </h1>

                <!-- Mobile Icons -->
                <div class="flex gap-4 lg:hidden mt-2">
                    <img src="{{ asset('images/icons/instagram.svg') }}" alt="Insta"
                        class="w-[30px] h-[30px] cursor-pointer dark:invert transition-all">
                    <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook"
                        class="w-[30px] h-[30px] cursor-pointer dark:invert transition-all">
                </div>
            </div>

            <div
                class="text-[1rem] lg:text-[1.25rem] font-normal font-['Montserrat'] text-black dark:text-gray-300 leading-[1.43] mb-8 lg:mb-16 mt-6 lg:mt-20 transition-colors">
                <p class="mb-0">Найсвіжіші новини для спільноти ветеранів, діючих військових, їхніх родин<br
                        class="hidden lg:block" />та близьких,
                    а також спільнот, які цікавляться ветеранською тематику.</p>
            </div>
        </div>

        <!-- Desktop Icons -->
        <div class="hidden lg:block">
            <img src="{{ asset('images/icons/instagram.svg') }}" alt="Insta"
                class="lg:max-w-[30px] lg:max-h-[30px] lg:mb-4 cursor-pointer dark:invert transition-all">
            <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook"
                class="lg:max-w-[30px] lg:max-h-[30px] cursor-pointer dark:invert transition-all">
        </div>
    </div>

    <!-- Divider -->
    <div class="w-full h-px bg-black dark:bg-zinc-700 mb-10 lg:mb-32 transition-colors"></div>

    <!-- Desktop Grid (Hidden on Mobile) -->
    <div class="hidden lg:grid grid-cols-[1fr_930px] gap-x-[70px] max-w-[1920px]">
        <!-- First Grid: 1 column, 3 rows, large components -->
        <div class="flex flex-col gap-[77px]">
            @foreach($news->take(3) as $article)
                <x-news-card variant="large" :show-button="true" class="!max-w-none" :title="$article->title"
                    :summary="$article->summary" :date="$article->published_at->isoFormat('D MMMM, YYYY')"
                    :image-url="asset('storage/' . $article->image_url)" :url="route('news.show', $article)" />
            @endforeach

            <!-- Pagination Desktop -->
            <div class="w-full mt-14">
                {{ $news->onEachSide(1)->links('vendor.pagination.custom') }}
            </div>
        </div>

        <!-- Second Grid: 2 columns, 5 rows, small components -->
        <div class="grid grid-cols-2 gap-x-[42px] gap-y-[70px] mb-32 h-min">
            @foreach($news->skip(3) as $article)
                <x-news-card variant="small" :show-button="false" class="!max-w-none" :title="$article->title"
                    :summary="$article->summary" :date="$article->published_at->isoFormat('D MMMM, YYYY')"
                    :image-url="asset('storage/' . $article->image_url)" :url="route('news.show', $article)" />
            @endforeach
        </div>
    </div>

    <!-- Mobile Top List (First 3 items - Large) -->
    <div class="lg:hidden flex flex-col gap-12 mb-12">
        <div class="flex flex-col gap-8">
            @foreach($news->take(3) as $article)
                <a href="{{ route('news.show', $article) }}" class="flex flex-col group">
                    <!-- Image -->
                    <img class="w-full h-[200px] rounded-[20px] object-cover"
                        src="{{ asset('storage/' . $article->image_url) }}" alt="{{ $article->title }}">

                    <!-- Title -->
                    <div
                        class="w-full mt-4 text-black dark:text-white text-[1.25rem] font-bold font-['Montserrat'] leading-tight line-clamp-2 transition-colors">
                        {{ $article->title }}
                    </div>

                    <!-- Description -->
                    <div
                        class="w-full mt-3 text-black dark:text-gray-300 text-[0.875rem] font-normal font-['Montserrat'] leading-snug line-clamp-5 transition-colors">
                        {{ $article->summary }}
                    </div>

                    <!-- Date & Button row -->
                    <div class="w-full mt-4 flex justify-between items-center">
                        <!-- Date -->
                        <div
                            class="text-black dark:text-gray-400 text-[0.75rem] font-bold font-['Montserrat'] uppercase tracking-wide transition-colors">
                            {{ $article->published_at->isoFormat('D MMM, YYYY') }}
                        </div>

                        <!-- Button -->
                        <div
                            class="w-32 h-10 rounded-full border-2 border-veteran-blue flex items-center justify-center group-active:bg-veteran-blue transition-colors">
                            <span
                                class="text-black dark:text-white group-active:text-white text-[0.625rem] font-bold font-['Montserrat'] uppercase tracking-wide transition-colors">
                                ЧИТАТИ ДАЛІ
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Mobile Bottom Grid (Detailed items - Small) -->
        <div class="grid grid-cols-2 gap-x-4 gap-y-8">
            @foreach($news->skip(3) as $article)
                <a href="{{ route('news.show', $article) }}" class="flex flex-col group">
                    <!-- Image -->
                    <img class="w-full h-[120px] rounded-[20px] object-cover mb-3"
                        src="{{ asset('storage/' . $article->image_url) }}" alt="{{ $article->title }}">

                    <!-- Title -->
                    <div
                        class="w-full text-black dark:text-white text-[0.875rem] font-bold font-['Montserrat'] leading-tight line-clamp-3 mb-2 transition-colors">
                        {{ $article->title }}
                    </div>

                    <!-- Description -->
                    <div
                        class="w-full text-black dark:text-gray-300 text-[0.75rem] font-normal font-['Montserrat'] leading-snug line-clamp-4 mb-3 transition-colors">
                        {{ $article->summary }}
                    </div>

                    <!-- Date -->
                    <div
                        class="mt-auto text-black dark:text-gray-400 text-[0.625rem] font-bold font-['Montserrat'] uppercase tracking-wide transition-colors">
                        {{ $article->published_at->isoFormat('D MMM, YYYY') }}
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Pagination Mobile -->
        <div class="w-full mt-4">
            {{ $news->onEachSide(1)->links('vendor.pagination.custom') }}
        </div>
    </div>

@endsection

@section('footer')
    @include('partials.footer-extended')
@endsection