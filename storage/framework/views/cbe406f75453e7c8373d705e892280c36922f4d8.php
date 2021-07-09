<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Brothers Dubai, UAE</title>
    <meta property="keywords" content="Mens Watches, Womens Watches, Cosmetics, Ladies Bags "/>
    <meta property="description"
          content="We are offering a vast range of products in best prices and with the best quality Dubai UAE"/>

    <meta property="og:title" content="Brothers Dubai, UAE"/>
    <meta property="og:description"
          content="We are offering a vast range of products in best prices and with the best quality Dubai UAE"/>
    <meta property="og:url" content="https://www.brothers.ae/"/>
    <meta property="og:image" content="https://www.brothers.ae/lib/img/social.png"/>
    <meta property="og:type" content="product"/>
    <meta property="fb:app_id" content=""/>
    <meta name="facebook-domain-verification" content=""/>
    <!--META TAGES STARTS-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15"/>
    <META content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--META TAGES ENDS-->

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="lib/js/jquery.lazy.min.js"></script>-->
    <script type="text/javascript" src="lib/js/all.js"></script>

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '900821680752324');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=900821680752324&ev=PageView&noscript=1"
        />
    </noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>

<div class="d-flex flex-column flex-md-row align-items-center px-md-4 mb-4 bg-white border-bottom box-shadow tlogo">
    <a href="<?php echo e(url('/')); ?>" style="display:block;text-align:center; margin:0 auto;">
        <img src="<?php echo e(asset('storage/logo/'. $config->logo) ?? ''); ?>" border="0" style="margin: 0 auto;"
         width="75" class="logo">
    </a>
</div>

<div class="container">

    <?php echo $__env->yieldContent('content'); ?>
</div>

<footer class="pt-4 mt-5 border-top box-shadow">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="footer-box">
                    <h4 style="width:100%;">USEFUL LINKS</h4>
                    <ul class="list-item">
                        <li><a href="pg-10">About Us</a></li>
                        <li><a href="pg-13">Un-Claimable Products</a></li>
                        <li><a href="pg-12">Why Us?</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="footer-box">
                    <h4 style="width: 100%;">CONTACT INFO</h4>
                    <div class="fdetail">
                        <p>Brothers.ae</p>
                        <p>Dubai UAE</p>
                        <p>Facebook:&nbsp;Brothers</p>
                        <p>Instagram: Brothers</p>
                        <p>Email:&nbsp;<a href="mailto:Sales@Brothers.ae">Sales@Brothers.ae</a></p>
                        <p>Whatsapp: 0502733868&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="footer-box pb-5">
                    <h4 style="width: 100%;">ACCEPT PAYMENT</h4>
                    <div class="fdetail">
                        <p>CASH ON DELIVERY<br>
                            PAYPAL AND PAYMENT METHOD COMING SOON</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo e(asset('js/all.js')); ?>"></script>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/layouts/app.blade.php ENDPATH**/ ?>