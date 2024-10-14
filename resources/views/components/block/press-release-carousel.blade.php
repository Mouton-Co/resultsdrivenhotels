<div class="flex w-full items-center justify-center bg-[#f7f5f5]">
    <div class="flex w-full max-w-[1200px] flex-col items-center justify-center py-12 sm:py-24">
        <h1
            class="text-wrap sm:text-nowrap font-nunito text-offblack w-fit whitespace-nowrap px-12 text-center text-3xl font-normal tracking-[3.5px] sm:text-4xl">
            {{ __('LATEST NEWS') }}
        </h1>
        <div class="bg-gold my-5 h-[1px] w-[125px]"></div>
        <p class="text-md font-nunito text-offgrey mb-14 max-w-[600px] px-12 text-center font-extralight sm:text-lg">
            {{ __('Discover the latest updates and insights in the world of hospitality.') }}
        </p>
        <div class="w-full px-8 sm:px-12">
            <div
                class="swiper h-[500px] w-full"
                id="cards-carousel"
            >

                {{-- slides --}}
                <div class="swiper-wrapper">
                    @foreach ($newsArticles->getItems() as $newsArticle)
                        <div class="swiper-slide">
                            <div class="flex h-full w-full items-center justify-center">
                                <x-block.card
                                    :label="$newsArticle->getSystemProperties()->jsonSerialize()['updatedAt']->format('d F Y') ?? ''"
                                    :title="$newsArticle->getTitle() ?? ''"
                                    :description="$newsArticle->getExcerpt() ?? ''"
                                    :image="$newsArticle->getFeaturedImage()?->getFile()?->getUrl() ?? ''"
                                    :href="route('news.show', $newsArticle->getSlug())"
                                    :linkLabel="'Read more...'"
                                />
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- bullets --}}
                <div class="swiper-pagination bullets-grey bullets-10px"></div>

            </div>
        </div>
        <a
            class="bg-gold font-merriweather max-w-64 hover:bg-offblack group mt-14 flex h-14 w-full items-center justify-center gap-3 text-sm text-white shadow transition-all duration-300"
            href="{{ route('news.index') }}"
        >
            {{ 'View all' }}
            <x-icon.arrow-thin class="h-7 w-7 transition-all duration-300 group-hover:translate-x-3" />
        </a>
    </div>
</div>
