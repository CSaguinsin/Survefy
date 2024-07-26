@extends('guest.layout.app')
@section('title', 'Home')
@section('content')
      @include('livewire.guest.navigation')
      @include('guest.landing.hero')
      @include('guest.landing.features')
      @include('guest.landing.cta')
      @include('livewire.guest.footer')
@endsection
