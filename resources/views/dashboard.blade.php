<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <p class="text-4xl font-semibold text-gray-900 dark:text-white">
                    Bienvenido al sistema de registro de ofertas de servicio social</p>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="/ofertas">
                    <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        Si deseas consultar tus ofertas de sevicio social presiona aqui</button>
                    </a>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="/ofertas/crear">
                    <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        Si deseas registrar ofertas de sevicio social presiona aqui</button>
                    </a>
                </div>

                
            </div>
        </div>
    </div>
</x-app-layout>