<?php $__env->startSection('title','References -'.$setting->title); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($setting->description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>
<?php $__env->startSection('content'); ?>
<?php echo $setting->references; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_references.blade.php ENDPATH**/ ?>