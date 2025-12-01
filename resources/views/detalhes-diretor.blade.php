<x-base-layout>

    <div class="max-w-4xl mx-auto px-4 py-10 sm:px-6 lg:px-8">
        
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-2">
            Detalhes do Diretor(a)
        </h1>
        <p class="text-3xl font-semibold text-green-600 dark:text-green-400 mb-8">
            {{ $diretor->name }}
        </p>

        <div class="bg-white dark:bg-neutral-800 shadow overflow-hidden sm:rounded-lg p-6 border border-gray-200 dark:border-neutral-700">
            
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                
                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500 dark:text-neutral-400">
                        Descrição / Filmes Notáveis
                    </dt>
                    <dd class="mt-1 text-lg text-gray-900 dark:text-white">
                        {{ $diretor->descricao ?? 'Nenhuma descrição disponível.' }}
                    </dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500 dark:text-neutral-400">
                        Nacionalidade ID
                    </dt>
                    <dd class="mt-1 text-gray-900 dark:text-white">
                        {{ $diretor->nacionalidade_id }}
                    </dd>
                </div>
                
            </dl>
        </div>

        <div class="mt-8">
            <a href="{{ route('diretores.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                &larr; Voltar para a Lista de Diretores
            </a>
        </div>
    </div>

</x-base-layout>