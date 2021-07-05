<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-uppercase"><?php echo e($product->product_name); ?></h4>
            <button class="btn btn-primary btn-sm float-right">
                <a href="<?php echo e(route('product.edit', $product->id)); ?>" class="text-white">Edit product</a>
            </button>
        </div>
        <div class="card-body">
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo e(asset('uploads/'.$product->product_image)); ?>" class="rounded mx-auto mb-2 d-block" alt="" width="250">
                </div>
                <div class="col-md-8 px-2">
                    <p class="text-uppercase">Product Details</p>
                    <table class="table table-striped">
                        <thead>
                            <th width="100"></th>
                            <th></th>
                        </thead>
                        <tr>
                            <td>Name</td>
                            <td><?php echo e($product->product_name); ?></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td><?php echo e($product->product_price); ?></td>
                        </tr>
                        <tr>
                            <td>Discount price</td>
                            <td><?php echo e($product->discounted_price); ?></td>
                        </tr>
                        <tr>
                            <td>Product sold</td>
                            <td><?php echo e($product->product_sold); ?></td>
                        </tr>
                        <tr>
                            <td>In stock</td>
                            <td><?php echo e($product->product_stock_conut); ?></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><?php echo e($product->product_description); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/admin/products/view.blade.php ENDPATH**/ ?>