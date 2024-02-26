<div class="mb-24 flex w-full items-center justify-center px-0 sm:px-12">

    <div class="relative flex w-full max-w-screen-xl flex-col-reverse items-center justify-end shadow
    sm:flex-row-reverse">

        {{-- image --}}
        <div class="absolute right-0 top-0 hidden h-full w-1/3 bg-cover bg-center bg-no-repeat md:block"
            style="background-image: url('{{ asset('images/general/creating-collage.png') }}');">
        </div>

        {{-- text --}}
        <div class="bg-logogreen flex h-full w-full flex-col items-center justify-center gap-6 px-12 py-12
        text-center md:w-2/3">
            <h1 class="text-3xl text-white sm:text-4xl">
                {{ __('WHERE WE STARTED') }}
            </h1>
            <div class="bg-gold block h-[1px] w-11/12 sm:hidden"></div>
            <div class="text-[#dadeda]">
                <p class="mb-3">
                    {{
                        __('With a wealth of experience in the hospitality industry, our journey from hotel management
                        experts to founders of a remarkable brand has been driven by our commitment to making meaningful
                        differences.')
                    }}
                </p>
                <p>
                    {{
                        __('Our approach is rooted in the belief that every touchpoint matters - from our dedicated
                        staff to our valued guests, property owners, and investors.')
                    }}
                </p>
            </div>
        </div>

    </div>

</div>
