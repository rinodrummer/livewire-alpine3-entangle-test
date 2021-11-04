@props([
    'id' => null,
    'maxWidth' => null,
    'height' => 'auto',
])

<x-jet-custom-modal :id="$id" :maxWidth="$maxWidth" :height="$height" {{ $attributes }}>
    <div class="px-6 py-4 overflow-auto" style="max-height: 80vh">
        @if (isset($title))
            <div class="text-lg">
                {{ $title }}
            </div>
        @endif

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    @if (isset($footer))
        <div class="px-6 py-4 bg-gray-100 text-right rounded-b">
            {{ $footer }}
        </div>
    @endif
</x-jet-custom-modal>
