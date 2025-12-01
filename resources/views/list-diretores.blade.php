<x-base-layout>

    <div class="max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Nossos Diretores</h1>
    </div>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($diretores as $diretor)

            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl dark:border-neutral-700 dark:shadow-neutral-700/70">
                
                <div class="h-52 flex flex-col justify-center items-center bg-green-200 rounded-t-xl dark:bg-neutral-700">
                    {{-- Ícone de Diretor --}}
                    <svg class="size-28 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M11.5 2.25a.75.75 0 01.75.75v3.25H21a.75.75 0 01.75.75v6a.75.75 0 01-1.5 0V7.5H12.25v3.25a.75.75 0 01-1.5 0V7.5H3a.75.75 0 01-.75-.75V6a.75.75 0 01.75-.75h8.5V3a.75.75 0 01.75-.75zM12 14.25a.75.75 0 01.75.75v5.25a.75.75 0 01-1.5 0v-5.25a.75.75 0 01.75-.75zM18 17.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0v-2.25a.75.75 0 01.75-.75zM6 17.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0v-2.25a.75.75 0 01.75-.75z" />
                    </svg>
                </div>
                
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-green-600 dark:text-green-500">
                        Diretor(a)
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:hover:text-white">
                        {{ $diretor->name }}
                    </h3>
                    <p class="mt-3 text-gray-500 dark:text-neutral-500">
                        {{-- Usando a coluna 'descricao' --}}
                        {{ $diretor->descricao ?? 'Nenhuma descrição disponível.' }}
                    </p>
                </div>

                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-b-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                   href="{{ route('detalhes-diretor', $diretor) }}">
                    Ver detalhes
                    </a>
                </div>
            </div>
            @endforeach

        </div>
        </div>
    </x-base-layout>