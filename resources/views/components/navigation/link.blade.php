<a
    {{ $attributes->merge([
        'class' => 'text-[14px] text-[#f5f5f5] font-normal hover:text-[#555555] cursor-pointer transition-all
        duration-300',
    ]) }}>
    {{ $slot }}
</a>
