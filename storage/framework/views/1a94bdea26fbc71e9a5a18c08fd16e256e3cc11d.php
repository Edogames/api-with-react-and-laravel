<?php $__env->startSection('content'); ?>
    <?php if(count($results) > 0): ?>
    <?php for($i = 0; $i < count($results); $i++): ?>
        <div class="my-card-body">
            <h1 class="title">
                <?php echo e($results[$i]->title); ?>

            </h1>
            <p style="color: gray">Description</p>
            <h3 class="content">
                <?php echo e($results[$i]->content); ?>

            </h3>
            <div class="passed">
                <?php if($results[$i]->passed == 1): ?>
                    <p style="color: green;">PASSED</p>
                <?php else: ?>
                    <p style="color: red;">FAILED</p>
                <?php endif; ?>
            </div>
        </div>
        <?php endfor; ?>
    <?php else: ?>
        <h1 style="color: red; text-align: center; margin-top: 40px;">No results yet.</h1>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/home.blade.php ENDPATH**/ ?>