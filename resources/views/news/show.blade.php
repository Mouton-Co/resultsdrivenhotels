@section('head')
    @vite(['resources/js/related-posts.js'])
@endsection

<x-app-layout>
    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">

        {{-- header --}}
        <x-block.standard-header
            :title="'News'"
            :background="'url(' . asset('images/headers/news.png') . ')'"
        />

        {{-- press release --}}
        <div class="flex w-full max-w-screen-xl flex-col items-center px-12 py-12">
            @if (!empty($entry?->getFeaturedImage()?->getFile()?->getUrl()))
                {{-- featured image --}}
                <div class="mb-4 w-full">
                    <img
                        class="w-full object-cover object-center"
                        src="{{ $entry->getFeaturedImage()->getFile()->getUrl() ?? '' }}"
                        alt="featured"
                    >
                </div>
            @endif
            {{-- publish date --}}
            <span class="text-gold mb-12 w-full text-sm tracking-widest sm:text-base">
                {{ $entry->getSystemProperties()->jsonSerialize()['updatedAt']->format('d F Y') ?? '' }}
            </span>
            {{-- heading --}}
            <h1 class="text-offblack w-full text-3xl font-extralight uppercase sm:text-4xl">
                {{ $entry->getTitle() ?? '' }}
            </h1>
            {{-- bar --}}
            <div class="w-full">
                <div class="bg-gold mb-6 mt-4 h-[1px] w-40"></div>
            </div>
            {{-- content --}}
            <div class="richtext mb-12">
                {!! $renderer->render($entry->getContent()) !!}
            </div>

            @if (!empty($entry->getRelatedArticles()))
                {{-- heading --}}
                <h1 class="text-offblack w-full text-3xl font-extralight uppercase sm:text-4xl">
                    {{ __('Related posts') }}
                </h1>
                {{-- bar --}}
                <div class="mb-6 w-full">
                    <div class="bg-gold mb-6 mt-4 h-[1px] w-40"></div>
                </div>
                {{-- related posts carousel --}}
                <div class="w-full max-w-screen-lg">
                    <div
                        class="swiper w-full"
                        id="related-posts-carousel"
                    >

                        {{-- slides --}}
                        <div class="swiper-wrapper w-full">
                            @foreach ($entry->getRelatedArticles() as $relatedArticle)
                                <div class="swiper-slide w-full">
                                    <div class="flex w-full flex-col items-center justify-center">
                                        <x-block.related-post-card
                                            :title="$relatedArticle->getTitle() ?? ''"
                                            :slug="$relatedArticle->getSlug() ?? ''"
                                            :description="$relatedArticle->getExcerpt() ?? ''"
                                            :image="$relatedArticle->getFeaturedImage()?->getFile()?->getUrl() ?? ''"
                                            :date="$relatedArticle
                                                ->getSystemProperties()
                                                ->jsonSerialize()
                                                ['updatedAt']->format('d F Y') ?? ''"
                                        />
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- bullets --}}
                        <div class="swiper-pagination bullets-grey"></div>
                    </div>
                </div>
            @endif
        </div>

    </div>
</x-app-layout>
