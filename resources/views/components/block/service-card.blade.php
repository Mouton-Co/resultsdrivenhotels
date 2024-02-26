<div class="max-w-56 w-full">

    {{-- image and title --}}
    <div class="relative aspect-square w-full border border-white bg-cover bg-center bg-no-repeat shadow"
        style="background-image: url('{{ asset($image ?? '') }}');">
        <div class="bg-logogreen border-offgrey absolute bottom-0 left-1/2 w-11/12 -translate-x-1/2 translate-y-1/3
        border py-2 shadow">
            <h1 class="text-center text-[#dadeda]">
                {{ $title ?? '' }}
            </h1>
        </div>
    </div>

    {{-- description --}}
    <p class="text-offgrey my-6 px-3 text-center text-sm">
        {{ $description ?? '' }}
    </p>

</div>
