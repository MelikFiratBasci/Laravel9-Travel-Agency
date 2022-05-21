<?php
    $parentCategories =\App\Http\Controllers\HomeController::categoryList();
?>
<nav class="navbar bg-light">
    <ul class="navbar-nav">

        <li class="nav-item" style="color: #112e33;font-family: 'Arial Black'">
            <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="true" aria-controls="categories">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="categories">

                <?php $__currentLoopData = $parentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul  class="dropdown side-dropdown">
                        <a class="nav-link" data-target="#subcategories" data-toggle="collapse" href="subcategories" aria-expanded="true" aria-controls="subcategories"><?php echo e($rs->title); ?><i class="fa fa-angle-right"></i></a>
                        <div  class="row" >
                            <div>
                                <?php if(count($rs->children)): ?>
                                    <?php echo $__env->make('home.categorytree',['children'=>$rs->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </li>

</nav>



<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_navigation.blade.php ENDPATH**/ ?>