<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">
    <title>kripton - Crypto Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/images/favicon.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/chartist/css/chartist.min.css')); ?>">
    <link href="<?php echo e(asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
    <!-- Datatable -->
    <link href="<?php echo e(asset('assets/vendor/datatables/css/jquery.dataTables.min.css')); ?>" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="<?php echo e(asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/formstone/dist/css/themes/light/checkbox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/formstone/dist/css/themes/light/upload.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/formstone/dist/css/checkbox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/formstone/dist/css/upload.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/formstone.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/dropzone/dist/dropzone.css')); ?>" rel="stylesheet">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/lightgallery/css/lightgallery.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/toastr/css/toastr.min.css')); ?>">

    <style>
        .table-counter {
            counter-reset: rowNumber;
        }

        .table-counter td:first-child:before {
            counter-increment: rowNumber;
            content: counter(rowNumber);
            min-width: 1em;
            margin-right: 0.5em;
        }
        .ss-main .ss-multi-selected {
            padding: 0.4em !important;
        }
    </style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <?php echo $__env->make('includes.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © <a href="#" target="_blank"><?php echo e(config('APP_NAME')); ?></a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo e(asset('assets/vendor/global/global.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')); ?>"></script>

    <!-- Chart piety plugin files -->
    <script src="<?php echo e(asset('assets/vendor/peity/jquery.peity.min.js')); ?>"></script>

    <!-- Dashboard 1 -->
    <script src="<?php echo e(asset('assets/js/dashboard/dashboard-1.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/owl-carousel/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/deznav-init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/demo.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/datatables/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins-init/datatables.init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/dropzone/dist/dropzone.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/formstone/dist/js/core.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/formstone/dist/js/checkbox.js')); ?>"></script>
    
    <script src="<?php echo e(asset('js/ajax.js')); ?>"></script>
    <script src="<?php echo e(asset('js/sweetalert.init.js')); ?>"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.js"></script>
    <script src="<?php echo e(asset('assets/vendor/lightgallery/js/lightgallery-all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/toastr/js/toastr.min.js')); ?>"></script>

    <script>
        function carouselReview(){
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:20,
				nav:false,
				rtl:true,
				dots: false,
				navText: ['', ''],
				responsive:{
					0:{
						items:3
					},
					450:{
						items:4
					},
					600:{
						items:5
					},
					991:{
						items:5
					},

					1200:{
						items:7
					},
					1601:{
						items:5
					}
				}
			})
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000);
		});

        $("input[type='checkbox'], input[type='radio']").checkbox();
    </script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>


</html>
<?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/layouts/admin/app.blade.php ENDPATH**/ ?>