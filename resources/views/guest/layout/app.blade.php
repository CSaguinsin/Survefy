<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survefy | Create products that matter - @yield('title')</title>

    @if (app()->environment('local'))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    @endphp
    <link href="../../../../build/assets/app-CrDVhsnp.css" rel="stylesheet">
@endif


    @livewireStyles()
    <link rel="shortcut icon" href="{{ asset('survefyLogo.png') }}">
</head>
<body>
    @if (Route::has('login'))
        @auth
            {{-- @include('livewire.authnavbar') --}}
        @else
            {{-- @include('livewire.guest.navigation') --}}
        @endauth
    @endif

    <main>
        @yield('content')
    </main>

    @guest
        {{-- @include('livewire.guest.footer') --}}
    @endguest

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="../../../../build/assets/app-KEEtJs3M.js" defer></script>
</body>
</html>
