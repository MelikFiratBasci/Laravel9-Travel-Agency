<?php $__env->startSection('title','contact -'.$setting->title); ?>
<?php $__env->startSection('description'); ?>
    <?php echo e($setting->description); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords',$setting->keywords); ?>
<?php $__env->startSection('content'); ?>
    <div class="contact">
        <div class="container-fluid">
            <div class="row">
                <?php echo $setting->contact; ?>

                <div class="col-lg-4">
                    <div class="contact-form">
                        <h3 class="section-title">Iletisim Formu</h3>
                        <form id="contact-form" class="clearfix" method="post" action="<?php echo e(route('sendmessage')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="input" placeholder="name&surname" name="name" />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="phone" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                            </div>
                            <div><button class="btn" type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/_contact.blade.php ENDPATH**/ ?>