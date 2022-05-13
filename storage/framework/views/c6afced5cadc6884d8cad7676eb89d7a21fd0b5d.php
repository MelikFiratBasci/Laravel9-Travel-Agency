<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets')); ?>/admin/images/favicon.png" />
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->yieldContent('javascript'); ?>
</head>
<body>
<div class="container-scroller">
    <?php echo $__env->make('admin._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php echo $__env->make('admin._settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin._rightSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->yieldContent('footer'); ?>
        </div>
</div>

</body>
</html>
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/layouts/admin.blade.php ENDPATH**/ ?>