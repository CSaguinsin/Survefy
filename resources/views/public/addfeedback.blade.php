@extends('guest.layout.app')
@section('title', 'Survefy')
@section('content')
    <div class="flex flex-row space-x-8 mx-auto pt-[5rem] max-w-[70rem]">
        <livewire:add-feedback />
        <livewire:feedback-display />
    </div>
@endsection
