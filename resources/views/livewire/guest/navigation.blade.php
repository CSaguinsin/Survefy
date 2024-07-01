<div class="navbar bg-base-100">
    <div class="navbar-start" x-data="{ open: false }">
        <div class="dropdown">
            <div @click="open = ! open" tabindex="0" role="button" class="btn btn-ghost btn-circle ">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul
            x-show="open"
            x-transition
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a class="font-sans">Home</a></li>
                <li><a>About</a></li>
                <li><a>Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <!-- Apply Tailwind classes to limit image height -->
        <img src="{{ asset('assets/logo/survefyLogo.png') }}" class="h-[2rem]" />
        {{-- <h1 class="font-bold font-sans text-[4rem]">Survefy</h1> --}}
    </div>
    <div class="navbar-end pt-[21px]">
        <button class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg bg-customBlue text-white">Start Now</button>
    </div>
</div>
