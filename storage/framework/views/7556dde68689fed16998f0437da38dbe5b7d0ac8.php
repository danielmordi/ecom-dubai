<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-uppercase"><?php echo e($order->products[0]->product_name); ?></h4>
            </div>
            <div class="card-body">
                <h3>Order Details</h3>
                <div class="col-md-5 col-sm-12 p-0">
                    <table class="table table-borderless table-striped">
                        <tr>
                            <td>Name</td>
                            <td><?php echo e($order->customer_name); ?></td>
                        </tr>
                        <tr>
                            <td>Phone no.</td>
                            <td><?php echo e($order->customer_tel_no); ?></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><?php echo e($order->customer_city); ?></td>
                        </tr><tr>
                            <td>Address</td>
                            <td><?php echo e($order->customer_address); ?></td>
                        </tr><tr>
                            <td>Status</td>
                            <td class="text-<?php echo e($order->is_delivered == false ? 'danger' : 'success'); ?>">
                                <?php echo e($order->is_delivered == false ? 'Not delivered' : 'Delivered'); ?>

                            </td>
                        </tr><tr>
                            <td>Ordered on</td>
                            <td><?php echo e($order->created_at->format('d-M-Y')); ?></td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="table-responsive mb-2">
                    <h3>Order Summary</h3>
                    <table class="table">
                        <thead>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Time Ordered</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo e($order->products[0]->product_name); ?></td>
                                <td><?php echo e($order->order_quantity); ?></td>
                                <td><?php echo e($order->products[0]->product_price); ?></td>
                                <td>
                                    <p class="badge badge-<?php echo e($order->is_delivered == false ? 'warning' : 'success'); ?>">
                                        <?php echo e($order->is_delivered == false ? 'Not yet delivered' : 'Delivered'); ?>

                                    </p>
                                </td>
                                <td><?php echo e($order->created_at->diffForHumans()); ?></td>
                            </tr>
                            <tr class="bg-dark-alt font-weight-bold">
                                <td colspan="2" class="text-uppercase">Total</td>
                                <td><?php echo e($order->total_amount); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-2">
                    <a href="<?php echo e(route('orders.delivered', $order->id)); ?>" class="btn btn-success btn-square">Mark as: delivered</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready( function () {
        <?php if(session()->has('success')): ?>
        toastr.success('<?php echo e(session('success')); ?>')
        <?php endif; ?>
    });
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/admin/order/view.blade.php ENDPATH**/ ?>