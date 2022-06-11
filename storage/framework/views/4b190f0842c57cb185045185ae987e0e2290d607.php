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
} elseif ($_instance->childHasBeenRendered('3k8iT7K')) {
    $componentId = $_instance->getRenderedChildComponentId('3k8iT7K');
    $componentTag = $_instance->getRenderedChildComponentTagName('3k8iT7K');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3k8iT7K');
} else {
    $response = \Livewire\Livewire::mount('search');
    $html = $response->html();
    $_instance->logRenderedChild('3k8iT7K', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i> </button>
                    </form>
                    <?php echo \Livewire\Livewire::scripts(); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="user">
                    <a href="wishlist.html" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="cart.html" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_header_bottomBar.blade.php ENDPATH**/ ?>