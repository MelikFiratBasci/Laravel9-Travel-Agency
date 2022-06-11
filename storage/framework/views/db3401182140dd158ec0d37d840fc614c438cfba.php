<?php $__env->startSection('title',$data->title); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($data->description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords',$data->keywords); ?>
<?php $__env->startSection('content'); ?>
    <!-- Product Detail Start -->
    <div class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-detail-top">
                        <div class="row align-items-center">
                            <div class="col-md-9">
                                <div class="product-slider-single normal-slider">
                                    <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($data->image)); ?>"
                                         style="height: 400px"
                                         alt="">
                                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>"
                                             style="height: 200px"
                                             alt="">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <div class="product-slider-single-nav normal-slider">
                                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                        <div class="slider-nav-img">
                                            <img
                                                src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>"
                                                style="height: 200px"
                                                alt="">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-content">
                                    <?php echo $__env->make('home.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="title"><h2><?php echo e($data->title); ?></h2></div>
                                    <div class="ratting">

                                        <h7>(<?php echo e($reviews->count()); ?>)<i class="<?php if($avg<1): ?> fa fa-star-o empty <?php else: ?> fa fa-star  <?php endif; ?>"></i>
                                        <i class="<?php if($avg<2): ?> fa fa-star-o empty <?php else: ?> fa fa-star  <?php endif; ?>"></i>
                                        <i class="<?php if($avg<3): ?> fa fa-star-o empty <?php else: ?> fa fa-star  <?php endif; ?>"></i>
                                        <i class="<?php if($avg<4): ?> fa fa-star-o empty <?php else: ?> fa fa-star  <?php endif; ?>"></i>
                                        <i class="<?php if($avg<5): ?> fa fa-star-o empty <?php else: ?> fa fa-star  <?php endif; ?>"></i></h7>
                                    </div>
                                    <div class="price">
                                        <h4>Price:</h4>
                                        <p><?php echo e($data->price); ?> <span><?php echo e($data->price+50); ?></span></p>
                                    </div>
                                    <!--<div class="quantity">
                                        <h4>Quantity:</h4>
                                        <div class="qty">
                                            <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="p-size">
                                        <h4>Size:</h4>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn">S</button>
                                            <button type="button" class="btn">M</button>
                                            <button type="button" class="btn">L</button>
                                            <button type="button" class="btn">XL</button>
                                        </div>
                                    </div>
                                    <div class="p-color">
                                        <h4>Color:</h4>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn">White</button>
                                            <button type="button" class="btn">Black</button>
                                            <button type="button" class="btn">Blue</button>
                                        </div>
                                    </div>
                                    -->
                                    <div class="action">
                                        <a class="btn" href="<?php echo e(route('addtocart',['id'=>$data->id])); ?>"><i
                                                class="fa fa-shopping-cart"></i>Add to Cart</a>
                                        <a class="btn" href="#"><i class="fa fa-shopping-bag"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row product-detail-bottom">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#specification">Specification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#reviews">Reviews(<?php echo e($reviews->count()); ?>)</a>
                                </li>
                            </ul>


                            <div class="tab-content">
                                <div id="description" class="container tab-pane active">
                                    <h1>
                                        <p>
                                            <?php echo $data->detail; ?>

                                        </p>
                                    </h1>
                                </div>
                                <div id="specification" class="container tab-pane fade">
                                    <h4>Product specification</h4>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>



                                    <div id="reviews" class="container tab-pane fade">
                                        <div class="reviews-submitted">
                                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="reviewer"><?php echo e($rs->user->name); ?> - <span><?php echo e($rs->created_at); ?></span>
                                            </div>
                                            <div class="ratting">
                                                <i class="<?php if($rs->rate<1): ?> fa fa-star-o empty <?php else: ?> fa fa-star  <?php endif; ?>"></i>
                                                <i class="<?php if($rs->rate<2): ?> fa fa-star-o empty <?php else: ?> fa fa-star  <?php endif; ?>"></i>
                                                <i class="<?php if($rs->rate<3): ?> fa fa-star-o empty <?php else: ?> fa fa-star  <?php endif; ?>"></i>
                                                <i class="<?php if($rs->rate<4): ?> fa fa-star-o empty <?php else: ?> fa fa-star  <?php endif; ?>"></i>
                                                <i class="<?php if($rs->rate<5): ?> fa fa-star-o empty <?php else: ?> fa fa-star  <?php endif; ?>"></i>
                                            </div>
                                            <strong><?php echo e($rs->subject); ?></strong>
                                            <p>
                                                <?php echo e($rs->review); ?>

                                            </p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>


                                        <form class="reviews-submit" action="<?php echo e(route('storecomment')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <h4>Give your Review:</h4>
                                            <div class="ratting">
                                                <i class="far fa-star">
                                                    <input type="radio" id="star5" name="rate" value="5"
                                                    >
                                                </i>
                                                <i class="far fa-star"> <input type="radio" id="star4" name="rate"
                                                                               value="4"
                                                    ></i>
                                                <i class="far fa-star"> <input type="radio" id="star3" name="rate"
                                                                               value="3"
                                                    ></i>
                                                <i class="far fa-star"> <input type="radio" id="star2" name="rate"
                                                                               value="2"
                                                    ></i>
                                                <i class="far fa-star"> <input type="radio" id="star1" name="rate"
                                                                               value="1"
                                                    ></i>
                                            </div>
                                            <div class="row form">
                                                <input class="input" type="hidden" placeholder="package_id"
                                                       name="package_id"
                                                       value="<?php echo e($data->id); ?>">
                                                <input class="input" type="hidden" placeholder="slug" name="slug"
                                                       value="<?php echo e($data->slug); ?>">
                                                <div class="col-sm-6">
                                                    <input class="input" type="text" placeholder="subject"
                                                           name="subject">
                                                </div>

                                                <div class="col-sm-12">
                                                    <textarea class="input" name="review"
                                                              placeholder="Review"></textarea>
                                                </div>
                                                <?php if(auth()->guard()->check()): ?>
                                                    <div class="col-sm-12">
                                                        <button>Submit</button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </form>


                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="product">
                        <div class="section-header">
                            <h1>Related Products</h1>
                        </div>

                        <div class="row align-items-center product-slider product-slider-3">
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-10.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-8.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-6.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-4.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-2.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Product Detail End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_package_detail.blade.php ENDPATH**/ ?>