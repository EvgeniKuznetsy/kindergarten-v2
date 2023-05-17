<?php $__env->startSection('title',"Наши группы"); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">

        <h1 class='text-center mb-4'>Группы</h1>

        <div class="row mt-3  ml-auto mr-auto">
            <?php $__empty_1 = true; $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>$title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <?php $index=false; ?>

                    <?php $__empty_2 = true; $__currentLoopData = $educator; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $objects=>$object): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>

                        <?php if($object ->image && $object->educator_group_id==$title->id && $index==false): ?>
                            <div class=" col-md-6 col-sm-12 mt-4 ">
                                <div class="mt-3 text-center <?php echo e($index=true); ?>">
                                    <div class="p-3 mb-2  text-black p-3">
                                        <a href="<?php echo e(route('educator',$title->id)); ?>" class=" text-decoration-none ">
                                            <h2 class="mb-3"><?php echo e($title->title); ?>

                                            </h2>
                                            <img src="<?php echo e($object ->image); ?>" class="img-fluid width: 100% \9 h-75">

                                        </a>

                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                        <h2>Нет группы</h2>
                    <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h2>Фотографий нет</h2>
            <?php endif; ?>
        </div>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\kindergarten-master\resources\views/title_group.blade.php ENDPATH**/ ?>