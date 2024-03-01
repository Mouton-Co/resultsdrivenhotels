@section('head')
    @vite(['resources/js/homepage-header.js', 'resources/js/dropdowns.js', 'resources/js/cards-carousel.js'])
@endsection

<x-app-layout>
    {{-- 100vh carousel with book now block --}}
    <x-block.homepage-header />

    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">

        {{-- info block --}}
        <x-block.info
            :title="'LUXURY MEETS EXCEPTIONAL'"
            :description="'Welcome to Results Driven Hospitality Services, where luxury meets exceptional experiences.
            Established in 2022, we take pride in curating unforgettable moments for our guests, offering a portfolio
            of distinctive 4-star properties nestled in the captivating landscapes of the Western Cape, South Africa.'"
            :image="'images/logos/logo-icon-green.png'"
            :link="'about-us'"
            :linkLabel="'Read more...'"
        />

        {{-- accomodation carousel --}}
        <x-block.accommodation-carousel />

        {{-- brewery image and content --}}
        <x-block.image-and-content :image="'images/general/food.jpeg'">
            <span class="font-merriweather text-gold text-sm italic">
                {{ __('Culinary Journeys') }}
            </span>
            <h1 class="text-offblack relative mt-3 max-w-fit pr-24 text-3xl tracking-widest sm:pr-32">
                {{ __('RESTAURANTS AND BREWERY') }}
                <span class="bg-gold -translate-1/2 absolute right-0 top-1/2 h-[1px] w-24"></span>
            </h1>
            <p class="text-offgrey mt-6 w-full font-extralight leading-6 sm:pr-24 md:pr-48 md:text-lg">
                {{
                    __("Cape Town, known for its stunning landscapes and vibrant culture, also boasts a culinary scene
                    that's as diverse and exciting as the city itself. From trendy bistros to cozy cafes and innovative
                    breweries, there's something to delight every palate.")
                }}
            </p>
            <div class="mt-6 flex w-full flex-col items-center justify-center gap-3 sm:flex-row md:justify-start">
                <div class="brewery-book-now-dropdown text-offgrey md:max-w-80 relative flex h-14 w-full
                cursor-pointer items-center justify-between gap-6 border border-offlightgrey px-5 py-4 shadow
                transition-all duration-300" id="brewery-book-now-dropdown">
                    <span class="brewery-book-now-dropdown" id="brewery-book-now-dropdown-selected">
                        {{ __('The Franchoek Beer Company') }}
                    </span>
                    <x-icon.arrow class="brewery-book-now-dropdown h-5 w-5" />
                    <div class="brewery-book-now-dropdown absolute left-0 z-10 hidden w-full flex-col items-start
                    justify-center gap-4 border border-offlightgrey bg-white px-4" aria-hidden="true"
                    id="brewery-book-now-dropdown-options" style="top: 97.5px;">
                        <span class="brewery-book-now-dropdown-option hover:text-gold mt-4">
                            {{ __('The Franchoek Beer Company') }}
                        </span>
                        <span class="brewery-book-now-dropdown-option hover:text-gold mb-4">
                            {{ __('Franks Corner') }}
                        </span>
                    </div>
                </div>
                <a class="bg-gold font-merriweather md:max-w-64 hover:bg-offblack flex h-14 w-full items-center
                justify-center text-sm text-white shadow transition-all duration-300" id="brewery-book-now-button"
                href="https://book.nightsbridge.com/31851" target="_blank">
                    {{ __('BOOK NOW') }}
                </a>
            </div>
        </x-block.image-and-content>

        {{-- brewery image and content --}}
        <x-block.image-and-content :image="'images/general/wedding_at_frank.png'" :imageRight="true">
            <span class="font-merriweather text-gold text-sm italic">
                {{ __('Memorable adventures') }}
            </span>
            <h1 class="text-offblack relative mt-3 max-w-fit pr-24 text-3xl tracking-widest sm:pr-32">
                {{ __('EXPERIENCES AND OCCASIONS') }}
                <span class="bg-gold -translate-1/2 absolute right-0 top-1/2 h-[1px] w-24"></span>
            </h1>
            <p class="text-offgrey mt-6 w-full font-extralight leading-6 sm:pr-24 md:pr-48 md:text-lg">
                {{
                    __("Amidst the stunning vistas of the Western Cape, Results Driven Hospitality Services is
                    dedicated to crafting unparalleled experiences and unforgettable occasions for visitors worldwide.
                    From the enchanting vineyards of Stellenbosch to the idyllic shores of Cape Town's pristine beaches,
                    every corner of this region beckons with boundless opportunities for exploration and celebration.")
                }}
            </p>
        </x-block.image-and-content>

        {{-- accomodation carousel --}}
        <x-block.press-release-carousel />

        {{-- view offers block --}}
        <x-block.signature-block
            :heading="'SPECIAL OFFERS'"
            :description="'Discover exclusive offers for our hotels and restaurants. Featuring enticing room packages
            and dining discounts, there\'s something for every occasion. Whether you\'re planning a romantic escape,
            family retreat, or business journey, these special deals ensure an unforgettable experience.'"
            :ctaLabel="'VIEW OFFERS'"
            :ctaLink="Route::has('offers') ? route('offers') : '#'"
        />

    </div>
</x-app-layout>
