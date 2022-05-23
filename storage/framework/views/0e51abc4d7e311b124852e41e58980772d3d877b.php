<?php
    $parentCategories =\App\Http\Controllers\HomeController::categoryList();
?>


        <div class="sidebar navbar-expand-sm bg-dark navbar-dark">
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mdi-page-layout-sidebar-left">
                    <div class="nav-item dropdown">
                        <div class="navbar-nav ml-auto">

                            <div class="d-menu ">
                                <ul>
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                                    <ul class="nav-item dropdown-menu  ">
                                        <?php $__currentLoopData = $parentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <ul class="dropdown side-dropdown">
                                                <a class="dropdown-item" data-target="#subcategories" data-toggle="collapse"
                                                   href="subcategories"
                                                   aria-expanded="true" aria-controls="subcategories"><?php echo e($rs->title); ?><i
                                                        class="fa fa-angle-right"></i></a>
                                                <ul class="row">
                                                    <ul class="dropdown side-dropdown">
                                                        <?php if(count($rs->children)): ?>
                                                            <?php echo $__env->make('home.categorytree',['children'=>$rs->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                        <?php endif; ?>
                                                    </ul>
                                                </ul>
                                            </ul>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </div>

<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_navigation.blade.php ENDPATH**/ ?>