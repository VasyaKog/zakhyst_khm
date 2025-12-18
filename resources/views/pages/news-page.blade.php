@extends('layouts.web')
@section('title', 'Новина')
@section('content')

    @php
        $images = [];
        if ($newsArticle->image_url)
            $images[] = asset('images/backgrounds/' . $newsArticle->image_url);
        if ($newsArticle->gallery_images) {
            foreach ($newsArticle->gallery_images as $img) {
                $images[] = asset('images/backgrounds/' . $img);
            }
        }
    @endphp

    <x-news-instance :title="$newsArticle->title" :date="$newsArticle->published_at->isoFormat('D MMMM, YYYY')"
        :author="$newsArticle->author ?? 'Admin'" :content="strip_tags($newsArticle->content)" :imageUrls="$images"
        :videoUrl="$newsArticle->video_url ? asset($newsArticle->video_url) : null" />

    <!-- You may be interested -->
    <div class="px-[50px] max-w-[1920px] mx-auto mt-24 mb-12">
        <p class="text-[48px] font-bold font-['Montserrat'] text-black leading-[1.33]">
            Тобі може бути цікаво
        </p>
    </div>

    <div class="flex flex-row gap-12 mb-24 px-[50px] max-w-[1920px] mx-auto justify-center">
        @foreach($relatedNews as $related)
            <x-news-card variant="large" :show-button="true" class="!max-w-none w-full" :title="$related->title"
                :summary="$related->summary" :date="$related->published_at->isoFormat('D MMMM, YYYY')"
                :image-url="asset('images/backgrounds/' . $related->image_url)" :url="route('news.show', $related)" />
        @endforeach
    </div>

@endsection

@section('footer')
    @include('partials.footer-extended')
@endsection