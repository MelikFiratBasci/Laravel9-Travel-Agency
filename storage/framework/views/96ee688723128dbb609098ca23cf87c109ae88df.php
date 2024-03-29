<?php $__env->startSection('title','Frequently Asqed Question List'); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Frequently Asked Questions</h4>
                            <p class="card-description">

                                <label style="width: 200px"
                                       class="badge badge-outline-primary">
                                    <a href="<?php echo e(route('admin_faq_add')); ?>"
                                       class="nav-link">Ekle</a></label>
                                <?php echo $__env->make('home.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th >Position</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <td>
                                                <p><?php echo e($rs->position); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo e($rs->question); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $rs->answer; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo e($rs->status); ?></p>
                                            </td>
                                            <td>
                                                <label class="badge badge-warning badge-outline-danger">
                                                    <a href="<?php echo e(route('admin_faq_edit',['id'=>$rs->id])); ?>"
                                                       class="nav-link">edit</a></label>
                                            </td>
                                            <td>
                                                <label class="badge badge-danger"><a class="nav-link"
                                                                                     href="<?php echo e(route('admin_faq_delete',['id'=>$rs->id])); ?>"
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/admin/_faq.blade.php ENDPATH**/ ?>