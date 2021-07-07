<?php $__env->startSection('title'); ?>
<?php echo e(config('APP_NAME')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.theme.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid" style="margin-top: 2em">
    <div class="row" style="margin-top: 1em">
        <div class="col-md-2">
            <div class="nav-link d-block d-sm-none" class="flow-text">
                <span class="">Categories</span>:
                <a style="padding-left: 1em" href="">All</a>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a style="padding-left: 1em" href=""><?php echo e($category->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <ul class="list-group d-none d-sm-block">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="text-uppercase font-weight-bold">Categories</span>
                </li>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" class="w-100 text-left"><?php echo e($category->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <div class="col-md-10 col-sm-12">
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" style="">
                        <div class="card shadow-lg mb-5 bg-white rounded">
                            <small class=""
                                style="position: absolute; top: 10px; color: green; padding: 0.5em; background:#fff; font-size:10px; font-weight: bold; letter-spacing: 1.5px">FREE
                                DELIVERY</small>

                            <a href="<?php echo e(route('view', $product->slug)); ?>">
                                <img src="<?php echo e(asset('uploads/'.$product->product_image)); ?>"
                                class="card-img-top" alt="" style="object-fit: cover; min-height: 200px !important;">
                            </a>
                            <div class="card-body">
                                <h6 style="font-family: 'Tajawal', sans-serif;"><?php echo e($product->product_name); ?></h6>
                                <div class="d-flex justify-content-between mb-2">
                                    <div style="font-size: 18px; font-family: 'Tajawal', sans-serif; letter-spacing: -1px;">
                                        <?php echo e($product->product_price); ?>

                                    </div>
                                    <div class="text-danger"
                                    style="font-family: 'Tajawal', sans-serif; text-decoration: line-through; font-size: 12px;
                                        position: relative; top: 8px;">
                                        <?php echo e($product->discounted_price); ?>

                                    </div>
                                </div>
                                <a href="<?php echo e(route('view', $product->slug)); ?>" class="card-footer btn btn-dark btn-sm w-100 bg-primary text-uppercase">Buy Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/home.blade.php ENDPATH**/ ?>