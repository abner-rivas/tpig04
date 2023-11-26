
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Postulados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Listado de postulados") }}
                </div>
                <div class="p-1 text-gray-900 dark:text-gray-100">
                    <div class="md:w-[100%] w-auto p-4 mx-auto bg-slate-50 dark:bg-gray-800 shadow rounded-md overflow-auto">
                        <table class="table w-full max-h-screen rounded-md">
                            <thead class="border-b bg-slate-100 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">ID</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Dirección</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Imagen Perfil</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Username</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Tipo Documento</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Sexo</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Teléfono</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Aprobación</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Acciones</th>
                                    <!-- Agrega más encabezados según tu estructura de datos -->
                                </tr>
                            </thead>
                            <tbody>
                                <postulados-component :postulados="{{ json_encode($postulados) }}"></postulados-component>
                                @foreach ($postulados as $postulado)
                                    <tr class="border-b">
                                        <td class="text-center p-1">{{ $postulado['id'] }}</td>
                                        <td class="text-center p-1">{{ $postulado['direccion'] }}</td>
                                        <td class="text-center p-1">
                                            <img src="{{ $postulado['imagen_perfil'] }}" alt="Imagen Perfil" class="w-10 h-10 rounded-full">
                                        </td>
                                        <td class="text-center p-1">{{ $postulado['username'] }}</td>
                                        <td class="text-center p-1">{{ $postulado['di_tipo'] }}</td>
                                        <td class="text-center p-1">{{ $postulado['sexo'] }}</td>
                                        <td class="text-center p-1">{{ $postulado['telefono'] }}</td>
                                        <td class="text-center p-1">{{ $postulado['aprobacion'] }}</td>
                                        <td class="text-center p-1">
                                            <div class="grid grid-cols-3">
                                                <a href="{{ route('postulados.revisar', $postulado->id) }}">
                                                <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Revisar</button>
                                                </a>
                                            </div>
                                        </td>
                                        <!-- Agrega más celdas según tu estructura de datos -->
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

