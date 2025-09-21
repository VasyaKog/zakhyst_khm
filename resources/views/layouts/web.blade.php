<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title>@yield('title','Site')</title>
    @vite(['resources/js/web.js'])
</head>
<body>
@include('partials.nav')
<main>@yield('content')</main>
</body>
</html>
