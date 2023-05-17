<?php $__env->startSection('content'); ?>
    <div class="text-center h1">Для родителей</div>
    <div class="container">
        <a href="<?php echo e(route('admin.parents.createPage')); ?>" class="btn btn-primary">Создать</a>
        <div class="card-container mt-3">
            <?php $__empty_1 = true; $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card">
                    <img src="<?php echo e($post->image); ?>" class="col-5 width_image" alt="<?php echo e($post->title); ?>">
                    <div class="card-text">
                        <p class="h2"><?php echo e($post->title); ?></p>
                        <p class=""><?php echo e($post->text); ?></p>
                       <div class="mb-3"><a href="<?php echo e($post->document); ?>">Просмотр pdf файлов</a></div>
                        <a href="<?php echo e(route('admin.parents.updatePage', $post)); ?>" class="btn btn-primary">Редактировать</a>
                        <a href="<?php echo e(route('admin.parents.delete', $post)); ?>" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="alert" role="alert">
                    Новостей нет
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\kindergarten-master\resources\views/admin/parents/index.blade.php ENDPATH**/ ?>