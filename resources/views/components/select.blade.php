@props(['label', 'id', 'options' => []])

<div class="group">
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
    <select id="{{ $id }}" wire:model.lazy="{{ $attributes->wire('model')->value() }}"
        {{ $attributes->except('wire:model') }}
        class="block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-200 focus:ring-2 bg-white/90">
        <option value="">Selecione</option>
        @foreach ($options as $opt)
            <option value="{{ $opt->id }}">{{ $opt->descricao }}</option>
        @endforeach
    </select>
    @error($attributes->wire('model')->value())
        <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
    @enderror
</div>
