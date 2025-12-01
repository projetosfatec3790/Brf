<x-base-layout>

    <div class="max-w-4xl mx-auto px-4 py-10 sm:px-6 lg:px-8">
        
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-2">
            Detalhes da Produtora
        </h1>
        <p class="text-3xl font-semibold text-yellow-600 dark:text-yellow-400 mb-8">
            {{ $produtora->name }}
        </p>

        <div class="bg-white dark:bg-neutral-800 shadow overflow-hidden sm:rounded-lg p-6 border border-gray-200 dark:border-neutral-700">
            
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                
                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500 dark:text-neutral-400">
                        Descrição
                    </dt>
                    {{-- Supondo que você pode adicionar uma descrição no seeder futuramente --}}
                    <dd class="mt-1 text-lg text-gray-900 dark:text-white">
                        Produtora de cinema e televisão de grande destaque.
                    </dd>
                </div>

                {{-- Se você adicionar mais colunas à tabela 'produtoras', pode exibi-las aqui. --}}
                
            </dl>
        </div>

        <div class="mt-8">
            <a href="{{ route('produtoras.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                &larr; Voltar para a Lista de Produtoras
            </a>
        </div>
    </div>

</x-base-layout>