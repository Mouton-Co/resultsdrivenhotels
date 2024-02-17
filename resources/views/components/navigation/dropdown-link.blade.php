<a
    {{ $attributes->merge([
        'class' => 'cursor-pointer px-3 text-[14px] text-[#D2D1D2] transition-all duration-300 hover:ml-3
            hover:text-gold text-nowrap',
    ]) }}>
    {{ $slot }}
</a>
