<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <div class="mx-auto my-2 max-w-7xl">
    <div class="w-full py-3 text-center">
      <p class="text-3xl font-semibold text-orange-500"><?php echo e($category->name); ?> Category</p>
    </div>
    <div class="flex flex-wrap items-start justify-around mx-auto my-5 max-w-7xl">
      <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
        $limitedText = Str::words($product->description, 9, '...');
      ?>
      <div class="max-w-sm my-2 bg-white border-2 rounded-md shadow-lg">
        <?php if(count($product->images) === 0): ?>
          <img class="w-full rounded-t-md" src=<?php echo e(asset('/images/image.404.png')); ?> alt="product_image" />
        <?php else: ?>
          <img class="w-full rounded-t-md" src=<?php echo e($product->images[0]->image_path); ?> alt="product_image" />
        <?php endif; ?>
        <div class="p-3">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo e($product->name); ?></h5>
            <p class="mb-3 font-normal text-gray-600"><?php echo e($limitedText); ?></p>
            <a href="<?php echo e(route('store.showCategory', $product->category->id)); ?>">
              <p class="px-2 mb-3 text-sm font-semibold text-orange-900 bg-orange-200 rounded-full w-fit hover:underline"><?php echo e($product->category->name); ?></p>
            </a>
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center justify-start gap-2 text-2xl font-semibold text-gray-800">
                <img src=<?php echo e(asset('icons/dollar-bill.png')); ?> alt="dollar" class="w-9">
                <u><?php echo e($product->price); ?>DH</u>
              </div>
              <div class="flex items-center justify-start gap-2 <?php echo e($product->stock < 20 ? 'text-red-500' : 'text-green-600'); ?> font-semibold text-lg">
                <?php if($product->stock < 20): ?>
                  <img src=<?php echo e(asset('icons/boxes-red.png')); ?> class="w-5" alt="">
                <?php else: ?>
                  <img src=<?php echo e(asset('icons/boxes.png')); ?> class="w-5" alt="">
                <?php endif; ?>
                <p><?php echo e($product->stock); ?></p>
              </div>
            </div>
            <div class="grid grid-cols-4 gap-3">
              
              <?php if(auth()->guard()->check()): ?>
                <button type="button" onclick="addToCartRequest(<?php echo e(auth()->user()->id); ?>, <?php echo e($product->id); ?>)" class="flex items-center justify-center col-span-3 gap-3 px-3 py-2 text-sm font-semibold text-center text-white bg-orange-500 rounded-sm">
                  <img src=<?php echo e(asset('icons/cart-white.png')); ?> alt="cart" class="w-5">
                  <p>Add To Cart</p>
                </button>
              <?php else: ?>
                <a href=<?php echo e(route('login')); ?>  class="flex items-center justify-center col-span-3 gap-3 px-3 py-2 text-sm font-semibold text-center text-white bg-orange-500 rounded-sm">
                  <button type="button">
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
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                 
    </div>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\Laravel_Store\resources\views/store/categories/showCategory.blade.php ENDPATH**/ ?>