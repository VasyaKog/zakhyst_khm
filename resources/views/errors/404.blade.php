@extends('layouts.web-blue')
@section('title', '404 - Сторінку не знайдено')
@section('content')
    <div class="flex-grow flex flex-col items-center justify-center w-full">
        <svg class="w-full max-w-[450px] h-auto mb-8" viewBox="0 0 500 180" xmlns="http://www.w3.org/2000/svg">
            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Montserrat, sans-serif"
                font-weight="800" font-size="176" fill="#3971E2" stroke="white" stroke-width="4"
                style="paint-order: stroke fill;">
                404
            </text>
        </svg>

        <!-- Error Message -->
        <div class="text-center mb-12">
            <p class="text-white text-xl font-bold uppercase tracking-wide mb-2">
                ЙОЙ! ЩОСЬ ПІШЛО НЕ ТАК.
            </p>
            <p class="text-white text-xl font-bold uppercase tracking-wide">
                НАТИСНИ КНОПКУ НИЖЧЕ І ЗРОБИ ВІДКАТ НАЗАД
            </p>
        </div>

        <!-- Back to Home Button -->
        <a href="{{ route('home') }}"
            class="px-12 py-4 border-2 border-white text-white text-xl font-black uppercase rounded-full hover:bg-white hover:text-veteran-blue transition-all duration-300">
            НА ГОЛОВНУ
        </a>
    </div>
@endsection