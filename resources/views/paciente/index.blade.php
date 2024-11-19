<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
                {{ __('Paciente') }}
            </h2>
            <a href="{{ route('paciente.create') }}"
                class="inline-flex items-center px-4 py-2 mr-4 text-white transition duration-300 bg-indigo-600 rounded-md shadow-md hover:bg-indigo-700">
                Cadastrar Paciente
            </a>
        </div>
    </x-slot>
    <div class="py-0 ">
        <livewire:pacientes.search-paciente />
        
    </div>
</x-app-layout>
