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
