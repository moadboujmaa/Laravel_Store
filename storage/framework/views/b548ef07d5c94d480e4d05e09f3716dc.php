<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <div class="w-full p-5 content">
    <header class="flex items-center justify-between py-4 pb-6 h-fit">
      <h1 class="text-3xl font-semibold text-white">Manage Products</h1>
      <a href=<?php echo e(route('admin.products.create')); ?> class="p-2 text-white bg-green-600 rounded-md hover:bg-green-700">Create Product</a>
    </header>
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      id
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Name
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Description
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Price
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Stock
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Category
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Actions
                  </th>
              </tr>
          </thead>
          <tbody>
            
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo e($product->id); ?>

                  </th>
                  <td class="px-6 py-4">
                    <?php echo e($product->name); ?>

                  </td>
                  <td class="px-6 py-4">
                    <?php echo e($product->description); ?>

                  </td>
                  <td class="px-6 py-4">
                    <?php echo e($product->price); ?>

                  </td>
                  <td class="px-6 py-4">
                    <?php echo e($product->stock); ?>

                  </td>
                  <td class="px-6 py-4">
                    <?php echo e($product->category->name); ?>

                  </td>
                  <td class="px-6 py-4">
                    <a href=<?php echo e(route('admin.products.edit', $product->id)); ?> class="pr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form action=<?php echo e(route('admin.products.destroy', $product->id)); ?> onsubmit="return confirm('Are you sure ?');" method="POST" class="inline">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                        Delete
                      </button>
                    </form>
                  </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
      </table>
    </div>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?><?php /**PATH D:\Laravel_Store\resources\views/admin/products/index.blade.php ENDPATH**/ ?>