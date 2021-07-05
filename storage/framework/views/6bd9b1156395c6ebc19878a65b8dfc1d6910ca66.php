<?php $__env->startComponent('mail::layout'); ?>

<?php $__env->slot('header'); ?>
<?php $__env->startComponent('mail::header', ['url' => config('app.url')]); ?>
    <!-- header -->
    <img src="<?php echo e(asset('uploads/00984007f5c6a393a89299dfbbf0ec0d.png')); ?>" alt="logo" width="150">
<?php if (isset($__componentOriginala6c60a8eadc3b56c524581de8cda10d4f5a799b4)): ?>
<?php $component = $__componentOriginala6c60a8eadc3b56c524581de8cda10d4f5a799b4; ?>
<?php unset($__componentOriginala6c60a8eadc3b56c524581de8cda10d4f5a799b4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->endSlot(); ?>


# Introduction

The body of your message.

<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>



<?php $__env->slot('subcopy'); ?>
<?php $__env->startComponent('mail::subcopy'); ?>
<!-- subcopy -->
<?php if (isset($__componentOriginalba845ad32dfe5e4470519a452789aeb20250b6fc)): ?>
<?php $component = $__componentOriginalba845ad32dfe5e4470519a452789aeb20250b6fc; ?>
<?php unset($__componentOriginalba845ad32dfe5e4470519a452789aeb20250b6fc); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->endSlot(); ?>


<?php $__env->slot('footer'); ?>
<?php $__env->startComponent('mail::footer'); ?>
<!-- footer -->
<?php if (isset($__componentOriginala991192d5a5d5f731a8cf5f31528af3b372f333c)): ?>
<?php $component = $__componentOriginala991192d5a5d5f731a8cf5f31528af3b372f333c; ?>
<?php unset($__componentOriginala991192d5a5d5f731a8cf5f31528af3b372f333c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginalc32b54e0a3261a2d3631146e856277520bd12d21)): ?>
<?php $component = $__componentOriginalc32b54e0a3261a2d3631146e856277520bd12d21; ?>
<?php unset($__componentOriginalc32b54e0a3261a2d3631146e856277520bd12d21); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\ecom\resources\views/emails/testmail.blade.php ENDPATH**/ ?>