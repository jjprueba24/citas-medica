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
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
                <a href="<?php echo e(route('reports.index')); ?>" class="p-2 rounded-lg text-gray-400 hover:bg-gray-100 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Reporte de Citas</h1>
                    <p class="text-sm text-gray-500 mt-1">Filtra y exporta el historial de citas médicas</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <a href="<?php echo e(route('reports.appointments.pdf', request()->query())); ?>"
                   class="inline-flex items-center gap-2 border border-red-300 text-red-600 hover:bg-red-50 font-semibold px-4 py-2 rounded-xl text-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                    PDF
                </a>
                <a href="<?php echo e(route('reports.appointments.excel', request()->query())); ?>"
                   class="inline-flex items-center gap-2 border border-green-300 text-green-600 hover:bg-green-50 font-semibold px-4 py-2 rounded-xl text-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Excel
                </a>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-6 px-4 sm:px-6 lg:px-8 space-y-6">

        
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
            <form method="GET" action="<?php echo e(route('reports.appointments')); ?>" class="flex flex-wrap gap-3 items-end">
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-semibold text-gray-500">Desde</label>
                    <input type="date" name="date_from" value="<?php echo e(request('date_from')); ?>"
                           class="border border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-semibold text-gray-500">Hasta</label>
                    <input type="date" name="date_to" value="<?php echo e(request('date_to')); ?>"
                           class="border border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-semibold text-gray-500">Médico</label>
                    <select name="doctor_id" class="border border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                        <option value="">Todos</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($doc->id); ?>" <?php echo e(request('doctor_id') == $doc->id ? 'selected' : ''); ?>>
                                Dr. <?php echo e($doc->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-semibold text-gray-500">Especialidad</label>
                    <select name="specialty_id" class="border border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                        <option value="">Todas</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $specialties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($sp->id); ?>" <?php echo e(request('specialty_id') == $sp->id ? 'selected' : ''); ?>>
                                <?php echo e($sp->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-semibold text-gray-500">Estado</label>
                    <select name="status" class="border border-gray-200 rounded-xl px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                        <option value="">Todos</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = ['pending'=>'Pendiente','confirmed'=>'Confirmada','in_progress'=>'En Atención','completed'=>'Completada','cancelled'=>'Cancelada','no_show'=>'No Asistió']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val => $lbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($val); ?>" <?php echo e(request('status') === $val ? 'selected' : ''); ?>><?php echo e($lbl); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>
                </div>
                <button type="submit"
                        class="bg-[#4A88F6] hover:bg-blue-600 text-white font-semibold px-5 py-2 rounded-xl text-sm transition">
                    Filtrar
                </button>
                <a href="<?php echo e(route('reports.appointments')); ?>"
                   class="border border-gray-200 text-gray-500 hover:bg-gray-50 font-semibold px-4 py-2 rounded-xl text-sm transition">
                    Limpiar
                </a>
            </form>
        </div>

        
        <div class="text-sm text-gray-500">
            Mostrando <span class="font-semibold text-gray-800"><?php echo e($appointments->total()); ?></span> citas
        </div>

        
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($appointments->isEmpty()): ?>
                <div class="py-16 text-center text-gray-400 text-sm">Sin resultados para los filtros aplicados.</div>
            <?php else: ?>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="bg-gray-50 text-gray-500 uppercase text-xs font-semibold tracking-wider">
                            <tr>
                                <th class="px-6 py-4 text-left">#</th>
                                <th class="px-6 py-4 text-left">Paciente</th>
                                <th class="px-6 py-4 text-left">Médico</th>
                                <th class="px-6 py-4 text-left">Especialidad</th>
                                <th class="px-6 py-4 text-left">Fecha</th>
                                <th class="px-6 py-4 text-center">Estado</th>
                                <th class="px-6 py-4 text-left">Motivo</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $colors = ['pending'=>'yellow','confirmed'=>'blue','in_progress'=>'purple','completed'=>'green','cancelled'=>'red','no_show'=>'gray'];
                                    $labels = ['pending'=>'Pendiente','confirmed'=>'Confirmada','in_progress'=>'En Atención','completed'=>'Completada','cancelled'=>'Cancelada','no_show'=>'No Asistió'];
                                    $color  = $colors[$appt->status] ?? 'gray';
                                ?>
                                <tr class="hover:bg-gray-50/50 transition">
                                    <td class="px-6 py-3 text-gray-400 font-mono"><?php echo e($appt->id); ?></td>
                                    <td class="px-6 py-3 font-medium text-gray-800"><?php echo e($appt->patient->name ?? '—'); ?></td>
                                    <td class="px-6 py-3 text-gray-600">Dr. <?php echo e($appt->doctor->name ?? '—'); ?></td>
                                    <td class="px-6 py-3 text-gray-600"><?php echo e($appt->specialty->name ?? '—'); ?></td>
                                    <td class="px-6 py-3 text-gray-600"><?php echo e($appt->date?->format('d/m/Y H:i') ?? '—'); ?></td>
                                    <td class="px-6 py-3 text-center">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold
                                                     bg-<?php echo e($color); ?>-100 text-<?php echo e($color); ?>-700">
                                            <?php echo e($labels[$appt->status] ?? $appt->status); ?>

                                        </span>
                                    </td>
                                    <td class="px-6 py-3 text-gray-500 max-w-xs truncate"><?php echo e($appt->reason ?? '—'); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-4 border-t border-gray-100">
                    <?php echo e($appointments->links()); ?>

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
<?php endif; ?>
<?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\reports\appointments.blade.php ENDPATH**/ ?>