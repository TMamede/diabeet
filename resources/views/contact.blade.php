<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-5 text-3xl font-bold leading-tight text-gray-800">
            {{ __('Contato') }}
        </h2>
    </x-slot>

    <div class="py-0 ">
        <livewire:contatos.create-contato />
    </div>
</x-app-layout>