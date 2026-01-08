<!doctype html>
<html lang="uk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ВЕТЕРАНСЬКИЙ ПРОСТІР')</title>
    @vite(['resources/js/web.js'])
</head>

<body class="bg-white">
    @include('partials.header')

    <main class="min-h-screen">
        <div class="px-4 md:px-[50px]">
            @yield('content')
        </div>
    </main>

    @hasSection('footer')
        @yield('footer')
    @else
        @include('partials.footer-basic')
    @endif

    <!-- Donation Modal -->
    @include('components.donation-modal')
    @include('components.contact-modal')
</body>

</html>