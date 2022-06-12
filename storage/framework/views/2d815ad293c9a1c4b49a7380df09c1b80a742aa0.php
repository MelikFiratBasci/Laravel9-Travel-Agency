<?php $__env->startSection('title','Admin Panel Order List'); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Order List</h4>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Package</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Person(s)</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>status</th>
                                        <th>note</th>
                                        <th>price</th>

                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($rs->id); ?></td>

                                            <td>
                                                <a href="<?php echo e(route('package',['id'=>$rs->package->id,'slug'=>$rs->package->slug])); ?>">
                                                    <p><?php echo e($rs->package->title); ?></p>
                                                </a>
                                            </td>
                                            <td><?php echo e($rs->user->name); ?></td>
                                            <td><?php echo e($rs->user->email); ?></td>
                                            <td><?php echo e($rs->person); ?></td>

                                            <td><?php echo e($rs->start_date); ?></td>
                                            <td><?php echo e($rs->end_date); ?></td>
                                            <form class="forms-sample"
                                                  action="<?php echo e(route('admin_order_update',['id'=>$rs->id])); ?>" method="post"
                                                  enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <td>
                                                    <select name="status" id="status">
                                                        <option value="<?php echo e($rs->status); ?>"><?php echo e($rs->status); ?></option>
                                                        <option value="True">True</option>
                                                        <option value="Pndng">Pending</option>
                                                        <option value="Dnied">Denied</option>
                                                    </select>
                                                </td>
                                                <td class="form-group">
                                                    <textarea class="input" rows="5" name="note"
                                                              placeholder="note"><?php echo e($rs->note); ?></textarea>
                                                </td>

                                                <?php
                                                $ilk = strtotime($rs->start_date);
                                                $son = strtotime($rs->end_date);

                                                $diff = ($son - $ilk) / 86400;
                                                ?>

                                                <td><?php echo e($rs->package->price*($diff*$rs->person)); ?></td>


                                                <td>
                                                    <button type="submit"
                                                            class="badge badge-warning badge-outline-primary">edit Order
                                                    </button>
                                                </td>
                                            </form>
                                            <td>
                                                <label class="badge badge-danger"><a class="nav-link"
                                                                                     href="<?php echo e(route('admin_comment_delete',['id'=>$rs->id])); ?>"
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/admin/_order.blade.php ENDPATH**/ ?>