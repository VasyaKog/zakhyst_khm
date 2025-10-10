<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','ВЕТЕРАНСЬКИЙ ПРОСТІР')</title>
    <link rel="stylesheet" href="{{ asset('build/assets/web-3TWvONfc.css') }}">
</head>
<body class="bg-white">
    @include('partials.header')
    
    <main class="min-h-screen">
        <div class="mx-auto" style="padding-left: 50px; padding-right: 50px;">
            @yield('content')
        </div>
    </main>
    
    @hasSection('footer')
        @yield('footer')
    @else
        @include('partials.footer-basic')
    @endif
</body>
</html>