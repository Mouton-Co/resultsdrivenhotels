@section('head')
    @vite(['resources/js/homepage-header.js', 'resources/js/dropdowns.js'])
@endsection

<x-app-layout>
    <x-block.homepage-header />
</x-app-layout>
