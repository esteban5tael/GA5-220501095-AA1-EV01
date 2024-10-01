<form action="<?php echo e($route); ?>" method="POST" class="space-y-6">
    <?php echo csrf_field(); ?>

    <?php if($method === 'PATCH'): ?>
        <?php echo method_field('PATCH'); ?>
    <?php endif; ?>

    <!-- Nombre -->
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nombre</label>
        <input type="text" name="name" id="name" value="<?php echo e(old('name', $contact->name)); ?>" 
               class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-300 sm:text-sm">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-sm text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Apellido -->
    <div>
        <label for="last_name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Apellido</label>
        <input type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name', $contact->last_name)); ?>" 
               class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-300 sm:text-sm">
        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-sm text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Identificación -->
    <div>
        <label for="identification" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Identificación</label>
        <input type="text" name="identification" id="identification" value="<?php echo e(old('identification', $contact->identification)); ?>" 
               class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-300 sm:text-sm">
        <?php $__errorArgs = ['identification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-sm text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Fecha de Nacimiento -->
    <div>
        <label for="birth_date" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Fecha de Nacimiento</label>
        <input type="date" name="birth_date" id="birth_date" value="<?php echo e(old('birth_date', $contact->birth_date ? $contact->birth_date->format('Y-m-d') : null)); ?>" 
               class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:text-gray-300 sm:text-sm">
        <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-sm text-red-600 dark:text-red-400"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Botón de enviar -->
    <div class="flex justify-end">
        <button type="submit" 
        class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
            <?php echo e($method === 'POST' ? 'Crear' : 'Actualizar'); ?> Contacto
        </button>
    </div>
</form>
<?php /**PATH D:\laragon\www\GA5-220501095-AA1-EV01\resources\views/contacts/form.blade.php ENDPATH**/ ?>