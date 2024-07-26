<section class="lg:pt-[154px] md:pt-[100px] pt-[64px]">
    <div class="lg:w-[671px] lg:mx-auto md:w-[700px] md:mx-auto sm:w-full sm:px-4">
        <div class="lg:w-full lg:text-center md:w-full sm:w-full md:text-center sm:text-center mx-auto">
            <h1 class="lg:text-[64px] lg:w-full lg:text-center font-bold md:text-[48px] md:w-full md:mx-auto md:text-center md:pl-0 md:pr-0 text-[24px] sm:mx-auto my-4 text-center">Ready to <span class="text-customBlue">build the right things</span> for the <span class="text-customBlue">right people</span></h1>
            <p class="lg:mx-auto text-center lg:text-[20px] md:mx-10 md:text-center md:w-[671px] md:px-4 md:text-[20px] sm:text-[16px] sm:px-4">
                Survefy helps you to gather user feedback to shape products users love!
            </p>
            <div class="pt-5 flex space-x-5 lg:w-[562px] justify-center lg:justify-center">
                @if (Route::has('register'))
                    <a href="{{ route('login') }}">
                        <button class="btn btn-active text-white btn-primary">Collect feedback for free!</button>
                    </a>
                @endif
                <button class="btn btn-outline" x-data @click="document.getElementById('demo-video').scrollIntoView({ behavior: 'smooth' })">
                    Watch demo
                </button>
            </div>
        </div>
        <div class="flex justify-center items-center h-full">
            <div>
                <img src="{{ asset('assets/elements/ctaLogo.png') }}" alt="ctaLogo" class="hidden lg:block w-[50rem] h-[32rem]" />
            </div>
        </div>
    </div>
</section>
