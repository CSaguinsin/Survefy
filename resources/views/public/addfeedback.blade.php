@extends('guest.layout.app')
@section('title', 'Survefy')
@section('content')
<div class="navbar bg-base-100 pt-10">
    <div class="navbar-start" x-data="{ open: false }">
    </div>
    <div class="navbar-center">
        <!-- Apply Tailwind classes to limit image height -->
        <img src="{{ asset('assets/logo/survefyLogo.png') }}" class="h-[2rem]" />
        {{-- <h1 class="font-bold font-sans text-[4rem]">Survefy</h1> --}}
    </div>
</div>
    <div class="flex flex-row space-x-8 mx-auto pt-[5rem] max-w-[70rem]">
        <livewire:add-feedback :feedbackboard_id="$boardId" />
        <livewire:feedback-display :feedbackboard_id="$boardId" />
    </div>
@endsection
