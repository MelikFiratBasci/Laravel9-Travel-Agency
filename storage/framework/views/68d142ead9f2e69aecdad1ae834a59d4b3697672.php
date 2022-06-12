<?php
$grand = 0;
?>
<div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Package</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Package price</th>
                <th>(Days)</th>
                <th>Person</th>
                <th>Total Price</th>
                <th>Remove</th>

            </tr>
            </thead>
            <tbody class="align-middle">

            <?php $__currentLoopData = $orderlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <div class="img">
                            <a href="<?php echo e(route('package',['id'=>$rs->package->id,'slug'=>$rs->package->slug])); ?>"><img
                                    src="<?php echo e(Storage::url($rs->package->image)); ?>" height="30"
                                    alt="Image">
                                <p><?php echo e($rs->package->title); ?></p>
                            </a>
                        </div>
                    </td>
                    <td><?php echo e($rs->start_date); ?></td>
                    <td><?php echo e($rs->end_date); ?></td>
                    <td><?php echo e($rs->package->price); ?></td>
                    <?php
                    $ilk = strtotime($rs->start_date);
                    $son = strtotime($rs->end_date);

                    $diff = ($son - $ilk) / 86400;
                    $grand += $rs->package->price * $diff * $rs->person
                    ?>
                    <td><?php echo e($diff); ?></td>
                    <td>
                        <?php echo e($rs->person); ?>

                    </td>
                    <td><?php echo e($rs->package->price*($diff*$rs->person)); ?></td>
                    <td><a href="<?php echo e(route('user_reservation_delete',['id'=>$rs->id])); ?>"><i
                                class="fa fa-trash"></i></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\php\laravel\Laravel9-Travel-Agency\resources\views/home/user_order.blade.php ENDPATH**/ ?>