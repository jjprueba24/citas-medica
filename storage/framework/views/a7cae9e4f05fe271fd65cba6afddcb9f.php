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
     <?php $__env->slot('header', null, []); ?> Citas Médicas <?php $__env->endSlot(); ?>

    <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <form method="GET" action="<?php echo e(route('appointments.index')); ?>" class="flex gap-2 flex-wrap">
            <select name="status"
                class="rounded-lg border border-gray-200 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="">Todos los estados</option>
                <option value="pending" <?php echo e(request('status') == 'pending' ? 'selected' : ''); ?>>Pendiente</option>
                <option value="confirmed" <?php echo e(request('status') == 'confirmed' ? 'selected' : ''); ?>>Confirmada</option>
                <option value="in_progress" <?php echo e(request('status') == 'in_progress' ? 'selected' : ''); ?>>En Atención</option>
                <option value="completed" <?php echo e(request('status') == 'completed' ? 'selected' : ''); ?>>Completada</option>
                <option value="cancelled" <?php echo e(request('status') == 'cancelled' ? 'selected' : ''); ?>>Cancelada</option>
                <option value="no_show" <?php echo e(request('status') == 'no_show' ? 'selected' : ''); ?>>No Asistió</option>
            </select>
            <select name="doctor_id"
                class="rounded-lg border border-gray-200 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="">Todos los médicos</option>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($doc->id); ?>" <?php echo e(request('doctor_id') == $doc->id ? 'selected' : ''); ?>>Dr.
                        <?php echo e($doc->user->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </select>
            <input type="date" name="date" value="<?php echo e(request('date')); ?>"
                class="rounded-lg border border-gray-200 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
            <button
                class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-600 transition">Filtrar</button>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(request()->anyFilled(['status', 'doctor_id', 'date'])): ?>
                <a href="<?php echo e(route('appointments.index')); ?>"
                    class="text-gray-500 px-3 py-2 text-sm hover:text-gray-700">Limpiar</a>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </form>
        <a href="<?php echo e(route('appointments.create')); ?>"
            class="inline-flex items-center gap-2 bg-blue-500 text-white px-5 py-2 rounded-lg text-sm font-medium hover:bg-blue-600 transition shadow">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Nueva Cita
        </a>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
        <div class="mb-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg text-sm">
            <?php echo e(session('success')); ?></div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                <tr>
                    <th class="px-6 py-4 text-left">Paciente</th>
                    <th class="px-6 py-4 text-left">Médico</th>
                    <th class="px-6 py-4 text-left">Especialidad</th>
                    <th class="px-6 py-4 text-left">Fecha y Hora</th>
                    <th class="px-6 py-4 text-center">Estado</th>
                    <th class="px-6 py-4 text-center">Acción</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php
                        $colors = ['pending' => 'yellow', 'confirmed' => 'blue', 'in_progress' => 'purple', 'completed' => 'green', 'cancelled' => 'red', 'no_show' => 'gray'];
                        $c = $colors[$appt->status] ?? 'gray';
                    ?>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-900"><?php echo e($appt->patient->user->name); ?></td>
                        <td class="px-6 py-4 text-gray-600">Dr. <?php echo e($appt->doctor->user->name); ?></td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 py-1 bg-indigo-50 text-indigo-600 rounded-full text-xs"><?php echo e($appt->specialty->name); ?></span>
                        </td>
                        <td class="px-6 py-4 text-gray-600">
                            <span class="font-medium"><?php echo e(\Carbon\Carbon::parse($appt->date)->format('d/m/Y')); ?></span>
                            <span
                                class="text-gray-400 text-xs ml-1"><?php echo e(\Carbon\Carbon::parse($appt->date)->format('H:i')); ?></span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="px-3 py-1 bg-<?php echo e($c); ?>-50 text-<?php echo e($c); ?>-600 rounded-full text-xs font-medium"><?php echo e($appt->status_label); ?></span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="<?php echo e(route('appointments.show', $appt)); ?>"
                                class="p-2 rounded-lg text-gray-400 hover:text-blue-500 hover:bg-blue-50 transition inline-flex">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-6 py-14 text-center text-gray-400">No se encontraron citas.</td>
                    </tr>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($appointments->hasPages()): ?>
        <div class="mt-4"><?php echo e($appointments->links()); ?></div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views/appointments/index.blade.php ENDPATH**/ ?>