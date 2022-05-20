<?php $__env->startSection('title','edit setting'); ?>
<?php $__env->startSection('keywords','otel,gezi,sinirsiz eglence'); ?>
<?php $__env->startSection('javascript'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">setting edit form</h4>
                <form class="forms-sample" action="<?php echo e(route('admin_setting_update')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="id" class="form-control" id="id" placeholder="id" value="<?php echo e($data->id); ?>">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="title" value="<?php echo e($data->title); ?>">
                    </div>
                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <input type="text" name="keywords" class="form-control" id="keywords" placeholder="keywords"
                               value="<?php echo e($data->keywords); ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description"
                               placeholder="description"
                               value="<?php echo e($data->description); ?>">
                    </div>
                    <div class="form-group">
                        <label for="company">company</label>
                        <input type="text" name="company" class="form-control" id="company"
                               placeholder="company"
                               value="<?php echo e($data->company); ?>">
                    </div>

                    <div class="form-group">
                        <label for="price">adress</label>
                        <input type="text" name="adress" class="form-control" id="adress"
                               placeholder="adress"
                               value="<?php echo e($data->adress); ?>">
                    </div>

                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="phone" value="<?php echo e($data->phone); ?>">
                    </div>
                    <div class="form-group">
                        <label for="fax">fax</label>
                        <input type="text" name="fax" class="form-control" id="fax" placeholder="fax" value="<?php echo e($data->fax); ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="email" value="<?php echo e($data->email); ?>">
                    </div>
                    <div class="form-group">
                        <label for="smtpserver">smtpserver</label>
                        <input type="text" name="fax" class="form-control" id="smtpserver" placeholder="smtpserver" value="<?php echo e($data->smtpserver); ?>">
                    </div>
                    <div class="form-group">
                        <label for="smtpemail">smtpemail</label>
                        <input type="text" name="smtpemail" class="form-control" id="smtpemail" placeholder="smtpemail" value="<?php echo e($data->smtpemail); ?>">
                    </div>
                    <div class="form-group">
                        <label for="smtppasword">smtppasword</label>
                        <input type="text" name="smtppasword" class="form-control" id="smtppasword" placeholder="smtppasword" value="<?php echo e($data->smtppasword); ?>">
                    </div>
                    <div class="form-group">
                        <label for="smtpport">smtpport</label>
                        <input type="text" name="smtpport" class="form-control" id="smtpport" placeholder="smtpport" value="<?php echo e($data->smtpport); ?>">
                    </div>
                    <div class="form-group">
                        <label for="facebook">facebook</label>
                        <input type="text" name="facebook" class="form-control" id="facebook" placeholder="facebook" value="<?php echo e($data->facebook); ?>">
                    </div>
                    <div class="form-group">
                        <label for="instagram">instagram</label>
                        <input type="text" name="instagram" class="form-control" id="instagram" placeholder="instagram" value="<?php echo e($data->instagram); ?>">
                    </div>
                    <div class="form-group">
                        <label for="twitter">twitter</label>
                        <input type="text" name="twitter" class="form-control" id="twitter" placeholder="twitter" value="<?php echo e($data->twitter); ?>">
                    </div>
                    <div class="form-group">
                        <label for="youtube">youtube</label>
                        <input type="text" name="youtube" class="form-control" id="youtube" placeholder="youtube" value="<?php echo e($data->youtube); ?>">
                    </div>
                    <div class="form-group">
                        <label >aboutus</label>
                        <textarea id="aboutus" name="aboutus"><?php echo e($data->aboutus); ?></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#aboutus').summernote();
                            });
                        </script>


                    </div>
                    <div class="form-group">
                        <label >contact</label>
                        <textarea id="contact" name="contact"><?php echo e($data->contact); ?></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#contact').summernote();
                            });
                        </script>


                    </div>
                    <div class="form-group">
                        <label >references</label>
                        <textarea id="references" name="references"><?php echo e($data->references); ?></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#references').summernote();
                            });
                        </script>


                    </div>
                    <div class="form-group">
                        <label for="status_select">Status</label>
                        <select class="form-control" id="status" name="status" value="<?php echo e($data->status); ?>">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">edit setting</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/admin/_setting_edit.blade.php ENDPATH**/ ?>