<x-app-layout>
    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">

        <x-block.standard-header :title="'OFFERS'"
        :background="'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),' .
        'url(' .
        asset('images/headers/offers.jpeg') .
        ')'" />

        <div class="flex w-full items-center justify-center px-6 py-12 md:px-12">
            <div class="grid w-full max-w-screen-xl grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @for ($i = 0; $i < 12; $i++)
                    <div class="flex h-[500px] w-full items-center justify-center">
                        <x-block.card
                            :label="'January 1, 2022'"
                            :title="'PRESS RELEASE EXAMPLE'"
                            :description="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                            aspernatur ex natus cumque veritatis, quo voluptatum, quasi, dignissimos odio
                            laboriosam commodi error obcaecati quidem. Perspiciatis ex labore ducimus qui
                            suscipit! Cupiditate tempora qui aspernatur laborum nam incidunt? Quas, blanditiis
                            atque?'"
                            :image="asset('images/news/press-release-example/featured-image.jpeg')"
                            :href="Route::has('news.press-release-example')
                                ? route('news.press-release-example')
                                : '#'" :linkLabel="'Read more...'"
                        />
                    </div>
                @endfor
            </div>
        </div>

    </div>
</x-app-layout>
