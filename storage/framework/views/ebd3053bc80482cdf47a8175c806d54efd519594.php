<?php $__env->startSection('title','Admin Panel message List'); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">comment List</h4>
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
                                        <th>Name</th>
                                        <th>subject</th>
                                        <th>review</th>
                                        <th>rate</th>
                                        <th>Ip</th>
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
                                                <p><?php echo e($rs->user->name); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo e($rs->subject); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo e($rs->review); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo e($rs->rate); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo e($rs->IP); ?></p>
                                            </td>

                                            <td>
                                                <p><?php echo e($rs->note); ?></p>
                                            </td>

                                            <td>
                                                <label class="badge badge-warning badge-outline-danger">
                                                    <a href="<?php echo e(route('admin_comment_edit',['id'=>$rs->id])); ?>"
                                                       class="nav-link" onclick="return !window.open(this.href,'','','top=50 left 100 width 1100 height=700')">edit</a></label>
                                            </td>
                                            <td>
                                                <label class="badge badge-danger"><a class="nav-link"
                                                                                     href="<?php echo e(route('admin_message_delete',['id'=>$rs->id])); ?>"
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/admin/_Comment.blade.php ENDPATH**/ ?>