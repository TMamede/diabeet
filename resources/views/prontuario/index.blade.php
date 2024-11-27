<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Prontuário') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <livewire:prontuarios.search-prontuario />
    </div>
</x-app-layout>
