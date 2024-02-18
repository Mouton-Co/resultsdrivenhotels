<a
    {{ $attributes->merge([
        'class' => 'flex cursor-pointer items-center gap-[17px] px-[26px] text-sm font-normal text-[#f5f5f5]
            hover:text-gold text-nowrap',
    ]) }}>
    {{ $slot }}
</a>
