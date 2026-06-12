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
     <?php $__env->slot('header', null, []); ?> Chat con Dr. <?php echo e($doctor->name); ?> <?php $__env->endSlot(); ?>

    <div class="max-w-4xl mx-auto space-y-6 pb-12 flex flex-col min-h-[calc(100vh-140px)]">
        
        
        <div class="flex items-center justify-between bg-white p-4 sm:p-6 rounded-3xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)] border border-gray-100 sticky top-0 z-10 shrink-0">
            <div class="flex items-center gap-4">
                <a href="<?php echo e(route('portal.chat.index')); ?>" class="p-2 -ml-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-xl transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                </a>
                <div class="relative">
                    <img src="<?php echo e($doctor->avatar_url); ?>" alt="Dr. <?php echo e($doctor->name); ?>" class="w-12 h-12 rounded-xl object-cover shadow-sm border border-gray-100">
                    <span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full bg-green-400 ring-2 ring-white"></span>
                </div>
                <div>
                    <h1 class="text-lg font-bold text-gray-900 leading-tight">Dr. <?php echo e($doctor->name); ?></h1>
                    <p class="text-[13px] text-gray-500 font-medium">En línea</p>
                </div>
            </div>
        </div>

        
        <div class="flex-1 bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden flex flex-col relative">
            <div class="absolute inset-0 bg-gray-50/50 pointer-events-none"></div>
            
            <div class="flex-1 overflow-y-auto p-4 sm:p-6 space-y-6 relative z-10" id="chatbox">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($messages->isEmpty()): ?>
                    <div class="h-full flex flex-col items-center justify-center text-center p-8">
                        <div class="w-16 h-16 bg-blue-50 text-blue-500 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Inicia la conversación</h3>
                        <p class="text-sm text-gray-500 max-w-xs">Escríbele al Dr. <?php echo e($doctor->name); ?> para consultar dudas médicas breves.</p>
                    </div>
                <?php else: ?>
                    <?php $currentDate = null; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php 
                            $msgDate = $msg->created_at->format('Y-m-d'); 
                            $isPatient = $msg->sender_id === auth()->id();
                        ?>
                        
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($currentDate !== $msgDate): ?>
                            <div class="flex justify-center my-4">
                                <span class="bg-gray-100 text-gray-500 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                    <?php echo e($msg->created_at->isToday() ? 'Hoy' : ($msg->created_at->isYesterday() ? 'Ayer' : $msg->created_at->translatedFormat('d M Y'))); ?>

                                </span>
                            </div>
                            <?php $currentDate = $msgDate; ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <div class="flex <?php echo e($isPatient ? 'justify-end' : 'justify-start'); ?> group/msg">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$isPatient): ?>
                                <img src="<?php echo e($doctor->avatar_url); ?>" alt="" class="w-8 h-8 rounded-lg object-cover mr-2 self-end mb-1 opacity-80 shrink-0">
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            
                            <div class="max-w-[75%] sm:max-w-[65%] flex flex-col <?php echo e($isPatient ? 'items-end' : 'items-start'); ?>">
                                <div class="px-5 py-3 rounded-[1.25rem] shadow-sm <?php echo e($isPatient ? 'bg-blue-600 text-white rounded-br-sm' : 'bg-gray-100/80 text-gray-800 rounded-bl-sm border border-gray-200/50'); ?> relative">
                                    <p class="text-[15px] leading-relaxed break-words"><?php echo e($msg->content); ?></p>
                                </div>
                                <div class="flex items-center gap-1 mt-1.5 px-1 opacity-0 group-hover/msg:opacity-100 transition-opacity">
                                    <span class="text-[11px] font-medium text-gray-400"><?php echo e($msg->created_at->format('H:i')); ?></span>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isPatient): ?>
                                        <svg class="w-3.5 h-3.5 <?php echo e($msg->read_at ? 'text-blue-500' : 'text-gray-300'); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($msg->read_at): ?>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 18l4 4L19 12" class="opacity-50" />
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </svg>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            
            <div class="bg-white border-t border-gray-100 p-4 sm:p-5 shrink-0 z-10 w-full relative">
                <form action="<?php echo e(route('portal.chat.store', $doctor)); ?>" method="POST" class="flex items-end gap-3 max-w-full">
                    <?php echo csrf_field(); ?>
                    <div class="flex-1 relative">
                        <textarea name="content" rows="1" required placeholder="Escribe tu mensaje aquí..."
                            class="w-full rounded-2xl border-gray-200 pl-4 pr-12 py-3.5 text-[15px] focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all shadow-sm bg-gray-50/50 hover:bg-gray-50 resize-none max-h-32 min-h-[52px]"
                            oninput="this.style.height = ''; this.style.height = Math.min(this.scrollHeight, 128) + 'px'"></textarea>
                    </div>
                    <button type="submit" class="shrink-0 w-[52px] h-[52px] bg-blue-600 text-white rounded-2xl flex items-center justify-center hover:bg-blue-700 transition-all shadow-[0_4px_10px_rgb(6,81,237,0.2)] hover:shadow-[0_4px_15px_rgb(6,81,237,0.3)] hover:-translate-y-0.5 group">
                        <svg class="w-5 h-5 ml-1 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </form>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-2 font-medium ml-2"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>

    <script>
        // Auto-scroll to bottom of chat
        const chatbox = document.getElementById('chatbox');
        if (chatbox) {
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        // Allow sending with Enter (Shift+Enter for new line)
        document.querySelector('textarea[name="content"]')?.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                if (this.value.trim() !== '') {
                    this.closest('form').submit();
                }
            }
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
<?php endif; ?>
<?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\portal\chat\show.blade.php ENDPATH**/ ?>