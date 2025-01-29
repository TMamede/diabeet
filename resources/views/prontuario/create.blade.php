<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Criar Prontuário') }}
        </h2>
    </x-slot>

    <div class="py-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow sm:p-8 sm:rounded-lg">
                
                    <livewire:prontuarios.create-prontuario />
                
            </div>
        </div>
    </div>
</x-app-layout>