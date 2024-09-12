<div class="bg-offblack flex flex-col items-center justify-center px-8 pb-1 text-offlightgrey">
    <div class="flex w-full max-w-screen-xl flex-col-reverse justify-center gap-8 py-12 sm:flex-row sm:gap-16 sm:py-20
    lg:py-24">

        {{-- contact us --}}
        <div class="flex w-full flex-col items-center justify-center gap-3">
            <h1 class="text-offwhite text-xl">
                {{ __('CONTACT US') }}
            </h1>
            <div class="flex max-w-fit flex-col">
                <a class="hover:text-gold flex items-center gap-2" href="mailto:info@resultsdrivenhotels.com">
                    <x-icon.email class="h-5 w-5" />
                    {{ __('info@resultsdrivenhotels.com') }}
                </a>
                <a class="hover:text-gold flex items-start gap-2" href="https://maps.app.goo.gl/cvoYnXovfk6WPP9y7"
                    target="_blank">
                    <x-icon.pin class="h-5 w-5 translate-x-[1px] translate-y-[3px]" />
                    {{ __('12 Krige Rd, Stellenbosch Central,') }}
                    <br>
                    {{ __('Stellenbosch, 7600') }}
                </a>
            </div>
            <div class="w-full flex justify-center items-center gap-6">
                <a href="#" target="_blank">
                    <x-icon.facebook class="hover:text-gold h-5 w-5" />
                </a>
                <a href="#" target="_blank">
                    <x-icon.instagram class="hover:text-gold h-5 w-5" />
                </a>
                <a href="#" target="_blank">
                    <x-icon.linkedin class="hover:text-gold h-5 w-5" />
                </a>
            </div>
        </div>

        {{-- logo description --}}
        <div class="w-full">
            <img class="sm:-translate-y-[20px]" src="{{ asset('images/logos/logo-full-green.png') }}"
                alt="No image found">
            <p class="hidden text-center sm:block">
                {{ __("Established in 2022, we take pride in curating unforgettable moments for our guests,
                offering a portfolio of distinctive 4-star properties nestled in the captivating landscapes of
                the Western Cape, South Africa.") }}
            </p>
        </div>

        {{-- payment options --}}
        <div class="hidden w-full flex-col items-center justify-center gap-3 lg:flex">
            <h1 class="text-offwhite text-xl">
                {{ __('PAYMENT OPTIONS') }}
            </h1>
            <div class="flex max-w-fit translate-x-3 flex-col">
                <span class="flex items-center gap-2">
                    <x-icon.visa class="hover:text-gold h-5 w-5" />
                    {{ __('Visa Card') }}
                </span>
                <span class="flex items-center gap-2">
                    <x-icon.paypal class="hover:text-gold h-5 w-5" />
                    {{ __('PayPal') }}
                </span>
                <span class="flex items-center gap-2">
                    <x-icon.amex class="hover:text-gold h-5 w-5" />
                    {{ __('American Express') }}
                </span>
                <span class="flex items-center gap-2">
                    <x-icon.visa-electron class="hover:text-gold h-5 w-5" />
                    {{ __('Visa Electron') }}
                </span>
                <span class="flex items-center gap-2">
                    <x-icon.mastercard class="hover:text-gold h-5 w-5" />
                    {{ __('Mastercard') }}
                </span>
            </div>
        </div>
    </div>
    <span class="text-center text-[10px]">
        {{ __('© ALL RIGHTS RESERVED RESULTS DRIVEN HOSPITALITY SERVICES 2024 | MADE BY MOUTON CO') }}
    </span>
</div>
