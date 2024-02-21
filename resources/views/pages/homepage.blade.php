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
            :description="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos aspernatur ex natus cumque
            veritatis, quo voluptatum, quasi, dignissimos odio laboriosam commodi error obcaecati quidem. Perspiciatis
            ex labore ducimus qui suscipit! Cupiditate tempora qui aspernatur laborum nam incidunt? Quas, blanditiis
            atque?'"
            :image="'images/logos/rdhs-informal-logo.png'"
            :link="'about-us'"
            :linkLabel="'Read more...'"
        />

        {{-- accomodation carousel --}}
        <x-block.accommodation-carousel />

        {{-- brewery image and content --}}
        <x-block.image-and-content :image="'images/general/main-home-img-5.jpg'">
            <span class="font-merriweather text-gold text-sm italic">
                {{ __('Winelands') }}
            </span>
            <h1 class="text-offblack relative mt-3 max-w-fit pr-24 text-3xl tracking-widest sm:pr-32">
                {{ __('RESTAURANTS AND BREWERY') }}
                <span class="bg-gold -translate-1/2 absolute right-0 top-1/2 h-[1px] w-24"></span>
            </h1>
            <p class="text-offgray mt-6 w-full font-extralight leading-6 sm:pr-24 md:pr-48 md:text-lg">
                {{
                    __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit sed reprehenderit, consectetur
                    facilis alias, perspiciatis ipsam libero minus veritatis corporis quam ab error non illum vero
                    pariatur illo voluptatibus modi qui esse cupiditate, tenetur debitis consequuntur! Iste distinctio
                    voluptatibus eius!')
                }}
            </p>
            <div class="mt-6 flex w-full flex-col items-center justify-center gap-3 sm:flex-row md:justify-start">
                <div class="brewery-book-now-dropdown text-offgray md:max-w-80 relative flex h-14 w-full
                cursor-pointer items-center justify-between gap-6 border border-[#555555] px-5 py-4 shadow
                transition-all duration-300" id="brewery-book-now-dropdown">
                    <span class="brewery-book-now-dropdown" id="brewery-book-now-dropdown-selected">
                        {{ __('The Franchoek Beer Company') }}
                    </span>
                    <x-icon.arrow class="brewery-book-now-dropdown h-5 w-5" />
                    <div class="brewery-book-now-dropdown absolute left-0 z-10 hidden w-full flex-col items-start
                    justify-center gap-4 border border-[#555555] bg-white px-4" aria-hidden="true"
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
        <x-block.image-and-content :image="'images/general/main-home-img-6.jpg'" :imageRight="true">
            <span class="font-merriweather text-gold text-sm italic">
                {{ __('Winelands') }}
            </span>
            <h1 class="text-offblack relative mt-3 max-w-fit pr-24 text-3xl tracking-widest sm:pr-32">
                {{ __('EXPERIENCES AND OCCASIONS') }}
                <span class="bg-gold -translate-1/2 absolute right-0 top-1/2 h-[1px] w-24"></span>
            </h1>
            <p class="text-offgray mt-6 w-full font-extralight leading-6 sm:pr-24 md:pr-48 md:text-lg">
                {{
                    __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit sed reprehenderit, consectetur
                    facilis alias, perspiciatis ipsam libero minus veritatis corporis quam ab error non illum vero
                    pariatur illo voluptatibus modi qui esse cupiditate, tenetur debitis consequuntur! Iste distinctio
                    voluptatibus eius!')
                }}
            </p>
        </x-block.image-and-content>

        {{-- view offers block --}}
        <x-block.signature-block
            :heading="'PAY TO STAY'"
            :description="'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi fuga architecto dolorum
            autem voluptatem expedita totam modi quos error aut corrupti eum voluptate vero consequatur deleniti
            corporis, dolor incidunt, unde dolorem. Inventore ullam natus, quibusdam iure quidem, iste fuga accusantium
            impedit est commodi error molestias nulla quod vero magni illo.'"
            :ctaLabel="'VIEW OFFERS'"
            :ctaLink="Route::has('offers') ? route('offers') : '#'"
        />

    </div>
</x-app-layout>
