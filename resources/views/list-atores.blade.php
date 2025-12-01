<x-base-layout>

    <div class="max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Nossos Atores</h1>
    </div>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($atores as $ator)

            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl dark:border-neutral-700 dark:shadow-neutral-700/70">
                
                <div class="h-52 flex flex-col justify-center items-center bg-gray-200 rounded-t-xl dark:bg-neutral-700">
                    <svg class="size-28 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                        Ator(a)
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:hover:text-white">
                        {{ $ator->name }}
                    </h3>
                    <p class="mt-3 text-gray-500 dark:text-neutral-500">
                        {{-- CORRIGIDO: Usando 'descricao' e removendo Str::limit para evitar erro fatal. --}}
                        {{ $ator->descricao ?? 'Nenhuma descrição disponível.' }}
                    </p>
                </div>

                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-b-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    href="{{ route('detalhes-ator', $ator) }}">
                    Ver detalhes
                    </a>
                </div>
            </div>
            @endforeach

        </div>
        </div>
    </x-base-layout>