<div class="mb-12 mt-12 flex w-full flex-col items-center justify-center">

    {{-- black our services section --}}
    <div class="bg-offblack flex w-full max-w-screen-lg flex-col items-center justify-center px-12">
        <div class="flex items-center justify-center gap-6 py-6 md:w-full md:justify-start">
            <div class="bg-gold hidden h-[1px] w-20 md:block"></div>
            <h1 class="text-offwhite text-center text-3xl font-normal tracking-[3.5px] sm:text-4xl">
                {{ __('OUR SERVICES') }}
            </h1>
        </div>
        <div class="bg-gold mb-6 h-[1px] w-full md:hidden"></div>
        <p class="text-offgrey mb-24 text-center text-sm md:pl-12 md:text-left md:text-base">
            {{ __("At ResultsDriven Hospitality Services, our comprehensive management servicesencompass every facet
            of hospitality excellence:") }}
        </p>
    </div>

    {{-- carousel --}}
    <div class="w-full max-w-screen-lg -translate-y-16 px-12">
        <div class="swiper w-full" id="services-carousel">

            {{-- slides --}}
            <div class="swiper-wrapper w-full">
                @foreach (config('our-services') as $service)
                    <div class="swiper-slide w-full">
                        <div class="flex w-full flex-col items-center justify-center">
                            <x-block.service-card
                                :title="$service['title']"
                                :description="$service['description']"
                                :image="$service['image']"
                            />
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- bullets --}}
            <div class="swiper-pagination bullets-grey"></div>
        </div>
    </div>

    <div class="text-offblack max-w-screen-lg -translate-y-12 px-6 text-center text-sm md:text-base">
        <p class="mb-5">
            {{ __("As we embark on this journey, we invite you to experience a world where luxury is reimagined, and
            meaningful connections are forged. Join us in creating memories that linger long after check-out, as we
            pave the way for a new era of hospitality excellence.") }}
        </p>
        <p class="mb-5">
            {{ __("Welcome to Results Driven Hospitality Services - where hospitality becomes an art, and every stay
            tells a story.") }}
        </p>
        <p>
            {{ __("Contact us to learn more about our services and how we can collaborate to elevate your property
            into a realm of distinction and success.") }}
        </p>
    </div>

</div>
