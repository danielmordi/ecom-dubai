<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card shadow shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Total Sales</h4>
                        <h3>AED <?php echo e($total_sales); ?></h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                        </div>
                        <small>80% Increase in 20 Days</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card shadow shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Total Orders</h4>
                        <h3><?php echo e(count($t_order)); ?></h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                        </div>
                        <small>80% Increase in 20 Days</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card shadow shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="card-title">Total Products</h4>
                        <h3><?php echo e(count($products)); ?></h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                        </div>
                        <small>80% Increase in 20 Days</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <h2 class="display-6">Recent Orders</h2>
            <hr>
            <table class="table table-counter table-striped">
                <thead class="bg-dark text-white">
                <th>SN</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Cus_Name</th>
                <th>Cus_Phone_no</th>
                <th>Cus_address</th>
                <th>Total</th>
                <th>Status</th>
                <th>Ordered on</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                    <tr data-href="<?php echo e(route('orders.view', $order->id)); ?>">
                        <td></td>
                        <td><?php echo e($order->products[0]->product_name ?? false); ?></td>
                        <td><?php echo e($order->order_quantity); ?></td>
                        <td><?php echo e($order->customer_name); ?></td>
                        <td><?php echo e($order->customer_tel_no); ?></td>
                        <td width="300"><?php echo e($order->customer_address); ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                        <td><?php echo e($order->total_amount); ?></td>
                        <td>
                            <span class="badge text-white badge-lg bg-<?php echo e($order->is_delivered == false ? 'warning' : 'success'); ?>">
                                <?php echo e($order->is_delivered == false ? 'Not yet delivered!' : 'Delivered!'); ?>

                            </span>
                        </td>
                        <td><?php echo e($order->created_at->diffForHumans()); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="pagination pagination-gutter pagination-primary no-bg">
                <?php echo $orders->links("pagination::bootstrap-4"); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function($) {
            $('[data-href]').css('cursor', 'pointer');
            $('*[data-href]').on('click', function() {
                window.location = $(this).data("href");
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>