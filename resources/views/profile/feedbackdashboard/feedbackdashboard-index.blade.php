@extends('guest.layout.app')

@section('title', 'FeedbackDashboard')

@section('content')
    <div class="flex flex-row space-x-8 mx-auto pt-[5rem] max-w-[70rem]">
        <livewire:feedback-dashboard :boardId="$id" />
    </div>
@endsection


