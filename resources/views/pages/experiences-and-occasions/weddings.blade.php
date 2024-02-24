<x-app-layout>
    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">
        
        <x-block.standard-header
            :title="__('Weddings')"
            :background="
                'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),'.
                'url('.asset('images/headers/weddings.jpeg').')'
            "
        />
        
        <x-block.gallery
            :folder="'weddings'"
        />

    </div>
</x-app-layout>
