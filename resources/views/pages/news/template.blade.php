@section('head')
    @vite(['resources/js/related-posts.js'])
@endsection

<x-app-layout>
    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">
        
        {{-- header --}}
        <x-block.standard-header :title="'News'"
        :background="'url(' .
        asset('images/headers/news.png') .
        ')'" />

        {{-- press release --}}
        <div class="w-full max-w-screen-xl px-12 flex flex-col items-center py-12">
            {{-- featured image --}}
            <div class="w-full mb-4">
                <img class="w-full object-cover object-center" src="{{ $article['image'] }}" alt="featured image">
            </div>
            {{-- publish date --}}
            <span class="w-full text-gold text-sm sm:text-base tracking-widest mb-12">
                {{ $article['date'] }}
            </span>
            {{-- heading --}}
            <h1 class="text-3xl sm:text-4xl uppercase w-full font-extralight text-offblack">
                {{ $article['title'] }}
            </h1>
            {{-- bar --}}
            <div class="w-full">
                <div class="w-40 h-[1px] bg-gold mt-4 mb-6"></div>
            </div>
            {{-- content --}}
            <div class="richtext mb-12">
                {!! $article['content'] !!}
            </div>
            {{-- heading --}}
            <h1 class="text-3xl sm:text-4xl uppercase w-full font-extralight text-offblack">
                {{ __("Related posts") }}
            </h1>
            {{-- bar --}}
            <div class="w-full mb-6">
                <div class="w-40 h-[1px] bg-gold mt-4 mb-6"></div>
            </div>

            {{-- related posts carousel --}}
            <div class="w-full max-w-screen-lg">
                <div class="swiper w-full" id="related-posts-carousel">

                    {{-- slides --}}
                    <div class="swiper-wrapper w-full">
                        @foreach ($article['relatedPosts'] as $relatedPost)
                            <div class="swiper-slide w-full">
                                <div class="flex w-full flex-col items-center justify-center">
                                    <x-block.related-post-card
                                        :title="$relatedPost['title']"
                                        :slug="$relatedPost['slug']"
                                        :description="$relatedPost['excerpt']"
                                        :image="$relatedPost['image']"
                                        :date="$relatedPost['date']"
                                    />
                                </div>
                            </div>
                        @endforeach
                    </div>
        
                    {{-- bullets --}}
                    <div class="swiper-pagination bullets-grey"></div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
