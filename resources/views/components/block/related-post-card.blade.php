<a class="max-w-56 w-full group" href="{{ route('news.show', $slug ?? '') }}">

    {{-- image and title --}}
    <div class="relative aspect-square w-full border border-white bg-cover bg-center bg-no-repeat shadow mb-5">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
            <img class="w-full h-full object-cover transition-all duration-300 group-hover:scale-125
            group-hover:brightness-75"
            src="{{ $image ?? '' }}" alt="No image found">
        </div>
        <div class="bg-logogreen border-offgrey absolute bottom-0 left-1/2 w-11/12 -translate-x-1/2 translate-y-1/3
        border py-2 shadow">
            <h1 class="text-center text-[#dadeda] group-hover:text-lightgold">
                {{ $title ?? '' }}
            </h1>
        </div>
    </div>

    {{-- date --}}
    <div class="w-full flex justify-center">
        <span class="text-gold text-sm tracking-widest text-center">
            {{ $date ?? '' }}
        </span>
    </div>

    {{-- description --}}
    <p class="text-offgrey mb-6 px-3 text-center text-sm">
        {{ $description ?? '' }}
    </p>

</a>
