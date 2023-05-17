<?php $__env->startSection('title',"Главная"); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid mt-5">
    <div class="text-center h1">
        Последние новости

    </div>
    <div class="row mt-5">
        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-md-4 col-sm-12 ">
            <h2 class="text-center"><?php echo e($index->title); ?></h2>
            <div class="d-flex justify-content-center"><img class="" style="max-height: 200px" src="<?php echo e($index->image); ?>" alt=""></div>
            <p class="truncate-text text-center mt-2"><?php echo e($index->text); ?></p>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\kindergarten-master\resources\views/main.blade.php ENDPATH**/ ?>