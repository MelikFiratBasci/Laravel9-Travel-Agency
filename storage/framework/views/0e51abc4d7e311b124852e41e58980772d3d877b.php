<?php
    $parentCategories =\App\Http\Controllers\HomeController::categoryList();
?>

    <div class="navbar-nav mr-auto">
        <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                <div class="dropdown-menu">
                    <?php $__currentLoopData = $parentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <ul class="dropdown side-dropdown">
                            <a class="dropdown-item" data-target="#subcategories" data-toggle="collapse" href="subcategories"
                               aria-expanded="true" aria-controls="subcategories"><?php echo e($rs->title); ?><i
                                    class="fa fa-angle-right"></i></a>
                            <div class="row">
                                <div>
                                    <?php if(count($rs->children)): ?>
                                        <?php echo $__env->make('home.categorytree',['children'=>$rs->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>




<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_navigation.blade.php ENDPATH**/ ?>