<section class="pt-[72px] lg:pb-0 md:pb-0 sm:pb-10">
    <div class="flex lg:space-x-[10rem] lg:px-[72px] lg:w-full md:w-[700px] md:mx-auto sm:w-[200px] sm:mx-auto">
        <div class="lg:w-[515px] lg:text-left md:w-full sm:w-full md:text-center sm:text-center mx-auto">
            <h1 class="lg:text-[64px] lg:w-full lg:text-left font-bold md:text-[48px] md:w-full md:mx-auto md:text-center md:pl-0 md:pr-0 text-[28px] text-center">
                Collect <span class="text-customBlue">Insights</span>, Build <span class="text-customBlue">Better</span>,
                Ship Products that <span class="text-customBlue">Matter</span>
            </h1>
                <p class="pt-2 lg:text-left lg:px-0 lg:w-full lg:text-[20px] md:px-4 md:text-[20px]  text-center sm:text-[16px] sm:px-4">
                    Survefy helps you gather user feedback, enabling you to shape and refine products that truly resonate with your customer
                </p>
            <div class="pt-5 flex space-x-5 lg:w-[562px] justify-center lg:justify-start">
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
        <div class="pt-[13px] mx-auto">
            <img src="{{ asset('assets/elements/heroElement.png') }}" alt="hero" class="hidden lg:block w-[50rem] h-[32rem]">
        </div>
    </div>
</section>
