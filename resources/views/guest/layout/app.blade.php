<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey | Get create products that matters - @yield('title')</title>
    <link href="../../../../public/build/.vite/manifest.json" rel="manifest">
    {{-- <link href="public/build/manifest.json" rel="manifest"> --}}
    <link href="../../../../resources/css/app.css" rel="stylesheet">
    {{-- <link href="resources/css/app.css" rel="stylesheet"> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles()
        <!-- Other head content -->
        @livewireScripts
</head>
<body>

    @if (Route::has('login'))
        @auth
            @include('livewire.guest.navigation') <!-- navigation bar for guests -->
        @endauth
    @endif
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>
