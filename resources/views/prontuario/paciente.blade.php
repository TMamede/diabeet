<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Prontuários de ' . $paciente->nome) }}
        </h2>
    </x-slot>

    <div class="py-0">
        <livewire:prontuarios.search-prontuario :paciente="$paciente" />
    </div>
</x-app-layout>