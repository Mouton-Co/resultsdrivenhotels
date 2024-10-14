<x-app-layout>
    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">

        <x-block.standard-header :title="'PRESS RELEASES'"
        :background="'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),' .
        'url(' .
        asset('images/headers/press-release.jpeg') .
        ')'" />

        <div class="flex w-full items-center justify-center px-6 py-12 md:px-12">
            <div class="grid w-full max-w-screen-xl grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($entries as $entry)
                    <div class="flex h-[500px] w-full items-center justify-center">
                        <x-block.card
                            :label="$entry->getSystemProperties()->jsonSerialize()['updatedAt']->format('d F Y') ?? ''"
                            :title="$entry->getTitle() ?? ''"
                            :description="$entry->getExcerpt() ?? ''"
                            :image="$entry->getFeaturedImage()?->getFile()?->getUrl() ?? ''"
                            :href="route('news.show', $entry->getSlug())"
                        />
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</x-app-layout>
