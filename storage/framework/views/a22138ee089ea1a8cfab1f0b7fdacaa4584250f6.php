<?php $__env->startSection('title'); ?>
<?php echo e(config('APP_NAME')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="margin-top: 2em">
    <div class="row" style="margin-top: 1em">
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <div class="col-md-6 col-sm-12 h-100">
                    <div class="p-2">
                        <img src="<?php echo e(asset('uploads/'.$product->product_image)); ?>" alt="" class="img-fluid w-100">
                    </div>
                    <h4 class="text-uppercase mt-2"><?php echo e($product->product_name); ?></h4>
                    <div class="mt-4" style="position: relative; top: -20px;">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->id == $productCategory->id): ?>
                        <small>
                            <a href="" class="text-muted ml-2"><?php echo e($productCategory->name); ?></a>
                        </small>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <h1 style="font-family: 'Tajawal', sans-serif; letter-spacing: -1px;">
                        <?php echo e($product->product_price); ?>

                    </h1>
                    <p class="text-muted mb-0"><?php echo e($product->product_sold); ?> sold</p>
                    <p class="text-muted"><?php echo e($product->product_stock_conut); ?> in stock</p>
                </div>
                <div class="col-md-6 col-sm-12 h-100 pt-2">
                    <div class="card shadow-sm bg-white rounded">
                        <div class="card-body">
                            <h5 class="card-title">Order Now</h5>
                            <?php if(session()->has('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <strong><?php echo e(session('success')); ?></strong>
                            </div>
                            <?php else: ?>
                            <form action="<?php echo e(route('order.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                <div class="form-group mb-2 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <label for="">Fullname<small class="text-danger">*</small></label>
                                    <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="name"
                                        placeholder="Full name" class="form-control" required>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="invalid-feedback" role="alert">
                                        <?php echo e($message); ?>

                                    </small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Tel<small class="text-danger">*</small></label>
                                    <input type="tel" name="tel_no" value="<?php echo e(old('tel_no')); ?>" id="tel_no"
                                        placeholder="052XXXXXX"
                                        class="form-control pl-4 <?php $__errorArgs = ['tel_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required=""
                                        style="padding-left: 86px;">
                                    <img src="https://www.brothers.ae/lib/img/AE.png" alt="" width="20" style="
                                        position: absolute;
                                        top: 162px;
                                        left: 37px;
                                        width: 20px;
                                        height: 26px;">
                                    <div class="code" style="
                                        position: absolute;
                                        top: 165px;
                                        left: 65px;
                                        font-size: 14px;
                                        font-weight: 500;
                                    ">+971</div>
                                    <?php $__errorArgs = ['tel_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="invalid-feedback" role="alert">
                                        <?php echo e($message); ?>

                                    </small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Quantity<small class="text-danger">*</small></label>
                                    <select class="form-control <?php $__errorArgs = ['qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="qty" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <?php $__errorArgs = ['qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="invalid-feedback" role="alert">
                                        <?php echo e($message); ?>

                                    </small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Emirates<small class="text-danger">*</small></label>
                                    <select class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="city" id="">
                                        <option value="">Select City*</option>
                                        <option value="DUBAI">DUBAI - Free delivery</option>
                                        <option value="ABU DHABI">ABU DHABI - Free delivery</option>
                                        <option value="SHARJAH">SHARJAH - Free delivery</option>
                                        <option value="AJMAN">AJMAN - Free delivery</option>
                                        <option value="RAK">RAK - Free delivery</option>
                                        <option value="FUJAIRAH">FUJAIRAH - Free delivery</option>
                                        <option value="UAQ">UAQ - Free delivery</option>
                                        <option value="AL AIN">AL AIN - Free delivery</option>
                                    </select>
                                    <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="invalid-feedback" role="alert">
                                        <?php echo e($message); ?>

                                    </small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Delivery Address<small class="text-danger">*</small></label>
                                    <textarea style="min-height:70px !important"
                                        class="form-control <?php $__errorArgs = ['addr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="addr"
                                        placeholder="Delivery Address* (Building No, Street name, Area)"
                                        required="required"><?php echo e(old('addr')); ?></textarea>
                                    <?php $__errorArgs = ['addr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="invalid-feedback" role="alert">
                                        <?php echo e($message); ?>

                                    </small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 text-uppercase">order now</button>
                            </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <hr>
                <h5 class="text-muted">Description</h5>
                <p class="lead">
                    <?php echo e($product->product_description); ?>

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa voluptatem cupiditate! Nihil
                    laboriosam,
                    numquam neque iste placeat sequi, magni quibusdam soluta facere nostrum eligendi labore ex porro
                    possimus quas!
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <h2>You may also like</h2>
    <hr>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/view.blade.php ENDPATH**/ ?>