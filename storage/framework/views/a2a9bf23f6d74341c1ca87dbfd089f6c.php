<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Fast Shop')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page Content -->
            <main>
                <?php echo e($slot); ?>

            </main>
        </div>
        <script>
            function addToCartRequest(user_id, product_id) {
                console.log(product_id)
                let requestData = {
                    product_id: product_id,
                    user_id: user_id,
                };
                URL = `/store/cart/store/${user_id}/${product_id}`
                console.log(URL)
                axios.post(URL , requestData)
                    .then(function (response) {
                        console.log(response.data);
                    })
                    .catch(function (error) {
                        console.error(error);
                    }
                );
            }
            function incrementItems(cartItemId) {
                console.log("Increment " + cartItemId)
                let requestData = { cartItemId }
                axios.post(`/increment/${cartItemId}`, requestData)
                    .then(function (response) {
                        console.log(response.data);
                    })
                    .catch(function (error) {
                        console.error(error);
                    }
                );
            }
            function decrementItems(cartItemId) {
                console.log("decrement " + cartItemId)
                let requestData = { cartItemId }
                axios.post(`/decrement/${cartItemId}`, requestData)
                    .then(function (response) {
                        console.log(response.data);
                    })
                    .catch(function (error) {
                        console.error(error);
                    }
                );
            }
        </script>
        <script src="https://kit.fontawesome.com/ac281cdc2c.js" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH D:\Laravel_Store\resources\views/layouts/app.blade.php ENDPATH**/ ?>