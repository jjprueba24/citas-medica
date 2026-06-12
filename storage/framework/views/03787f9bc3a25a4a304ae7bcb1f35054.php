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
     <?php $__env->slot('header', null, []); ?> Historia Clínica — Detalle <?php $__env->endSlot(); ?>

    <div class="max-w-4xl mx-auto space-y-5">
        
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-start justify-between mb-6">
                <div>
                    <h2 class="text-lg font-bold text-gray-900"><?php echo e($medicalRecord->patient->user->name); ?></h2>
                    <p class="text-sm text-gray-400"><?php echo e($medicalRecord->record_date->format('d \d\e F\, Y')); ?> · Dr. <?php echo e($medicalRecord->doctor->user->name); ?></p>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicalRecord->appointment): ?>
                        <span class="text-xs text-indigo-500 mt-1 inline-block">
                            Vinculada a cita del <?php echo e(\Carbon\Carbon::parse($medicalRecord->appointment->date)->format('d/m/Y H:i')); ?>

                        </span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <div class="flex gap-2">
                    <a href="<?php echo e(route('medical-records.edit', $medicalRecord)); ?>"
                        class="px-4 py-2 bg-emerald-50 text-emerald-600 rounded-lg text-sm font-medium hover:bg-emerald-100 transition">
                        Editar
                    </a>
                    <a href="<?php echo e(route('medical-records.patient-history', $medicalRecord->patient)); ?>"
                        class="px-4 py-2 bg-gray-50 text-gray-600 rounded-lg text-sm font-medium hover:bg-gray-100 transition">
                        Historial
                    </a>
                    <a href="<?php echo e(route('medical-records.index')); ?>" class="text-gray-400 hover:text-gray-600 text-sm self-center">← Volver</a>
                </div>
            </div>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicalRecord->blood_pressure || $medicalRecord->heart_rate || $medicalRecord->temperature || $medicalRecord->weight): ?>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 p-4 bg-blue-50 rounded-xl mb-6">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = [
                    ['key'=>'blood_pressure',    'label'=>'Presión Art.',   'unit'=>''],
                    ['key'=>'heart_rate',        'label'=>'FC',             'unit'=>''],
                    ['key'=>'temperature',       'label'=>'Temperatura',    'unit'=>''],
                    ['key'=>'weight',            'label'=>'Peso',           'unit'=>''],
                    ['key'=>'height',            'label'=>'Talla',          'unit'=>''],
                    ['key'=>'oxygen_saturation', 'label'=>'SpO2',           'unit'=>''],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicalRecord->{$vital['key']}): ?>
                <div class="text-center">
                    <p class="text-xs text-blue-400 font-medium"><?php echo e($vital['label']); ?></p>
                    <p class="text-base font-bold text-blue-700"><?php echo e($medicalRecord->{$vital['key']}); ?></p>
                </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm">
                <div class="space-y-4">
                    <div>
                        <p class="text-xs text-gray-400 font-medium mb-1 uppercase tracking-wide">Motivo de Consulta</p>
                        <p class="text-gray-800 leading-relaxed"><?php echo e($medicalRecord->chief_complaint); ?></p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-medium mb-1 uppercase tracking-wide">Diagnóstico</p>
                        <p class="text-gray-800 leading-relaxed font-medium"><?php echo e($medicalRecord->diagnosis); ?></p>
                    </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicalRecord->treatment): ?>
                    <div>
                        <p class="text-xs text-gray-400 font-medium mb-1 uppercase tracking-wide">Tratamiento</p>
                        <p class="text-gray-800 leading-relaxed"><?php echo e($medicalRecord->treatment); ?></p>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <div class="space-y-4">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicalRecord->prescriptions): ?>
                    <div>
                        <p class="text-xs text-gray-400 font-medium mb-1 uppercase tracking-wide">Prescripciones</p>
                        <div class="bg-amber-50 border border-amber-100 rounded-lg p-3">
                            <p class="text-gray-800 text-sm leading-relaxed whitespace-pre-line"><?php echo e($medicalRecord->prescriptions); ?></p>
                        </div>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicalRecord->notes): ?>
                    <div>
                        <p class="text-xs text-gray-400 font-medium mb-1 uppercase tracking-wide">Notas Clínicas</p>
                        <p class="text-gray-600 leading-relaxed"><?php echo e($medicalRecord->notes); ?></p>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicalRecord->referred_to): ?>
                    <div>
                        <p class="text-xs text-gray-400 font-medium mb-1 uppercase tracking-wide">Derivación</p>
                        <p class="text-indigo-600 leading-relaxed"><?php echo e($medicalRecord->referred_to); ?></p>
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicalRecord->is_private): ?>
                    <div class="flex items-center gap-2 text-xs text-amber-600 bg-amber-50 px-3 py-2 rounded-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        Registro privado
                    </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>

        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($medicalRecord->attachments && count($medicalRecord->attachments)): ?>
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h3 class="text-sm font-semibold text-gray-800 mb-4 flex items-center gap-2">
                <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>
                </svg>
                Archivos Adjuntos (<?php echo e(count($medicalRecord->attachments)); ?>)
            </h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $medicalRecord->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $filename  = basename($file);
                    $ext       = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                    $isImage   = in_array($ext, ['jpg','jpeg','png']);
                    $publicUrl = Storage::disk('public')->url($file);
                ?>
                <div class="group relative border border-gray-100 rounded-xl overflow-hidden bg-gray-50 hover:shadow-md transition">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isImage): ?>
                        <a href="<?php echo e($publicUrl); ?>" target="_blank">
                            <img src="<?php echo e($publicUrl); ?>" alt="<?php echo e($filename); ?>"
                                 class="w-full h-28 object-cover hover:opacity-90 transition">
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e($publicUrl); ?>" target="_blank"
                           class="flex flex-col items-center justify-center h-28 text-red-500 hover:text-red-600">
                            <svg class="w-10 h-10 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-xs font-medium uppercase"><?php echo e($ext); ?></span>
                        </a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <div class="flex items-center justify-between px-2 py-1.5 bg-white border-t border-gray-100">
                        <span class="text-xs text-gray-500 truncate max-w-[80px]"><?php echo e($filename); ?></span>
                        <form method="POST"
                              action="<?php echo e(route('medical-records.attachments.destroy', [$medicalRecord, $filename])); ?>"
                              onsubmit="return confirm('¿Eliminar este archivo?')">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="p-1 text-gray-300 hover:text-red-500 transition" title="Eliminar">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
<?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\medical-records\show.blade.php ENDPATH**/ ?>