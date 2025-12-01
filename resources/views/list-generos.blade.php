<x-base-layout>

    <!-- Título da Seção -->
    <div class="max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 mx-auto">
        <h1 class="text-3xl font-bold text-gray-900">Gêneros de Filme Disponíveis</h1> 
    </div>

    <!-- Lista de Gêneros -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        
        <div class="flex flex-col">
          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="overflow-hidden border rounded-lg dark:border-neutral-700">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                  <thead>
                    <tr>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-900">
                        ID
                      </th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-900">
                        Nome do Gênero
                      </th>
                      <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-900">
                        Ações
                      </th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    
                    @foreach ($generos as $genero)
                    <tr class="hover:bg-gray-50 dark:hover:bg-neutral-800">
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> 
                        {{ $genero->id }}
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $genero->name }}
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        
                        <a href="{{ route('detalhes-genero', $genero) }}" class="text-blue-600 hover:text-blue-700 dark:text-blue-500 dark:hover:text-blue-400">Ver Detalhes</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

    </div>

</x-base-layout>