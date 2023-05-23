<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <div class="grid grid-cols-2 gap-4 mx-auto my-5 max-w-7xl">
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(count($category->products)>0): ?>
      <div class="w-full p-3 mb-4 border-2 border-orange-500 rounded-sm shadow-lg grid-span-1">
        <div class="w-full">
          <h1 class="pb-4 text-2xl font-bold text-center text-black"><?php echo e($category->name); ?></h1>
        </div>
        <div class="grid grid-cols-2 gap-3">
          <?php for($i = 0; $i < 2; $i++): ?>
            <div class="max-w-sm my-2 bg-white border-2 rounded-md shadow-lg">
              <img class="w-full rounded-t-md" src=<?php echo e($category->products[$i]->images[0]->image_path); ?> alt="product_image" />
              <div class="p-3">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo e($category->products[$i]->name); ?></h5>
                  <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center justify-start gap-2 text-2xl font-semibold text-gray-800">
                      <img src=<?php echo e(asset('icons/dollar-bill.png')); ?> alt="dollar" class="w-9">
                      <u><?php echo e($category->products[$i]->price); ?>DH</u>
                    </div>
                    <div class="flex items-center justify-start gap-2 <?php echo e($category->products[$i]->stock < 20 ? 'text-red-500' : 'text-green-600'); ?> font-semibold text-lg">
                      <?php if($category->products[$i]->stock < 20): ?>
                        <img src=<?php echo e(asset('icons/boxes-red.png')); ?> class="w-5" alt="">
                      <?php else: ?>
                        <img src=<?php echo e(asset('icons/boxes.png')); ?> class="w-5" alt="">
                      <?php endif; ?>
                      <p><?php echo e($category->products[$i]->stock); ?></p>
                    </div>
                  </div>
                  <div class="grid grid-cols-4 gap-2">
                    <?php if(auth()->guard()->check()): ?>
                      <button type="button" onclick="addToCartRequest(<?php echo e(auth()->user()->id); ?>, <?php echo e($category->products[$i]->id); ?>)" class="flex items-center justify-center col-span-3 gap-3 px-3 py-2 text-sm font-semibold text-center text-white bg-orange-500 rounded-sm">
                        <img src=<?php echo e(asset('icons/cart-white.png')); ?> alt="cart" class="w-5">
                        <p>Add To Cart</p>
                      </button>
                    <?php else: ?>
                      <a href=<?php echo e(route('login')); ?>  class="col-span-3 gap-3 px-3 py-2 text-sm font-semibold text-center text-white bg-orange-500 rounded-sm">
                        <button type="button" class="flex items-center justify-center w-full gap-2">
                          <img src=<?php echo e(asset('icons/cart-white.png')); ?> alt="cart" class="w-5">
                          <p>Add To Cart</p>
                        </button>
                      </a>
                    <?php endif; ?>
                    <a href="#" class="flex items-center justify-center w-full h-full col-span-1 text-orange-500 border-2 border-orange-500 rounded-sm">
                      <img src=<?php echo e(asset('icons/heart.png')); ?> alt="heart" class="w-5">
                    </a>
                  </div>
                </div>
            </div>
          <?php endfor; ?>
        </div>
        <div class="w-full text-right">
          <a href=<?php echo e(route('store.showCategory', $category->id )); ?> class="font-semibold text-orange-500 hover:underline">See more products >></a>
        </div>
      </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\Laravel_Store\resources\views/store/categories/categories.blade.php ENDPATH**/ ?>