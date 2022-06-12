<!-- Recent Product Start -->
<div class="recent-product product">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Recent packages</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-3">
            <?php $__currentLoopData = $last; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="<?php echo e(route('package',['id'=>$rs->id,'slug'=>$rs->slug])); ?>"><?php echo e($rs->title); ?></a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="<?php echo e(route('package',['id'=>$rs->id,'slug'=>$rs->slug])); ?>">
                                <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>" style="height: 200px"
                                     alt="">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="<?php echo e(route('package',['id'=>$rs->id,'slug'=>$rs->slug])); ?>"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>$</span><?php echo e($rs->price); ?></h3>
                          
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>
</div>
<!-- Recent Product End -->
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_recentPackage.blade.php ENDPATH**/ ?>