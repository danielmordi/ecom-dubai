<?php $__env->startComponent('mail::message'); ?>
# New Order Alert
<br>
Dear Admin

<b><?php echo e($customerName); ?></b> has just made an order for <b><?php echo e($productName); ?></b>,<br>
on <b><?php echo e($dateOrdered); ?></b>


<?php $__env->startComponent('mail::panel'); ?>
<h4 style="margin: 5px 0;">Total Amount: <?php echo e($totalPrice); ?></h4>
<?php if (isset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c)): ?>
<?php $component = $__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c; ?>
<?php unset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::button', ['url' => $url, 'color' => 'green']); ?>
Button Text
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

## Table component:
<?php $__env->startComponent('mail::table'); ?>
| Description            | Price         | Quantity   |
| :--------------------- |:------------- | :----------|
| <?php echo e($productName); ?>     | <?php echo e($price); ?>  | <?php echo e($qty); ?> |

## Total: <b><?php echo e($totalPrice); ?></b>
<?php if (isset($__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906)): ?>
<?php $component = $__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906; ?>
<?php unset($__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


<?php $__env->startComponent('mail::subcopy'); ?>
This email was sent from <?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginalba845ad32dfe5e4470519a452789aeb20250b6fc)): ?>
<?php $component = $__componentOriginalba845ad32dfe5e4470519a452789aeb20250b6fc; ?>
<?php unset($__componentOriginalba845ad32dfe5e4470519a452789aeb20250b6fc); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/emails/neworder.blade.php ENDPATH**/ ?>