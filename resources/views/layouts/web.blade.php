<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','ВЕТЕРАНСЬКИЙ ПРОСТІР')</title>
    <link rel="stylesheet" href="{{ asset('build/assets/web-CpeidKSA.css') }}">
</head>
<body class="bg-white">
    @include('partials.header')
    
    <main class="min-h-screen">
        <div class="mx-auto" style="padding-left: 50px; padding-right: 50px;">
            @yield('content')
        </div>
    </main>
    
    <!-- Footer Section -->
    <footer class="flex items-center justify-between py-4" style="padding-left: 50px; padding-right: 50px;">
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
    </footer>
</body>
</html>