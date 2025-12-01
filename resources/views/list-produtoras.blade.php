<x-base-layout>

    <div class="max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Nossas Produtoras</h1>
    </div>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($produtoras as $produtora)

            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl dark:border-neutral-700 dark:shadow-neutral-700/70">
                
                <div class="h-52 flex flex-col justify-center items-center bg-yellow-500 rounded-t-xl">
                    {{-- Ícone de Câmera/Filme --}}
                    <svg class="size-28 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.555-4.555A.75.75 0 0121 6v12a.75.75 0 01-1.445.445L15 14m-1.5-4a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>
                
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-yellow-600 dark:text-yellow-500">
                        Produtora
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:hover:text-white">
                        {{ $produtora->name }}
                    </h3>
                    <p class="mt-3 text-gray-500 dark:text-neutral-500">
                        {{-- Pode adicionar uma descrição se a tabela 'produtoras' tiver uma coluna 'descricao' --}}
                        {{-- Caso contrário, use este espaço para mostrar o nome. --}}
                        Produtora responsável por grandes sucessos cinematográficos.
                    </p>
                </div>

                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-b-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    href="{{ route('detalhes-produtora', $produtora) }}"
                    >Ver detalhes
                    </a>
                </div>
            </div>
            @endforeach

        </div>
        </div>

</x-base-layout>