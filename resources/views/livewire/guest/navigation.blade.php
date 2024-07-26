<div class="navbar bg-base-100">
    <div class="navbar-start" x-data="{ open: false }">

    </div>
    <div class="navbar-center">
        <!-- Apply Tailwind classes to limit image height -->
        <img src="{{ asset('assets/logo/survefyLogo.png') }}" class="h-[2rem]" />
        {{-- <h1 class="font-bold font-sans text-[4rem]">Survefy</h1> --}}
    </div>
    @if (Route::has('register'))
    <div class="navbar-end pt-[21px]">
        <a href="{{ route('login') }}">
            <button  class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg bg-customBlue text-white">Start Now</button>
        </a>
    </div>
    @endif
</div>
