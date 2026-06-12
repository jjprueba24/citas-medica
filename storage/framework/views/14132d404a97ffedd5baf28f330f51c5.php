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
     <?php $__env->slot('header', null, []); ?> Mis Plantillas de Diagnóstico <?php $__env->endSlot(); ?>

    <div class="max-w-6xl mx-auto space-y-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-gray-800">Plantillas Reutilizables</h2>
            <a href="<?php echo e(route('diagnostic-templates.create')); ?>"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition shadow">
                + Nueva Plantilla
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($templates->count() > 0): ?>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-gray-50 text-gray-600 font-medium border-b border-gray-100">
                            <tr>
                                <th class="px-6 py-4">Nombre de la Plantilla</th>
                                <th class="px-6 py-4">Código CIE-10</th>
                                <th class="px-6 py-4">Diagnóstico</th>
                                <th class="px-6 py-4 text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="hover:bg-gray-50/50 transition">
                                    <td class="px-6 py-4 font-medium text-gray-900"><?php echo e($template->name); ?></td>
                                    <td class="px-6 py-4">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($template->icd_code): ?>
                                            <span
                                                class="px-2.5 py-1 bg-indigo-50 text-indigo-700 rounded-md text-xs font-medium">[<?php echo e($template->icd_code); ?>]</span>
                                        <?php else: ?>
                                            <span class="text-gray-400 italic">Ninguno</span>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600 truncate max-w-xs"
                                        title="<?php echo e($template->diagnosis_text); ?>">
                                        <?php echo e(Str::limit($template->diagnosis_text, 50)); ?>

                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-3">
                                            <a href="<?php echo e(route('diagnostic-templates.edit', $template)); ?>"
                                                class="text-blue-600 hover:text-blue-800 font-medium">Editar</a>
                                            <form action="<?php echo e(route('diagnostic-templates.destroy', $template)); ?>" method="POST"
                                                onsubmit="return confirm('¿Seguro de eliminar esta plantilla?');">
                                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-800 font-medium">Eliminar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="p-4 border-t border-gray-100">
                    <?php echo e($templates->links()); ?>

                </div>
            <?php else: ?>
                <div class="p-12 text-center">
                    <div
                        class="w-16 h-16 bg-blue-50 text-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-1">No hay plantillas creadas</h3>
                    <p class="text-gray-500 text-sm mb-4">Crea tu primera plantilla de diagnóstico para agilizar tus
                        consultas.</p>
                    <a href="<?php echo e(route('diagnostic-templates.create')); ?>"
                        class="px-4 py-2 bg-blue-50 text-blue-600 rounded-lg text-sm font-medium hover:bg-blue-100 transition">
                        Crear Plantilla
                    </a>
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
<?php endif; ?><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\diagnostic-templates\index.blade.php ENDPATH**/ ?>