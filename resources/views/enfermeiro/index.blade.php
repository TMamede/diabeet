<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
                {{ __('Enfermeiro') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-1">
        <livewire:enfermeiros.show-enfermeiro />
    </div>
</x-app-layout>