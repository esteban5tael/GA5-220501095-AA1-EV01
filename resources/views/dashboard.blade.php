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

                    {{-- Main Content --}}

                    <div class="flex justify-between">
                        {{-- Contactos --}}
                        <a href="{{ route('contacts.index') }}"
                           class="block max-w-sm p-6 bg-gray-100 border border-gray-200 rounded-lg shadow hover:bg-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-600 transition ease-in-out duration-150">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-100 text-center">
                                Gestión de Contactos
                            </h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Administra, visualiza, edita o elimina tus contactos.
                            </p>
                            <p class="font-normal text-gray-700 dark:text-gray-400">
                                Crea nuevos contactos y mantén tu lista actualizada fácilmente.
                            </p>
                        </a>
                        {{-- Contactos --}}
                    </div>

                    {{-- Main Content --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
