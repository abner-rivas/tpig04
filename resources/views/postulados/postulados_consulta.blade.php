<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Postulados') }}
        </h2>
    </x-slot>

    <div id="app" class="p-6">
        <table class="min-w-full divide-y divide-gray-200">
            <caption class="text-lg font-semibold mb-4">Lista de Postulados</caption>
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Usuario</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Texto</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha de creación</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @if(isset($catFacts) && is_array($catFacts))
                    @foreach($catFacts as $fact)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $fact['_id'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $fact['user'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $fact['text'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $fact['type'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $fact['createdAt'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('postulados.revisar', $fact['_id']) }}">
                                    <button type="button" class="text-black bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Revisar</button>
                                </a>
                            </td>  
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-sm text-gray-500">No hay datos disponibles</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</x-app-layout>
