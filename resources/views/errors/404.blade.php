@extends('layouts.web-blue')
@section('title', '404 - Сторінку не знайдено')
@section('content')
    <div class="min-h-[calc(100vh-300px)] flex flex-col items-center justify-center -mx-[50px] px-4">
        <!-- Large 404 Text using SVG with paint-order for clean outline -->
        <svg class="w-[500px] h-[200px] mb-8" viewBox="0 0 500 180" xmlns="http://www.w3.org/2000/svg">
            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Montserrat, sans-serif"
                font-weight="800" font-size="180" fill="#3971E2" stroke="white" stroke-width="4"
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