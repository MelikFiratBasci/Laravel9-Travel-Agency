<?php $__env->startSection('title','package add'); ?>

<?php $__env->startSection('javascript'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
            <h4 class="card-title">package add form</h4>
            </thead>
            <tbody>
            <form class="forms-sample" action="<?php echo e(route('user_package_store')); ?>" method="post"
                  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="category">category</label>
                    <select class="form-control" name="category_id">
                        <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option
                                value="<?php echo e($rs->id); ?>"><?php echo e(\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>


                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" name="keywords" class="form-control" id="keywords" placeholder="keywords">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" id="description"
                           placeholder="description">
                </div>
                <div class="form-group">
                    <label>detail</label>
                    <textarea id="detail" name="detail"></textarea>
                    <script>
                        $(document).ready(function () {
                            $('#detail').summernote();
                        });
                    </script>

                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number" name="price" class="form-control" value="0" id="price"
                           placeholder="price">
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="slug">
                </div>
                <div class="form-group">
                    <label for="status_select">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option>True</option>
                        <option>False</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="image" class="form-control">

                </div>

                <button type="submit" class="btn btn-primary mr-2">Add package</button>
                <button class="btn btn-light">Cancel</button>
            </form>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/user_package_add.blade.php ENDPATH**/ ?>