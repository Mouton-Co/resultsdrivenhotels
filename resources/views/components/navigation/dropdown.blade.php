<div
    {{ $attributes->merge([
        'class' => 'absolute left-0 top-[70px] flex w-auto flex-col gap-3 bg-[#1e1e1e] pl-4 pr-16
            transition-all duration-500 overflow-hidden -translate-x-[1.5rem]',
    ]) }}>
    {{ $slot }}
</div>
