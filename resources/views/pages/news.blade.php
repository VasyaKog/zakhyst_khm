@extends('layouts.web')
@section('title', 'Новини')
@section('content')

    <div class="flex flex-row justify-between mb-16 mt-32">
        <div>
            <h1 class="text-[158px] font-extrabold font-['Montserrat'] text-black uppercase leading-[0.92]">
                НОВИНИ:
            </h1>

            <div class="max-w-[869px] text-[20px] font-normal font-['Montserrat'] text-black leading-[1.43] mb-16 mt-20">
                <p class="mb-0">Найсвіжіші новини для спільноти ветеранів, діючих військових, їхніх родин<br />та близьких,
                    а також спільнот, які цікавляться ветеранською тематику.</p>
            </div>
        </div>

        <div>
            <img src="{{ asset('images/icons/instagram.svg') }}" alt="Insta"
                class="max-w-[30px] max-h-[30px] mb-4 cursor-pointer">
            <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook"
                class="max-w-[30px] max-h-[30px] cursor-pointer">
        </div>
    </div>

    <!-- Divider -->
    <div class="w-full h-px bg-black mb-32"></div>

    <!-- Main container with both grids side by side -->
    <div class="grid grid-cols-[1fr_930px] gap-x-[70px] max-w-[1920px]">
        <!-- First Grid: 1 column, 3 rows, large components -->
        <div class="flex flex-col gap-[77px]">
            @foreach($news->take(3) as $article)
                <x-news-card variant="large" :show-button="true" class="!max-w-none" :title="$article->title"
                    :summary="$article->summary" :date="$article->published_at->isoFormat('D MMMM, YYYY')"
                    :image-url="asset('images/backgrounds/' . $article->image_url)" :url="route('news.show', $article)" />
            @endforeach

            <!-- Pagination -->
            <div class="w-full mt-14">
                {{ $news->onEachSide(1)->links('vendor.pagination.custom') }}
            </div>
        </div>

        <!-- Second Grid: 2 columns, 5 rows, small components -->
        <div class="grid grid-cols-2 gap-x-[42px] gap-y-[70px] mb-32 h-min">
            @foreach($news->skip(3) as $article)
                <x-news-card variant="small" :show-button="false" class="!max-w-none" :title="$article->title"
                    :summary="$article->summary" :date="$article->published_at->isoFormat('D MMMM, YYYY')"
                    :image-url="asset('images/backgrounds/' . $article->image_url)" :url="route('news.show', $article)" />
            @endforeach
        </div>

    </div>

@endsection

@section('footer')
    @include('partials.footer-extended')
@endsection