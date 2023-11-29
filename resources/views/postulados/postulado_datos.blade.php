<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Oferta de postulados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Oferta a revisar") }}
                </div>
                <div class="p-1 text-gray-900 dark:text-gray-100">
                    <div class="md:w-[100%] w-auto p-4 mx-auto bg-slate-50 dark:bg-gray-800 shadow rounded-md overflow-auto">
                        <table class="table w-full max-h-screen rounded-md">
                            <thead class="border-b bg-slate-100 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">CODIGO</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">DIRECCION</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">NOMBRE DE USUARIO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                     <!-- Mostrar cada detalle de la oferta en las celdas de la tabla -->
                                     <td class="text-center p-1 text-white">{{ $ofertas['id'] }}</td>
                                     <td class="text-center p-1 text-white">{{ $ofertas['direccion'] }}</td>
                                     <td class="text-center p-1 text-white">{{ $ofertas['username'] }}</td>
                                     <!-- Agrega más propiedades según la estructura de tus datos -->
                                </tr>
                            </tbody>
                        </table>
                        <table class="table w-full max-h-screen rounded-md">
                            <thead class="border-b bg-slate-100 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">NOMBRE</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">APELLIDO</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">CORREO ELECTRONICO</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                     <!-- Mostrar cada detalle de la oferta en las celdas de la tabla -->
                                     <td class="text-center p-1 text-white">{{ $ofertas['first_name'] }}</td>
                                     <td class="text-center p-1 text-white">{{ $ofertas['last_name'] }}</td>
                                     <td class="text-center p-1 text-white">{{ $ofertas['email'] }}</td>
                                     <!-- Agrega más propiedades según la estructura de tus datos -->
                                </tr>
                            </tbody>
                        </table>
                        <table class="table w-full max-h-screen rounded-md">
                            <thead class="border-b bg-slate-100 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">DUI</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">FECHA DE NACIMIENTO</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">SEXO</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                     <!-- Mostrar cada detalle de la oferta en las celdas de la tabla -->
                                     <td class="text-center p-1 text-white">{{ $ofertas['di'] }}</td>
                                     <td class="text-center p-1 text-white">{{ $ofertas['nacimiento'] }}</td>
                                     <td class="text-center p-1 text-white">{{ $ofertas['sexo'] }}</td>
                                     <!-- Agrega más propiedades según la estructura de tus datos -->
                                </tr>
                            </tbody>
                        </table>
                        <table class="table w-full max-h-screen rounded-md">
                            <thead class="border-b bg-slate-100 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">GENERO</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">TELEFONO</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">PAIS DE RESIDENCIA</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                     <!-- Mostrar cada detalle de la oferta en las celdas de la tabla -->
                                     <td class="text-center p-1 text-white">{{ $ofertas['genero'] }}</td>
                                     <td class="text-center p-1 text-white">{{ $ofertas['telefono'] }}</td>
                                     <td class="text-center p-1 text-white">{{ $ofertas['paisResidencia'] }}</td>
                                     <!-- Agrega más propiedades según la estructura de tus datos -->
                                </tr>
                            </tbody>
                        </table>
                        <table class="table w-full max-h-screen rounded-md">
                            <thead class="border-b bg-slate-100 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">CARRERA</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">OFERTA A APLICAR</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">NUMERO DE USUARIO</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                     <!-- Mostrar cada detalle de la oferta en las celdas de la tabla -->
                                     <td class="text-center p-1 text-white">{{ $ofertas['carrera'] }}</td>
                                     <td class="text-center p-1 text-white">{{ $ofertas['ofertaaplicada'] }}</td>
                                     <td class="text-center p-1 text-white">{{ $ofertas['user'] }}</td>
                                     <!-- Agrega más propiedades según la estructura de tus datos -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

