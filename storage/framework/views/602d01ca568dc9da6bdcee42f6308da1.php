<nav x-data="{ open: false }" class="bg-white shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="/">
                        <img src=<?php echo e(asset('images/logo.png')); ?> alt="logo" class=" w-60">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('store.index'),'active' => request()->routeIs('store.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('store.index')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('store.index'))]); ?>
                        
                        <img src=<?php echo e(asset('icons/home.png')); ?> alt="home" class="w-[14px]">
                        <?php echo e(__('Market')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('store.categories'),'active' => request()->routeIs('store.categories')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('store.categories')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('store.categories'))]); ?>
                        <img src=<?php echo e(asset('icons/categories.png')); ?> alt="categories" class="w-[18px]">
                        <?php echo e(__('Categories')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('store.products'),'active' => request()->routeIs('store.products')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('store.products')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('store.products'))]); ?>
                        <img src=<?php echo e(asset('icons/price-tag.png')); ?> alt="products" class="w-4">
                        <?php echo e(__('Products')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => route('admin.index'),'active' => request()->routeIs('admin.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.index')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('admin.index'))]); ?>
                        <img src=<?php echo e(asset('icons/admin.png')); ?> alt="admin" class="w-5">
                        <?php echo e(__('Admin')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="">
                <?php if(auth()->guard()->check()): ?>
                    <div class="relative flex items-center h-full gap-5">
                        <div class="flex items-center justify-center bg-orange-400 rounded-full cursor-pointer w-11 h-11" id="openMenu">
                            <img src=<?php echo e(auth()->user()->avatar); ?> class='w-10 rounded-full'  alt="profile pic">
                        </div>
                        <div 
                            class="absolute hidden overflow-hidden text-orange-400 bg-white border-2 border-orange-300 rounded-sm right-14 top-3 w-36" 
                            id="menu"
                        >
                            <a href="<?php echo e(route('profile.edit')); ?>">
                                <button class="flex items-center justify-start w-full gap-4 px-3 py-2 pr-6 font-semibold hover:bg-orange-400 hover:text-white" >
                                    <p>Profile</p>
                                </button>
                            </a>
                            <a href=<?php echo e(route('store.cart')); ?>>
                                <button class="flex items-center justify-start w-full gap-4 px-3 py-2 pr-6 font-semibold hover:bg-orange-400 hover:text-white">
                                    <p>Cart</p>
                                </button>
                            </a>
                            <form method="POST" action="<?php echo e(route('logout')); ?>" >
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="flex items-center justify-start w-full gap-4 px-3 py-2 pr-6 font-semibold hover:bg-orange-400 hover:text-white">
                                    <p>Logout</p>
                                </button>
                            </form>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="flex items-center h-full gap-3">
                        <a href="<?php echo e(route('login')); ?>"
                            class="second-btn"
                        >
                            Login
                        </a>
                        <a 
                            href="<?php echo e(route('register')); ?>"
                            class="btn"
                        >
                            Register
                        </a>
                    </div>
                <?php endif; ?>
            </div>

</nav>
<?php /**PATH D:\Laravel_Store\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>