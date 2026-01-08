<!doctype html>
<html lang="uk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ВЕТЕРАНСЬКИЙ ПРОСТІР')</title>
    @vite(['resources/js/web.js'])
</head>

<body class="bg-veteran-blue flex flex-col min-h-screen">
    @include('partials.header-blue')

    <main class="flex-grow flex flex-col">
        <div class="w-full flex-grow flex flex-col px-4 min-[1250px]:px-[50px]">
            @yield('content')
        </div>
    </main>

    @include('partials.footer-blue')

    <!-- Donation Modal -->
    @include('components.donation-modal')
    @include('components.contact-modal')
</body>

</html>