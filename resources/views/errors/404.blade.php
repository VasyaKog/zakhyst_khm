@extends('layouts.web-blue')
@section('title', __('404 Page Title'))
@section('content')
    <div class="flex-grow flex flex-col items-center justify-center w-full px-4 lg:px-0 py-12 lg:py-0">
        <!-- 404 SVG -->
        <svg class="w-full max-w-[280px] xs:max-w-[350px] sm:max-w-[450px] h-auto mb-6 lg:mb-8" viewBox="0 0 500 180"
            xmlns="http://www.w3.org/2000/svg">
            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Montserrat, sans-serif"
                font-weight="800" font-size="176" fill="#3971E2" stroke="white" stroke-width="4"
                style="paint-order: stroke fill;">
                404
            </text>
        </svg>

        <!-- Error Message -->
        <div class="text-center mb-8 lg:mb-12 px-2">
            <p class="text-white text-base xs:text-lg lg:text-xl font-bold uppercase tracking-wide mb-2">
                {{ __('404 Error Title') }}
            </p>
            <p class="text-white text-base xs:text-lg lg:text-xl font-bold uppercase tracking-wide">
                {{ __('404 Error Action') }}
            </p>
        </div>

        <!-- Back to Home Button -->
        <a href="{{ route('home') }}"
            class="px-8 xs:px-10 lg:px-12 py-3 lg:py-4 border-2 border-white text-white text-base xs:text-lg lg:text-xl font-black uppercase rounded-full hover:bg-white hover:text-veteran-blue transition-all duration-300 text-center">
            {{ __('Back to Home') }}
        </a>
    </div>
@endsection