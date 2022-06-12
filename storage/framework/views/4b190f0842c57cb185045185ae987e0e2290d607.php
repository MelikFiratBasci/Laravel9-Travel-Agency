<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="<?php echo e(route("home")); ?>">
                        <img src="<?php echo e(asset('assets')); ?>/img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <form action="<?php echo e(route('getpackage')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search')->html();
} elseif ($_instance->childHasBeenRendered('GVXHoWO')) {
    $componentId = $_instance->getRenderedChildComponentId('GVXHoWO');
    $componentTag = $_instance->getRenderedChildComponentTagName('GVXHoWO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GVXHoWO');
} else {
    $response = \Livewire\Livewire::mount('search');
    $html = $response->html();
    $_instance->logRenderedChild('GVXHoWO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                    <?php echo \Livewire\Livewire::scripts(); ?>

                </div>
                <?php echo $__env->make('home.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-3">
                <div class="user">
                    <a href="<?php echo e(route('user_reservation')); ?>" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Wishlist</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_header_bottomBar.blade.php ENDPATH**/ ?>