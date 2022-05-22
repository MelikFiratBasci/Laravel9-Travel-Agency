<?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="dropdown-item">


        <div class="collapse" id="subcategories">
            <?php if(count($subcategory->children)): ?>
                <a class="dropdown-item"><?php echo e($subcategory->title); ?></a>
                <a class="dropdown-item">
                    <?php echo $__env->make('home.categorytree',['children'=>$subcategory->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>


            <?php else: ?>
                <a class="dropdown-item" href="#"><?php echo e($subcategory->title); ?></a>

            <?php endif; ?>

        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/categorytree.blade.php ENDPATH**/ ?>