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
        <div class="flex items-center gap-4">
            <a href="<?php echo e(route('invoices.index')); ?>" class="p-2 rounded-lg text-gray-400 hover:bg-gray-100 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Factura #<?php echo e($invoice->id); ?></h1>
                <p class="text-sm text-gray-500 mt-1">Detalle del comprobante de pago</p>
            </div>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto space-y-6">

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
                <div
                    class="bg-green-50 border border-green-200 text-green-800 rounded-xl px-4 py-3 flex items-center gap-3">
                    <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            
            <div class="flex items-center justify-between">
                <?php $color = $invoice->status_color; ?>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold
                    bg-<?php echo e($color); ?>-100 text-<?php echo e($color); ?>-700">
                    <?php echo e($invoice->status_label); ?>

                </span>
                <div class="flex items-center gap-2">
                    <a href="<?php echo e(route('invoices.edit', $invoice)); ?>"
                        class="inline-flex items-center gap-1.5 text-sm border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium px-4 py-2 rounded-xl transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Editar
                    </a>
                    <a href="<?php echo e(route('invoices.pdf', $invoice)); ?>"
                        class="inline-flex items-center gap-1.5 text-sm bg-[#4A88F6] hover:bg-blue-600 text-white font-medium px-4 py-2 rounded-xl transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Descargar PDF
                    </a>
                </div>
            </div>

            
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm divide-y divide-gray-50">
                <div class="px-6 py-4">
                    <h2 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-4">Datos de la Cita</h2>
                    <dl class="grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <dt class="text-gray-500">Paciente</dt>
                            <dd class="font-semibold text-gray-800 mt-0.5">
                                <?php echo e($invoice->appointment->patient->name ?? '—'); ?>

                            </dd>
                        </div>
                        <div>
                            <dt class="text-gray-500">Médico</dt>
                            <dd class="font-semibold text-gray-800 mt-0.5">
                                Dr. <?php echo e($invoice->appointment->doctor->name ?? '—'); ?>

                            </dd>
                        </div>
                        <div>
                            <dt class="text-gray-500">Especialidad</dt>
                            <dd class="font-semibold text-gray-800 mt-0.5">
                                <?php echo e($invoice->appointment->specialty->name ?? '—'); ?>

                            </dd>
                        </div>
                        <div>
                            <dt class="text-gray-500">Fecha de Cita</dt>
                            <dd class="font-semibold text-gray-800 mt-0.5">
                                <?php echo e($invoice->appointment->date?->format('d/m/Y H:i') ?? '—'); ?>

                            </dd>
                        </div>
                    </dl>
                </div>
                <div class="px-6 py-4">
                    <h2 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-4">Datos de Pago</h2>
                    <dl class="grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <dt class="text-gray-500">Monto Subtotal</dt>
                            <dd class="text-2xl font-bold text-gray-800 mt-0.5">
                                <?php echo e(\App\Models\Setting::get('currency_symbol', 'S/')); ?>

                                <?php echo e(number_format($invoice->amount, 2)); ?>

                            </dd>
                        </div>
                        <div>
                            <dt class="text-gray-500">Aportación Seguro ARS</dt>
                            <dd class="font-bold text-indigo-600 mt-0.5">
                                -<?php echo e(\App\Models\Setting::get('currency_symbol', 'S/')); ?>

                                <?php echo e(number_format($invoice->insurance_coverage_amount, 2)); ?>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($invoice->insurance): ?> (<span class="text-xs"><?php echo e($invoice->insurance->name); ?></span>)
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </dd>
                        </div>
                        <div>
                            <dt class="text-gray-500 font-semibold">Total Copago Paciente</dt>
                            <dd class="text-xl font-bold text-red-600 mt-0.5">
                                <?php echo e(\App\Models\Setting::get('currency_symbol', 'S/')); ?>

                                <?php echo e(number_format($invoice->patient_copay_amount ?: $invoice->amount, 2)); ?>

                            </dd>
                        </div>
                        <div>
                            <dt class="text-gray-500 mt-1">Método de Pago</dt>
                            <dd class="font-semibold text-gray-800 mt-0.5"><?php echo e($invoice->payment_method_label); ?></dd>
                        </div>
                        <div>
                            <dt class="text-gray-500">Registrado el</dt>
                            <dd class="font-semibold text-gray-800 mt-0.5">
                                <?php echo e($invoice->created_at->format('d/m/Y H:i')); ?>

                            </dd>
                        </div>
                    </dl>
                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($invoice->notes): ?>
                    <div class="px-6 py-4">
                        <h2 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Observaciones</h2>
                        <p class="text-sm text-gray-700"><?php echo e($invoice->notes); ?></p>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

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
<?php endif; ?><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\invoices\show.blade.php ENDPATH**/ ?>