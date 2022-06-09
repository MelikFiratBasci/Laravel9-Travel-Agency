<div>
    <input wire:model="search" name="search" type="text" class="input search-input" list="myList" placeholder="Search package...">
    <?php if(!empty($query)): ?>
        <datalist id="myList">
            <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($rs->title); ?>">
                    <?php echo e($rs->category->title); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </datalist>
    <?php endif; ?>
</div>
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/livewire/search.blade.php ENDPATH**/ ?>