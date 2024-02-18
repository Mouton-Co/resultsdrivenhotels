@section('head')
    @vite(['resources/js/homepage-header.js'])
@endsection

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
    <div class="h-36 w-full shrink-0 bg-[#1e1e1e]"></div>
</div>
