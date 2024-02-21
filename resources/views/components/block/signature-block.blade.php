<div class="flex w-full flex-col items-center justify-center gap-6 bg-cover bg-center bg-no-repeat px-6 py-24 sm:py-36"
    style="background-image: url('{{ asset('images/general/main-home-background-img-5.jpg') }}');">
    <h1 class="text-offblack text-center text-3xl tracking-widest md:text-4xl">
        {{ $heading ?? '' }}
    </h1>
    <div class="bg-gold h-[1px] w-24"></div>
    <p class="text-offgray max-w-[54rem] text-center text-lg font-extralight leading-6 tracking-widest">
        {{ $description ?? '' }}
    </p>
    <a class="bg-gold font-merriweather mt-3 max-w-64 hover:bg-offblack group flex h-14 w-full items-center
    justify-center gap-3 text-sm text-white shadow transition-all duration-300"
    id="brewery-book-now-button" href="{{ $ctaLink ?? '#' }}">
        {{ $ctaLabel ?? '' }}
        <x-icon.arrow-thin class="h-7 w-7 transition-all duration-300 group-hover:translate-x-3" />
    </a>
</div>
