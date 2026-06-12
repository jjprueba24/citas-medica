<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Paciente — <?php echo e(\App\Models\Setting::get('clinic_name', 'CitasMédicas')); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="h-full font-[Inter]">

    
    <nav class="bg-white border-b border-gray-100 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <a href="<?php echo e(route('portal.dashboard')); ?>" class="flex items-center gap-3">
                    <?php
                        $logoPath = \App\Models\Setting::get('logo_path');
                        $clinicName = \App\Models\Setting::get('clinic_name', 'CitasMédicas');
                    ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($logoPath): ?>
                        <img src="<?php echo e(Storage::url($logoPath)); ?>" alt="Logo"
                            class="w-9 h-9 object-contain rounded-xl bg-[#4A88F6] p-1">
                    <?php else: ?>
                        <div class="w-9 h-9 bg-[#4A88F6] rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <div>
                        <p class="text-sm font-bold text-gray-800 leading-none">
                            <?php echo e($clinicName); ?>

                        </p>
                        <p class="text-xs text-gray-400 leading-none mt-0.5">Portal del Paciente</p>
                    </div>
                </a>

                
                <div class="hidden md:flex items-center gap-1">
                    <?php
                        $navLinks = [
                            ['route' => 'portal.dashboard', 'label' => 'Inicio'],
                            ['route' => 'portal.appointments', 'label' => 'Mis Citas'],
                            ['route' => 'portal.medical-history', 'label' => 'Historia Clínica'],
                            ['route' => 'portal.invoices', 'label' => 'Mis Facturas'],
                            ['route' => 'portal.chat.index', 'label' => 'Mensajes'],
                        ];
                    ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $navLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route($link['route'])); ?>"
                            class="px-4 py-2 rounded-xl text-sm font-medium transition
                                                  <?php echo e(request()->routeIs($link['route']) ? 'bg-blue-50 text-[#4A88F6]' : 'text-gray-600 hover:bg-gray-50'); ?>">
                            <?php echo e($link['label']); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

                
                <div class="flex items-center gap-3">
                    <span class="text-sm text-gray-600 hidden sm:block"><?php echo e(auth()->user()->name); ?></span>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit"
                            class="text-xs text-gray-500 hover:text-red-500 border border-gray-200 hover:border-red-200 px-3 py-1.5 rounded-lg transition">
                            Salir
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-5">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <div
                class="mb-4 bg-green-50 border border-green-200 text-green-800 rounded-xl px-4 py-3 flex items-center gap-2 text-sm">
                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('error')): ?>
            <div class="mb-4 bg-red-50 border border-red-200 text-red-800 rounded-xl px-4 py-3 text-sm">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
        <?php echo e($slot); ?>

    </main>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\layouts\portal.blade.php ENDPATH**/ ?>