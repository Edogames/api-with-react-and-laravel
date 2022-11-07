<?php $__env->startSection('title', 'Log in'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(Route::has('login')): ?>
        <div class="start">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a><br>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Log in</a><br>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Register</a><br>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/welcome.blade.php ENDPATH**/ ?>