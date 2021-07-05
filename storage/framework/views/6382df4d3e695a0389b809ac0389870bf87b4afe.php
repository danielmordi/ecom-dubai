<tr>
<td class="header">
<a href="<?php echo e($url); ?>" style="display: inline-block;">
<?php if(trim($slot) === 'Laravel'): ?>
<img src="<?php echo e(asset('storage/logo/test-logo.png')); ?>" height="80" width="100"
     id="logo" alt="App Logo">
<?php else: ?>
<?php echo e($slot); ?>

<?php endif; ?>
</a>
</td>
</tr>
<?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/vendor/mail/html/header.blade.php ENDPATH**/ ?>