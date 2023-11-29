<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Oferta de postulados') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Revisar postulado de servicio social") }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form disabled>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="carreras_solicitadas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CODIGO</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('id', $ofertas['id'] )" required autofocus autocomplete="id" disabled></x-text-input>
                            </div>
                            <div>
                                <label for="cantidad_estudiantes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DIRECCION</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('direccion', $ofertas['direccion'] )" required autofocus autocomplete="direccion" disabled></x-text-input>
                            </div>
                            <div>
                                <label for="puesto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NOMBRE DE USUARIO</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('username', $ofertas['username'] )" required autofocus autocomplete="username" disabled></x-text-input>
                            </div>
                            <div>
                                <label for="salario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NOMBRE</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('first', $ofertas['first_name'] )" required autofocus autocomplete="first" disabled></x-text-input>
                            </div>

                            <div>
                                <label for="fecha_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">APELLIDO</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('last', $ofertas['last_name'] )" required autofocus autocomplete="last" disabled></x-text-input>
                            </div>

                            <div>
                                <label for="fecha_fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CORREO ELECTRONICO</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('email', $ofertas['email'] )" required autofocus autocomplete="email" disabled></x-text-input>
                            </div>

                            <div>
                                <label for="fecha_max_aplicar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DUI</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('di', $ofertas['di'] )" required autofocus autocomplete="di" disabled></x-text-input>
                            </div>

                            <div>
                                <label for="descripcion_proyecto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">FECHA DE NACIMIENTO</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('nacimiento', $ofertas['nacimiento'] )" required autofocus autocomplete="nacimiento" disabled></x-text-input>
                            </div>
                            <div>
                                <label for="descripcion_proyecto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SEXO</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('sexo', $ofertas['sexo'] )" required autofocus autocomplete="sexo" disabled></x-text-input>
                            </div>
                            <div>
                                <label for="descripcion_proyecto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GENERO</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('genero', $ofertas['genero'] )" required autofocus autocomplete="genero" disabled></x-text-input>
                            </div>
                            <div>
                                <label for="descripcion_proyecto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TELEFONO</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('telefono', $ofertas['telefono'] )" required autofocus autocomplete="telefono" disabled></x-text-input>
                            </div>
                            <div>
                                <label for="descripcion_proyecto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PAIS DE REDISENCIA</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('paisResidencia', $ofertas['paisResidencia'] )" required autofocus autocomplete="paisResidencia" disabled></x-text-input>
                            </div>
                            <div>
                                <label for="descripcion_proyecto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CARRERA</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('carrera', $ofertas['carrera'] )" required autofocus autocomplete="carrera" disabled></x-text-input>
                            </div>
                            <div>
                                <label for="descripcion_proyecto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">OFERTA A APLICAR</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('ofertaaplicada', $ofertas['ofertaaplicada'] )" required autofocus autocomplete="ofertaaplicada" disabled></x-text-input>
                            </div>
                            <div>
                                <label for="descripcion_proyecto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NUMERO DE USUARIO</label>
                                <x-text-input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('user', $ofertas['user'] )" required autofocus autocomplete="user" disabled></x-text-input>
                            </div>
                        </div>
                    </form>

                    <a href="/postulados">
                    <button type="button" class="text-black bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Regresar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

