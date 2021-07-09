<?php $__env->startSection('title'); ?>
<?php echo e(config('APP_NAME')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="row">

        <h1 class="ptitle mb-4 pb-3 pt-2 border-bottom box-shadow">Un-Claimable Products</h1>

    </div>

</div>

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <h3>*Flash sale items with No-Return Policy</h3>

            <ul>
                <li>Product(s) which are sold for a special super low price (Marked down products, Flash Sales, Seasons
                    Sales, Special offers, Today Deals, Open Box, Daily Deals or any other Product(s) which have been
                    sold with discount)</li>
                <li>Free-size&nbsp;or&nbsp;Multi color&nbsp;Product(s) cannot be claimed. (Product(s) listed on the Site
                    as&nbsp;multi-color,&nbsp;free-size,&nbsp;assorted color,&nbsp;assorted design, etc. are items on
                    which size/color cannot be guaranteed and is subject to availability.)</li>
            </ul>

            <p><strong>Return &amp; Replacement Policy</strong></p>

            <p>To claim for a Return, please check if the purchased Product(s) falls under the warranty as per the
                Warranty Policy. If the Product(s) is under warranty, then you can claim for Return based on the
                following conditions:</p>

            <ul>
                <li>Customer can claim for Return in the event that the product is damaged or not functional within 3
                    days from the date of receiving the Product(s).</li>
                <li>If customer does not like the product, only replacement is possible (excluding Marked down products,
                    Flash Sales, Seasons Sales, Special offers)with another product of the same or greater value
                    (Delivery charges will apply).</li>
                <li>Shipping and payment processing charges are non-refundable.</li>
            </ul>

            <p><strong>Replacement Procedure </strong></p>

            <ul>
                <li>a.&nbsp;Approved:&nbsp;If the Product(s) is found faulty as per the policy then the Replacement
                    process will be initiated.</li>
                <li>b.&nbsp;Not Approved:&nbsp;For Product(s) not faulty and claimed due to the Product(s) not being as
                    per expectations, pickup charges of (AED 20) replacement with another product delivery charges will
                    be applicable.</li>
            </ul>

            <p>&nbsp;<strong>Delivery Policy</strong></p>

            <ul>
                <li>We like to give our customers&rsquo; the flexibility of&nbsp;Free Delivery in major parts of UAE at
                    the time of Promotions.</li>
                <li>Other than that, we charge delivery charge depends on the product/delivery location.</li>
            </ul>

            <p><strong>Note:</strong><strong>&nbsp;The Shipping charges and VAT charges are non-refundable.</strong></p>

            <h3><strong>Product Images</strong></h3>

            <p>All product images are for illustrative purposes only and may differ from the actual product due to
                product enhancement. Due to differences in monitors, colors of products may also appear different to
                those shown on the site.<br />
                &nbsp;</p>

            <h2>Privacy Policy</h2>

            <p><strong>Privacy Policy:</strong><br />
                Brothers&nbsp;&nbsp;is operated&nbsp;Brothers FZE LLC which may operate other websites. It is
                Brother&#39;s policy to respect your privacy regarding any information we may collect while operating
                our websites.</p>

            <p><strong>Privacy Policy Changes</strong><br />
                Although most changes are likely to be minor, Brothers may change its Privacy Policy from time to
                time.&nbsp; Brothers encourages visitors to frequently check this page for any changes to its Privacy
                Policy. Your continued use of this site after any change in this Privacy Policy will constitute your
                acceptance of such change.</p>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/unclaimed.blade.php ENDPATH**/ ?>