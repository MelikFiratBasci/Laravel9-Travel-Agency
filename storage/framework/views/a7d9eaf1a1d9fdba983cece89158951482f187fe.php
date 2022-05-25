<title><?php echo e(config('app.name', 'Laravel')); ?></title>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

<?php echo \Livewire\Livewire::styles(); ?>


<!-- Scripts -->
<script src="<?php echo e(mix('js/app.js')); ?>" defer></script>


<!-- Page Content -->
<main>
    <?php echo e($slot); ?>

</main>


<?php echo $__env->yieldPushContent('modals'); ?>

<?php echo \Livewire\Livewire::scripts(); ?>

<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/layouts/app.blade.php ENDPATH**/ ?>