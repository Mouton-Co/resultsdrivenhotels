<script type="text/javascript">
    let rotation = {{ $rotation }};
</script>

<div class="flex h-[calc(100vh-104px)] w-full flex-col">
    {{-- Slider --}}
    <div class="swiper h-full w-full shrink" id="homepage-header-carousel">
        {{-- slides --}}
        <div class="swiper-wrapper">
            @foreach ($slides as $slide)
                <div class="swiper-slide">
                    <x-block.homepage-header-slide
                        style="background-image:
                        linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url('{{ $slide['image'] }}');">
                        <h1 class="font-viaoda text-5xl text-offwhite md:text-7xl">
                            {{ $slide['heading'] ?? '' }}
                        </h1>
                        <div class="h-[1px] w-[40%] rounded-full bg-gold md:w-[26%]"></div>
                        <p class="font-baskerville text-xl text-offwhite md:text-3xl">
                            {!! str_replace('\n', '<br>', $slide['description']) !!}
                        </p>
                    </x-block.homepage-header-slide>
                </div>
            @endforeach
        </div>

        {{-- arrows --}}
        <div class="swiper-button-next !hidden sm:!block !text-offwhite"></div>
        <div class="swiper-button-prev !hidden sm:!block !text-offwhite"></div>

        {{-- bullets --}}
        <div class="swiper-pagination bullets-offwhite"></div>
    </div>

    {{-- Book now bar --}}
    <div class="flex h-48 w-full shrink-0 flex-col flex-wrap items-center justify-center gap-6 bg-offblack px-12
    sm:h-36 sm:flex-row sm:px-0">
        {{-- Dropdown --}}
        <div class="book-now-dropdown relative flex w-full cursor-pointer items-center justify-between gap-6 border
        border-offlightgrey px-5 py-4 text-offgrey transition-all duration-300 sm:w-[360px]" id="book-now-dropdown">
            <span class="book-now-dropdown" id="book-now-dropdown-selected">{{ __('Hotel Krige') }}</span>
            <x-icon.arrow class="book-now-dropdown h-5 w-5" />
            {{-- Dropdown options --}}
            <div class="book-now-dropdown absolute left-0 z-10 hidden h-[257px] w-full flex-col items-start
            justify-center gap-4 border border-offlightgrey bg-offblack px-4" id="book-now-dropdown-options"
            aria-hidden="true" style="top: -257.5px;">
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
                    {{ __('The Franschhoek Beer Company') }}
                </span>
                <span class="book-now-dropdown-option hover:text-gold">
                    {{ __('Franks Corner') }}
                </span>
                <span class="book-now-dropdown-option mb-4 hover:text-gold">
                    {{ __('Franschhoek Homestead & Cottages') }}
                </span>
            </div>
        </div>

        {{-- Book now button --}}
        <a class="flex h-[56.5px] w-full items-center justify-center bg-gold font-merriweather text-sm
        text-white transition-all duration-300 hover:bg-offwhite hover:text-black sm:w-[200px]"
        id="book-now-button" href="https://book.nightsbridge.com/31851" target="_blank">
            {{ __('BOOK NOW') }}
        </a>
    </div>
</div>
