@extends('guest.layout.app')
@section('title', 'Dashboard')
@section('content')


    <div class="flex flex-row space-x-8 px-[10rem] pt-[5rem]">
        <livewire:add-feedback-board />
        <livewire:boards />
    </div>
@endsection
