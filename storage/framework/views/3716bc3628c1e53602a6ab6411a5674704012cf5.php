<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="text-center"><h1>Главная</h1></div>
        <div class="row">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 col-sm-12 m-3 p-4 ml-auto mr-auto p-5">
                    <div class="text-center"><a href="<?php echo e(route('admin.news.index')); ?>"><h3>Новости</h3></a></div>
                    <img  src="<?php echo e($index->image); ?>" alt="" class="img-fluid width: 100% \9 h-75 ml-auto mr-auto">
                    <div class="mt-4 mb-2">Название: "<?php echo e($index->title); ?>"</div>
                    <div class="mt-2 mb-2 text-truncate" style="max-height: 300px"><?php echo e($index->text); ?></div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4  col-sm-12 m-3 p-4 ml-auto mr-auto text-truncate p-5">
                    <div class="text-center"><a href="<?php echo e(route('admin.parents.index')); ?>"><h3>Для родителей</h3></a></div>
                    <img src="<?php echo e($index->image); ?>" alt="" class="img-fluid width: 100% \9 h-75">
                    <div class="mt-4 mb-2">Название: "<?php echo e($index->title); ?>"</div>

                    <div class="mt-2 mb-2 text-truncate"><?php echo e($index->text); ?></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 col-sm-12 m-3 ml-auto mr-auto">

                <div class="text-center mt-5 mb-4">
                    <a href="<?php echo e(route('admin.educators_groups.index')); ?>"><h3>К группам</h3></a>

                </div>

                <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="text-center"><a href="<?php echo e(route('admin.educators.index',$index->id)); ?>"class="text-dark">Группы: группы №<?php echo e($index->id); ?>

                            Название:"<?php echo e($index->title); ?></a></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
                <div class="col-md-6 col-sm-12 m-3 ml-auto mr-auto">
                    <div class="text-center mt-5 mb-4">
                        <a href="<?php echo e(route('admin.title_photo_gallery.index')); ?>"><h3>К альбомам</h3></a>

                    </div>
                    <?php $__currentLoopData = $title; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('admin.photo_gallery.index',$index->id)); ?>">
                            <div class="text-center text-dark">Номер альбома №<?php echo e($index->id); ?> </div>
                            <div class="text-center mb-2 text-dark">Название альбома:"<?php echo e($index->title); ?>"</div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\kindergarten-master\resources\views/includes/admin/content.blade.php ENDPATH**/ ?>