<form action="{{ $route }}" method="POST" class="space-y-6">
    @csrf

    @if($method === 'PATCH')
        @method('PATCH')
    @endif

    <!-- Nombre -->
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nombre</label>
        <input type="text" name="name" id="name" value="{{ old('name', $contact->name) }}" 
               class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-300 sm:text-sm">
        @error('name')
            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <!-- Apellido -->
    <div>
        <label for="last_name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Apellido</label>
        <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $contact->last_name) }}" 
               class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-300 sm:text-sm">
        @error('last_name')
            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <!-- Identificación -->
    <div>
        <label for="identification" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Identificación</label>
        <input type="text" name="identification" id="identification" value="{{ old('identification', $contact->identification) }}" 
               class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-300 sm:text-sm">
        @error('identification')
            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <!-- Fecha de Nacimiento -->
    <div>
        <label for="birth_date" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Fecha de Nacimiento</label>
        <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date', $contact->birth_date ? $contact->birth_date->format('Y-m-d') : null) }}" 
               class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-300 sm:text-sm">
        @error('birth_date')
            <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <!-- Botón de enviar -->
    <div class="flex justify-end">
        <button type="submit" 
        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
            {{ $method === 'POST' ? 'Crear' : 'Actualizar' }} Contacto
        </button>
    </div>
</form>
