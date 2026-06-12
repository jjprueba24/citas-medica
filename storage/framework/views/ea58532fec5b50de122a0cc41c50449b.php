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
     <?php $__env->slot('header', null, []); ?> Dashboard <?php $__env->endSlot(); ?>

    
    <?php $__env->startPush('scripts'); ?>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <?php $__env->stopPush(); ?>

    <div class="space-y-8">

        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

            
            <div
                class="bg-white rounded-2xl p-6 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] border border-blue-50/50 flex flex-col gap-4 relative overflow-hidden group">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-blue-50 rounded-full opacity-50 group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="flex items-center justify-between relative z-10">
                    <p class="text-sm font-semibold text-gray-500 tracking-wide uppercase">Citas Hoy</p>
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <div class="relative z-10">
                    <p class="text-4xl font-extrabold text-gray-900 tracking-tight"><?php echo e($todayAppointments); ?></p>
                </div>
            </div>

            
            <div
                class="bg-white rounded-2xl p-6 shadow-[0_2px_10px_-3px_rgba(99,102,241,0.1)] border border-indigo-50/50 flex flex-col gap-4 relative overflow-hidden group">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-indigo-50 rounded-full opacity-50 group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="flex items-center justify-between relative z-10">
                    <p class="text-sm font-semibold text-gray-500 tracking-wide uppercase">Esta Semana</p>
                    <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                </div>
                <div class="relative z-10">
                    <p class="text-4xl font-extrabold text-gray-900 tracking-tight"><?php echo e($weekAppointments); ?></p>
                </div>
            </div>

            
            <div
                class="bg-white rounded-2xl p-6 shadow-[0_2px_10px_-3px_rgba(16,185,129,0.1)] border border-emerald-50/50 flex flex-col gap-4 relative overflow-hidden group">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-emerald-50 rounded-full opacity-50 group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="flex items-center justify-between relative z-10">
                    <p class="text-sm font-semibold text-gray-500 tracking-wide uppercase">Pacientes</p>
                    <div
                        class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                </div>
                <div class="relative z-10">
                    <p class="text-4xl font-extrabold text-gray-900 tracking-tight"><?php echo e($totalPatients); ?></p>
                </div>
            </div>

            
            <div
                class="bg-white rounded-2xl p-6 shadow-[0_2px_10px_-3px_rgba(168,85,247,0.1)] border border-purple-50/50 flex flex-col gap-4 relative overflow-hidden group">
                <div
                    class="absolute -right-6 -top-6 w-24 h-24 bg-purple-50 rounded-full opacity-50 group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="flex items-center justify-between relative z-10">
                    <p class="text-sm font-semibold text-gray-500 tracking-wide uppercase">Médicos</p>
                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0M12 2a10 10 0 100 20 10 10 0 000-20z" />
                        </svg>
                    </div>
                </div>
                <div class="relative z-10">
                    <p class="text-4xl font-extrabold text-gray-900 tracking-tight"><?php echo e($totalDoctors); ?></p>
                </div>
            </div>
        </div>

        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div
                class="bg-gradient-to-br from-yellow-50 to-amber-50 rounded-2xl p-5 flex items-center gap-4 relative overflow-hidden border border-yellow-100/50">
                <div
                    class="w-12 h-12 bg-white/60 rounded-xl flex items-center justify-center shadow-sm backdrop-blur-sm">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-2xl font-bold text-yellow-900 leading-none"><?php echo e($pendingAppointments); ?></p>
                    <p class="text-sm text-yellow-700 font-medium mt-1">Pendientes</p>
                </div>
            </div>
            <div
                class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-5 flex items-center gap-4 relative overflow-hidden border border-blue-100/50">
                <div
                    class="w-12 h-12 bg-white/60 rounded-xl flex items-center justify-center shadow-sm backdrop-blur-sm">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-2xl font-bold text-blue-900 leading-none"><?php echo e($confirmedAppointments); ?></p>
                    <p class="text-sm text-blue-700 font-medium mt-1">Confirmadas</p>
                </div>
            </div>
            <div
                class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-5 flex items-center gap-4 relative overflow-hidden border border-green-100/50">
                <div
                    class="w-12 h-12 bg-white/60 rounded-xl flex items-center justify-center shadow-sm backdrop-blur-sm">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <p class="text-2xl font-bold text-green-900 leading-none"><?php echo e($completedThisMonth); ?></p>
                    <p class="text-sm text-green-700 font-medium mt-1">Atendidas (Mes)</p>
                </div>
            </div>
            <div
                class="bg-gradient-to-br from-red-50 to-rose-50 rounded-2xl p-5 flex items-center gap-4 relative overflow-hidden border border-red-100/50">
                <div
                    class="w-12 h-12 bg-white/60 rounded-xl flex items-center justify-center shadow-sm backdrop-blur-sm">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div>
                    <p class="text-2xl font-bold text-red-900 leading-none"><?php echo e($cancelledThisMonth); ?></p>
                    <p class="text-sm text-red-700 font-medium mt-1">Canceladas (Mes)</p>
                </div>
            </div>
        </div>

        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            
            <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Actividad de Citas</h3>
                        <p class="text-sm text-gray-500 mt-0.5">Volumen proyectado vs real (7 días)</p>
                    </div>
                </div>
                <div id="chart-bar" class="h-64"></div>
            </div>

            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <div class="mb-6">
                    <h3 class="text-lg font-bold text-gray-900">Estado General</h3>
                    <p class="text-sm text-gray-500 mt-0.5">Distribución de todas las citas</p>
                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($donutValues) > 0): ?>
                    <div id="chart-donut" class="h-64 flex items-center justify-center"></div>
                <?php else: ?>
                    <div class="h-64 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto bg-gray-50 rounded-full flex items-center justify-center mb-3">
                                <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                </svg>
                            </div>
                            <p class="text-sm text-gray-400 font-medium">No hay suficientes datos</p>
                        </div>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>

        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            
            <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Agenda Próxima</h3>
                        <p class="text-sm text-gray-500 mt-0.5">Pacientes agendados próximamente</p>
                    </div>
                    <a href="<?php echo e(route('appointments.index')); ?>"
                        class="inline-flex items-center gap-1.5 px-3 py-1.5 text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors">
                        Ver Calendario
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="p-2">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($upcomingAppointments->isEmpty()): ?>
                        <div class="py-12 text-center">
                            <div class="w-16 h-16 mx-auto bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <p class="text-gray-900 font-medium">Agenda libre</p>
                            <p class="text-sm text-gray-500 mt-1">No hay citas programadas para los próximos días.</p>
                        </div>
                    <?php else: ?>
                        <div class="space-y-1">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $upcomingAppointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $statusStyles = [
                                        'pending' => 'bg-yellow-100 text-yellow-700 border-yellow-200',
                                        'confirmed' => 'bg-blue-100 text-blue-700 border-blue-200',
                                        'completed' => 'bg-green-100 text-green-700 border-green-200',
                                        'in_progress' => 'bg-emerald-100 text-emerald-700 border-emerald-200',
                                    ];
                                    $c = $statusStyles[$appt->status] ?? 'bg-gray-100 text-gray-700 border-gray-200';
                                ?>
                                <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-gray-50 transition-colors group">
                                    <div
                                        class="w-14 h-14 rounded-xl bg-gray-50 border border-gray-100 flex flex-col items-center justify-center flex-shrink-0 group-hover:bg-white group-hover:border-blue-100 transition-colors">
                                        <span
                                            class="text-sm font-medium text-gray-500 uppercase leading-none"><?php echo e(\Carbon\Carbon::parse($appt->date)->translatedFormat('M')); ?></span>
                                        <span
                                            class="text-xl font-bold text-gray-900 leading-tight mt-0.5"><?php echo e(\Carbon\Carbon::parse($appt->date)->format('d')); ?></span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex justify-between items-start mb-1">
                                            <p class="font-bold text-gray-900 text-base truncate">
                                                <?php echo e($appt->patient->user->name); ?></p>
                                            <span
                                                class="text-sm font-semibold text-gray-700 whitespace-nowrap"><?php echo e(\Carbon\Carbon::parse($appt->date)->format('H:i')); ?></span>
                                        </div>
                                        <div class="flex justify-between items-center mt-1.5">
                                            <div class="flex items-center gap-2 text-sm text-gray-500 truncate">
                                                <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                    </path>
                                                </svg>
                                                <span class="truncate">Dr. <?php echo e($appt->doctor->user->name); ?></span>
                                                <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                                                <span class="truncate"><?php echo e($appt->specialty->name); ?></span>
                                            </div>
                                            <span
                                                class="px-2.5 py-1 text-xs font-semibold rounded-md border <?php echo e($c); ?>"><?php echo e($appt->status_label); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                    <h3 class="text-lg font-bold text-gray-900">Rendimiento Médico</h3>
                    <p class="text-sm text-gray-500 mt-0.5">Top 5 médicos con más citas (Mes actual)</p>
                </div>
                <div class="p-6">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($topDoctors->isEmpty()): ?>
                        <div class="py-8 text-center">
                            <div class="w-16 h-16 mx-auto bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                            </div>
                            <p class="text-gray-500 text-sm">Sin datos suficientes este mes.</p>
                        </div>
                    <?php else: ?>
                        <div class="space-y-6">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $topDoctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex items-center gap-4">
                                    <div class="relative">
                                        <img src="<?php echo e($doctor->user->profile_photo_url); ?>" alt="<?php echo e($doctor->user->name); ?>"
                                            class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
                                        <span
                                            class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full flex items-center justify-center text-[10px] font-bold border-2 border-white
                                                <?php echo e($i === 0 ? 'bg-yellow-400 text-yellow-900' : ($i === 1 ? 'bg-gray-300 text-gray-800' : ($i === 2 ? 'bg-orange-300 text-orange-900' : 'bg-gray-100 text-gray-500'))); ?>">
                                            <?php echo e($i + 1); ?>

                                        </span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex justify-between items-center mb-1.5">
                                            <p class="text-sm font-bold text-gray-900 truncate">Dr. <?php echo e($doctor->user->name); ?>

                                            </p>
                                            <span class="text-sm font-semibold text-gray-700"><?php echo e($doctor->month_count); ?> <span
                                                    class="text-xs font-normal text-gray-400">citas</span></span>
                                        </div>
                                        <?php $max = $topDoctors->first()->month_count ?: 1; ?>
                                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                            <div class="h-2 rounded-full <?php echo e($i === 0 ? 'bg-gradient-to-r from-yellow-400 to-yellow-500' : 'bg-gradient-to-r from-blue-400 to-indigo-500'); ?>"
                                                style="width: <?php echo e(($doctor->month_count / $max) * 100); ?>%"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>

    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // ── Bar Chart ──────────────────────────────────────────────────────
            var barOptions = {
                series: [{
                    name: 'Citas Programadas',
                    data: <?php echo json_encode($chartValues, 15, 512) ?>
                }],
                chart: {
                    type: 'bar',
                    height: 280,
                    toolbar: { show: false },
                    fontFamily: 'inherit'
                },
                plotOptions: {
                    bar: {
                        borderRadius: 6,
                        columnWidth: '45%',
                        dataLabels: { position: 'top' },
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function (val) { return val; },
                    offsetY: -20,
                    style: { fontSize: '12px', colors: ["#6b7280"], fontWeight: 600 }
                },
                xaxis: {
                    categories: <?php echo json_encode($chartDays, 15, 512) ?>,
                    position: 'bottom',
                    axisBorder: { show: false },
                    axisTicks: { show: false },
                    labels: { style: { colors: '#9ca3af', fontSize: '13px', fontWeight: 500 } },
                    crosshairs: {
                        fill: { type: 'gradient', gradient: { colorFrom: '#D8E3F0', colorTo: '#BED1E6', stops: [0, 100], opacityFrom: 0.4, opacityTo: 0.5 } }
                    },
                    tooltip: { enabled: true }
                },
                yaxis: {
                    axisBorder: { show: false },
                    axisTicks: { show: false },
                    labels: { show: false },
                    min: 0,
                    forceNiceScale: true
                },
                grid: {
                    show: true,
                    borderColor: '#f3f4f6',
                    strokeDashArray: 4,
                    xaxis: { lines: { show: false } },
                    yaxis: { lines: { show: true } }
                },
                colors: ['#4f46e5'],
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'light',
                        type: "vertical",
                        shadeIntensity: 0.25,
                        gradientToColors: undefined,
                        inverseColors: true,
                        opacityFrom: 0.85,
                        opacityTo: 0.85,
                        stops: [50, 0, 100]
                    }
                },
                tooltip: { theme: 'light', y: { formatter: function (val) { return val + " citas" } } }
            };

            var barChart = new ApexCharts(document.querySelector("#chart-bar"), barOptions);
            barChart.render();

            // ── Donut Chart ─────────────────────────────────────────────────────
            <?php if(count($donutValues) > 0): ?>
                var donutOptions = {
                    series: <?php echo json_encode($donutValues, 15, 512) ?>,
                    labels: <?php echo json_encode($donutLabels, 15, 512) ?>,
                    chart: { type: 'donut', height: 280, fontFamily: 'inherit' },
                    colors: ['#f59e0b', '#3b82f6', '#10b981', '#6366f1', '#ef4444', '#9ca3af'],
                    plotOptions: {
                        pie: {
                            donut: {
                                size: '75%',
                                labels: {
                                    show: true,
                                    name: { show: true, fontSize: '14px', fontFamily: 'inherit', fontWeight: 600, color: '#6b7280', offsetY: -10 },
                                    value: { show: true, fontSize: '32px', fontFamily: 'inherit', fontWeight: 800, color: '#111827', offsetY: 10, formatter: function (val) { return val } },
                                    total: { show: true, showAlways: true, label: 'Total', fontSize: '14px', fontWeight: 600, color: '#6b7280', formatter: function (w) { return w.globals.seriesTotals.reduce((a, b) => { return a + b }, 0) } }
                                }
                            }
                        }
                    },
                    dataLabels: { enabled: false },
                    legend: { show: true, position: 'bottom', horizontalAlign: 'center', fontSize: '13px', markers: { width: 10, height: 10, radius: 5 }, itemMargin: { horizontal: 10, vertical: 5 } },
                    stroke: { show: true, colors: ['#fff'], width: 3 },
                    tooltip: { theme: 'light', fillSeriesColor: false }
                };

                var donutChart = new ApexCharts(document.querySelector("#chart-donut"), donutOptions);
                donutChart.render();
            <?php endif; ?>
        });
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
<?php endif; ?><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\dashboard.blade.php ENDPATH**/ ?>