<!-- Nav Bar Start -->

<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href=<?php echo e(route("home")); ?> class="nav-item nav-link active">Home</a>
                    <a href="product-list.html" class="nav-item nav-link">Products</a>
                    <a href="product-detail.html" class="nav-item nav-link">Product Detail</a>
                    <a href="cart.html" class="nav-item nav-link">Cart</a>
                    <a href="checkout.html" class="nav-item nav-link">Checkout</a>
                    <a href="my-account.html" class="nav-item nav-link">My Account</a>
                    <div class="navbar-nav ml-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                            <div class="dropdown-menu">
                                <a href="<?php echo e(route('home')); ?>" class="dropdown-item">campaigns</a>
                                <a href="<?php echo e(route('home')); ?>" class="dropdown-item">newproducts</a>
                                <a href="<?php echo e(route('references')); ?>" class="dropdown-item">references</a>
                                <a href="<?php echo e(route('faq')); ?>" class="dropdown-item">faq</a>
                                <a href="<?php echo e(route('contact')); ?>" class="dropdown-item">contact</a>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                        <div class="dropdown-menu">
                            <?php if(auth()->guard()->check()): ?>
                                <strong><a class="dropdown-item"><?php echo e(Auth::user()->name); ?></a></strong>
                                <br>

                                <a href="<?php echo e(route('logout')); ?>" class="dropdown-item">logout</a>
                            <?php endif; ?>
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="/login" class="dropdown-item">Login</a>
                                <a href="/register" class="dropdown-item">Register</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->


<!-- Bottom Bar Start -->
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
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
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
<!-- Bottom Bar End -->

<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_header.blade.php ENDPATH**/ ?>