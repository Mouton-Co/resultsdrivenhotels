<nav class="fixed top-0 flex h-[34px] w-full items-center justify-between bg-[#1e1e1e] pl-[5.5%] pr-[10%]
    smaller-than-730:justify-end" aria-label="information-bar">
    {{-- contact information --}}
    <div class="flex w-fit items-center gap-3 smaller-than-730:hidden">
        <a class="flex h-full items-center gap-2 text-[12px] text-[#555555] hover:text-[#f5f5f5] transition-all
            duration-300" href="mailto:info@resultsdrivenhotels.com" target="_blank">
            <x-icon.email class="h-4 w-4" />
            <span>
                {{ __('info@resultsdrivenhotels.com') }}
            </span>
        </a>
        <span class="text-[#555555]">{{ __('|') }}</span>
        <a class="flex h-full items-center gap-2 text-[12px] text-[#555555] hover:text-[#f5f5f5] transition-all
        duration-300" href="https://maps.app.goo.gl/cvoYnXovfk6WPP9y7" target="_blank">
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

<nav class="fixed top-[34px] flex h-[70px] w-full items-center justify-between bg-[#333132] pl-[5%] pr-[10%]"
    aria-label="navigation-bar">

    {{-- logo left --}}
    <a class="flex h-full w-fit items-center justify-between" href="{{ route('homepage') }}">
        <img class="h-[55px]" src="{{ asset('images/logo-icon-green.png') }}" alt="No image found">
        <span class="flex h-full items-center smaller-than-1450:hidden">
            <span class="ml-2 font-akshar text-[21px] -tracking-[0.51px] text-white">
                {{ __('RESULTS DRIVEN') }}
            </span>
            <span class="ml-1 -translate-y-[1px] font-abel text-[18px] -tracking-[0.32px] text-white">
                {{ __('HOSPITALITY SERVICES') }}
            </span>
        </span>
    </a>

    {{-- nav links --}}
    <div class="flex h-full items-center gap-6 smaller-than-1060:hidden">
        <x-navigation.label id="accomodation-link" class="relative">
            {{ __('ACCOMODATION') }}
            <x-navigation.dropdown id="accomodation-dropdown" style="height: 0px;">
                <x-navigation.dropdown-link target="_blank" href="https://hotelkrige.co.za/" class="pt-5">
                    {{ __('Hotel Krige') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link target="_blank" href="https://www.38onwestcliff.co.za/">
                    {{ __('38 on Westcliff') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link target="_blank" href="https://www.themanhattanoncoral.co.za/" class="pb-5">
                    {{ __('Manhattanon Coral') }}
                </x-navigation.dropdown-link>
            </x-navigation.dropdown>
        </x-navigation.label>
        <x-navigation.label id="brewery-link" class="relative">
            {{ __('RESTAURANTS AND BREWERY') }}
            <x-navigation.dropdown id="brewery-dropdown" style="height: 0px;">
                <x-navigation.dropdown-link target="_blank" href="https://franschhoekbeerco.co.za/" class="pt-5">
                    {{ __('The Franchoek Beer Company') }}
                </x-navigation.dropdown-link>
                <x-navigation.dropdown-link target="_blank" href="https://franks-corner.com/" class="pb-5">
                    {{ __('Franks Corner') }}
                </x-navigation.dropdown-link>
            </x-navigation.dropdown>
        </x-navigation.label>
        <x-navigation.label id="experiences-link" class="relative">
            {{ __('EXPERIECES AND OCCASIONS') }}
            <x-navigation.dropdown id="experiences-dropdown" style="height: 0px;">
                <x-navigation.dropdown-link href="{{ route('experiences-and-occasions.weddings') }}" class="pt-5">
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
                <x-navigation.dropdown-link href="{{ route('experiences-and-occasions.incentives') }}" class="pb-5">
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
        <x-icon.menu class="h-7 w-7 cursor-pointer text-[#f5f5f5] hover:text-gold" />
    </div>
</nav>
