<div class="flex w-full items-center justify-center px-0 sm:px-12">

    <div class="relative flex w-full max-w-screen-xl flex-col-reverse items-center justify-end sm:flex-row shadow">

        {{-- image --}}
        <div class="absolute left-0 top-0 hidden h-full w-1/3 bg-cover bg-center bg-no-repeat md:block"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url('{{ asset('images/general/map-cape-town.jpg') }}');">
        </div>

        {{-- text --}}
        <div class="bg-offblack h-full w-full px-12 pb-6 pt-6 sm:pt-20 md:w-2/3">
            <div class="mb-6 flex flex-col items-center justify-center gap-6 sm:hidden">
                <h1 class="text-3xl text-white text-center">
                    {{ __('WHERE WE STARTED') }}
                </h1>
                <div class="bg-gold h-[1px] w-11/12"></div>
            </div>
            <p class="text-offgrey text-center sm:text-left pl-0 sm:pl-6 md:pl-0">
                {{
                    __('Our journey began with a passion for hospitality and a commitment to crafting spaces where
                    every detail is thoughtfully designed to provide unparalleled comfort and joy. From a charming
                    24-bedroom hotel in Stellenbosch to a tranquil guest house in Hermanus, and a picturesque guest
                    farm with cottages in the beautiful town of Franschhoek, to the contemporary self-catering units
                    in Blouberg - each property reflects our dedication to creating unique havens that transcend the
                    ordinary.')
                }}
            </p>
        </div>

        {{-- heading --}}
        <div class="absolute left-0 top-6 hidden w-full items-center justify-start gap-3 tracking-widest sm:left-12
        sm:flex md:left-[22%]">
            <h1 class="text-3xl text-white sm:text-4xl">
                {{ __('WHERE WE STARTED') }}
            </h1>
            <div class="bg-gold h-[1px] w-[10%]"></div>
        </div>

    </div>

</div>
