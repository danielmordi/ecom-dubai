<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-uppercase">All products</h4>
            <button class="btn btn-primary btn-xs float-right">
                <a href="<?php echo e(route('product.add')); ?>" class="text-white">Add product</a>
            </button>
        </div>
        <div class="card-body">
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table id="example4" class="display table-counter table-striped" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Old Price</th>
                            <th>Qty</th>
                            <th>Sold Qty</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td></td>
                            <td><?php echo e($product->product_name); ?></td>
                            <td><?php echo e($product->product_price); ?></td>
                            <td><?php echo e($product->discounted_price); ?></td>
                            <td><?php echo e($product->product_stock_conut); ?></td>
                            <td><?php echo e($product->product_sold); ?></td>
                            <td><?php echo e($product->product_description); ?></td>
                            <td>
                                <div class="dropdown custom-dropdown show">
                                    <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                     style="position: absolute; transform: translate3d(-120px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <form action="<?php echo e(route('product.delete', $product->id)); ?>" method="post">
                                            <a class="dropdown-item" href="<?php echo e(route('product.view', $product->id)); ?>">View</a>
                                            <a class="dropdown-item" href="<?php echo e(route('product.edit', $product->id)); ?>">Edit</a>
                                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn-link dropdown-item">Delete</button>
                                        </form>
                                    </div>
                                </div>
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


<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/admin/products/product.blade.php ENDPATH**/ ?>