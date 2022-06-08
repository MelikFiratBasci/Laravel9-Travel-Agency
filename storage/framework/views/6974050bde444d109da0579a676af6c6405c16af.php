<div class="header">
    <!--Container -->
    <div class="container-fluid">
        <div class="row">
            <!--MainSlider -->
            <div class="col-md-9">
                <div class="header-slider normal-slider">
                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="header-slider-item">
                        <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>" syle="height 400px" alt="Slider Image"/>
                        <div class="header-slider-caption">
                            <p><?php echo e($rs->title); ?></p>
                            <a class="btn" href="<?php echo e(route('package',['id'=>$rs->id,'slug'=>$rs->slug])); ?>"><i class="fa fa-shopping-cart"></i><?php echo e($rs->price); ?></a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
            <div class="col-md-3">
                <div class="header-img">
                    <div class="img-item">
                        <img src="<?php echo e(asset('assets')); ?>/img/category-1.jpg"/>
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                    <div class="img-item">
                        <img src="<?php echo e(asset('assets')); ?>/img/category-2.jpg"/>
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Slider End -->
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_mainSlider.blade.php ENDPATH**/ ?>