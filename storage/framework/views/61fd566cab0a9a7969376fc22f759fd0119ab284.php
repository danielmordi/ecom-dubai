<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-uppercase">All Orders</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <table id="" class="table-counter table table-striped" style="min-width: 845px">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Phone no.</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td></td>
                                <td><?php echo e($order->customer_name); ?></td>
                                <td><?php echo e($order->customer_tel_no); ?></td>
                                <td><?php echo e($order->customer_city); ?></td>
                                <td><?php echo e($order->customer_address); ?></td>
                                <td class="bg-<?php echo e($order->is_delivered == false ? 'warning' : 'success'); ?>">
                                    <?php echo e($order->is_delivered == false ? 'Not yet delivered' : 'Delivered'); ?>

                                </td>
                                <td class="text-right">
                                    <form action="<?php echo e(route('category.delete', $order->id)); ?>" method="post">
                                        <a href="<?php echo e(route('orders.view', $order->id)); ?>" class="btn-link">view order</a>
                                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="ml-2 btn btn-link text-danger sweet-confirm-category-delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/admin/order/order.blade.php ENDPATH**/ ?>