@php
    $color = !empty($active) && $active ? 'text-gold' : 'text-[#f5f5f5]';
@endphp

<a
    {{ $attributes->merge([
        'class' => "cursor-pointer px-3 text-[14px] $color transition-all duration-300 hover:ml-3
            hover:text-gold text-nowrap whitespace-nowrap",
    ]) }}>
    {{ $slot }}
</a>
