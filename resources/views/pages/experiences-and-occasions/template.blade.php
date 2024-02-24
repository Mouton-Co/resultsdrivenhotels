<x-app-layout>
    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">
        
        <x-block.standard-header
            :title="$title ?? 'Gallery'"
            :background="
                'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),'.
                'url('.$headerImage ?? ''.')'
            "
        />
        
        <x-block.gallery
            :images="$images ?? []"
        />

    </div>
</x-app-layout>
