<?php $__env->startSection('title','About Us -'.$setting->title); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($setting->description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>
<?php $__env->startSection('content'); ?>
<?php echo $setting->aboutus; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_about.blade.php ENDPATH**/ ?>