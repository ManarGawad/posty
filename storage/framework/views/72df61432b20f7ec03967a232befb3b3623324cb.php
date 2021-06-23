

<?php $__env->startSection('content'); ?>
	<div class="flex justify-center">
        <div class="w-8/12">

            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1"><?php echo e($user->name); ?></h1>
                <p>Posted <?php echo e($posts->count()); ?> <?php echo e(Str::plural('post', $posts->count())); ?> and received <?php echo e($user->receivedLikes->count()); ?> <?php echo e(Str::plural('like', $user->receivedLikes->count())); ?></p>
            </div>

            <div class="bg-white p-6 rounded-lg">
            	<?php if($posts->count()): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.post','data' => ['post' => $post]]); ?>
<?php $component->withName('post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p><?php echo e($user->name); ?> doesn't have any posts</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Manar\posty\resources\views/users/posts/index.blade.php ENDPATH**/ ?>