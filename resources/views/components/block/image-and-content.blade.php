<div class="{{ $imageRight ?? false ? 'xl:flex-row-reverse' : 'xl:flex-row' }} flex w-full flex-col items-center
justify-center xl:h-[600px]">

    {{-- image --}}
    <div class="h-72 w-full bg-cover bg-center bg-no-repeat md:h-96 xl:h-full xl:w-1/2"
        style="background-image: url('{{ asset($image ?? '') }}');"></div>

    {{-- content --}}
    <div class="w-full px-6 py-12 xl:w-1/2 2xl:px-24">
        {{ $slot }}
    </div>

</div>
