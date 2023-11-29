<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Postulados') }}
        </h2>
    </x-slot>

    <div id="app" class="p-6">
        <table class="table w-full max-h-screen rounded-md">
            <caption class="text-lg font-semibold text-white mb-4">Lista de Postulados</caption>
            <thead class="border-b bg-slate-100 dark:bg-gray-700">
                <tr class="text-center">
                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">ID</th>
                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Nombre de usuario</th>
                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Carrera</th>
                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Telefono</th>
                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Email</th>
                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Oferta a aplicar</th>
                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($postfact) && is_array($postfact))
                    @foreach($postfact as $apicurriculum)
                        <tr class="border-b">
                            <td class="text-center p-1 text-white">{{ $apicurriculum['id'] }}</td>
                            <td class="text-center p-1 text-white">{{ $apicurriculum['username'] }}</td>
                            <td class="text-center p-1 text-white">{{ $apicurriculum['carrera'] }}</td>
                            <td class="text-center p-1 text-white">{{ $apicurriculum['telefono'] }}</td>
                            <td class="text-center p-1 text-white">{{ $apicurriculum['email'] }}</td>
                            <td class="text-center p-1 text-white">{{ $apicurriculum['ofertaaplicada'] }}</td>
                            <td class="text-center p-1 text-white">
                                <a href="{{ route('postulados.revisar', $apicurriculum['id']) }}">
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
