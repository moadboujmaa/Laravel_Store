<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Page Content -->
        <main class="flex">
            <?php echo $__env->make('components.admin-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e($slot); ?>

        </main>
    </div>
    <script>
        function addToCartRequest(user_id, product_id) {
        console.log(user_id)
        let requestData = {
            name: 'John',
            age: 25,
            email: 'john@example.com'
        };

        // Make an AJAX request using Axios
        axios.post(`/store/cart`, requestData)
            .then(function (response) {
            // Handle the successful response
            console.log(response.data);
            })
            .catch(function (error) {
            // Handle the error response
            console.error(error);
            });
        }
    </script>
    <script src="https://kit.fontawesome.com/ac281cdc2c.js" crossorigin="anonymous"></script>
</body>

</html>
<?php /**PATH D:\Laravel_Store\resources\views/layouts/admin.blade.php ENDPATH**/ ?>