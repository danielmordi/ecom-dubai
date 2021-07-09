<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-uppercase">Site Settings</h4>
            </div>
            <div class="card-body">
                
                <h5>Change logo</h5>
                <div id="alert-media"></div>
                <form action="" method="post" class="mb-3" enctype="multipart/form-data">
                    <div class='preview'>
                        <img src="<?php echo e(asset('storage/logo/'.$config->logo)?? ''); ?>" id="OpenImgUpload" width="100" height="100">
                    </div>
                   <div class="form-group">
                     <input type="file" class="form-control-file d-none" name="file" id="imgupload" placeholder="Chosse file" aria-describedby="fileHelpId">
                     <small>Click to upload image</small>
                   </div>
                    <button type="submit" class="btn btn-primary" id="storeLogo">
                        Change
                    </button>
                </form>
                
                <hr>
                <h5>Contact information</h5>
                <div id="alert"></div>
                <form action="settings/update/contact-info" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Site name</label>
                        <input type="text" name="site_name" value="<?php echo e($config->sitename); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <input type="text" name="location" value="<?php echo e($config->location); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Facebook</label>
                        <input type="url" name="facebook" value="<?php echo e($config->facebook); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="url" name="instagram" value="<?php echo e($config->instagram); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" value="<?php echo e($config->email); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Whatsapp</label>
                        <input type="tel" name="whatsapp" value="<?php echo e($config->whatsapp); ?>" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary" id="contactInformation">Update</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/admin/settings/index.blade.php ENDPATH**/ ?>