<x-app-layout>
    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">

        {{-- header --}}
        <x-block.standard-header
            :title="'Contact Us'"
            :background="'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),' .
            'url(' . asset('images/headers/contact-us.png') . ')'"
        />

        {{-- contact us --}}
        <div class="mx-auto flex max-w-screen-xl flex-col-reverse gap-6 px-6 py-24 sm:grid sm:grid-cols-2 md:gap-12
        md:px-12">
            <div class="flex h-full w-full flex-col justify-center">
                <h1 class="text-offblack mb-6 w-full text-center text-3xl sm:text-left sm:text-4xl">
                    {{ __('CONTACT US') }}
                </h1>
                <p class="text-offgrey mb-6 w-full pl-6 text-center text-sm sm:text-left sm:text-base">
                    {{
                        __("We're here to help! Whether you have questions, feedback, or just want to say hello, we'd
                        love to hear from you. Feel free to reach out to us via Whatsapp, email or a phone call. We
                        strive to respond promptly to all inquiries and look forward to assisting you.")
                    }}
                </p>
                <h1 class="text-offblack mb-6 w-full text-center text-xl sm:text-left sm:text-2xl">
                    {{ __('CONNECT WITH US') }}
                </h1>
                <p class="text-grey w-full pl-6 text-center text-sm font-extralight opacity-50 sm:text-left
                sm:text-base">
                    {{ __('lina@resultsdrivenhotels.com') }}
                </p>
                <p class="text-grey w-full pl-6 text-center text-sm font-extralight opacity-50 sm:text-left
                sm:text-base">
                    {{ __('12 Krige Rd, Stellenbosch Central, Stellenbosch, 7600') }}
                </p>
                <p class="text-grey mb-3 w-full pl-6 text-center text-sm font-extralight opacity-50 sm:text-left
                sm:text-base">
                    {{ __('+27 84 556 0205') }}
                </p>
                <div class="text-offblack flex w-full justify-center gap-3 pl-6 sm:justify-start">
                    <a href="#">
                        <x-icon.facebook class="hover:text-gold h-6" />
                    </a>
                    <a href="#">
                        <x-icon.instagram class="hover:text-gold h-6" />
                    </a>
                    <a href="#">
                        <x-icon.linkedin class="hover:text-gold h-6" />
                    </a>
                </div>
            </div>
            <div>
                <img class="h-full w-full object-cover object-center shadow-lg" alt="contact us"
                    src="{{ asset('images/general/woman-with-phone.png') }}">
            </div>
        </div>

    </div>
</x-app-layout>
