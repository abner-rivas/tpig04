<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ofertas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Tus ofertas") }}
                </div>
                <div class="p-1 text-gray-900 dark:text-gray-100">
                    <div class="md:w-[100%] w-auto p-4 mx-auto bg-slate-50 dark:bg-gray-800 shadow rounded-md overflow-auto">
                        <table class="table w-full max-h-screen rounded-md">
                            <thead class="border-b bg-slate-100 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">CODIGO</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">CARERAS SOLI.</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">CANT. ESTUDIANTES</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">PUESTO</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">SALARIO</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">FECHA PARA APLICAR</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ofertas as $oferta)
                                <tr class="border-b">
                                    <td class="text-center p-1">{{ $oferta->id }}</td>
                                    <td class="text-center p-1">{{ $oferta->carreras_solicitadas }}</td>
                                    <td class="text-center p-1">{{ $oferta->cantidad_estudiantes }}</td>
                                    <td class="text-center p-1">{{ $oferta->puesto }}</td>
                                    <td class="text-center p-1">${{ $oferta->salario }}</td>
                                    <td class="text-center p-1">{{ $oferta->fecha_max_aplicar }}</td>
                                    <td class="text-center p-1">
                                        <div class="grid grid-cols-3">
                                            <a href="{{ route('ofertas.editar', $oferta->id) }}">
                                            <button type="button" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Editar</button>
                                            </a>
                                            <form action="{{ route('ofertas.eliminar', $oferta->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Eliminar</button>
                                            </form>
                                            <a href="{{ route('ofertas.editar', $oferta->id) }}">
                                            <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Postulados</button>
                                            </a>
                                        </div>
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
</x-app-layout>