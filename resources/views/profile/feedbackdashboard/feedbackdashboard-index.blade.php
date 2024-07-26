@extends('guest.layout.app')

@section('title', 'FeedbackDashboard')

@section('content')
<div class="navbar bg-base-100 ">
    <div class="navbar-start" x-data="{ open: false }">
    </div>
    <div class="navbar-center">
        <!-- Apply Tailwind classes to limit image height -->
        <img src="{{ asset('assets/logo/survefyLogo.png') }}" class="h-[2rem]" />
        {{-- <h1 class="font-bold font-sans text-[4rem]">Survefy</h1> --}}
    </div>
</div>
    <div class="space-x-8 lg:mx-auto pt-[5rem] lg:max-w-[70rem] md:ml-auto">
        <div class="pb-10 ml-6">
            <form method="GET" action="{{ route('dashboard') }}">
                @csrf
                    <button class="btn">🏠  Dashboard</button>
            </form>
        </div>
        <div class="lg:flex lg:flex-row space-x-6">
            <livewire:feedback-dashboard :boardId="$id" />
            <livewire:feedback-display :feedbackboard_id="$id" />
        </div>
    </div>
@endsection
