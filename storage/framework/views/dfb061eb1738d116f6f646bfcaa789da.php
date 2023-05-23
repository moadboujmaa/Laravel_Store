<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <div class="py-5 mx-auto max-w-7xl">
    <?php
      $cart_items = auth()->user()->cart_items;
      $total = 0;
    ?>
    <?php if(count($cart_items) === 0): ?>
      <div class="text-center">
        <p class="mt-10 text-4xl font-semibold text-gray-500">No products added yet</p>
        <a href=<?php echo e(route('store.products')); ?> class="text-orange-500 underline">See all products</a>
      </div>
    <?php else: ?>
      <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-300">
          <tr>
            <th scope="col" class="px-6 py-3">
              Image
            </th>
            <th scope="col" class="px-6 py-3">
              Name
            </th>
            <th scope="col" class="px-6 py-3">
              Price
            </th>
            <th scope="col" class="px-6 py-3">
              Category
            </th>
            <th scope="col" class="px-6 py-3">
              Actions
            </th>
          </tr>
        </thead>
        <tbody class="">
          <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
              $total = $total + $cart_item->product->price
            ?>
            <tr class="bg-gray-200 border-b ">
              
                <td class="px-6 py-4">
                  <?php if(count($cart_item->product->images) == 0): ?>
                    <img src=<?php echo e(asset('/images/404.image.png')); ?> class="w-8" alt="404.image">
                  <?php else: ?>
                    <img src=<?php echo e($cart_item->product->images[0]->image_path); ?> class="w-14" alt="product_image">
                  <?php endif; ?>
                </td>
                <td class="px-6 py-4">
                  <?php echo e($cart_item->product->name); ?>

                </td>
                <td class="px-6 py-4">
                  <?php echo e($cart_item->product->price); ?>

                </td>
                <td class="px-6 py-4">
                  <?php echo e($cart_item->product->category->name); ?>

                </td>
                <td class="flex items-center justify-start gap-4 px-6 py-4">
                  <p class="w-6 h-6 text-xl font-bold text-center text-orange-500 bg-gray-400 rounded-full cursor-pointer" onclick="decrementItems(<?php echo e($cart_item->id); ?>)">-</p>
                  <?php echo e($cart_item->items); ?>

                  <p class="w-6 h-6 text-xl font-bold text-center text-orange-500 bg-gray-400 rounded-full cursor-pointer" onclick="incrementItems(<?php echo e($cart_item->id); ?>)">+</p>
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    <?php endif; ?>
    <div class="flex items-center justify-between py-5">
      <p class="text-xl font-semibold text-gray-900"><?php echo e($total); ?>dh</p>
      <a href=<?php echo e(route('order.store')); ?> class="btn">Pass an order</a>
    </div>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

<?php /**PATH D:\Laravel_Store\resources\views/store/cart/index.blade.php ENDPATH**/ ?>