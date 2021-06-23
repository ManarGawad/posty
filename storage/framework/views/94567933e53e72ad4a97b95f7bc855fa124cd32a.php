<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
		<title>Posty</title>
	</head>
	<body class="bg-gray-200">
		<nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo e(route('posts')); ?>" class="p-3">Posts</a>
                </li>
            </ul>

            <ul class="flex items-center">
                <?php if(auth()->guard()->check()): ?>
                    <li>
                        <a href="" class="p-3"><?php echo e(auth()->user()->name); ?></a>
                    </li>
                    <li>
                        <form action="<?php echo e(route('logout')); ?>" method="post" class="inline p-3">
                            <?php echo csrf_field(); ?>
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                <?php endif; ?>

                <?php if(auth()->guard()->guest()): ?>
                    <li>
                        <a href="<?php echo e(route('login')); ?>" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('register')); ?>" class="p-3">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
		<?php echo $__env->yieldContent('content'); ?>
	</body>
</html><?php /**PATH C:\Users\Manar\posty\resources\views/layouts/app.blade.php ENDPATH**/ ?>