@extends('layouts.app')
@section('content')

    <div>
        @if (Route::has('login'))
            @include('livewire.guest.navigation')
        @endif
    </div>
@endsection
