<?php $__env->startSection('title','Admin Panel Package List'); ?>
<?php $__env->startSection('keywords','otel,gezi,sinirsiz eglence'); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">package List</h4>
                            <p class="card-description">


                                <label style="width: 200px"
                                       class="badge badge-outline-primary">
                                    <a href="<?php echo e(route('admin_package_add')); ?>"
                                       class="nav-link">Ekle</a></label>

                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th >category</th>
                                        <th>title</th>
                                        <th>keywords</th>
                                        <th>description</th>
                                        <th>image</th>
                                        <th>Image Gallery</th>
                                        <th>price</th>
                                        <th>status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <p><?php echo e($rs->id); ?></p>
                                            </td>
                                            <td>
                                                <p>
                                                <?php echo e(\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)); ?>

                                                </p>
                                            </td>
                                            <td>
                                                <p><?php echo e($rs->title); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo e($rs->keywords); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo e($rs->description); ?></p>
                                            </td>
                                            <td>
                                        <?php if($rs->image): ?>
                                                <img src="<?php echo e(Storage::url($rs->image)); ?>" height="30" ; alt="">
                                            <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin_image_add',['package_id'=>$rs->id])); ?>"
                                                   onclick="return !window.open(this.href,'','top=50 left=100 ')">
                                                    <img src="<?php echo e(asset('assets/admin/images')); ?>/imageGallery.jpg">
                                                </a>
                                            </td>

                                            <td>
                                                <p><?php echo e($rs->price); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo e($rs->status); ?></p>
                                            </td>
                                            <td>
                                                <label class="badge badge-warning badge-outline-danger">
                                                    <a href="<?php echo e(route('admin_package_edit',['id'=>$rs->id])); ?>"
                                                       class="nav-link">edit</a></label>
                                            </td>
                                            <td>
                                                <label class="badge badge-danger"><a class="nav-link"
                                                                                     href="<?php echo e(route('admin_package_delete',['id'=>$rs->id])); ?>"
                                                                                     onclick="return confirm('Delete!! Are you sure?')">delete</a></label>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php echo $__env->make('admin._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/admin/_package.blade.php ENDPATH**/ ?>