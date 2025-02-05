<x-filament-panels::page>
    <div class="flex gap-2 mb-4">
        @foreach ($nominees as $nominee)
            <x-filament::button wire:click="setNominee({{ $nominee->id }})">
                {{ $nominee->name }}
            </x-filament::button>
        @endforeach
    </div>
    {{ $this->table }}
</x-filament-panels::page>
