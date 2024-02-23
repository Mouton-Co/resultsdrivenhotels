<div class="flex w-full items-center justify-center bg-[#f7f5f5]">
    <div class="flex w-full max-w-[1200px] flex-col items-center justify-center py-12 sm:py-24">
        <h1 class="text-wrap sm:text-nowrap font-nunito w-fit px-12 text-center text-4xl font-normal
        tracking-[3.5px] text-offblack sm:text-5xl">
            {{ __('LATEST NEWS') }}
        </h1>
        <div class="bg-gold my-5 h-[1px] w-[125px]"></div>
        <p class="text-md font-nunito mb-14 max-w-[600px] px-12 text-center font-extralight text-offgray sm:text-lg">
            {{ __("Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's") }}
        </p>
        <div class="w-full px-8 sm:px-12">
            <div class="swiper h-[500px] w-full" id="cards-carousel">

                {{-- slides --}}
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="swiper-slide">
                            <div class="flex h-full w-full items-center justify-center">
                                <x-block.card :label="'January 1, 2022'" :title="'PRESS RELEASE EXAMPLE'"
                                :description="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                                aspernatur ex natus cumque veritatis, quo voluptatum, quasi, dignissimos odio
                                laboriosam commodi error obcaecati quidem. Perspiciatis ex labore ducimus qui
                                suscipit! Cupiditate tempora qui aspernatur laborum nam incidunt? Quas, blanditiis
                                atque?'" :image="asset('images/news/press-release-example/featured-image.jpeg')"
                                :href="Route::has('news.press-release-example')
                                    ? route('news.press-release-example')
                                    : '#'" :linkLabel="'Read more...'" />
                            </div>
                        </div>
                    @endfor
                </div>

                {{-- bullets --}}
                <div class="swiper-pagination bullets-grey bullets-10px"></div>

            </div>
        </div>
    </div>
</div>
