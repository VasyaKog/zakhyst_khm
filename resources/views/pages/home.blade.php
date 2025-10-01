@extends('layouts.web')
@section('title','Головна')
@section('content')
<!-- Hero Section -->
<div class="relative w-full h-[820px] rounded-[100px] overflow-hidden mb-8">
    <!-- Background Image -->
    <img src="{{ asset('images/backgrounds/bg1.png') }}" 
         alt="Family Background" 
         class="w-full h-full object-cover">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply rounded-[100px]"></div>
    
    <!-- Main Heading -->
    <div class="absolute left-[326px] top-[243px]">
        <h1 class="text-white text-6xl font-bold font-unbounded leading-[74px] tracking-wide">
            Для кого ми:
        </h1>
    </div>
    
    <!-- Cards Grid -->
    <div class="absolute left-[326px] top-[367px] grid grid-cols-2 gap-8">
        <!-- Card 1: Veterans -->
        <div class="w-80 h-24 bg-white rounded-[10px] flex items-center px-4 space-x-4" style="width: 300px; height: 90px;">
            <div class="w-11 h-11 flex items-center justify-center">
                <img src="{{ asset('images/icons/family.svg') }}" alt="Family" class="w-11 h-11">
            </div>
            <span class="text-black text-xs font-bold font-montserrat uppercase leading-none tracking-tight">
                ВЕТЕРАНИ ТА ЧЛЕНИ ЇХ РОДИН
            </span>
        </div>
        
        <!-- Card 2: Fallen Families -->
        <div class="w-80 h-24 bg-white rounded-[10px] flex items-center px-4 space-x-4" style="width: 300px; height: 90px;">
            <div class="w-11 h-11 flex items-center justify-center">
                <img src="{{ asset('images/icons/heart.svg') }}" alt="Heart" class="w-11 h-11">
            </div>
            <span class="text-black text-xs font-bold font-montserrat uppercase leading-none tracking-tight">
                ЧЛЕНИ СІМЕЙ ЗАГИБЛИХ
            </span>
        </div>
        
        <!-- Card 3: Military -->
        <div class="w-80 h-24 bg-white rounded-[10px] flex items-center px-4 space-x-4" style="width: 300px; height: 90px;">
            <div class="w-11 h-11 flex items-center justify-center">
                <img src="{{ asset('images/icons/army.svg') }}" alt="Army" class="w-11 h-11">
            </div>
            <span class="text-black text-xs font-bold font-montserrat uppercase leading-none tracking-tight">
                ВІЙСЬКОВІ ТА ЧЛЕНИ ЇХ РОДИН
            </span>
        </div>
        
        <!-- Card 4: POW Families -->
        <div class="w-80 h-24 bg-white rounded-[10px] flex items-center px-4 space-x-4" style="width: 300px; height: 90px;">
            <div class="w-11 h-11 flex items-center justify-center">
                <img src="{{ asset('images/icons/people.svg') }}" alt="People" class="w-11 h-11">
            </div>
            <span class="text-black text-xs font-bold font-montserrat uppercase leading-none tracking-tight">
                ЧЛЕНИ СІМЕЙ ВІЙСЬКОВОПОЛОНЕННИХ<br/>ТА ЗНИКЛИХ БЕЗВІСТИ
            </span>
        </div>
    </div>
    
    <!-- Navigation Arrows -->
    <div class="absolute flex space-x-4 z-10" style="right: 375px; bottom: 120px;">
        <button class="w-14 h-14 bg-white bg-opacity-50 rounded-full flex items-center justify-center hover:bg-opacity-100 transition-all">
            <img src="{{ asset('images/icons/left-arrow.svg') }}" alt="Arrow Left" class="w-6 h-6 mr-1.5">
        </button>
        <button class="w-20 h-14 bg-white bg-opacity-50 rounded-[200px] flex items-center justify-center hover:bg-opacity-100 transition-all">
            <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="Arrow Right" class="w-12 h-12">
        </button>
    </div>
</div>

<!-- Footer Section -->
<div class="flex items-center justify-between py-4">
    <!-- Contact Info -->
    <div class="flex items-center">
        <img src="{{ asset('images/icons/watsapnp.svg') }}" alt="WhatsApp" class="w-6 h-6">
        <img src="{{ asset('images/icons/signal.svg') }}" alt="Signal" class="w-6 h-6 ml-2">
        <img src="{{ asset('images/icons/viber.svg') }}" alt="Viber" class="w-6 h-6 ml-2">
        <span class="text-black text-base font-bold font-montserrat" style="margin-left: 20px; margin-right: 56px;">+38 067 563 0090</span>
        <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" class="w-6 h-6">
        <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram" class="w-6 h-6 ml-2">
    </div>
    
    <!-- Search Bar -->
    <div class="w-[995px] h-12 rounded-[300px] border border-black flex items-center px-5">
        <span class="text-black text-base font-normal font-montserrat">Не можеш знайти? Пошукай тут...</span>
        <div class="ml-auto w-8 h-8 bg-black rounded-full flex items-center justify-center">
            <img class="w-6 h-6" src="{{ asset('images/icons/icon-search.svg') }}" alt="Search">
        </div>
    </div>
</div>
@endsection
