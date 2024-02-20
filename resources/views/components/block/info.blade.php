<div class="flex w-full max-w-[1100px] items-center justify-center gap-24 px-12 py-12 sm:py-24">
    <img class="smaller-than-1200:hidden h-36 w-36" src="{{ asset($image ?? '') }}"
    alt="No image found">
    <div class="flex flex-col items-center">
        <div class="mb-6 flex w-full flex-col items-center justify-start gap-6 sm:flex-row">
            <h1 class="text-wrap sm:text-nowrap w-fit text-center text-3xl font-thin tracking-[3.5px] text-[#1e1e1e]
            sm:text-left sm:text-4xl">
                {{ $title ?? '' }}
            </h1>
            <div class="bg-gold h-[1px] w-5/6 sm:w-1/6"></div>
        </div>
        <p class="text-md text-center text-[#999999] sm:text-left sm:text-lg">
            {{ $description ?? '' }}
        </p>
        <a class="font-merriweather italic text-md text-gold text-center hover:underline sm:self-start sm:text-left
        sm:text-lg" href="{{ Route::has($link) ? route($link) : '#' }}">
            {{ $linkLabel ?? '' }}
        </a>
    </div>
</div>
