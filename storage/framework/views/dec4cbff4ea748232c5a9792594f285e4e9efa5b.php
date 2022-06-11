<?php $__env->startSection('title','Add Faq'); ?>

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
                <h4 class="card-title">Faq add form</h4>
                <form class="forms-sample" action="<?php echo e(route('admin_faq_store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>



                    <div class="form-group">
                        <label for="position">position</label>
                        <input type="text" name="position" class="form-control" id="position" value="0">
                    </div>
                    <div class="form-group">
                        <label for="keywords">Question</label>
                        <input type="text" name="question" class="form-control" id="question" placeholder="question">
                    </div>

                    <div class="form-group">
                        <label >Answer</label>
                        <textarea id="answer" name="answer"></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#answer').summernote();
                            });
                        </script>

                    </div>



                    <div class="form-group">
                        <label for="status_select">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>

                    <?php echo $__env->make('home.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <button type="submit" class="btn btn-primary mr-2">Add Faq</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/admin/_faq_add.blade.php ENDPATH**/ ?>