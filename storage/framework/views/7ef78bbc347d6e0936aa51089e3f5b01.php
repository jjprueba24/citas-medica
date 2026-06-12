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
     <?php $__env->slot('header', null, []); ?> Detalle de Receta Médica <?php $__env->endSlot(); ?>

    <div class="max-w-4xl mx-auto space-y-6">
        
        <div class="flex items-center justify-between">
            <a href="<?php echo e(route('prescriptions.index')); ?>" class="text-sm text-gray-500 hover:text-gray-700">← Volver al
                listado</a>
            <div class="flex gap-2">
                <a href="<?php echo e(route('prescriptions.edit', $prescription)); ?>"
                    class="px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition shadow-sm">
                    Editar Receta
                </a>
                <a href="<?php echo e(route('prescriptions.export.pdf', $prescription)); ?>"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition shadow-sm inline-flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Descargar PDF
                </a>
            </div>
        </div>

        
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            
            <div class="flex justify-between items-start border-b border-gray-100 pb-6 mb-6">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">Receta Médica</h2>
                    <p class="text-sm text-gray-500 mt-1">N° <?php echo e(str_pad($prescription->id, 5, '0', STR_PAD_LEFT)); ?></p>
                </div>
                <div class="text-right">
                    <p class="text-sm font-medium text-gray-900">Fecha de Emisión</p>
                    <p class="text-sm text-gray-500">
                        <?php echo e(\Carbon\Carbon::parse($prescription->date)->format('d de F, Y')); ?></p>
                </div>
            </div>

            
            <div class="grid grid-cols-2 gap-8 mb-8">
                <div>
                    <p class="text-xs uppercase tracking-wider text-gray-400 font-bold mb-2">Datos del Paciente</p>
                    <p class="font-medium text-gray-900"><?php echo e($prescription->patient->user->name); ?></p>
                    <p class="text-sm text-gray-500"><?php echo e($prescription->patient->user->email); ?></p>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($prescription->patient->phone): ?>
                        <p class="text-sm text-gray-500">Tel: <?php echo e($prescription->patient->phone); ?></p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <div class="bg-blue-50/50 p-4 rounded-xl border border-blue-100">
                    <p class="text-xs uppercase tracking-wider text-blue-400 font-bold mb-2">Médico Tratante</p>
                    <p class="font-bold text-blue-900">Dr. <?php echo e($prescription->doctor->user->name); ?></p>
                    <p class="text-sm text-blue-700"><?php echo e($prescription->doctor->specialty->name); ?></p>
                    <p class="text-xs text-blue-500 mt-1">Colegiatura: <?php echo e($prescription->doctor->collegiate_number); ?>

                    </p>
                </div>
            </div>

            
            <div>
                <p class="text-xs uppercase tracking-wider text-gray-400 font-bold mb-3">Prescripción</p>
                <div class="overflow-x-auto border border-gray-100 rounded-xl">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50 text-gray-600 border-b border-gray-100">
                            <tr>
                                <th class="py-3 px-4 text-left font-medium">Medicamento</th>
                                <th class="py-3 px-4 text-left font-medium">Dosis / Frecuencia / Duración</th>
                                <th class="py-3 px-4 text-left font-medium">Indicaciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $prescription->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="py-3 px-4 font-medium text-gray-800"><?php echo e($item->medication_name); ?></td>
                                    <td class="py-3 px-4 text-gray-600">
                                        <?php echo e($item->dosage ? $item->dosage . ',' : ''); ?>

                                        <?php echo e($item->frequency); ?>

                                        <?php echo e($item->duration ? ' (' . $item->duration . ')' : ''); ?>

                                    </td>
                                    <td class="py-3 px-4 text-gray-500"><?php echo e($item->instructions ?? '-'); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($prescription->notes): ?>
                <div class="mt-8">
                    <p class="text-xs uppercase tracking-wider text-gray-400 font-bold mb-2">Notas y Recomendaciones</p>
                    <div class="bg-gray-50 rounded-xl p-4 text-sm text-gray-700">
                        <?php echo e($prescription->notes); ?>

                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\prescriptions\show.blade.php ENDPATH**/ ?>