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
        <link href="{{ asset('build/assets/app-CrDVhsnp.css') }}" rel="stylesheet">
        <script src="{{ asset('build/assets/app-KEEtJs3M.js') }}" defer></script>
    @endif

    @livewireStyles()
    <!-- Other head content -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('survefyLogo.png') }}">
</head>
<body>
    @if (Route::has('login'))
        @auth
            {{-- @include('livewire.authnavbar') <!-- navigation bar for authenticated users --> --}}
        @else
            {{-- @include('livewire.guest.navigation') <!-- navigation bar for guests --> --}}
        @endauth
    @endif

    <main>
        @yield('content')
    </main>

    @guest
        {{-- @include('livewire.guest.footer') <!-- this footer is only visible for guest --> --}}
    @endguest

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>
