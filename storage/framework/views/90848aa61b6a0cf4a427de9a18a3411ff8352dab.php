<html>
<head>
     <title>Image gallery</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets')); ?>/admin/images/favicon.png" />
</head>
<body>

<?php $__env->startSection('javascript'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn
    .com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<?php $__env->stopSection(); ?>
    <div class="col-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo e($data->title); ?> için fotoğraf ekle</h4>
                <form class="forms-sample" action="<?php echo e(route('user_image_store',['package_id'=>$data->id])); ?>"
                      method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label>image upload</label>
                        <input type="file" name="image" class="form-control">

                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Add image</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>image</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <p><?php echo e($rs->id); ?></p>
                                </td>
                                <td>
                                    <p><?php echo e($rs->title); ?></p>
                                </td>
                                <td>
                                    <?php if($rs->image): ?>
                                        <img src="<?php echo e(Storage::url($rs->image)); ?>" height="30" ; alt="">
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <label class="badge badge-danger"><a class="nav-link"
                                                                         href="<?php echo e(route('user_image_delete',['id'=>$rs->id,'package_id'=>$rs->package_id])); ?>"
                                                                         onclick="return confirm('Delete!! Are you sure?')">delete</a></label>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


</body>
</html>
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/user_package_image_add.blade.php ENDPATH**/ ?>