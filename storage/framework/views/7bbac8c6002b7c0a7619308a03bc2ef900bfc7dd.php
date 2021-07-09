<?php $__env->startSection('title'); ?>
<?php echo e(config('APP_NAME')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <h1 class="ptitle mb-4 pb-3 pt-2 border-bottom box-shadow">About Us</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>Finding the bargain of a lifetime while shopping online is quite commonplace with whole sellers and 3d
                party retailers selling products without any aussurance of source or authenticity.</p>
            <p>brothers.ae brings the value of outlet shopping to the convenience of e-commerce, while ensuring that
                every product you purchase is genuine and directly from sellers that manufacture them.</p>
            <p>&nbsp;</p>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script>
    $(function () {
    $('.lazy').lazy();
});

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/aboutus.blade.php ENDPATH**/ ?>