@php
    $color = !empty($active) && $active ? 'text-gold' : 'text-[#f5f5f5]';
@endphp

<a
    {{ $attributes->merge([
        'class' => "text-[14px] $color font-normal hover:text-offlightgrey cursor-pointer transition-all
        duration-300",
    ]) }}>
    {{ $slot }}
</a>
