<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Questionário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="w-full">
                    <livewire:questionarios.show-questionario />
                </div>
            </div>
        </div>        
    </div>
</x-app-layout>