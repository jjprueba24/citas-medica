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
     <?php $__env->slot('header', null, []); ?> Paciente: <?php echo e($patient->user->name); ?> <?php $__env->endSlot(); ?>

    <div class="max-w-4xl mx-auto space-y-6">
        
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center gap-5 mb-6">
                <div
                    class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-2xl">
                    <?php echo e(strtoupper(substr($patient->user->name, 0, 1))); ?>

                </div>
                <div>
                    <h2 class="text-xl font-bold text-gray-900"><?php echo e($patient->user->name); ?></h2>
                    <p class="text-gray-500 text-sm"><?php echo e($patient->user->email); ?></p>
                </div>
                <div class="ml-auto flex gap-2">
                    <a href="<?php echo e(route('patients.export-profile.pdf', $patient)); ?>" target="_blank"
                        class="px-4 py-2 bg-red-50 text-red-600 rounded-lg text-sm font-medium hover:bg-red-100 transition flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        Exportar PDF
                    </a>
                    <a href="<?php echo e(route('medical-records.patient-history', $patient)); ?>"
                        class="px-4 py-2 bg-purple-50 text-purple-600 rounded-lg text-sm font-medium hover:bg-purple-100 transition flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        Historia Clínica
                    </a>
                    <a href="<?php echo e(route('patients.edit', $patient)); ?>"
                        class="px-4 py-2 bg-yellow-50 text-yellow-600 rounded-lg text-sm font-medium hover:bg-yellow-100 transition">Editar</a>
                    <a href="<?php echo e(route('appointments.create', ['patient_id' => $patient->id])); ?>"
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg text-sm font-medium hover:bg-blue-600 transition">+
                        Agendar Cita</a>
                </div>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-sm">
                <div>
                    <p class="text-gray-400 text-xs mb-1">Fecha de Nac.</p>
                    <p class="font-medium">
                        <?php echo e($patient->dob ? \Carbon\Carbon::parse($patient->dob)->format('d/m/Y') : '—'); ?>

                    </p>
                </div>
                <div>
                    <p class="text-gray-400 text-xs mb-1">Género</p>
                    <p class="font-medium">
                        <?php echo e(['male' => 'Masculino', 'female' => 'Femenino', 'other' => 'Otro'][$patient->gender] ?? '—'); ?>

                    </p>
                </div>
                <div>
                    <p class="text-gray-400 text-xs mb-1">Tipo de Sangre</p>
                    <p class="font-bold text-red-500"><?php echo e($patient->blood_type ?? '—'); ?></p>
                </div>
                <div>
                    <p class="text-gray-400 text-xs mb-1">Teléfono</p>
                    <p class="font-medium"><?php echo e($patient->phone ?? '—'); ?></p>
                </div>
                <div class="col-span-2">
                    <p class="text-gray-400 text-xs mb-1">Dirección</p>
                    <p class="font-medium"><?php echo e($patient->address ?? '—'); ?></p>
                </div>
                <div class="col-span-2">
                    <p class="text-gray-400 text-xs mb-1">Seguro Médico (ARS)</p>
                    <p class="font-medium text-indigo-700">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($patient->insurance): ?>
                            <?php echo e($patient->insurance->name); ?> (<?php echo e($patient->policy_number ?? 'Sin póliza'); ?>)
                        <?php else: ?>
                            <span class="text-gray-500 font-normal">Particular / Sin Seguro</span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </p>
                </div>
                <div class="col-span-2">
                    <p class="text-gray-400 text-xs mb-1">Alergias</p>
                    <p class="font-medium text-orange-600"><?php echo e($patient->allergies ?? '—'); ?></p>
                </div>
            </div>
        </div>

        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($patient->primaryDoctor): ?>
            <div class="bg-white rounded-2xl shadow-sm border border-blue-100 p-5">
                <p class="text-xs text-gray-400 font-medium uppercase tracking-wide mb-3">Médico de Cabecera</p>
                <div class="flex items-center gap-4">
                    <img src="<?php echo e($patient->primaryDoctor->user->avatar_url); ?>"
                        class="w-14 h-14 rounded-xl object-cover border border-blue-100"
                        alt="<?php echo e($patient->primaryDoctor->user->name); ?>">
                    <div>
                        <p class="font-semibold text-gray-900">Dr. <?php echo e($patient->primaryDoctor->user->name); ?></p>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($patient->primaryDoctor->specialty): ?>
                            <p class="text-sm text-blue-500"><?php echo e($patient->primaryDoctor->specialty->name); ?></p>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($patient->primaryDoctor->license_number): ?>
                            <p class="text-xs text-gray-400">Colegiatura: <?php echo e($patient->primaryDoctor->license_number); ?></p>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div class="ml-auto">
                        <a href="<?php echo e(route('appointments.create', ['patient_id' => $patient->id, 'doctor_id' => $patient->primaryDoctor->id])); ?>"
                            class="px-3 py-1.5 bg-blue-50 text-blue-600 rounded-lg text-xs font-medium hover:bg-blue-100 transition">
                            + Cita con Dr.
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h3 class="text-base font-semibold text-gray-800 mb-4">Historial de Citas</h3>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($patient->appointments->isEmpty()): ?>
                <p class="text-gray-400 text-sm py-6 text-center">No tiene citas registradas.</p>
            <?php else: ?>
                <div class="space-y-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $patient->appointments->sortByDesc('date'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="flex items-center justify-between p-4 rounded-xl border border-gray-100 hover:bg-gray-50 transition">
                            <div class="flex items-center gap-4">
                                <div class="text-center">
                                    <p class="text-lg font-bold text-gray-800">
                                        <?php echo e(\Carbon\Carbon::parse($appt->date)->format('d')); ?>

                                    </p>
                                    <p class="text-xs text-gray-400"><?php echo e(\Carbon\Carbon::parse($appt->date)->format('M Y')); ?></p>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 text-sm">Dr. <?php echo e($appt->doctor->user->name); ?></p>
                                    <p class="text-xs text-gray-400"><?php echo e($appt->specialty->name); ?> ·
                                        <?php echo e(\Carbon\Carbon::parse($appt->date)->format('H:i')); ?>

                                    </p>
                                </div>
                            </div>
                            <?php
                                $colors = ['pending' => 'yellow', 'confirmed' => 'blue', 'in_progress' => 'purple', 'completed' => 'green', 'cancelled' => 'red', 'no_show' => 'gray'];
                                $c = $colors[$appt->status] ?? 'gray';
                            ?>
                            <span
                                class="px-3 py-1 bg-<?php echo e($c); ?>-50 text-<?php echo e($c); ?>-600 rounded-full text-xs font-medium"><?php echo e($appt->status_label); ?></span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\patients\show.blade.php ENDPATH**/ ?>