<div x-data="{ step: @entangle('currentStep') }">
    <div x-show="step === 1" x-transition>
        @if ($currentStep == 1)
            <div class="step">
                <section class="p-1 mt-10">
                    <div class="max-w-screen-xl px-4 mx-auto lg:px-12">
                        <!-- Start coding here -->
                        <div class="relative mb-10 overflow-hidden bg-white shadow-md sm:rounded-lg">
                            <div class="flex items-center justify-between p-4 d">
                                <div class="flex">
                                    <div class="relative w-full">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input wire:model.live.debounce.300ms ="search" type="text"
                                            class="block w-full py-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg px-80 bg-gray-50 focus:ring-primary-500 focus:border-primary-500 "
                                            placeholder="Pesquise" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 ">
                                    <thead class="text-sm text-gray-700 uppercase bg-gray-50">
                                        <tr>
                                            @include('components.table-sortable-th', [
                                                'nome' => 'nome',
                                                'displayName' => 'NOME',
                                            ])
                                            <th scope="col" class="px-4 py-3">
                                                Prontuário
                                            </th>
                                            @include('components.table-sortable-th', [
                                                'nome' => 'data_nasc',
                                                'displayName' => 'NASCIMENTO',
                                            ])
                                            @include('components.table-sortable-th', [
                                                'nome' => 'user_name',
                                                'displayName' => 'ENFERMEIRO',
                                            ])
                                            @include('components.table-sortable-th', [
                                                'nome' => 'created_at',
                                                'displayName' => 'DATA DE CADASTRO',
                                            ])
                                            @include('components.table-sortable-th', [
                                                'nome' => 'updated_at',
                                                'displayName' => 'ÚLTIMA ATUALIZAÇÃO',
                                            ])
                                            <th scope="col" class="px-4 py-3">
                                                <span class="sr-only">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pacientes as $paciente)
                                            <tr wire:key="{{ $paciente->id }}" class="border-b">
                                                <th scope="row"
                                                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                                    {{ $paciente->nome }}</th>
                                                <td class="px-4 py-3">{{ $paciente->prontuario }}</td>
                                                <td class="px-4 py-3">
                                                    {{ \Carbon\Carbon::parse($paciente->data_nasc)->format('d-m-Y') }}
                                                </td>
                                                <td class="px-4 py-3 text-indigo-500">
                                                    {{ $paciente->user->name }}</td>
                                                <td class="px-4 py-3">{{ $paciente->created_at }}</td>
                                                <td class="px-4 py-3">{{ $paciente->updated_at }}</td>
                                                <td class="flex items-center justify-end px-4 py-3 mr-5">
                                                    <button
                                                        wire:click="nextStepAndSelectPaciente('{{ $paciente->id }}')"
                                                        class="px-6 py-2 text-white bg-indigo-900 rounded hover:bg-indigo-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        Alterar
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="px-3 py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center mb-3 space-x-4">
                                        <label class="w-40 p-1 text-sm font-medium text-gray-900">Por Página</label>
                                        <select wire:model.live='perPage'
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5">
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center ml-5">
                                        {{ $pacientes->links('vendor.pagination.tailwind') }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        @endif
    </div>
    <div x-show="step === 2" x-transition>
        @if ($currentStep == 2)
            <div class="step">
                <div class="flex">
                    <!-- Barra de Navegação -->
                    <nav class="left-0 flex w-64 min-h-screen p-6 bg-white">
                        <ul class="space-y-4">
                            <!-- Dados Sociodemográficos -->
                            <li>
                                <button wire:click="nextStepSecond"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span class="flex-1 text-left">Dados Sociodemográficos</span>
                                </button>
                            </li>

                            <!-- Histórico do Paciente -->
                            <li>
                                <button wire:click="nextStepThird"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                    </svg>
                                    <span class="flex-1 text-left">Histórico do Paciente</span>
                                </button>
                            </li>

                            <!-- Medicamentos -->
                            <li>
                                <button wire:click="nextStepFourth"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                    </svg>
                                    <span class="flex-1 text-left">Medicamentos</span>
                                </button>
                            </li>

                            <!-- Resultados -->
                            <li>
                                <button wire:click="nextStepFifth"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-indigo-500"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                    </svg>
                                    <span class="flex-1 text-left">Resultados</span>
                                </button>
                            </li>

                            <!-- Voltar -->
                            <li>
                                <button wire:click="nextStepFirst"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                    <span class="flex-1 text-left">Voltar</span>
                                </button>
                            </li>
                        </ul>
                    </nav>

                    <!-- Conteúdo da Página -->
                    <main class="flex-1 p-6 bg-stone-50">
                        <div class="flex flex-row justify-between w-full pr-36">
                            <div class="flex items-center">
                                <h2 class="pt-2 pb-4 text-5xl font-semibold text-indigo-900">{{ $nome }}</h2>
                            </div>
                            <div class="flex items-center ml-auto">
                                <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                    class="items-center w-40 px-5 py-2 text-white bg-teal-500 rounded-md shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                                    Salvar alterações
                                </button>
                            </div>
                        </div>
                        @if ($successMessage)
                            <div class="h-10 py-2 pl-3 mt-6 mb-4 text-green-600 bg-green-200 rounded-lg w-128">
                                {{ $successMessage }}
                            </div>
                        @endif

                        <h2 class="py-5 text-lg font-bold">Dados Sociodemográficos</h2>
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                            <div class="mb-4">
                                <label for="cpf" class="block font-medium text-gray-700">CPF</label>
                                <input type="text" wire:model="cpf" id="cpf"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o CPF">
                                @error('cpf')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block font-medium text-gray-700">Email</label>
                                <input type="email" wire:model="email" id="email"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o email">
                                @error('email')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="nome" class="block font-medium text-gray-700">Nome</label>
                                <input type="text" wire:model="nome" id="nome"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o nome">
                                @error('nome')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="prontuario" class="block font-medium text-gray-700">Prontuário</label>
                                <input type="text" wire:model="prontuario" id="prontuario"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o prontuário">
                                @error('prontuario')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="data_nasc" class="block font-medium text-gray-700">Data de
                                    Nascimento</label>
                                <input type="date" wire:model="data_nasc" id="data_nasc"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                @error('data_nasc')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="orientacao_sexual_id" class="block font-medium text-gray-700">Orientação
                                    Sexual</label>
                                <select wire:model="orientacao_sexual_id" id="orientacao_sexual_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($orientacoesSexuais as $orientacao)
                                        <option value="{{ $orientacao->id }}">{{ $orientacao->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('orientacao_sexual_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="estado_civil_id" class="block font-medium text-gray-700">Estado
                                    Civil</label>
                                <select wire:model="estado_civil_id" id="estado_civil_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($estadosCivis as $estado)
                                        <option value="{{ $estado->id }}">{{ $estado->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('estado_civil_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="etnia_id" class="block font-medium text-gray-700">Etnia</label>
                                <select wire:model="etnia_id" id="etnia_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($etnias as $etnia)
                                        <option value="{{ $etnia->id }}">{{ $etnia->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('etnia_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="cep" class="block font-medium text-gray-700">CEP</label>
                                <input type="text" wire:model="cep" id="cep"
                                    wire:keydown.enter="buscarEndereco"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o CEP">
                                @error('cep')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="rua" class="block font-medium text-gray-700">Rua</label>
                                <input type="text" wire:model="rua" id="rua"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a rua">
                                @error('rua')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="numero" class="block font-medium text-gray-700">Número</label>
                                <input type="number" wire:model="numero" id="numero"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o número">
                                @error('numero')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="bairro" class="block font-medium text-gray-700">Bairro</label>
                                <input type="text" wire:model="bairro" id="bairro"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o bairro">
                                @error('bairro')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="cidade" class="block font-medium text-gray-700">Cidade</label>
                                <input type="text" wire:model="cidade" id="cidade"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a cidade">
                                @error('cidade')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="uf" class="block font-medium text-gray-700">UF</label>
                                <input type="text" wire:model="uf" id="uf"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    maxlength="2" placeholder="Digite a UF">
                                @error('uf')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="ocupacao" class="block font-medium text-gray-700">Ocupação</label>
                                <input type="text" wire:model="ocupacao" id="ocupacao"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite a ocupação">
                                @error('ocupacao')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="renda_familiar" class="block font-medium text-gray-700">Renda
                                    Familiar</label>
                                <input type="number" wire:model="renda_familiar" id="renda_familiar"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    step="0.01" min="0" placeholder="Digite a renda familiar">
                                @error('renda_familiar')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="beneficio_id" class="block font-medium text-gray-700">Benefício</label>
                                <select wire:model="beneficio_id" id="beneficio_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($beneficios as $beneficio)
                                        <option value="{{ $beneficio->id }}">{{ $beneficio->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('beneficio_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="reside_id" class="block font-medium text-gray-700">Reside</label>
                                <select wire:model="reside_id" id="reside_id"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                    <option value="">Selecione</option>
                                    @foreach ($resides as $reside)
                                        <option value="{{ $reside->id }}">{{ $reside->descricao }}</option>
                                    @endforeach
                                </select>
                                @error('reside_id')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-6 ">
                                <label for="num_pss_casa" class="block font-medium text-gray-700">Número em
                                    Casa</label>
                                <input type="number" wire:model="num_pss_casa" id="num_pss_casa"
                                    class="block w-full mt-1 border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"
                                    placeholder="Digite o número em casa">
                                @error('num_pss_casa')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                    </main>
                </div>

            </div>

        @endif

    </div>
    <div x-show="step === 3" x-transition>
        @if ($currentStep == 3)
            <div class="step">
                <div class="flex">
                    <!-- Barra de Navegação -->
                    <nav class="left-0 flex w-64 min-h-screen p-6 bg-white">
                        <ul class="space-y-4">
                            <!-- Dados Sociodemográficos -->
                            <li>
                                <button wire:click="nextStepSecond"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span class="flex-1 text-left">Dados Sociodemográficos</span>
                                </button>
                            </li>

                            <!-- Histórico do Paciente -->
                            <li>
                                <button wire:click="nextStepThird"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                    </svg>
                                    <span class="flex-1 text-left">Histórico do Paciente</span>
                                </button>
                            </li>

                            <!-- Medicamentos -->
                            <li>
                                <button wire:click="nextStepFourth"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                    </svg>
                                    <span class="flex-1 text-left">Medicamentos</span>
                                </button>
                            </li>

                            <!-- Resultados -->
                            <li>
                                <button wire:click="nextStepFifth"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-indigo-500"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                    </svg>
                                    <span class="flex-1 text-left">Resultados</span>
                                </button>
                            </li>

                            <!-- Voltar -->
                            <li>
                                <button wire:click="nextStepFirst"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                    <span class="flex-1 text-left">Voltar</span>
                                </button>
                            </li>
                        </ul>
                    </nav>

                    <!-- Conteúdo da Página -->
                    <main class="flex-1 p-6 bg-stone-50">
                        <div class="flex flex-row justify-between w-full pr-36">
                            <div class="flex items-center">
                                <h2 class="pt-2 pb-4 text-5xl font-semibold text-indigo-900">{{ $nome }}</h2>
                                <!-- Botões de Navegação e Salvar -->

                            </div>
                            <div class="flex items-center">
                                <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                    class="items-center w-40 px-5 py-2 text-white bg-teal-500 rounded-md shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 ">
                                    Salvar alterações
                                </button>

                            </div>
                        </div>
                        @if ($successMessage)
                            <div class="h-10 py-2 pl-3 mt-6 mb-4 text-green-600 bg-green-200 rounded-lg w-128">
                                {{ $successMessage }}
                            </div>
                        @endif
                        <h2 class="py-5 text-lg font-bold">Histórico do Paciente</h2>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                            <div class="mb-6">
                                <label for="tipo_diabetes_id" class="block mb-2 font-medium text-gray-700">Tipo de
                                    Diabetes</label>
                                <select wire:model="tipo_diabetes_id" id="tipo_diabetes_id"
                                    class="block w-full p-2 border-gray-300 rounded-lg shadow-sm form-select focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="">Selecione</option>
                                    @foreach ($tipoDiabetes as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                                    @endforeach
                                </select>
                                @error('tipo_diabetes_id')
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Comorbidades -->


                            <div class="mb-6">
                                <label for="cirurgia_motivo" class="block mb-2 font-medium text-gray-700">Já realizaou
                                    alguma cirurgia? Se sim qual?</label>
                                <input type="text" wire:model="cirurgia_motivo" id="cirurgia_motivo"
                                    class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                                @error('cirurgia_motivo')
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="amputacao_onde" class="block mb-2 font-medium text-gray-700">Já realizaou
                                    amputação? Se sim onde?
                                    <input type="text" wire:model="amputacao_onde" id="amputacao_onde"
                                        class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                                    @error('amputacao_onde')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                            </div>

                            <div class="mb-6">
                                <label for="amputacao_quando" class="block mb-2 font-medium text-gray-700">Quando foi
                                    a Amputação?</label>
                                <input type="date" wire:model="amputacao_quando" id="amputacao_quando"
                                    class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                                @error('amputacao_quando')
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="n_cigarros" class="block mb-2 font-medium text-gray-700">Número de
                                    Cigarros
                                    Diários</label>
                                <input type="number" wire:model="n_cigarros" id="n_cigarros"
                                    class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500"
                                    min="0">
                                @error('n_cigarros')
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="inicio_tabagismo" class="block mb-2 font-medium text-gray-700">Início do
                                    Tabagismo</label>
                                <input type="date" wire:model="inicio_tabagismo" id="inicio_tabagismo"
                                    class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                                @error('inicio_tabagismo')
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="inicio_etilismo" class="block mb-2 font-medium text-gray-700">Início do
                                    Etilismo</label>
                                <input type="date" wire:model="inicio_etilismo" id="inicio_etilismo"
                                    class="block w-full border-gray-300 rounded-lg shadow-sm form-input focus:ring-indigo-500 focus:border-indigo-500">
                                @error('inicio_etilismo')
                                    <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="p-4">
                                <h2 class="mb-1 text-lg font-bold text-indigo-900">Comorbidades</h2>
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach ($comorbidadesList as $comorbidade)
                                        <div class="flex items-center ">
                                            <input type="checkbox" id="comorbidade_{{ $comorbidade->id }}"
                                                wire:model="comorbidades" value="{{ $comorbidade->id }}"
                                                class="mr-1.5 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                                                {{ in_array($comorbidade->id, $comorbidades) ? 'checked' : '' }}>
                                            <label for="comorbidade_{{ $comorbidade->id }}"
                                                class="text-sm">{{ $comorbidade->descricao }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="p-4">
                                <h2 class="mb-1 text-lg font-bold text-indigo-900">Alergias</h2>
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach ($alergiasList as $alergia)
                                        <div class="flex items-center mb-2">
                                            <input type="checkbox" id="alergia_{{ $alergia->id }}"
                                                wire:model="alergias" value="{{ $alergia->id }}" class="w-4 h-4 mr-2 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                                                {{ in_array($alergia->id, $alergias) ? 'checked' : '' }}>
                                            <label for="alergia_{{ $alergia->id }}"
                                                class="text-sm">{{ $alergia->descricao }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                </div>
            </div>
        @endif
    </div>
    <div x-show="step === 4" x-transition>
        @if ($currentStep == 4)
            <div class="step">
                <div class="flex">
                    <!-- Barra de Navegação -->
                    <nav class="left-0 flex w-64 min-h-screen p-6 bg-white">
                        <ul class="space-y-4">
                            <!-- Dados Sociodemográficos -->
                            <li>
                                <button wire:click="nextStepSecond"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span class="flex-1 text-left">Dados Sociodemográficos</span>
                                </button>
                            </li>

                            <!-- Histórico do Paciente -->
                            <li>
                                <button wire:click="nextStepThird"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                    </svg>
                                    <span class="flex-1 text-left">Histórico do Paciente</span>
                                </button>
                            </li>

                            <!-- Medicamentos -->
                            <li>
                                <button wire:click="nextStepFourth"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                    </svg>
                                    <span class="flex-1 text-left">Medicamentos</span>
                                </button>
                            </li>

                            <!-- Resultados -->
                            <li>
                                <button wire:click="nextStepFifth"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-indigo-500"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                    </svg>
                                    <span class="flex-1 text-left">Resultados</span>
                                </button>
                            </li>

                            <!-- Voltar -->
                            <li>
                                <button wire:click="nextStepFirst"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                    <span class="flex-1 text-left">Voltar</span>
                                </button>
                            </li>
                        </ul>
                    </nav>
                    <!-- Conteúdo da Página -->
                    <main class="flex-1 p-6 bg-stone-50">
                        <div class="flex flex-row justify-between w-full pr-36">
                            <div class="flex items-center">
                                <h2 class="pt-2 pb-4 text-5xl font-semibold text-indigo-900">{{ $nome }}</h2>
                                <!-- Botões de Navegação e Salvar -->

                            </div>
                            <div class="flex items-center">
                                <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                    class="items-center w-40 px-5 py-2 text-white bg-teal-500 rounded-md shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 ">
                                    Salvar alterações
                                </button>

                            </div>
                        </div>
                        @if ($successMessage)
                            <div class="h-10 py-2 pl-3 mt-6 mb-4 text-green-600 bg-green-200 rounded-lg w-128">
                                {{ $successMessage }}
                            </div>
                        @endif
                        <h2 class="py-5 text-lg font-bold">Medicamentos Usados</h2>

                        @foreach ($medicamentos as $index => $medicamento)
                            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                                <h3 class="mb-3 text-lg font-semibold">Medicamento {{ $index + 1 }}</h3>

                                <div class="mb-4">
                                    <label for="medicamentos.{{ $index }}.nome_generico"
                                        class="block text-sm font-medium text-gray-700">Nome Genérico</label>
                                    <input type="text" wire:model="medicamentos.{{ $index }}.nome_generico"
                                        id="medicamentos.{{ $index }}.nome_generico"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @error('medicamentos.' . $index . '.nome_generico')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="medicamentos.{{ $index }}.via_id"
                                        class="block mb-2 font-medium text-gray-700">Via</label>
                                    <select wire:model="medicamentos.{{ $index }}.via_id"
                                        id="medicamentos.{{ $index }}.via_id"
                                        class="block w-full p-2 border-gray-300 rounded-lg shadow-sm form-select focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="">Selecione</option>
                                        @foreach ($vias as $via)
                                            <option value="{{ $via->id }}">{{ $via->descricao }}</option>
                                        @endforeach
                                    </select>
                                    @error('medicamentos.' . $index . '.via_id')
                                        <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="medicamentos.{{ $index }}.dose"
                                        class="block text-sm font-medium text-gray-700">Dose</label>
                                    <input type="text" wire:model="medicamentos.{{ $index }}.dose"
                                        id="medicamentos.{{ $index }}.dose"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @error('medicamentos.' . $index . '.dose')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="button"
                                    wire:click="removeMedicamento({{ $index }}, {{ $IdPaciente }})"
                                    class="px-4 py-2 font-semibold text-white rounded-lg shadow-sm bg-rose-700 hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-rose-600 focus:ring-offset-2">
                                    Remover
                                </button>
                            </div>
                        @endforeach

                        <button type="button" wire:click="addMedicamento"
                            class="px-4 py-2 mb-4 font-semibold text-white bg-indigo-500 rounded-lg shadow-sm hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Adicionar Medicamento
                        </button>
                    </main>
                </div>
            </div>
        @endif
    </div>
    <div x-show="step === 5" x-transition>
        @if ($currentStep == 5)
            <div class="step">
                <div class="flex">
                    <!-- Barra de Navegação -->
                    <nav class="left-0 flex w-64 min-h-screen p-6 bg-white">
                        <ul class="space-y-4">
                            <!-- Dados Sociodemográficos -->
                            <li>
                                <button wire:click="nextStepSecond"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <span class="flex-1 text-left">Dados Sociodemográficos</span>
                                </button>
                            </li>

                            <!-- Histórico do Paciente -->
                            <li>
                                <button wire:click="nextStepThird"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                    </svg>
                                    <span class="flex-1 text-left">Histórico do Paciente</span>
                                </button>
                            </li>

                            <!-- Medicamentos -->
                            <li>
                                <button wire:click="nextStepFourth"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                    </svg>
                                    <span class="flex-1 text-left">Medicamentos</span>
                                </button>
                            </li>

                            <!-- Resultados -->
                            <li>
                                <button wire:click="nextStepFifth"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-indigo-500"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 7.5v9m6-9v9m-9-6h12M4.5 18.75h15a2.25 2.25 0 002.25-2.25v-9A2.25 2.25 0 0019.5 5.25h-15a2.25 2.25 0 00-2.25 2.25v9A2.25 2.25 0 004.5 18.75z" />
                                    </svg>
                                    <span class="flex-1 text-left">Resultados</span>
                                </button>
                            </li>

                            <!-- Voltar -->
                            <li>
                                <button wire:click="nextStepFirst"
                                    class="flex items-center justify-start w-full py-3 pl-1 pr-4 text-gray-800 transition duration-150 ease-in-out rounded-lg hover:bg-indigo-50 hover:text-indigo-700">
                                    <svg class="w-6 h-6 mr-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                    <span class="flex-1 text-left">Voltar</span>
                                </button>
                            </li>
                        </ul>
                    </nav>

                    <!-- Conteúdo da Página -->
                    <main class="flex-1 p-6 bg-stone-50">



                        <div class="flex items-center justify-between w-full pr-36">
                            <h2 class="pt-2 pb-4 text-5xl font-semibold text-indigo-900">{{ $nome }}</h2>
                            <div class="mt-8">
                                <button wire:click="updatePaciente('{{ $IdPaciente }}')"
                                    class="px-4 py-2 font-semibold text-white bg-teal-500 rounded-lg shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                                    Salvar alterações
                                </button>
                            </div>
                        </div>

                        <!-- Resultados Médicos Prévios -->
                        <h2 class="py-5 text-lg font-bold">Resultados Médicos Prévios</h2>

                        @foreach ($resultados as $index => $resultado)
                            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                                <h3 class="mb-3 text-lg font-semibold">Resultado {{ $index + 1 }}</h3>

                                <div class="mb-6">
                                    <label for="resultados.{{ $index }}.texto_resultado"
                                        class="block text-sm font-medium text-gray-700">Descrição</label>
                                    <textarea wire:model="resultados.{{ $index }}.texto_resultado"
                                        id="resultados.{{ $index }}.texto_resultado" rows="4"
                                        class="block w-full p-3 mt-1 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm resize-none form-textarea focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gray-50 hover:bg-white"></textarea>
                                    @error('resultados.' . $index . '.texto_resultado')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Botão de Remover Resultado -->
                                <button type="button"
                                    wire:click="removeResultado({{ $index }}, {{ $IdPaciente }})"
                                    class="px-4 py-2 font-semibold text-white rounded-lg shadow-sm bg-rose-700 hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-rose-600 focus:ring-offset-2">
                                    Remover
                                </button>
                            </div>
                        @endforeach

                        <!-- Botão de Adicionar Novo Resultado -->
                        <button type="button" wire:click="addResultado"
                            class="px-4 py-2 mt-1 mb-4 font-semibold text-white bg-indigo-500 rounded-lg shadow-sm hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Adicionar Resultado
                        </button>
                    </main>
                </div>
            </div>
        @endif
    </div>
</div>
