<?php

use function Livewire\Volt\{state};
use App\Liveiwre\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>



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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="pl-2">
                        <button type="submit" class="btn btn-error text-white">Logout
                        </button>
                    </div>
                </form>
                <div class="pl-2 pt-2">
                    <a href="http://127.0.0.1:8000/public/feedback/9">
                            <button class="btn btn-ghost text-left">Got a Feedback for Survefy?</button>
                    </a>
                </div>

            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <!-- Apply Tailwind classes to limit image height -->
        <img src="{{ asset('assets/logo/survefyLogo.png') }}" class="h-[2rem]" />
        {{-- <h1 class="font-bold font-sans text-[4rem]">Survefy</h1> --}}
    </div>
</div>



