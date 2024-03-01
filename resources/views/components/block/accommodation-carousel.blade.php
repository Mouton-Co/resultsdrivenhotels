<div class="flex w-full items-center justify-center bg-[#f7f5f5]">
    <div class="flex w-full max-w-[1200px] flex-col items-center justify-center py-12 sm:py-24">
        <h1 class="text-wrap font-nunito w-full text-center text-3xl font-normal
        tracking-[3.5px] text-offblack sm:text-4xl">
            {{ __('ACCOMODATION & RESTAURANS') }}
        </h1>
        <div class="bg-gold my-5 h-[1px] w-[125px]"></div>
        <p class="text-md font-nunito mb-14 max-w-[600px] px-12 text-center font-extralight text-offgrey sm:text-lg">
            {{ __("Unforgettable Accommodations and Exquisite Dining for Every Palate.") }}
        </p>
        <div class="w-full px-8 sm:px-12">
            <div class="swiper h-[500px] w-full" id="cards-carousel">

                {{-- slides --}}
                <div class="swiper-wrapper">
                    @foreach (config('accommodation-and-restourants') as $card)
                        <div class="swiper-slide">
                            <div class="flex h-full w-full items-center justify-center">
                                <x-block.card
                                    :title="$card['title']"
                                    :description="$card['description']"
                                    :image="asset($card['image'])"
                                    :href="$card['link']"
                                    :linkLabel="'Read more...'" />
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- bullets --}}
                <div class="swiper-pagination bullets-grey bullets-10px"></div>

            </div>
        </div>
    </div>
</div>
