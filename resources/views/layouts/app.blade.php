<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        @yield('head')
    </head>

    <body class="font-nunito mt-[104px]">
        <div class="absolute left-0 top-0 z-40 hidden h-full w-full bg-black opacity-70" id="curtain"></div>
        <x-navigation.navbar />
        {{ $slot }}
        <x-navigation.footer />
    </body>

</html>
