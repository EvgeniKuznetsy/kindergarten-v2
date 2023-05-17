<?php $__env->startSection('title', 'Создание'); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <h2 class="mt-2">Создать новость</h2>
        <form method="post" action="<?php echo e(route('admin.post.parents.create')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label">Название</label>
                <input required  type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Текст</label>
                <input required type="text" name="text" class="form-control">
            </div>
            <div class="mb-3">
                <h5 class="mb-2">Изображение</h5>
                <input required name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="form-control" id="inputGroupFile02">
            </div>
            <div class="mb-3">
                <h5 class="mb-2">Документ</h5>
                <input type="file" name="document" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\kindergarten-master\resources\views/admin/parents/create.blade.php ENDPATH**/ ?>