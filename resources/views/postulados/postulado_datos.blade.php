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
                                @if(isset($ofertas) && is_array($ofertas) && count($ofertas) > 0)
                                    @foreach ($ofertas as $oferta)
                                        <tr>
                                            <!-- Mostrar cada detalle de la oferta en las celdas de la tabla -->
                                            <td>{{ $oferta['property_1'] }}</td>
                                            <td>{{ $oferta['property_2'] }}</td>
                                            <!-- Agrega más propiedades según la estructura de tus datos -->
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7">No hay postulantes da esta oferta</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

