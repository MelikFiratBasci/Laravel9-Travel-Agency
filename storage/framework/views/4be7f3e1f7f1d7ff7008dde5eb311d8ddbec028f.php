<?php $__env->startSection('title',$setting->title); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($setting->description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('home._header_bottomBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._mainSlider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._firstSlider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._feature', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Call to Action Start -->
    <div class="call-to-action">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>call us for any queries</h1>
                </div>
                <div class="col-md-6">
                    <a href="tel:0123456789">+012-345-6789</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->

    <?php echo $__env->make('home._popularProduct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Newsletter Start -->
    <div class="newsletter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1>Subscribe Our Newsletter</h1>
                </div>
                <div class="col-md-6">
                    <div class="form">
                        <input type="email" value="Your email here">
                        <button>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    <?php echo $__env->make('home._recentProduct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._reference', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/index.blade.php ENDPATH**/ ?>