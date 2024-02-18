<div class="flex h-[calc(100vh-104px)] w-full flex-col">
    {{-- Slider --}}
    <div class="swiper h-full w-full shrink" id="homepage-header-carousel">
        {{-- slides --}}
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <x-block.homepage-header-slide
                    style="background-image:
                    linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                    url('{{ asset('images/homepage-header-carousel/pexels-quark-studio.jpg') }}');">
                    <h1 class="font-viaoda text-5xl text-white md:text-7xl">
                        {{ __('Luxury Meets Comfort') }}
                    </h1>
                    <div class="h-[1px] w-[40%] rounded-full bg-gold md:w-[26%]"></div>
                    <p class="font-baskerville text-xl text-white md:text-3xl">
                        {{ __('Finding the perfect place for you') }}
                        <br>
                        {{ __('to rest your head is only one click away') }}
                    </p>
                </x-block.homepage-header-slide>
            </div>
            <div class="swiper-slide">
                <x-block.homepage-header-slide
                    style="background-image:
                    linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                    url('{{ asset('images/homepage-header-carousel/pexels-athena.jpg') }}');">
                    <h1 class="font-viaoda text-5xl text-white md:text-7xl">
                        {{ __('Unwind and Relax') }}
                    </h1>
                    <div class="h-[1px] w-[40%] rounded-full bg-gold md:w-[26%]"></div>
                    <p class="font-baskerville text-xl text-white md:text-3xl">
                        {{ __('Escape the rush of every day life') }}
                        <br>
                        {{ __('and enjoy the sun setting over the ocean') }}
                    </p>
                </x-block.homepage-header-slide>
            </div>
            <div class="swiper-slide">
                <x-block.homepage-header-slide
                    style="background-image:
                    linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                    url('{{ asset('images/homepage-header-carousel/pexels-donald-tong.jpg') }}');">
                    <h1 class="font-viaoda text-5xl text-white md:text-7xl">
                        {{ __('Experience Life in Style') }}
                    </h1>
                    <div class="h-[1px] w-[40%] rounded-full bg-gold md:w-[26%]"></div>
                    <p class="font-baskerville text-xl text-white md:text-3xl">
                        {{ __('Indulge in our diverse selection of venues,') }}
                        <br>
                        {{ __('blending modern and traditional.') }}
                    </p>
                </x-block.homepage-header-slide>
            </div>
            <div class="swiper-slide">
                <x-block.homepage-header-slide
                    style="background-image:
                    linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                    url('{{ asset('images/homepage-header-carousel/pexels-pixabay.jpg') }}');">
                    <h1 class="font-viaoda text-5xl text-white md:text-7xl">
                        {{ __('Create Memories') }}
                    </h1>
                    <div class="h-[1px] w-[40%] rounded-full bg-gold md:w-[26%]"></div>
                    <p class="font-baskerville text-xl text-white md:text-3xl">
                        {{ __('Toast to unforgettable moments') }}
                        <br>
                        {{ __('at our selection of restaurants and breweries') }}
                    </p>
                </x-block.homepage-header-slide>
            </div>
        </div>

        {{-- arrows --}}
        <div class="swiper-button-next !hidden sm:!block"></div>
        <div class="swiper-button-prev !hidden sm:!block"></div>

        {{-- bullets --}}
        <div class="swiper-pagination"></div>
    </div>

    {{-- Book now bar --}}
    <div class="flex h-48 w-full shrink-0 flex-col flex-wrap items-center justify-center gap-6 bg-[#1e1e1e] px-12
    sm:h-36 sm:flex-row sm:px-0">
        {{-- Dropdown --}}
        <div class="book-now-dropdown relative flex w-full cursor-pointer items-center justify-between gap-6 border
        border-[#555555] px-5 py-4 text-[#999999] transition-all duration-300 sm:w-[320px]" id="book-now-dropdown">
            <span class="book-now-dropdown" id="book-now-dropdown-selected">{{ __('Hotel Krige') }}</span>
            <x-icon.arrow class="book-now-dropdown h-5 w-5" />
            {{-- Dropdown options --}}
            <div class="book-now-dropdown absolute left-0 z-10 hidden h-[217px] w-full flex-col items-start
            justify-center gap-4 border border-[#555555] bg-[#1e1e1e] px-4" id="book-now-dropdown-options"
            aria-hidden="true" style="top: -217.5px;">
                <span class="book-now-dropdown-option mt-4 hover:text-gold">
                    {{ __('Hotel Krige') }}
                </span>
                <span class="book-now-dropdown-option hover:text-gold">
                    {{ __('38 on Westcliff') }}
                </span>
                <span class="book-now-dropdown-option hover:text-gold">
                    {{ __('The Manhattan on Coral') }}
                </span>
                <span class="book-now-dropdown-option hover:text-gold">
                    {{ __('The Franchoek Beer Company') }}
                </span>
                <span class="book-now-dropdown-option mb-4 hover:text-gold">
                    {{ __('Franks Corner') }}
                </span>
            </div>
        </div>

        {{-- Book now button --}}
        <a class="flex h-[56.5px] w-full items-center justify-center bg-gold font-merriweather text-sm
        text-[#ffffff] transition-all duration-300 hover:bg-white hover:text-black sm:w-[200px]"
        id="book-now-button" href="https://hotelkrige.co.za/" target="_blank">
            {{ __('BOOK NOW') }}
        </a>
    </div>
</div>
