<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="max-w-7xl mx-auto flex items-center justify-center h-[90vh] ">
        <div class="text-center">
            <p class="mb-4 font-extrabold text-7xl"><span class="">Market</span > makes <span class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-yellow-500">dreams</span><br /> come true</p>
            <p class="mb-4 text-xl font-semibold text-gray-900">You are free to choose between thousands of products in our store</p>
            <div class="flex items-center justify-center gap-5 mt-4">
                <a href="#">
                    <button class="second-btn">See Categories</button>
                </a>
                <a href="#" >
                    <button class="btn">
                        <p>See Takhfidat</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\Laravel_Store\resources\views/home.blade.php ENDPATH**/ ?>