<div class="flex h-full w-full max-w-[346px] flex-col items-center justify-center bg-white shadow">

    {{-- image --}}
    <a class="h-[45%] w-full bg-cover bg-center bg-no-repeat transition-all duration-300 hover:brightness-50"
        href="{{ $href ?? '#' }}" style="background-image: url('{{ $image ?? '' }}');">
    </a>

    {{-- content --}}
    <div class="flex h-[55%] w-full flex-col items-start justify-between px-8 py-10">
        @if (!empty($label))
            <span class="font-merriweather text-sm italic text-[#c5c5c5]">
                {{ $label }}
            </span>
        @endif
        @if (!empty($title))
            <a class="hover:text-gold font-nunito text-base font-medium tracking-[1.6px] text-offblack
            transition-all duration-300" href="{{ $href ?? '#' }}">
                {{ $title }}
            </a>
        @endif

        <div class="h-[1px] w-[60px] bg-offblack"></div>
        @if (!empty($description))
            <p class="font-nunito line-clamp-4 text-sm font-extralight leading-6 text-offgrey">
                {{ $description }}
            </p>
        @endif
        @if (!empty($linkLabel))
            <a class="font-merriweather text-md text-gold italic hover:underline" href="{{ $href ?? '#' }}">
                {{ $linkLabel }}
            </a>
        @endif
    </div>

</div>
