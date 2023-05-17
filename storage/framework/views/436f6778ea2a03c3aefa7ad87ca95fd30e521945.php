<?php $__env->startSection('title',"Родителям"); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="text-center">
            <h1 class="m-5">Родителям</h1></div>
        <?php $__empty_1 = true; $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $parents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo e($parents->image); ?>"alt="<?php echo e($parents->title); ?>" class="img-fluid width: 100% \9 h-75">
                </div>

                <div class="col-md-6">
                    <div class="h2 text-center"><?php echo e($parents->title); ?>

                        <p><a href="<?php echo e($parents->document); ?>">Просмотр pdf</a></p></div>

                    <p class="truncate-text" style="max-height: 500px"><?php echo e($parents->text); ?></p>
                    <div class="h2  mt-5 text-right">Добавлено <?php echo e($parents->created_at); ?></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h2>Новостей нет</h2>
                <?php endif; ?>
            </div>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\kindergarten-master\resources\views/parents.blade.php ENDPATH**/ ?>