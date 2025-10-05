@extends('layouts.web')
@section('title','Головна')
@section('content')
<!-- Hero Carousel -->
<div id="hero-carousel" class="relative overflow-hidden h-[820px] mb-8 rounded-[100px]">
    <!-- Hero Section 1 -->
<div class="carousel-slide absolute inset-0 w-full h-[820px] overflow-hidden active transition-all duration-1500 ease-in-out" style="transform: translateX(0%);">
    <!-- Background Image -->
    <img src="{{ asset('images/backgrounds/bg1.png') }}" 
         alt="Family Background" 
         class="w-full h-full object-cover">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>
    
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

<!-- Hero Section 2 -->
<div class="carousel-slide absolute inset-0 w-full h-[820px] overflow-hidden transition-all duration-1500 ease-in-out" style="transform: translateX(100%);">
    <!-- Background Image -->
    <img src="{{ asset('images/backgrounds/bg2.png') }}" 
         alt="Family Background" 
         class="w-full h-full object-cover">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>
    
    <!-- Blue Text Overlay -->
    <div class="absolute left-325 top-200 w-700 h-96 bg-blue-600" style="border-top-left-radius: 150px; border-top-right-radius: 50px; border-bottom-left-radius: 150px; border-bottom-right-radius: 150px;">
        <!-- Main Heading -->
        <div class="absolute left-90 w-519 h-36 text-white text-6xl font-bold font-unbounded leading-[74.08px] tracking-wide" style="top: 74px;">
            Бізнес - ветеранам!
        </div>
        
        <!-- Subtitle -->
        <div class="absolute left-90 w-519 h-16 text-white text-2xl font-medium font-unbounded uppercase leading-9 tracking-tight" style="top: 260px;">
            Дізнайся більше про цінні пропозиції 
            <span class="underline">тут</span>
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

<!-- Hero Section 3 -->
<div class="carousel-slide absolute inset-0 w-full h-[820px] overflow-hidden transition-all duration-1500 ease-in-out" style="transform: translateX(100%);">
    <!-- Background Image -->
    <img src="{{ asset('images/backgrounds/bg3.png') }}" 
         alt="Family Background" 
         class="w-full h-full object-cover">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-neutral-400 opacity-20 mix-blend-multiply"></div>
    
    <!-- Memorial Content -->
    <div class="absolute left-325 top-200 w-669 h-96" style="border-radius: 412px;">
        <!-- Main Heading -->
        <div class="absolute left-0 w-669 h-36 text-white text-6xl font-bold font-unbounded leading-[74.08px] tracking-wide" style="top: 0;">
            Вони загинули за Україну!
        </div>
        
        <!-- Subtitle -->
        <div class="absolute left-0 w-669 h-16 text-white text-2xl font-medium font-unbounded uppercase leading-9 tracking-tight" style="top: 186px;">
            Віртуальний меморіал полеглим захисникам та захисницям
        </div>
        
        <!-- Button -->
        <div class="absolute left-0 w-320 h-16 border-2 border-white flex items-center justify-center" style="top: 317px; border-radius: 412px;">
            <span class="text-white text-xl font-black font-montserrat uppercase tracking-wide">
                відвідати меморіал
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('hero-carousel');
    const slides = document.querySelectorAll('.carousel-slide');
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    let isAnimating = false; 
    
    const slideOrder = [0, 1, 2]; 
    let currentPosition = 0; 
    
    function showSlideByPosition(position) {
        const targetIndex = slideOrder[position];
        console.log('Showing slide at position:', position, 'which is slide:', targetIndex, 'from current:', currentSlide); // Debug
        
        if (targetIndex === currentSlide || isAnimating) return; 
        
        isAnimating = true; 
        
        const allArrows = document.querySelectorAll('.carousel-slide .absolute button');
        allArrows.forEach(arrow => {
            arrow.disabled = true;
            arrow.style.opacity = '0.5';
        });
        
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            slide.style.transform = 'translateX(100%)';
        });
        
        const currentSlideElement = slides[currentSlide];
        const targetSlide = slides[targetIndex];
        
        currentSlideElement.classList.add('active');
        currentSlideElement.style.transform = 'translateX(0%)';
        
        targetSlide.style.transform = 'translateX(100%)';
        targetSlide.classList.add('active');
        
        setTimeout(() => {
            targetSlide.style.transform = 'translateX(0%)';
        }, 10);
        
        setTimeout(() => {
            currentSlideElement.classList.remove('active');
            currentSlideElement.style.transform = 'translateX(100%)';
            isAnimating = false; 
            
            const allArrows = document.querySelectorAll('.carousel-slide .absolute button');
            allArrows.forEach(arrow => {
                arrow.disabled = false;
                arrow.style.opacity = '1';
                arrow.style.cursor = 'pointer';
            });
        }, 800); 
        
        currentSlide = targetIndex;
        currentPosition = position;
        console.log('Slide', targetIndex, 'shown from right - CLEAN STATE animation'); // Debug
    }
    
   
    function nextSlide() {
        console.log('Next slide clicked, current position:', currentPosition); // Debug
        const nextPosition = (currentPosition + 1) % slideOrder.length;
        showSlideByPosition(nextPosition);
    }
    
    
    function prevSlide() {
        console.log('Previous slide clicked, current position:', currentPosition); // Debug
        const prevPosition = (currentPosition - 1 + slideOrder.length) % slideOrder.length;
        showSlideByPosition(prevPosition);
    }
    
    
    const allLeftArrows = document.querySelectorAll('.carousel-slide .absolute button:first-child');
    const allRightArrows = document.querySelectorAll('.carousel-slide .absolute button:last-child');
    
    console.log('Found left arrows:', allLeftArrows.length); // Debug
    console.log('Found right arrows:', allRightArrows.length); // Debug
    
    allLeftArrows.forEach((arrow, i) => {
        arrow.addEventListener('click', (e) => {
            if (isAnimating) {
                console.log('Left arrow', i, 'clicked but animation in progress - IGNORED'); // Debug
                return; 
            }
            console.log('Left arrow', i, 'clicked'); // Debug
            prevSlide();
        });
    });
    
    allRightArrows.forEach((arrow, i) => {
        arrow.addEventListener('click', (e) => {
            if (isAnimating) {
                console.log('Right arrow', i, 'clicked but animation in progress - IGNORED'); // Debug
                return; 
            }
            console.log('Right arrow', i, 'clicked'); // Debug
            nextSlide();
        });
    });
    
    console.log('Initializing carousel with', totalSlides, 'slides'); // Debug
    showSlideByPosition(0);
});
</script>
@endsection
