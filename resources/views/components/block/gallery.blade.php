<div class="flex w-full items-center justify-center px-6 py-12 md:px-12">
    <div class="grid w-full max-w-screen-xl grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($images as $image)
            <div class="aspect-square w-full">
                <img class="h-full w-full object-cover"
                    src="{{ asset('images/galleries/weddings/' . $image->getRelativePathname()) }}" alt="No image found"
                    loading="lazy">
            </div>
        @endforeach
    </div>
</div>
