@section('head')
    @vite(['resources/js/homepage-header.js', 'resources/js/dropdowns.js', 'resources/js/cards-carousel.js'])
@endsection

<x-app-layout>
    {{-- 100vh carousel with book now block --}}
    <x-block.homepage-header />

    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">

        <x-block.info
            :title="'LUXURY MEETS EXCEPTIONAL'"
            :description="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos aspernatur ex natus
            cumque veritatis, quo voluptatum, quasi, dignissimos odio laboriosam commodi error obcaecati quidem.
            Perspiciatis ex labore ducimus qui suscipit! Cupiditate tempora qui aspernatur laborum nam incidunt?
            Quas, blanditiis atque?'"
            :image="'images/logos/rdhs-informal-logo.png'"
            :link="'about-us'"
            :linkLabel="'Read more...'"
        />

        <x-block.accommodation-carousel />

    </div>
</x-app-layout>
