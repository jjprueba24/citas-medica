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
     <?php $__env->slot('header', null, []); ?> Agendar Cita Médica <?php $__env->endSlot(); ?>

    <div class="max-w-3xl mx-auto pb-12">
        <div class="bg-white rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100/80 overflow-hidden">
            
            
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 p-8 sm:p-10 relative overflow-hidden">
                 <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] [background-size:24px_24px] opacity-20"></div>
                 <div class="relative z-10 text-white">
                     <h2 class="text-3xl font-extrabold tracking-tight mb-2">Nueva Consulta</h2>
                     <p class="text-blue-100 text-[15px] font-medium max-w-lg">
                         Completa los detalles para agendar la cita médica de <strong class="text-white"><?php echo e($patient->user->name); ?></strong>.
                     </p>
                 </div>
            </div>

            <div class="p-8 sm:p-10">
                <form method="POST" action="<?php echo e(route('portal.appointments.store')); ?>" class="space-y-8">
                    <?php echo csrf_field(); ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        
                        <div class="space-y-2 relative">
                            <label class="block text-sm font-bold text-gray-700">1. Especialidad <span class="text-red-500">*</span></label>
                            <select name="specialty_id" id="specialty_select" required
                                class="w-full rounded-2xl border-gray-200 px-5 py-3.5 text-[15px] focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all shadow-sm bg-gray-50/50 hover:bg-gray-50 cursor-pointer appearance-none <?php $__errorArgs = ['specialty_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 focus:ring-red-500/10 focus:border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                onchange="loadDoctors(this.value)">
                                <option value="">Selecciona la especialidad</option>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $specialties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($sp->id); ?>" <?php echo e(old('specialty_id') == $sp->id ? 'selected' : ''); ?>>
                                        <?php echo e($sp->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 pt-7 text-gray-500">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['specialty_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        
                        <div class="space-y-2 relative">
                            <label class="block text-sm font-bold text-gray-700">2. Médico Especialista <span class="text-red-500">*</span></label>
                            <select name="doctor_id" id="doctor_select" required
                                class="w-full rounded-2xl border-gray-200 px-5 py-3.5 text-[15px] focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all shadow-sm bg-gray-50/50 hover:bg-gray-50 cursor-pointer appearance-none <?php $__errorArgs = ['doctor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 focus:ring-red-500/10 focus:border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                onchange="onDoctorChange()">
                                <option value="">Primero selecciona una especialidad</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 pt-7 text-gray-500">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['doctor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        
                        <div class="space-y-2 relative">
                            <label class="block text-sm font-bold text-gray-700">3. Sede o Consultorio <span class="text-red-500">*</span></label>
                            <select name="office_id" id="office_select" required
                                class="w-full rounded-2xl border-gray-200 px-5 py-3.5 text-[15px] focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all shadow-sm bg-gray-50/50 hover:bg-gray-50 cursor-pointer appearance-none <?php $__errorArgs = ['office_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 focus:ring-red-500/10 focus:border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value="">Primero selecciona un médico</option>
                            </select>
                             <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 pt-7 text-gray-500">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['office_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        
                        <div class="space-y-2 relative">
                            <label class="block text-sm font-bold text-gray-700">4. Servicio Deseado <span class="text-red-500">*</span></label>
                            <select name="appointment_type_id" id="appointment_type_select" required
                                onchange="onDoctorOrDateChange()"
                                class="w-full rounded-2xl border-gray-200 px-5 py-3.5 text-[15px] focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all shadow-sm bg-gray-50/50 hover:bg-gray-50 cursor-pointer appearance-none <?php $__errorArgs = ['appointment_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 focus:ring-red-500/10 focus:border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value="">Primero selecciona un médico</option>
                            </select>
                             <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 pt-7 text-gray-500">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['appointment_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>

                    <div class="border-t border-gray-100 pt-8 mt-8"></div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">5. Fecha de la Cita <span class="text-red-500">*</span></label>
                                <input type="date" id="appt_date" min="<?php echo e(now()->toDateString()); ?>" value="<?php echo e(old('appt_date')); ?>"
                                    onchange="onDoctorOrDateChange()"
                                    class="w-full rounded-2xl border-gray-200 px-5 py-3.5 text-[15px] focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all shadow-sm bg-gray-50/50 hover:bg-gray-50">
                            </div>

                            
                            <div id="slots_wrapper" class="hidden">
                                <label class="block text-sm font-bold text-gray-700 mb-3">6. Horarios Disponibles <span class="text-red-500">*</span></label>
                                <div id="slots_container" class="flex flex-wrap gap-2.5"></div>
                                <p id="slots_message" class="text-[15px] font-medium text-amber-600 bg-amber-50 p-4 rounded-xl mt-2 hidden"></p>
                                <input type="hidden" name="date" id="date_hidden" value="<?php echo e(old('date')); ?>">
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1 font-medium"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-gray-700">Motivo de consulta <span class="text-gray-400 font-normal">(Opcional)</span></label>
                            <textarea name="reason" rows="7"
                                placeholder="Describe brevemente tus síntomas o el motivo principal de tu visita hoy..."
                                class="w-full rounded-2xl border-gray-200 px-5 py-4 text-[15px] focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all shadow-sm bg-gray-50/50 hover:bg-gray-50 placeholder-gray-400 resize-none"><?php echo e(old('reason')); ?></textarea>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-8 mt-4 border-t border-gray-100">
                        <a href="<?php echo e(route('portal.dashboard')); ?>"
                            class="px-6 py-3.5 text-[15px] font-bold text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded-xl transition-colors">
                            Cancelar
                        </a>
                        <button type="submit"
                            class="px-8 py-3.5 bg-blue-600 text-white rounded-xl text-[15px] font-bold hover:bg-blue-700 transition-all shadow-[0_8px_20px_rgb(6,81,237,0.2)] hover:shadow-[0_8px_25px_rgb(6,81,237,0.3)] hover:-translate-y-0.5 flex items-center gap-2">
                            Confirmar y Agendar
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const AVAILABLE_SLOTS_URL = '<?php echo e(route("doctors.available-slots")); ?>';
        const DOCTORS_BY_SPEC_URL = '<?php echo e(url("specialties")); ?>/{id}/doctors';

        let cachedDoctors = [];

        function loadDoctors(specialtyId) {
            const select = document.getElementById('doctor_select');
            const officeSelect = document.getElementById('office_select');
            const typeSelect = document.getElementById('appointment_type_select');
            select.innerHTML = '<option value="">Cargando...</option>';
            officeSelect.innerHTML = '<option value="">Primero seleccione un médico</option>';
            typeSelect.innerHTML = '<option value="">Primero seleccione un médico</option>';
            cachedDoctors = [];

            if (!specialtyId) {
                select.innerHTML = '<option value="">Primero seleccione una especialidad</option>';
                resetSlots();
                return;
            }
            fetch(DOCTORS_BY_SPEC_URL.replace('{id}', specialtyId))
                .then(r => r.json())
                .then(doctors => {
                    cachedDoctors = doctors;
                    select.innerHTML = '<option value="">Seleccione al especialista</option>';
                    doctors.forEach(d => {
                        select.innerHTML += `<option value="${d.id}">Dr. ${d.name}</option>`;
                    });
                    if (!doctors.length) {
                        select.innerHTML = '<option value="">No hay médicos disponibles para esta especialidad</option>';
                    }
                    resetSlots();
                });
        }

        function onDoctorChange() {
            const doctorId = document.getElementById('doctor_select').value;
            const officeSelect = document.getElementById('office_select');
            const typeSelect = document.getElementById('appointment_type_select');

            officeSelect.innerHTML = '<option value="">Seleccionar consultorio</option>';
            typeSelect.innerHTML = '<option value="">Seleccionar servicio</option>';

            if (doctorId) {
                const doctor = cachedDoctors.find(d => d.id == doctorId);
                if (doctor && doctor.offices && doctor.offices.length > 0) {
                    doctor.offices.forEach(o => {
                        officeSelect.innerHTML += `<option value="${o.id}">${o.name}</option>`;
                    });
                } else {
                    officeSelect.innerHTML = '<option value="">El médico no tiene consultorios registrados</option>';
                }

                if (doctor && doctor.appointmentTypes && doctor.appointmentTypes.length > 0) {
                    doctor.appointmentTypes.forEach(t => {
                        typeSelect.innerHTML += `<option value="${t.id}">${t.name} (${t.duration_minutes} min)</option>`;
                    });
                } else {
                    typeSelect.innerHTML = '<option value="">El médico no ha configurado servicios</option>';
                }
            } else {
                officeSelect.innerHTML = '<option value="">Primero seleccione un médico</option>';
                typeSelect.innerHTML = '<option value="">Primero seleccione un médico</option>';
            }

            onDoctorOrDateChange();
        }

        function onDoctorOrDateChange() {
            const doctorId = document.getElementById('doctor_select').value;
            const date = document.getElementById('appt_date').value;
            const typeId = document.getElementById('appointment_type_select').value;

            if (doctorId && date && typeId) {
                loadSlots(doctorId, date, typeId);
            }
            else {
                resetSlots();
            }
        }

        function loadSlots(doctorId, date, typeId) {
            const wrapper = document.getElementById('slots_wrapper');
            const container = document.getElementById('slots_container');
            const msgEl = document.getElementById('slots_message');
            container.innerHTML = '<span class="text-sm text-gray-400">Buscando horarios disponibles...</span>';
            msgEl.classList.add('hidden');
            wrapper.classList.remove('hidden');
            document.getElementById('date_hidden').value = '';

            fetch(`${AVAILABLE_SLOTS_URL}?doctor_id=${doctorId}&date=${date}&appointment_type_id=${typeId}`)
                .then(r => r.json())
                .then(data => {
                    container.innerHTML = '';
                    if (!data.available) {
                        msgEl.textContent = data.message;
                        msgEl.classList.remove('hidden');
                        return;
                    }
                    if (!data.slots.length) {
                        msgEl.textContent = 'El médico no tiene horarios disponibles en esta fecha.';
                        msgEl.classList.remove('hidden');
                        return;
                    }
                    data.slots.forEach(slot => {
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.textContent = slot.time;
                        btn.dataset.time = slot.time;
                        if (!slot.available) {
                            btn.disabled = true;
                            btn.className = 'px-3 py-1.5 rounded-lg border border-gray-200 text-sm text-gray-300 cursor-not-allowed line-through bg-gray-50';
                        } else {
                            btn.className = 'px-3 py-1.5 rounded-lg border border-blue-200 text-sm text-blue-700 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition font-medium';
                            btn.onclick = () => selectSlot(btn, date);
                        }
                        container.appendChild(btn);
                    });
                })
                .catch(() => {
                    container.innerHTML = '';
                    msgEl.textContent = 'Error al cargar los horarios. Intente de nuevo.';
                    msgEl.classList.remove('hidden');
                });
        }

        function selectSlot(btn, date) {
            // Unselect all
            document.querySelectorAll('#slots_container button').forEach(b => {
                if (!b.disabled) {
                    b.className = 'px-3 py-1.5 rounded-lg border border-blue-200 text-sm text-blue-700 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition font-medium';
                }
            });
            btn.className = 'px-3 py-1.5 rounded-lg border border-blue-600 bg-blue-600 text-white text-sm font-medium';
            document.getElementById('date_hidden').value = date + 'T' + btn.dataset.time;
        }

        function resetSlots() {
            document.getElementById('slots_wrapper').classList.add('hidden');
            document.getElementById('slots_container').innerHTML = '';
            document.getElementById('date_hidden').value = '';
        }

        <?php if(old('specialty_id')): ?>
            loadDoctors('<?php echo e(old('specialty_id')); ?>');
        <?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\portal\appointments-create.blade.php ENDPATH**/ ?>