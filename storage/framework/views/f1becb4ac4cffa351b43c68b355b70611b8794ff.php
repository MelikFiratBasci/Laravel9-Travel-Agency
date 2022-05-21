<?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul class="list-links">



        <?php if(count($subcategory->children)): ?>
            <div class="collapse" id="subcategories">
            <ul ><?php echo e($subcategory->title); ?></ul>
            <ul class="list-links">
                <?php echo $__env->make('home.categorytree',['children'=>$subcategory->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
            <hr>

            </div>
        <?php else: ?>

            <div class="collapse" id="subcategories">
        <ul><a href="#"><?php echo e($subcategory->title); ?></a> </ul>
            </div>
        <?php endif; ?>
    </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/categorytree.blade.php ENDPATH**/ ?>