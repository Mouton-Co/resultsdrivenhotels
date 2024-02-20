{{-- info bar --}}
<nav class="fixed top-0 z-10 flex h-[34px] w-full items-center justify-between bg-offblack pl-[5.5%] pr-[10%]
smaller-than-730:justify-end" aria-label="information-bar">
    {{-- contact information --}}
    <div class="flex w-fit items-center gap-3 smaller-than-730:hidden">
        <a class="flex h-full items-center gap-2 text-[12px] text-[#555555] transition-all duration-300
        hover:text-[#f5f5f5]"
            href="mailto:info@resultsdrivenhotels.com" target="_blank">
            <x-icon.email class="h-4 w-4" />
            <span>
                {{ __('info@resultsdrivenhotels.com') }}
            </span>
        </a>
        <span class="text-[#555555]">{{ __('|') }}</span>
        <a class="flex h-full items-center gap-2 text-[12px] text-[#555555] transition-all duration-300
        hover:text-[#f5f5f5]"
            href="https://maps.app.goo.gl/cvoYnXovfk6WPP9y7" target="_blank">
            <x-icon.pin class="h-4 w-4" />
            <span>
                {{ __('12 Krige Rd, Stellenbosch Central, Stellenbosch, 7600') }}
            </span>
        </a>
    </div>

    {{-- socials --}}
    <div class="flex w-fit items-center gap-4">
        <a href="#">
            <x-icon.facebook class="h-6 text-[#555555] hover:text-[#f5f5f5]" />
        </a>
        <a href="#">
            <x-icon.instagram class="h-6 text-[#555555] hover:text-[#f5f5f5]" />
        </a>
        <a href="#">
            <x-icon.linkedin class="h-6 text-[#555555] hover:text-[#f5f5f5]" />
        </a>
    </div>
</nav>

{{-- navbar --}}
<nav class="fixed top-[34px] z-10 flex h-[70px] w-full items-center justify-between bg-[#333132] pl-[5%] pr-[10%]"
    aria-label="navigation-bar">

    {{-- logo left --}}
    <a class="flex h-full w-fit items-center justify-between" href="{{ route('homepage') }}">
        <img class="h-[55px]" src="{{ asset('images/logos/logo-icon-green.png') }}" alt="No image found">
        <span class="flex h-full items-center smaller-than-1450:hidden">
            <span class="ml-2 font-akshar text-[21px] -tracking-[0.51px] text-offwhite">
                {{ __('RESULTS DRIVEN') }}
            </span>
            <span class="ml-1 -translate-y-[1px] font-abel text-[18px] -tracking-[0.32px] text-offwhite">
                {{ __('HOSPITALITY SERVICES') }}
            </span>
        </span>
    </a>

    {{-- nav links --}}
    <div class="flex h-full items-center gap-6 smaller-than-1060:hidden">
        <x-navigation.label class="relative" id="accomodation-link">
            {{ __('ACCOMODATION') }}
            <x-navigation.dropdown id="accomodation-dropdown" style="height: 0px;">
                <x-navigation.dropdown-link class="pt-5" href="https://hotelkrige.co.za/" target="_blank">
                    {{ __('Hotel Krige') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link href="https://www.38onwestcliff.co.za/" target="_blank">
                    {{ __('38 on Westcliff') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link class="pb-5" href="https://www.themanhattanoncoral.co.za/"
                    target="_blank">
                    {{ __('The Manhattan on Coral') }}
                </x-navigation.dropdown-link>
            </x-navigation.dropdown>
        </x-navigation.label>
        <x-navigation.label class="relative" id="brewery-link">
            {{ __('RESTAURANTS AND BREWERY') }}
            <x-navigation.dropdown id="brewery-dropdown" style="height: 0px;">
                <x-navigation.dropdown-link class="pt-5" href="https://franschhoekbeerco.co.za/" target="_blank">
                    {{ __('The Franchoek Beer Company') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link class="pb-5" href="https://franks-corner.com/" target="_blank">
                    {{ __('Franks Corner') }}
                </x-navigation.dropdown-link>
            </x-navigation.dropdown>
        </x-navigation.label>
        <x-navigation.label class="relative" id="experiences-link">
            {{ __('EXPERIECES AND OCCASIONS') }}
            <x-navigation.dropdown id="experiences-dropdown" style="height: 0px;">
                <x-navigation.dropdown-link class="pt-5" href="{{ route('experiences-and-occasions.weddings') }}">
                    {{ __('Weddings') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link href="{{ route('experiences-and-occasions.celebrations') }}">
                    {{ __('Celebrations') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link href="{{ route('experiences-and-occasions.honeymoons') }}">
                    {{ __('Honeymoons') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link href="{{ route('experiences-and-occasions.meetings-and-events') }}">
                    {{ __('Meetings & Events') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link href="{{ route('experiences-and-occasions.family-experiences') }}">
                    {{ __('Family Experiences') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link href="{{ route('experiences-and-occasions.exclusive-takeovers') }}">
                    {{ __('Exclusive Takeovers') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link class="pb-5" href="{{ route('experiences-and-occasions.incentives') }}">
                    {{ __('Incentives') }}
                </x-navigation.dropdown-link>
            </x-navigation.dropdown>
        </x-navigation.label>
        <x-navigation.link href="{{ route('gallery') }}">
            {{ __('GALLERY') }}
        </x-navigation.link>
        <x-navigation.link href="{{ route('about-us') }}">
            {{ __('ABOUT US') }}
        </x-navigation.link>
        <x-navigation.link href="{{ route('contact-us') }}">
            {{ __('CONTACT US') }}
        </x-navigation.link>
    </div>

    {{-- mobile menu button --}}
    <div class="hidden smaller-than-1060:flex">
        <x-icon.menu class="h-7 w-7 cursor-pointer text-[#f5f5f5] hover:text-gold" id="mobile-menu-open" />
    </div>
</nav>

{{-- mobile menu --}}
<nav class="fixed right-0 top-0 z-50 flex h-full basis-0 flex-col overflow-scroll bg-black py-[55px] transition-all
duration-500" id="mobile-menu" aria-label="mobile-menu" style="width: 0px;">
    {{-- close button --}}
    <div class="mb-[44px] flex w-full justify-start pl-[46px]">
        <x-icon.close class="h-7 w-7 cursor-pointer text-[#f5f5f5] hover:text-gold" id="mobile-menu-close" />
    </div>
    {{-- links --}}
    <x-navigation.mobile-label id="accomodation-link-mobile">
        <x-icon.home class="h-5 w-5" />
        {{ __('ACCOMODATION') }}
    </x-navigation.mobile-label>
    <div class="w-full shrink-0 overflow-hidden pl-[55px] transition-all duration-500" id="accomodation-dropdown-mobile"
        aria-hidden="true" style="height: 0px;">
        <x-navigation.mobile-link class="mt-[34px]" href="https://hotelkrige.co.za/" target="_blank">
            {{ __('Hotel Krige') }}
        </x-navigation.mobile-link>
        <x-navigation.mobile-link class="mt-[34px]" href="https://www.38onwestcliff.co.za/" target="_blank">
            {{ __('38 on Westcliff') }}
        </x-navigation.mobile-link>
        <x-navigation.mobile-link class="mt-[34px]" href="https://www.themanhattanoncoral.co.za/" target="_blank">
            {{ __('The Manhattan on Coral') }}
        </x-navigation.mobile-link>
    </div>
    <x-navigation.mobile-label class="mt-[36px]" id="brewery-link-mobile">
        <x-icon.wineglass class="h-5 w-5" />
        {{ __('RESTAURANTS AND BREWERY') }}
    </x-navigation.mobile-label>
    <div class="w-full shrink-0 overflow-hidden pl-[55px] transition-all duration-500" id="brewery-dropdown-mobile"
        aria-hidden="true" style="height: 0px">
        <x-navigation.mobile-link class="mt-[34px]" href="https://franschhoekbeerco.co.za/" target="_blank">
            {{ __('The Franchoek Beer Company') }}
        </x-navigation.mobile-link>
        <x-navigation.mobile-link class="mt-[34px]" href="https://franks-corner.com/" target="_blank">
            {{ __('Franks Corner') }}
        </x-navigation.mobile-link>
    </div>
    <x-navigation.mobile-label class="mt-[36px]" id="experiences-link-mobile">
        <x-icon.wineglasses class="h-5 w-5" />
        {{ __('EXPERIECES AND OCCASIONS') }}
    </x-navigation.mobile-label>
    <div class="w-full shrink-0 overflow-hidden pl-[55px] transition-all duration-500"
        id="experiences-dropdown-mobile" aria-hidden="true" style="height: 0px">
        <x-navigation.mobile-link class="mt-[34px]" href="{{ route('experiences-and-occasions.weddings') }}">
            {{ __('Weddings') }}
        </x-navigation.mobile-link>
        <x-navigation.mobile-link class="mt-[34px]" href="{{ route('experiences-and-occasions.celebrations') }}">
            {{ __('Celebrations') }}
        </x-navigation.mobile-link>
        <x-navigation.mobile-link class="mt-[34px]" href="{{ route('experiences-and-occasions.honeymoons') }}">
            {{ __('Honeymoons') }}
        </x-navigation.mobile-link>
        <x-navigation.mobile-link class="mt-[34px]"
            href="{{ route('experiences-and-occasions.meetings-and-events') }}">
            {{ __('Meetings & Events') }}
        </x-navigation.mobile-link>
        <x-navigation.mobile-link class="mt-[34px]"
            href="{{ route('experiences-and-occasions.family-experiences') }}">
            {{ __('Family Experiences') }}
        </x-navigation.mobile-link>
        <x-navigation.mobile-link class="mt-[34px]"
            href="{{ route('experiences-and-occasions.exclusive-takeovers') }}">
            {{ __('Exclusive Takeovers') }}
        </x-navigation.mobile-link>
        <x-navigation.mobile-link class="mt-[34px]" href="{{ route('experiences-and-occasions.incentives') }}">
            {{ __('Incentives') }}
        </x-navigation.mobile-link>
    </div>
    <x-navigation.mobile-link class="mt-[36px]" href="{{ route('gallery') }}">
        <x-icon.gallery class="h-5 w-5" />
        {{ __('GALLERY') }}
    </x-navigation.mobile-link>
    <x-navigation.mobile-link class="mt-[36px]" href="{{ route('about-us') }}">
        <x-icon.info class="h-5 w-5" />
        {{ __('ABOUT US') }}
    </x-navigation.mobile-link>
    <x-navigation.mobile-link class="mt-[36px]" href="{{ route('contact-us') }}">
        <x-icon.phone class="h-5 w-5" />
        {{ __('CONTACT US') }}
    </x-navigation.mobile-link>
</nav>
