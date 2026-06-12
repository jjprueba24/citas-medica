<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> Editar Receta Médica #<?php echo e(str_pad($prescription->id, 5, '0', STR_PAD_LEFT)); ?> <?php $__env->endSlot(); ?>

    <div class="max-w-4xl mx-auto">
        <form method="POST" action="<?php echo e(route('prescriptions.update', $prescription)); ?>" class="space-y-6">
            <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <h2 class="text-base font-semibold text-gray-800 mb-5">Información General</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Paciente <span
                                class="text-red-500">*</span></label>
                        <select name="patient_id" required
                            class="w-full rounded-lg border border-gray-200 px-4 py-2 text-sm focus:ring-2 focus:ring-blue-400">
                            <option value="">Seleccionar paciente</option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($patient->id); ?>" <?php echo e(old('patient_id', $prescription->patient_id) == $patient->id ? 'selected' : ''); ?>>
                                    <?php echo e($patient->user->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </select>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['patient_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Médico <span
                                class="text-red-500">*</span></label>
                        <select name="doctor_id" required
                            class="w-full rounded-lg border border-gray-200 px-4 py-2 text-sm focus:ring-2 focus:ring-blue-400">
                            <option value="">Seleccionar médico</option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($doctor->id); ?>" <?php echo e(old('doctor_id', $prescription->doctor_id) == $doctor->id ? 'selected' : ''); ?>>
                                    Dr. <?php echo e($doctor->user->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </select>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['doctor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Fecha <span
                                class="text-red-500">*</span></label>
                        <input type="date" name="date"
                            value="<?php echo e(old('date', \Carbon\Carbon::parse($prescription->date)->format('Y-m-d'))); ?>"
                            required
                            class="w-full rounded-lg border border-gray-200 px-4 py-2 text-sm focus:ring-2 focus:ring-blue-400">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>

                <div class="mt-5">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Notas Adicionales (Opcional)</label>
                    <textarea name="notes" rows="2"
                        class="w-full rounded-lg border border-gray-200 px-4 py-2 text-sm focus:ring-2 focus:ring-blue-400"><?php echo e(old('notes', $prescription->notes)); ?></textarea>
                </div>
            </div>

            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <div class="flex items-center justify-between mb-5">
                    <div>
                        <h2 class="text-base font-semibold text-gray-800">Medicamentos prescritos</h2>
                    </div>
                    <button type="button" onclick="addMedicationRow()"
                        class="px-4 py-2 bg-blue-50 text-blue-600 rounded-lg text-sm font-medium hover:bg-blue-100 transition shadow-sm">
                        + Añadir Medicamento
                    </button>
                </div>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['items'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-sm mb-4"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <div id="medications_container" class="space-y-4">
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $prescription->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-4 border border-gray-100 rounded-xl bg-gray-50/50 relative group">
                            <button type="button" onclick="this.closest('.p-4').remove()"
                                class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition opacity-0 group-hover:opacity-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 pr-8">
                                <div class="md:col-span-2">
                                    <label class="block text-xs font-medium text-gray-500 mb-1">Nombre del Medicamento <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="items[<?php echo e($index); ?>][medication_name]"
                                        value="<?php echo e($item->medication_name); ?>" required
                                        class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-sm focus:ring-1 focus:ring-blue-400">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-gray-500 mb-1">Dosis</label>
                                    <input type="text" name="items[<?php echo e($index); ?>][dosage]" value="<?php echo e($item->dosage); ?>"
                                        class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-sm focus:ring-1 focus:ring-blue-400">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-gray-500 mb-1">Frecuencia</label>
                                    <input type="text" name="items[<?php echo e($index); ?>][frequency]" value="<?php echo e($item->frequency); ?>"
                                        class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-sm focus:ring-1 focus:ring-blue-400">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-gray-500 mb-1">Duración</label>
                                    <input type="text" name="items[<?php echo e($index); ?>][duration]" value="<?php echo e($item->duration); ?>"
                                        class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-sm focus:ring-1 focus:ring-blue-400">
                                </div>
                                <div class="md:col-span-3">
                                    <label class="block text-xs font-medium text-gray-500 mb-1">Instrucciones
                                        Adicionales</label>
                                    <input type="text" name="items[<?php echo e($index); ?>][instructions]"
                                        value="<?php echo e($item->instructions); ?>"
                                        class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-sm focus:ring-1 focus:ring-blue-400">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            <div class="flex justify-end gap-3">
                <a href="<?php echo e(route('prescriptions.index')); ?>"
                    class="px-6 py-2 text-sm text-gray-500 hover:text-gray-700 font-medium transition">Cancelar</a>
                <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition shadow">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </div>

    
    <template id="medication_row_template">
        <div class="p-4 border border-gray-100 rounded-xl bg-gray-50/50 relative group">
            <button type="button" onclick="this.closest('.p-4').remove()"
                class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition opacity-0 group-hover:opacity-100">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 pr-8">
                <div class="md:col-span-2">
                    <label class="block text-xs font-medium text-gray-500 mb-1">Nombre del Medicamento <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="items[__INDEX__][medication_name]" required
                        placeholder="Ej. Paracetamol 500mg"
                        class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-sm focus:ring-1 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1">Dosis</label>
                    <input type="text" name="items[__INDEX__][dosage]" placeholder="Ej. 1 tableta"
                        class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-sm focus:ring-1 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1">Frecuencia</label>
                    <input type="text" name="items[__INDEX__][frequency]" placeholder="Ej. Cada 8 horas"
                        class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-sm focus:ring-1 focus:ring-blue-400">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500 mb-1">Duración</label>
                    <input type="text" name="items[__INDEX__][duration]" placeholder="Ej. Por 5 días"
                        class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-sm focus:ring-1 focus:ring-blue-400">
                </div>
                <div class="md:col-span-3">
                    <label class="block text-xs font-medium text-gray-500 mb-1">Instrucciones Adicionales</label>
                    <input type="text" name="items[__INDEX__][instructions]"
                        placeholder="Ej. Tomar después de las comidas"
                        class="w-full rounded-md border border-gray-200 px-3 py-1.5 text-sm focus:ring-1 focus:ring-blue-400">
                </div>
            </div>
        </div>
    </template>

    <script>
        let rowIndex = <?php echo e(max($prescription->items->count(), 1) * 10); ?>;

        function addMedicationRow() {
            const container = document.getElementById('medications_container');
            const template = document.getElementById('medication_row_template');
            let html = template.innerHTML.replace(/__INDEX__/g, rowIndex);

            const div = document.createElement('div');
            div.innerHTML = html;
            container.appendChild(div.firstElementChild);
            rowIndex++;
        }
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\prescriptions\edit.blade.php ENDPATH**/ ?>