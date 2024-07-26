@extends('guest.layout.app')
@section('title', 'Dashboard')
@section('content')

@include('livewire.authnavbar')
    <div class="lg:flex lg:flex-row lg:mx-auto space-x-6  pt-[5rem]  lg:max-w-[90rem] md:w-[60rem] md:ml-10 sm:flex sm:flex-col">
        <livewire:add-feedback-board />
        <livewire:boards />
    </div>
@endsection
