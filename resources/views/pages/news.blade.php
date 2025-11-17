@extends('layouts.web')
@section('title','Новини')
@section('content')

<div class="flex flex-row justify-between mb-16 mt-32">
    <div>
        <h1 class="text-[158px] font-extrabold font-['Montserrat'] text-black uppercase leading-[0.92]">
            НОВИНИ:
        </h1>
        
        <div class="max-w-[869px] text-[20px] font-normal font-['Montserrat'] text-black leading-[1.43] mb-16 mt-20">
            <p class="mb-0">Найсвіжіші новини для спільноти ветеранів, діючих військових, їхніх родин<br/>та близьких, а також спільнот, які цікавляться ветеранською тематику.</p>
        </div>
    </div>

    <div>            
        <img src="{{ asset('images/icons/instagram.svg') }}" alt="Insta" class="max-w-[30px] max-h-[30px] mb-4 cursor-pointer"> 
        <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="max-w-[30px] max-h-[30px] cursor-pointer">
    </div>
</div>

<!-- Divider -->
<div class="w-full h-px bg-black mb-32"></div>

<!-- Main container with both grids side by side -->
<div class="grid grid-cols-[1fr_930px] gap-x-[70px] max-w-[1920px]">
    <!-- First Grid: 1 column, 3 rows, large components -->
    <div class="flex flex-col gap-[77px]">
        <x-news-card
            variant="large"
            :show-button="true"
            class="!max-w-none"
            title="Український ветеранський фонд: звіт роботи за 2024 рік"
            summary="Громадська організація «Ветеранс ХАБ ОДЕСА» створює умови для розвитку ветеранського бізнесу. Якщо у тебе є ідея, але ти не знаєш, як її реалізувати, наша команда експертів готова допомогти..."
            date="10 ГРУДНЯ, 2025"
            image-url="{{ asset('images/backgrounds/news-bg-1.png') }}"
            url="#"
        />
        
        <x-news-card
            variant="large"
            :show-button="true"
            class="!max-w-none"
            title="Український ветеранський фонд: звіт роботи за 2024 рік"
            summary="Громадська організація «Ветеранс ХАБ ОДЕСА» створює умови для розвитку ветеранського бізнесу. Якщо у тебе є ідея, але ти не знаєш, як її реалізувати, наша команда експертів готова допомогти..."
            date="10 ГРУДНЯ, 2025"
            image-url="{{ asset('images/backgrounds/news-bg-1.png') }}"
            url="#"
        />
        
        <x-news-card
            variant="large"
            :show-button="true"
            class="!max-w-none"
            title="Український ветеранський фонд: звіт роботи за 2024 рік"
            summary="Громадська організація «Ветеранс ХАБ ОДЕСА» створює умови для розвитку ветеранського бізнесу. Якщо у тебе є ідея, але ти не знаєш, як її реалізувати, наша команда експертів готова допомогти..."
            date="10 ГРУДНЯ, 2025"
            image-url="{{ asset('images/backgrounds/news-bg-1.png') }}"
            url="#"
        />
        
        <!-- Pagination -->
        <div class="w-full flex items-center justify-between mt-14">
            <!-- Previous Button -->
            <button class="w-14 h-14 flex items-center justify-center hover:bg-opacity-100 transition-all">
                <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-6 h-6 mr-1.5">
            </button>
            
            <!-- Page Numbers -->
            <div class="flex items-center gap-12">
                <a href="#" class="text-[20px] font-normal font-['Montserrat'] text-black hover:font-bold transition-all">1</a>
                <a href="#" class="text-[20px] font-normal font-['Montserrat'] text-black hover:font-bold transition-all">2</a>
                <a href="#" class="text-[20px] font-normal font-['Montserrat'] text-black hover:font-bold transition-all">3</a>
                <a href="#" class="text-[20px] font-normal font-['Montserrat'] text-black hover:font-bold transition-all">4</a>
                <span class="text-[20px] font-bold font-['Montserrat'] text-black border-b-2 border-black pb-1">5</span>
                <a href="#" class="text-[20px] font-normal font-['Montserrat'] text-black hover:font-bold transition-all">6</a>
                <a href="#" class="text-[20px] font-normal font-['Montserrat'] text-black hover:font-bold transition-all">7</a>
                <a href="#" class="text-[20px] font-normal font-['Montserrat'] text-black hover:font-bold transition-all">8</a>
                <a href="#" class="text-[20px] font-normal font-['Montserrat'] text-black hover:font-bold transition-all">9</a>
                <a href="#" class="text-[20px] font-normal font-['Montserrat'] text-black hover:font-bold transition-all">10</a>
            </div>
            
            <!-- Next Button -->
            <button class="w-20 h-14 flex items-center justify-center hover:bg-opacity-100 transition-all">
                <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-12 h-12">
            </button> 
        </div>
    </div>

    <!-- Second Grid: 2 columns, 5 rows, small components -->
    <div class="grid grid-cols-2 gap-x-[42px] gap-y-[70px] mb-32">
        @for ($i = 0; $i < 10; $i++)
            <x-news-card
                variant="small"
                :show-button="false"
                class="!max-w-none"
                title="Оголошення переможців грантової програми 'Варто 11.0': у Києві пройшла пресконференція"
                summary="Громадська організація «Ветеранс ХАБ ОДЕСА» створює умови для розвитку ветеранського бізнесу. Якщо у тебе є ідея, але ти не знаєш, як її реалізувати, наша команда експертів готова допомогти..."
                date="10 ГРУДНЯ, 2025"
                image-url="{{ asset('images/backgrounds/news-bg-2.png') }}"
                url="#"
            />
        @endfor
    </div>
</div>

@endsection

@section('footer')
    @include('partials.footer-extended')
@endsection