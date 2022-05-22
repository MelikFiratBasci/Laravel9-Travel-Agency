<?php
    $setting=\App\Http\Controllers\HomeController::getSetting()
?>
<!-- Footer Start -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Get in Touch</h2>
                    <div class="contact-info">
                        <p><i class="fa fa-map-marker"></i><?php echo e($setting->adress); ?></p>
                        <p><i class="fa fa-envelope"></i><?php echo e($setting->email); ?></p>
                        <p><i class="fa fa-phone"></i><?php echo e($setting->phone); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Follow Us</h2>
                    <div class="contact-info">
                        <div class="social">
                            <?php if($setting->facebook!=null): ?><a href="<?php echo e($setting->facebook); ?> " target=_blank"><i
                                    class="fab fa-facebook-f"></i></a><?php endif; ?>
                            <?php if($setting->twitter!=null): ?><a href="<?php echo e($setting->twitter); ?>" target="_blank"><i
                                    class="fab fa-twitter"></i></a><?php endif; ?>
                            <?php if($setting->instagram!=null): ?><a href="<?php echo e($setting->instagram); ?>" target="_blank"><i
                                    class="fab fa-instagram"></i></a><?php endif; ?>
                            <?php if($setting->youtube!=null): ?><a href="<?php echo e($setting->youtube); ?>" target="_blank"><i
                                    class="fab fa-youtube"></i></a><?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Company Info</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Purchase Info</h2>
                    <ul>
                        <li><a href="#">Pyament Policy</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row payment align-items-center">
            <div class="col-md-6">
                <div class="payment-method">
                    <h2>We Accept:</h2>
                    <img src="<?php echo e(asset('assets')); ?>/img/payment-method.png" alt="Payment Method"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment-security">
                    <h2>Secured By:</h2>
                    <img src="<?php echo e(asset('assets')); ?>/img/godaddy.svg" alt="Payment Security"/>
                    <img src="<?php echo e(asset('assets')); ?>/img/norton.svg" alt="Payment Security"/>
                    <img src="<?php echo e(asset('assets')); ?>/img/ssl.svg" alt="Payment Security"/>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">
                <p>Copyright &copy; <?php echo e($setting->company); ?> All Rights Reserved</p>
            </div>

            <div class="col-md-6 template-by">
                <p><?php echo e($setting->company); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom End -->

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/lib/easing/easing.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="<?php echo e(asset('assets')); ?>/js/main.js"></script>
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_footer.blade.php ENDPATH**/ ?>