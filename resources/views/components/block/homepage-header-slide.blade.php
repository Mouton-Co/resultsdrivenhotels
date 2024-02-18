<div
    {{ $attributes->merge([
        'class' =>
            'flex h-full w-full flex-col items-center justify-center gap-12 bg-cover bg-center bg-no-repeat
            text-center px-6',
    ]) }}>
    {{ $slot }}
</div>
