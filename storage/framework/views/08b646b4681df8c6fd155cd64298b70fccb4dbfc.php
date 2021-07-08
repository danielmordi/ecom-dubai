<?php $__env->startSection('title'); ?>
<?php echo e(config('APP_NAME')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <a href="<?php echo e(url('/')); ?>" class="btn btn-success btn-submit btn-block">
                Continue Shopping &raquo;
            </a>
        </div>

        <div class="">
            <br>
            <br>
            <div class="invoice">
                <h2 style="font-size:18px;">Your order Confirmed!</h2>
                <span class="font-weight-bold d-block mt-4">Hello, <?php echo e($order->customer_name); ?></span>
                <span>You order has been confirmed and will be shipped in next two working days!</span>
                <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="py-2">
                                        <span class="d-block text-muted">Order Date</span>
                                        <span><?php echo e($order->created_at->format('d M, Y')); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="py-2">
                                        <span class="d-block text-muted">Order No</span>
                                        <?php if($order->id < 10): ?>
                                        <span>800<?php echo e($order->id); ?></span>
                                        <?php else: ?>
                                        <span>80<?php echo e($order->id); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="py-2">
                                        <span class="d-block text-muted">Payment</span>
                                        <span>Cash on Delivery</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="py-2">
                                        <span class="d-block text-muted">Shiping Address</span>
                                        <span><?php echo e($order->customer_address); ?>, <?php echo e($order->customer_city); ?></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="product border-bottom table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20%">
                                    <img style="height:90px;"
                                        src="<?php echo e(asset('uploads/'.$order->product->product_image)); ?>" alt="" />
                                </td>
                                <td width="60%">
                                    <span class="font-weight-bold"><?php echo e($order->product->product_name); ?> </span>
                                    <div class="product-qty">
                                        <span class="d-block">Quantity: <span><?php echo e($order->order_quantity); ?></span></span>
                                    </div>
                                </td>
                                <td width="20%">
                                    <div class="text-right">
                                        <span class="font-weight-bold"></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row d-flex justify-content-end">
                    <div class="col-md-5">
                        <table class="table table-borderless">
                            <tbody class="totals">
                                <tr>
                                    <td>
                                        <div class="text-left">
                                            <span class="text-muted">Subtotal</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-right">
                                            <span><?php echo e($order->product->product_price); ?></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-left">
                                            <span class="text-uted">Shipping Fee</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-right">
                                            <span class="text-success">Free</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-left">
                                            <span class="text-muted">VAT</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-right">
                                            <span>AED <?php echo e($order->product->product_stock_conut); ?></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-top border-bottom">
                                    <td>
                                        <div class="text-left">
                                            <span class="font-weight-bold">Grand Total</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-right">
                                            <span class="font-weight-bold"><?php echo e($order->total_amount); ?></span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="font-weight-bold text-center mb-0">Thanks for shopping with us!</p>
            </div>
        </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/confirmorder.blade.php ENDPATH**/ ?>