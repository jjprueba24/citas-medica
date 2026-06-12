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
    <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">
                    Horario de Atención
                </h1>
                <p class="text-sm text-gray-500 mt-1">
                    Dr. <?php echo e($doctor->user->name); ?> &mdash; <?php echo e($doctor->specialty->name); ?>

                </p>
            </div>
            <a href="<?php echo e(route('doctors.show', $doctor)); ?>"
                class="inline-flex items-center gap-2 px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Volver al médico
            </a>
        </div>

        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <div
                class="mb-4 flex items-center gap-3 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg text-sm">
                <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
            <div class="mb-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg text-sm">
                <ul class="list-disc list-inside space-y-1">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

            
            <div class="xl:col-span-2 space-y-4">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                        <h2 class="text-base font-semibold text-gray-800 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Disponibilidad Semanal
                        </h2>
                        <button onclick="document.getElementById('modal-add-slot').classList.remove('hidden')"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            Agregar Franja
                        </button>
                    </div>

                    <div class="divide-y divide-gray-50">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dayNum => $dayName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $daySlots = $schedulesByDay->get($dayNum, collect()); ?>
                            <div class="px-6 py-4 flex items-start gap-4">
                                
                                <div class="w-24 shrink-0 pt-0.5">
                                    <span
                                        class="text-sm font-semibold <?php echo e($daySlots->isNotEmpty() ? 'text-blue-700' : 'text-gray-400'); ?>">
                                        <?php echo e($dayName); ?>

                                    </span>
                                </div>

                                
                                <div class="flex-1 flex flex-wrap gap-2">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $daySlots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg border text-sm
                                                                        <?php echo e($slot->is_active
                                        ? 'bg-blue-50 border-blue-200 text-blue-800'
                                        : 'bg-gray-50 border-gray-200 text-gray-400 line-through'); ?>">
                                                                <span><?php echo e(\Carbon\Carbon::parse($slot->start_time)->format('H:i')); ?> –
                                                                    <?php echo e(\Carbon\Carbon::parse($slot->end_time)->format('H:i')); ?></span>
                                                                <span class="text-xs opacity-70">(<?php echo e($slot->slot_duration); ?> min)</span>

                                                                
                                                                <form method="POST"
                                                                    action="<?php echo e(route('doctors.schedule.toggle', [$doctor, $slot])); ?>"
                                                                    class="inline">
                                                                    <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
                                                                    <button type="submit" class="ml-1 p-0.5 rounded hover:bg-white/60 transition"
                                                                        title="<?php echo e($slot->is_active ? 'Desactivar' : 'Activar'); ?>">
                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($slot->is_active): ?>
                                                                            <svg class="w-3.5 h-3.5 text-blue-500" fill="none" stroke="currentColor"
                                                                                viewBox="0 0 24 24">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                    d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                            </svg>
                                                                        <?php else: ?>
                                                                            <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor"
                                                                                viewBox="0 0 24 24">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                            </svg>
                                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                    </button>
                                                                </form>

                                                                
                                                                <form method="POST"
                                                                    action="<?php echo e(route('doctors.schedule.destroy', [$doctor, $slot])); ?>"
                                                                    onsubmit="return confirm('¿Eliminar esta franja?')" class="inline">
                                                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                                                    <button type="submit" class="p-0.5 rounded hover:bg-red-100 transition"
                                                                        title="Eliminar">
                                                                        <svg class="w-3.5 h-3.5 text-red-400" fill="none" stroke="currentColor"
                                                                            viewBox="0 0 24 24">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                                d="M6 18L18 6M6 6l12 12" />
                                                                        </svg>
                                                                    </button>
                                                                </form>
                                                            </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <span class="text-sm text-gray-400 italic">Sin horario configurado</span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>

            
            <div class="space-y-4">
                
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100">
                        <h2 class="text-base font-semibold text-gray-800 flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                            </svg>
                            Días Bloqueados
                        </h2>
                    </div>
                    <div class="px-6 py-4">
                        <form method="POST" action="<?php echo e(route('doctors.schedule.blocked.store', $doctor)); ?>"
                            class="space-y-3">
                            <?php echo csrf_field(); ?>
                            <div>
                                <label class="block text-xs font-medium text-gray-600 mb-1">Fecha</label>
                                <input type="date" name="blocked_date" min="<?php echo e(now()->toDateString()); ?>"
                                    value="<?php echo e(old('blocked_date')); ?>"
                                    class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-red-300 focus:border-red-400 outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-gray-600 mb-1">Motivo (opcional)</label>
                                <input type="text" name="reason" value="<?php echo e(old('reason')); ?>"
                                    placeholder="Ej. Vacaciones, feriado..."
                                    class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-red-300 focus:border-red-400 outline-none">
                            </div>
                            <button type="submit"
                                class="w-full bg-red-50 hover:bg-red-100 border border-red-200 text-red-700 text-sm font-medium py-2 rounded-lg transition">
                                Bloquear Fecha
                            </button>
                        </form>
                    </div>
                </div>

                
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100">
                        <h3 class="text-sm font-semibold text-gray-700">Próximas Fechas Bloqueadas</h3>
                    </div>
                    <div class="divide-y divide-gray-50">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $blockedDates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="px-6 py-3 flex items-center justify-between gap-2">
                                <div>
                                    <p class="text-sm font-medium text-gray-800">
                                        <?php echo e($bd->blocked_date->translatedFormat('D d M Y')); ?>

                                    </p>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($bd->reason): ?>
                                        <p class="text-xs text-gray-400"><?php echo e($bd->reason); ?></p>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <form method="POST" action="<?php echo e(route('doctors.schedule.blocked.destroy', [$doctor, $bd])); ?>"
                                    onsubmit="return confirm('¿Eliminar este bloqueo?')">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="p-1.5 rounded-lg text-red-400 hover:bg-red-50 transition"
                                        title="Eliminar bloqueo">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="px-6 py-6 text-center">
                                <p class="text-sm text-gray-400">Sin fechas bloqueadas próximas.</p>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div id="modal-add-slot"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md mx-4 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                <h3 class="text-base font-semibold text-gray-800">Agregar Franja Horaria</h3>
                <button onclick="document.getElementById('modal-add-slot').classList.add('hidden')"
                    class="p-1.5 rounded-lg hover:bg-gray-100 transition text-gray-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form method="POST" action="<?php echo e(route('doctors.schedule.store', $doctor)); ?>" class="px-6 py-5 space-y-4">
                <?php echo csrf_field(); ?>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Día de la semana</label>
                    <select name="day_of_week"
                        class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-300 outline-none">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($num); ?>" <?php echo e(old('day_of_week') == $num ? 'selected' : ''); ?>>
                                <?php echo e($name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Hora inicio</label>
                        <input type="time" name="start_time" value="<?php echo e(old('start_time', '08:00')); ?>"
                            class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-300 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Hora fin</label>
                        <input type="time" name="end_time" value="<?php echo e(old('end_time', '13:00')); ?>"
                            class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-300 outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Duración por cita</label>
                    <select name="slot_duration"
                        class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-300 outline-none">
                        <option value="15">15 minutos</option>
                        <option value="20">20 minutos</option>
                        <option value="30" selected>30 minutos</option>
                        <option value="45">45 minutos</option>
                        <option value="60">1 hora</option>
                    </select>
                </div>

                <div class="flex gap-3 pt-1">
                    <button type="button" onclick="document.getElementById('modal-add-slot').classList.add('hidden')"
                        class="flex-1 py-2.5 border border-gray-200 text-gray-600 text-sm font-medium rounded-lg hover:bg-gray-50 transition">
                        Cancelar
                    </button>
                    <button type="submit"
                        class="flex-1 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition">
                        Guardar Franja
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script>
            // Auto-open modal if validation failed (keep it open on error)
            <?php if($errors->any() && old('day_of_week') !== null): ?>
                document.getElementById('modal-add-slot').classList.remove('hidden');
            <?php endif; ?>
        </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\doctors\schedule.blade.php ENDPATH**/ ?>