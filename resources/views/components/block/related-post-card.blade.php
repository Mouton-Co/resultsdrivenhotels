<a
    class="max-w-56 group w-full"
    href="{{ route('news.show', $slug ?? '') }}"
>

    {{-- image and title --}}
    <div class="relative mb-5 aspect-square w-full border border-white bg-cover bg-center bg-no-repeat shadow">
        <div class="absolute left-0 top-0 h-full w-full overflow-hidden">
            <img
                class="h-full w-full object-cover transition-all duration-300 group-hover:scale-125 group-hover:brightness-75"
                src="{{ $image ?? '' }}"
                alt="featured"
            >
        </div>
        <div
            class="bg-logogreen border-offgrey absolute bottom-0 left-1/2 w-11/12 -translate-x-1/2 translate-y-1/3 border py-2 shadow">
            <h1 class="group-hover:text-lightgold text-center text-[#dadeda]">
                {{ $title ?? '' }}
            </h1>
        </div>
    </div>

    {{-- date --}}
    <div class="flex w-full justify-center">
        <span class="text-gold text-center text-sm tracking-widest">
            {{ $date ?? '' }}
        </span>
    </div>

    {{-- description --}}
    <p class="text-offgrey mb-6 px-3 text-center text-sm">
        {{ $description ?? '' }}
    </p>

</a>
