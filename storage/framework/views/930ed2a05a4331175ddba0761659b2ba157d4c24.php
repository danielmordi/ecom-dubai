<div class="row">
    <div class="procats">
        <span data-filter="all" class="active border-bottom box-shadow filter-button">All</span>

        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span data-filter="<?php echo e($cat->slug); ?>" class="border-bottom box-shadow filter-button">
        <?php echo e($cat->name); ?>

        </span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/includes/menu.blade.php ENDPATH**/ ?>