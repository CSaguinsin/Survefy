<!-- resources/views/public-feedback.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('survefyLogo.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto">
        <livewire:feedback-dashboard :boardId="$boardId" />
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
