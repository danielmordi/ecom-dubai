<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-sm-12 offset-md-1">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header">
                    <h3><?php echo e(isset($product->id) ? 'Edit product' : 'Add new product'); ?></h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(isset($product->id) ? route('product.update', $product->id) : route('product.store')); ?>"
                         method="POST" enctype="multipart/form-data" onsubmit="return checkforblank()">
                        <?php echo csrf_field(); ?>
                        <?php if(isset($product->id)): ?>
                            <?php echo method_field('PATCH'); ?>
                        <?php endif; ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="">Choose file</label>
                                <a href="javascript:void(0);" class="btn btn-link float-right"
                                 data-toggle="modal" data-target="#imagePreview"
                                 style="
                                    position: absolute;
                                    right: 0;
                                    bottom: 38px;
                                    font-size: 11px;
                                    text-decoration: underline;
                                " onclick="alert('hi')"
                                >View uploaded image</a>
                                <div class="modal fade" id="imagePreview" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Image preview</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="<?php echo e(isset($product->id) ? asset('uploads/'.$product->product_image) : ''); ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" name="productImage" class="form-control form-control-sm " multiple  value="<?php echo e(isset($product->id) ? $product->product_image : old('productImage')); ?>">
                                <?php $__errorArgs = ['productImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="p_name">Product Name</label>
                                <input type="text" name="p_name" value="<?php echo e(isset($product->id) ? $product->product_name : old('p_name')); ?>" id="p_name" class="form-control form-control-sm <?php $__errorArgs = ['p_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                 placeholder="Eg. Skittles" required>
                                <?php $__errorArgs = ['p_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Choose a category</label>
                            <fieldset>
                                <select name="categoryid" id="single" class="<?php $__errorArgs = ['categoryid[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option disabled selected value="">Choose</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                    <?php if(isset($product->id)): ?>
                                    <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($category->id == $productCategory->id): ?>
                                            selected
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['categoryid[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </fieldset>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="p_price">Product Price</label>
                                <input type="text" name="p_price"
                                 value="<?php echo e(isset($product->id) ? preg_replace("/[^0-9.]/", "", $product->product_price) : old('p_price')); ?>"
                                 id="p_price" class="form-control form-control-sm  <?php $__errorArgs = ['p_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="0.00"
                                    required>
                                    <?php $__errorArgs = ['p_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="text-danger"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="p_discounted_price">Product Discounted Price</label>
                                <input type="text" name="discounted_price"
                                value="<?php echo e(isset($product->id) ? preg_replace("/[^0-9.]/", "", $product->discounted_price) : old('discounted_price')); ?>" id="p_discounted_price" class="form-control form-control-sm  <?php $__errorArgs = ['discounted_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="0.00" required>
                                   <?php $__errorArgs = ['discounted_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="text-danger"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="p_sold">Product Sold</label>
                                <input type="text" name="sold"
                                 value="<?php echo e($product->product_sold ?? old('sold')); ?>"
                                 id="p_sold" class="form-control form-control-sm  <?php $__errorArgs = ['sold'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="0.00" required>
                                    <?php $__errorArgs = ['sold'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="text-danger"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="p_in_stock">Product in stock</label>
                                <input type="text" name="stock"
                                 value="<?php echo e(isset($product->id) ? $product->product_stock_conut : old('stock')); ?>" id="p_in_stock" class="form-control form-control-sm  <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="0" required>
                                    <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="text-danger"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="p_description">Product Description</label>
                            <textarea class="form-control form-control-sm  <?php $__errorArgs = ['p_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                             name="p_description" id="p_description" rows="3">
                            </textarea>
                            <?php $__errorArgs = ['p_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <script>
                                window.onload = function() {
                                    document.getElementById("p_description").defaultValue = "<?php echo e(isset($product->id) ? trim($product->product_description) : old('p_description')); ?>";
                                }
                            </script>
                        </div>
                        <div>
                            <input class="btn btn-primary w-100 text-uppercase" type="submit" value="<?php echo e(isset($product->id) ? 'Update product' : 'Add product'); ?>">
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
    // SlimSelect
    new SlimSelect({
        select: '#single'
    });

    // Validate
    function checkforblank() {

        var location = document.getElementById('single');
        var invalid = location.value == "";

        if (invalid) {
            alert('Please choose a category');
        }

        return !invalid;
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/admin/products/add_product.blade.php ENDPATH**/ ?>