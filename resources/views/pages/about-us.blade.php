@section('head')
    @vite(['resources/js/our-services.js'])
@endsection

<x-app-layout>
    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">
        
        {{-- header --}}
        <x-block.standard-header :title="'About Us'"
        :background="'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),' .
        'url(' .
        asset('images/general/city-shot.jpeg') .
        ')'" />

        {{-- luxury meets exceptional --}}
        <x-block.info
            :title="'LUXURY MEETS EXCEPTIONAL'"
            :description="'Welcome to Results Driven Hospitality Services, where luxury meets exceptional experiences.
            Established in 2022, we take pride in curating unforgettable moments for our guests, offering a portfolio
            of distinctive 4-star properties nestled in the captivating landscapes of the Western Cape, South Africa.'"
            :image="'images/logos/logo-icon-green.png'"
        />

        {{-- where we started --}}
        <x-block.where-we-started />

        {{-- what we strive for --}}
        <x-block.info
            :title="'WHAT WE STRIVE FOR'"
            :description="'As we expand our reach beyond the Western Cape, our vision remains steadfast: to be an
            internationally recognized hotel and property management brand that redefines luxury for discerning
            travellers and multigenerational families seeking exclusive getaways.'"
        />

        {{-- why choose us --}}
        <x-block.why-choose-us />

        {{-- timeline --}}
        <x-block.timeline />

        {{-- our services --}}
        <x-block.our-services />

    </div>
</x-app-layout>
