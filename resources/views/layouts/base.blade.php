<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('survefyLogo.png') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @if (app()->environment('local'))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <link href="{{ asset('build/assets/app-CrDVhsnp.css ') }}" rel="stylesheet">
            <script src="{{ asset('build/assets/app-KEEtJs3M.js') }}"></script>
        @endif
        @livewireStyles
        @livewireScripts

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @yield('body')
    </body>
</html>
