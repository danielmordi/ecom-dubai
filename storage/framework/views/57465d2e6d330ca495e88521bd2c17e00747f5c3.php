<?php $__env->startSection('title'); ?>
<?php echo e(config('APP_NAME')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 col-sm-6 col-6 product filter <?php echo e($product->categories[0]->slug); ?>">
        <a href="<?php echo e(route('view', $product->slug)); ?>">
            <div class="pgrid">
                <div class="pimage">
                    <img data-src="<?php echo e(asset('uploads/'.$product->product_image)); ?>" class="lazy">
                    <span class="psold"><?php echo e($product->discounted_sold); ?> Sold</span>

                    <div class="pfreed">Free Delivery</div>
                </div>
                <div class="pcontent">
                    <h3 class="title"><?php echo e($product->product_name); ?></h3>
                    <div class="price">
                        <?php echo e($product->product_price); ?>

                        <span><?php echo e($product->discounted_price); ?></span>
                    </div>
                    <div class="svat">AED <?php echo e($product->product_stock_conut); ?> - VAT included</div>

                </div>
            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function () {
        $(".filter-button").click(function () {
            var value = $(this).attr('data-filter');
            if (value == "all") {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            } else {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');
            }

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");
        });
    });

    $(function () {
        $('.lazy').lazy();
    });

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/home.blade.php ENDPATH**/ ?>