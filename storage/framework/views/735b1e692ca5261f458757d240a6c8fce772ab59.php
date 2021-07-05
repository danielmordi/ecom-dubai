<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-sm-12 offset-md-1">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header">
                    Add new product
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('product.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="document">Product Image</label>
                            <input type="file" name="productImage" id="productImage" multiple>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Choose a category</label>
                            <fieldset>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="checkbox" name="categories[]" id="category_<?php echo e($category->id); ?>"
                                    value="<?php echo e($category->id); ?>">
                                <label class="mr-4" for="category"><?php echo e($category->name); ?></label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label for="p_name">Product Name</label>
                            <input type="text" name="p_name" id="p_name" class="form-control" placeholder="Eg. Skittles"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="p_price">Product Price</label>
                            <input type="text" name="p_price" id="p_price" class="form-control" placeholder="0.00"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="p_discounted_price">Product Discounted Price</label>
                            <input type="text" name="p_discounted_price" id="p_discounted_price" class="form-control"
                                placeholder="0.00" required>
                        </div>
                        <div class="form-group">
                            <label for="p_sold">Product Sold</label>
                            <input type="text" name="p_sold" id="p_sold" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="p_in_stock">Product in stock</label>
                            <input type="text" name="p_in_stock" id="p_in_stock" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="p_description">Product Description</label>
                            <textarea class="form-control" name="p_description" id="p_description" rows="3"></textarea>
                        </div>
                        <div>
                            <input class="btn btn-primary w-100 text-uppercase" type="submit" value="Add product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[id="productImage"]');
    // Create a FilePond instance
    const pond = FilePond.create(inputElement, {
        allowMultiple: true
    });
    // Config
    FilePond.setOptions({
        server: {
            url: '<?php echo e(route('media.store')); ?>',
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            }
        },
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecom\resources\views/admin/products/add_product.blade.php ENDPATH**/ ?>