@php
    $color = !empty($active) && $active ? 'text-gold' : 'text-[#f5f5f5]';
@endphp

<div
    {{ $attributes->merge([
        'class' => "text-[14px] $color font-normal hover:text-offlightgrey cursor-pointer h-full
            flex items-center",
    ]) }}>
    {{ $slot }}
</div>
