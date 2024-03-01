@php
    $color = !empty($active) && $active ? 'text-gold' : 'text-[#f5f5f5]';
@endphp

<div
    {{ $attributes->merge([
        'class' => "flex cursor-pointer items-center gap-[17px] px-[26px] text-sm font-normal $color
            hover:text-gold text-nowrap",
    ]) }}>
    {{ $slot }}
</div>
