<!doctype html>
<html lang="uk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ВЕТЕРАНСЬКИЙ ПРОСТІР')</title>
    @vite(['resources/js/web.js'])
</head>

<body class="bg-veteran-blue">
    @include('partials.header-blue')

    <main class="min-h-screen">
        <div class="mx-auto" style="padding-left: 50px; padding-right: 50px;">
            @yield('content')
        </div>
    </main>

    @include('partials.footer-blue')

    <!-- Donation Modal -->
    @include('components.donation-modal')
</body>

</html>