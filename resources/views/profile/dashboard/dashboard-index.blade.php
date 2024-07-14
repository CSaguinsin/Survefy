@extends('guest.layout.app')
@section('title', 'Dashboard')
@section('content')


    <div class="flex flex-row space-x-8 mx-auto pt-[5rem] max-w-[70rem]">
        <livewire:add-feedback-board />
        <livewire:boards />
    </div>
@endsection
