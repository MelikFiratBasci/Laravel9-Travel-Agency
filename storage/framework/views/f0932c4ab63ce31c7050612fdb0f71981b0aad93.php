<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">
    <meta name="description" content=<?php echo $__env->yieldContent('description'); ?>>
    <meta name="keywords" content=<?php echo $__env->yieldContent('keywords'); ?>>
    <meta name="author" content="firat basci">

    <!-- Favicon -->
    <link href="<?php echo e(asset('assets')); ?>/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
          rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/lib/slick/slick.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/lib/slick/slick-theme.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets')); ?>/css/bootstrap.min.css"/>

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('assets')); ?>/css/style.css" rel="stylesheet">
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->yieldContent('headerjs'); ?>
</head>

<body>

<?php echo $__env->make('home._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->startSection('content'); ?>

<?php echo $__env->yieldSection(); ?>
<?php echo $__env->make('home._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('footerjs'); ?>
</body>
</html>
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/layouts/home.blade.php ENDPATH**/ ?>