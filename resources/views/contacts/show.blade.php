<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Detalles del Contacto:') }} {{ $contact->name }} {{ $contact->last_name }}
            </h2>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <a class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    href="{{ route('contacts.index') }}">Volver</a>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="font-semibold text-lg text-gray-700 dark:text-gray-200">Nombre:</h3>
                            <p class="text-gray-600 dark:text-gray-300">{{ $contact->name }}</p>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-700 dark:text-gray-200">Apellido:</h3>
                            <p class="text-gray-600 dark:text-gray-300">{{ $contact->last_name }}</p>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-700 dark:text-gray-200">Identificación:</h3>
                            <p class="text-gray-600 dark:text-gray-300">{{ $contact->identification }}</p>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-700 dark:text-gray-200">Fecha de Nacimiento:</h3>
                            <p class="text-gray-600 dark:text-gray-300">{{ $contact->birth_date->format('Y-m-d') }}</p>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-between">
                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="inline">
                            <a href="{{ route('contacts.edit', $contact) }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Editar
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                                onclick="return confirm('¿Seguro que deseas eliminar este contacto?')">
                                Eliminar
                            </button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
